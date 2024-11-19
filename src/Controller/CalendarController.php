<?php

namespace App\Controller;

use DateTime;
use App\Entity\Event;
use App\Form\EventType;
use App\Entity\GroupeJDR;
use App\Entity\Availability;
use App\Repository\GroupeJDRRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalendarController extends AbstractController
{
    #[Route('/calendrier', name: 'app_calendar')]
    public function index(GroupeJDRRepository $groupeJDRRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder au calendrier.');
        }
        $gmJDRs = $groupeJDRRepository->findBy(['owner' => $user]);
        $playerJDRs = $groupeJDRRepository->createQueryBuilder('g')
            ->join('g.players', 'p')
            ->where('p = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
        $events = $entityManager->getRepository(Event::class)->createQueryBuilder('e')
            ->join('e.groupeJDR', 'g')
            ->where('g.owner = :user OR :user MEMBER OF g.players')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
        $daysMap = [
            'lundi' => 'monday',
            'mardi' => 'tuesday',
            'mercredi' => 'wednesday',
            'jeudi' => 'thursday',
            'vendredi' => 'friday',
            'samedi' => 'saturday',
            'dimanche' => 'sunday',
        ];
        $calendarEvents = [];
        foreach ($events as $event) {
            $duration = $event->getDuration() ?: 0;
            $endTime = null;
            if ($event->getEventTime() && $duration > 0) {
                $endTime = (clone $event->getEventTime())->modify('+' . ($duration * 60) . ' minutes');
                if ($endTime < $event->getEventTime()) {
                    $endTime->modify('+1 day');
                }
            }
            if ($event->getSpecificDate() && $event->getEventTime()) {
                $startDateTime = (clone $event->getSpecificDate())->setTime(
                    (int) $event->getEventTime()->format('H'),
                    (int) $event->getEventTime()->format('i')
                );
                $endDateTime = null;
                if ($endTime) {
                    $endDateTime = (clone $startDateTime)->setTime(
                        (int) $endTime->format('H'),
                        (int) $endTime->format('i')
                    );
                    if ($endDateTime < $startDateTime) {
                        $endDateTime->modify('+1 day');
                    }
                }
                $calendarEvents[] = [
                    'title' => $event->getGroupeJDR()->getTitle(),
                    'start' => $startDateTime->format('Y-m-d\TH:i'),
                    'end' => $endDateTime ? $endDateTime->format('Y-m-d\TH:i') : null,
                    'color' => '#1d4ed8',
                ];
            } elseif ($event->getDayOfWeek() && $event->getEventTime()) {
                if (!isset($daysMap[$event->getDayOfWeek()])) {
                    continue;
                }
                $currentDate = new \DateTime('now');
                $currentDate->modify('last ' . $daysMap[$event->getDayOfWeek()]);
                for ($i = 0; $i < 52; $i++) {
                    $endRecurringTime = null;
                    if ($duration > 0) {
                        $endRecurringTime = (clone $currentDate)->setTime(
                            (int) $event->getEventTime()->format('H'),
                            (int) $event->getEventTime()->format('i')
                        )->modify('+' . ($duration * 60) . ' minutes');
                        if ($endRecurringTime < $currentDate->setTime(
                            (int) $event->getEventTime()->format('H'),
                            (int) $event->getEventTime()->format('i')
                        )) {
                            $endRecurringTime->modify('+1 day');
                        }
                    }
                    $calendarEvents[] = [
                        'title' => $event->getGroupeJDR()->getTitle(),
                        'start' => $currentDate->format('Y-m-d') . 'T' . $event->getEventTime()->format('H:i'),
                        'end' => $endRecurringTime ? $endRecurringTime->format('Y-m-d\TH:i') : null,
                        'color' => '#1d4ed8',
                    ];
                    $currentDate->modify('+1 week');
                }
            }
        }
        return $this->render('calendar/index.html.twig', [
            'gm_jdrs' => $gmJDRs,
            'player_jdrs' => $playerJDRs,
            'calendarEvents' => $calendarEvents,
        ]);
    }

    #[Route('/calendrier/{id}/events', name: 'app_calendar_events', methods: ['GET', 'POST'])]
    public function manageEvents(
        GroupeJDR $groupeJDR,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        if (!$user || $groupeJDR->getOwner() !== $user) {
            throw $this->createAccessDeniedException('Vous n’êtes pas autorisé à gérer les événements de ce JDR.');
        }
        $event = new Event();
        $event->setGroupeJDR($groupeJDR);
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $specificDate = $event->getSpecificDate();
            $eventTime = $event->getEventTime();
            $existingEvent = $entityManager->getRepository(Event::class)->findOneBy([
                'specificDate' => $specificDate,
                'eventTime' => $eventTime,
                'groupeJDR' => $groupeJDR,
            ]);
            if (!$existingEvent) {
                $entityManager->persist($event);
                $entityManager->flush();
                $this->addFlash('success', 'Événement ajouté avec succès.');
            } else {
                $this->addFlash('error', 'Un événement similaire existe déjà à cette date et cette heure.');
            }
            return $this->redirectToRoute('app_calendar_events', ['id' => $groupeJDR->getId()]);
        }
        $events = $entityManager->getRepository(Event::class)->findBy(['groupeJDR' => $groupeJDR]);
        $members = $groupeJDR->getPlayers()->toArray();
        $availabilities = $entityManager->getRepository(Availability::class)->findBy(['user' => $members]);
        $daysMap = [
            'lundi' => 'monday',
            'mardi' => 'tuesday',
            'mercredi' => 'wednesday',
            'jeudi' => 'thursday',
            'vendredi' => 'friday',
            'samedi' => 'saturday',
            'dimanche' => 'sunday',
        ];
        $displayableEvents = [];
        foreach ($events as $e) {
            $duration = $e->getDuration() ?? 0;
            $endTime = null;
            if ($e->getEventTime() && is_numeric($duration) && $duration > 0) {
                $endTime = (clone $e->getEventTime())->modify('+' . ($duration * 60) . ' minutes');
                if ($endTime < $e->getEventTime()) {
                    $endTime->modify('+1 day');
                }
            }
            if ($e->getSpecificDate() && $e->getEventTime()) {
                $startDateTime = (clone $e->getSpecificDate())->setTime(
                    (int)$e->getEventTime()->format('H'),
                    (int)$e->getEventTime()->format('i')
                );
                $endDateTime = null;
                if ($endTime) {
                    $endDateTime = (clone $startDateTime)->setTime(
                        (int)$endTime->format('H'),
                        (int)$endTime->format('i')
                    );
                    if ($endDateTime < $startDateTime) {
                        $endDateTime->modify('+1 day');
                    }
                }
                $displayableEvents[] = [
                    'title' => $e->getGroupeJDR()->getTitle(),
                    'start' => $startDateTime->format('Y-m-d\TH:i'),
                    'end' => $endDateTime ? $endDateTime->format('Y-m-d\TH:i') : null,
                    'color' => '#1d4ed8',
                ];
            } elseif ($e->getDayOfWeek()) {
                $currentDate = new \DateTime('now');
                $currentDate->modify('last ' . $daysMap[$e->getDayOfWeek()]);
                for ($i = 0; $i < 52; $i++) {
                    $calculatedEndTime = null;
                    if ($e->getEventTime() && is_numeric($duration) && $duration > 0) {
                        $calculatedEndTime = (clone $e->getEventTime())->modify('+' . ($duration * 60) . ' minutes');
                        if ($calculatedEndTime < $e->getEventTime()) {
                            $calculatedEndTime->modify('+1 day');
                        }
                    }
                    $displayableEvents[] = [
                        'title' => $e->getGroupeJDR()->getTitle(),
                        'start' => $currentDate->format('Y-m-d') . 'T' . $e->getEventTime()->format('H:i'),
                        'end' => $calculatedEndTime ? $currentDate->format('Y-m-d') . 'T' . $calculatedEndTime->format('H:i') : null,
                        'color' => '#1d4ed8',
                    ];
                    $currentDate->modify('+1 week');
                }
            }
        }
        return $this->render('calendar/manage_events.html.twig', [
            'groupeJDR' => $groupeJDR,
            'form' => $form->createView(),
            'events' => json_encode($displayableEvents),
            'availabilities' => $availabilities,
        ]);
    }

    #[Route('/calendrier/{id}/events/add-recurrent', name: 'app_calendar_events_add_recurrent', methods: ['POST'])]
    public function addRecurrentEvent(GroupeJDR $groupeJDR, Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        if (!$user || $groupeJDR->getOwner() !== $user) {
            return new JsonResponse(['error' => 'Accès refusé. Vous devez être le propriétaire du groupe.'], Response::HTTP_FORBIDDEN);
        }
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return new JsonResponse(['error' => 'Erreur de décodage des données JSON.'], Response::HTTP_BAD_REQUEST);
        }
        $dayOfWeek = $data['dayOfWeek'] ?? null;
        $eventTimeString = $data['eventTime'] ?? null;
        $duration = $data['duration'] ?? null;
        if (empty($dayOfWeek) || empty($eventTimeString) || empty($duration) || !is_numeric($duration) || (float)$duration <= 0) {
            return new JsonResponse(['error' => 'Veuillez fournir un jour de la semaine, une heure valide et une durée en heures.'], Response::HTTP_BAD_REQUEST);
        }
        $eventTime = \DateTime::createFromFormat('H:i', $eventTimeString);
        if (!$eventTime) {
            return new JsonResponse(['error' => 'Format d\'heure invalide. Utilisez le format HH:mm.'], Response::HTTP_BAD_REQUEST);
        }
        $validDays = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
        if (!in_array($dayOfWeek, $validDays)) {
            return new JsonResponse(['error' => 'Jour de la semaine invalide.'], Response::HTTP_BAD_REQUEST);
        }
        $newEvent = new Event();
        $newEvent->setGroupeJDR($groupeJDR);
        $newEvent->setDayOfWeek($dayOfWeek);
        $newEvent->setEventTime($eventTime);
        $newEvent->setDuration((float)$duration);
        $newEvent->setRecurrence('weekly');
        $existingEvent = $entityManager->getRepository(Event::class)->findOneBy([
            'dayOfWeek' => $dayOfWeek,
            'eventTime' => $eventTime,
            'groupeJDR' => $groupeJDR,
        ]);
        if ($existingEvent) {
            return new JsonResponse(['error' => 'Un événement récurrent existe déjà pour ce jour et cette heure.'], Response::HTTP_CONFLICT);
        }
        try {
            $entityManager->persist($newEvent);
            $entityManager->flush();
            return new JsonResponse(['success' => 'Événement récurrent ajouté avec succès.'], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur lors de l\'ajout de l\'événement: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/calendrier/{id}/events/add', name: 'app_calendar_events_add', methods: ['POST'])]
    public function addEvent(Request $request, GroupeJDR $groupeJDR, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();
        if (!$user || $groupeJDR->getOwner() !== $user) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour ajouter un événement.');
            return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_FORBIDDEN);
        }
        $data = json_decode($request->getContent(), true);
        $specificDate = isset($data['specificDate']) ? \DateTime::createFromFormat('Y-m-d', $data['specificDate']) : null;
        $eventTime = isset($data['eventTime']) ? \DateTime::createFromFormat('H:i', $data['eventTime']) : null;
        $dayOfWeek = $data['dayOfWeek'] ?? null;
        $duration = $data['duration'] ?? null;
        if (empty($duration) || !is_numeric($duration) || (float)$duration <= 0) {
            return new JsonResponse(['error' => 'Durée invalide. Veuillez fournir une durée valide en heures.'], Response::HTTP_BAD_REQUEST);
        }
        if ($specificDate && $eventTime) {
            $event = new Event();
            $event->setSpecificDate($specificDate);
            $event->setEventTime($eventTime);
            $event->setDuration((float)$duration);
            $event->setIsRecurrent(false);
            $event->setGroupeJDR($groupeJDR);
            $em->persist($event);
            $em->flush();
            $this->addFlash('success', 'Événement unique ajouté avec succès.');
            return new JsonResponse(['success' => true, 'recurrence' => false]);
        } elseif ($dayOfWeek && $eventTime) {
            $event = new Event();
            $event->setDayOfWeek($dayOfWeek);
            $event->setEventTime($eventTime);
            $event->setDuration((float)$duration);
            $event->setIsRecurrent(true);
            $event->setGroupeJDR($groupeJDR);
            $em->persist($event);
            $em->flush();
            $this->addFlash('success', 'Événement récurrent ajouté avec succès.');
            return new JsonResponse(['success' => true, 'recurrence' => true]);
        }
        $this->addFlash('error', 'Données invalides.');
        return new JsonResponse(['error' => 'Invalid data'], Response::HTTP_BAD_REQUEST);
    }
    #[Route('/calendrier/event/{id}/update', name: 'app_calendar_event_update', methods: ['POST'])]
    public function updateEvent(Event $event, Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $eventTime = \DateTime::createFromFormat('H:i', $data['eventTime']);
        $duration = $data['duration'];
        if (!$eventTime || !is_numeric($duration) || $duration <= 0) {
            return new JsonResponse(['error' => 'Données invalides'], Response::HTTP_BAD_REQUEST);
        }
        $event->setEventTime($eventTime);
        $event->setDuration($duration);
        $em->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/calendrier/event/{id}/delete', name: 'app_calendar_event_delete', methods: ['DELETE'])]
    public function deleteEvent(Event $event, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($event);
        $em->flush();
        return new JsonResponse(['success' => true]);
    }
}
