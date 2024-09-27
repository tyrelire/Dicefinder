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
        '/groupe/jdr' => [[['_route' => 'app_groupe_j_d_r_index', '_controller' => 'App\\Controller\\GroupeJDRController::index'], null, ['GET' => 0], null, false, false, null]],
        '/groupe/jdr/new' => [[['_route' => 'app_groupe_j_d_r_new', '_controller' => 'App\\Controller\\GroupeJDRController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/invitations' => [[['_route' => 'app_invitations_index', '_controller' => 'App\\Controller\\InvitationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/my/jdr' => [[['_route' => 'app_my_jdr', '_controller' => 'App\\Controller\\MyGameController::index'], null, null, null, false, false, null]],
        '/profile/show' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
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
                .'|/groupe/jdr/([^/]++)(?'
                    .'|(*:225)'
                    .'|/edit(*:238)'
                    .'|(*:246)'
                .')'
                .'|/invitations/([^/]++)/respond(*:284)'
                .'|/api/(?'
                    .'|check_user/([^/]++)/([^/]++)(*:328)'
                    .'|invite/([^/]++)/([^/]++)(*:360)'
                    .'|remove_user/([^/]++)/([^/]++)(*:397)'
                .')'
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
        225 => [[['_route' => 'app_groupe_j_d_r_show', '_controller' => 'App\\Controller\\GroupeJDRController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_groupe_j_d_r_edit', '_controller' => 'App\\Controller\\GroupeJDRController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'app_groupe_j_d_r_delete', '_controller' => 'App\\Controller\\GroupeJDRController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_invitations_respond', '_controller' => 'App\\Controller\\InvitationController::respond'], ['id'], ['POST' => 0], null, false, false, null]],
        328 => [[['_route' => 'check_user', '_controller' => 'App\\Controller\\PlayerInvitationController::checkUser'], ['pseudo', 'jdrId'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'invite_player', '_controller' => 'App\\Controller\\PlayerInvitationController::invitePlayer'], ['groupeId', 'pseudo'], ['POST' => 0], null, false, true, null]],
        397 => [
            [['_route' => 'remove_user_from_jdr', '_controller' => 'App\\Controller\\PlayerInvitationController::removeUserFromJdr'], ['userId', 'jdrId'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];