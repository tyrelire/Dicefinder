<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'app_footer_cgu', '_controller' => 'App\\Controller\\FooterController::footerCgu'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_footer_about', '_controller' => 'App\\Controller\\FooterController::footerAbout'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'app_footer_cgv', '_controller' => 'App\\Controller\\FooterController::footerCgv'], null, null, null, false, false, null]],
        '/policy' => [[['_route' => 'app_footer_policy', '_controller' => 'App\\Controller\\FooterController::footerPolicy'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_footer_team', '_controller' => 'App\\Controller\\FooterController::footerTeam'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_footer_faq', '_controller' => 'App\\Controller\\FooterController::footerFAQ'], null, null, null, false, false, null]],
        '/groupe/jdr' => [[['_route' => 'app_groupe_j_d_r_index', '_controller' => 'App\\Controller\\GroupeJDRController::index'], null, ['GET' => 0], null, true, false, null]],
        '/groupe/jdr/new' => [[['_route' => 'app_groupe_j_d_r_new', '_controller' => 'App\\Controller\\GroupeJDRController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/my/jdr' => [[['_route' => 'app_my_jdr', '_controller' => 'App\\Controller\\MyGameController::index'], null, null, null, false, false, null]],
        '/notifications' => [[['_route' => 'app_notifications_index', '_controller' => 'App\\Controller\\NotificationController::invitationsNotificationsIndex'], null, ['GET' => 0], null, false, false, null]],
        '/api/invitations_pending' => [[['_route' => 'app_invitations_pending', '_controller' => 'App\\Controller\\NotificationController::getPendingInvitations'], null, null, null, false, false, null]],
        '/api/notifications_pending' => [[['_route' => 'app_notifications_pending', '_controller' => 'App\\Controller\\NotificationController::getPendingNotifications'], null, null, null, false, false, null]],
        '/notifications/clear' => [[['_route' => 'app_notifications_clear_all', '_controller' => 'App\\Controller\\NotificationController::clearAllNotifications'], null, ['POST' => 0], null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'app_create_checkout_session', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
        '/payment-success' => [[['_route' => 'app_payment_success', '_controller' => 'App\\Controller\\PaymentController::paymentSuccess'], null, null, null, false, false, null]],
        '/payment-cancel' => [[['_route' => 'app_payment_cancel', '_controller' => 'App\\Controller\\PaymentController::paymentCancel'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/favorite/(?'
                    .'|add/([^/]++)(*:227)'
                    .'|remove/([^/]++)(*:250)'
                .')'
                .'|/groupe/jdr/([^/]++)(?'
                    .'|(*:282)'
                    .'|/(?'
                        .'|edit(*:298)'
                        .'|leave(*:311)'
                    .')'
                    .'|(*:320)'
                .')'
                .'|/notifications/([^/]++)/respond(*:360)'
                .'|/api/(?'
                    .'|check_user/([^/]++)/([^/]++)(*:404)'
                    .'|re(?'
                        .'|move_(?'
                            .'|user/([^/]++)/([^/]++)(*:447)'
                            .'|invitation/([^/]++)(*:474)'
                        .')'
                        .'|quest_join/([^/]++)(*:502)'
                        .'|spond_invitation(?'
                            .'|_base/([^/]++)(*:543)'
                            .'|/([^/]++)(*:560)'
                        .')'
                    .')'
                .')'
                .'|/profile/(\\d+)(*:585)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:629)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'add_favorite', '_controller' => 'App\\Controller\\FavorisController::addFavorite'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'remove_favorite', '_controller' => 'App\\Controller\\FavorisController::removeFavorite'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_groupe_j_d_r_show', '_controller' => 'App\\Controller\\GroupeJDRController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'app_groupe_j_d_r_edit', '_controller' => 'App\\Controller\\GroupeJDRController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        311 => [[['_route' => 'leave_jdr', '_controller' => 'App\\Controller\\GroupeJDRController::leave'], ['id'], ['POST' => 0], null, false, false, null]],
        320 => [[['_route' => 'app_groupe_j_d_r_delete', '_controller' => 'App\\Controller\\GroupeJDRController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        360 => [[['_route' => 'app_notifications_respond', '_controller' => 'App\\Controller\\NotificationController::respondNotification'], ['id'], ['POST' => 0], null, false, false, null]],
        404 => [[['_route' => 'check_user', '_controller' => 'App\\Controller\\PlayerInvitationController::checkUser'], ['pseudo', 'jdrId'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'remove_user_from_jdr', '_controller' => 'App\\Controller\\PlayerInvitationController::removeUserFromJdr'], ['userId', 'jdrId'], ['DELETE' => 0], null, false, true, null]],
        474 => [[['_route' => 'remove_invitation', '_controller' => 'App\\Controller\\PlayerInvitationController::removeInvitation'], ['invitationId'], ['DELETE' => 0], null, false, true, null]],
        502 => [[['_route' => 'request_join', '_controller' => 'App\\Controller\\PlayerInvitationController::requestJoin'], ['groupeId'], ['POST' => 0], null, false, true, null]],
        543 => [[['_route' => 'respond_invitation_base', '_controller' => 'App\\Controller\\PlayerInvitationController::respondInvitationBase'], ['invitationId'], ['POST' => 0], null, false, true, null]],
        560 => [[['_route' => 'respond_invitation', '_controller' => 'App\\Controller\\PlayerInvitationController::respondInvitation'], ['invitationId'], ['POST' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_profile_show', '_controller' => 'App\\Controller\\ProfileController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        629 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
