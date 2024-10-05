<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FooterController extends AbstractController
{
    #[Route('/cgu', name: 'app_footer_cgu')]
    public function footerCgu(): Response
    {
        return $this->render('footer/cgu.html.twig', [
        ]);
    }

    #[Route('/about', name: 'app_footer_about')]
    public function footerAbout(): Response
    {
        return $this->render('footer/about.html.twig', [
        ]);
    }

    #[Route('/cgv', name: 'app_footer_cgv')]
    public function footerCgv(): Response
    {
        return $this->render('footer/cgv.html.twig', [
        ]);
    }

    #[Route('/policy', name: 'app_footer_policy')]
    public function footerPolicy(): Response
    {
        return $this->render('footer/policy.html.twig', [
        ]);
    }

    #[Route('/team', name: 'app_footer_team')]
    public function footerTeam(): Response
    {
        return $this->render('footer/team.html.twig', [
        ]);
    }

    #[Route('/faq', name: 'app_footer_faq')]
    public function footerFAQ(): Response
    {
        return $this->render('footer/faq.html.twig', [
        ]);
    }
}
