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
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\FirebaseController::showChat'], null, null, null, false, false, null]],
        '/chat/get-conversations' => [[['_route' => 'get_conversations', '_controller' => 'App\\Controller\\FirebaseController::getConversations'], null, ['GET' => 0], null, false, false, null]],
        '/user/search' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\FirebaseController::searchUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/chat/messages' => [[['_route' => 'chat_messages', '_controller' => 'App\\Controller\\FirebaseController::getChatMessages'], null, null, null, false, false, null]],
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
        '/vip' => [[['_route' => 'app_vip', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/create-checkout-session/monthly' => [[['_route' => 'app_create_checkout_session_monthly', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSessionMonthly'], null, ['POST' => 0], null, false, false, null]],
        '/create-checkout-session/annual' => [[['_route' => 'app_create_checkout_session_annual', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSessionAnnual'], null, ['POST' => 0], null, false, false, null]],
        '/create-checkout-session/one-time' => [[['_route' => 'app_create_checkout_session_one_time', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSessionOneTime'], null, ['POST' => 0], null, false, false, null]],
        '/payment-success' => [[['_route' => 'app_payment_success', '_controller' => 'App\\Controller\\PaymentController::paymentSuccess'], null, null, null, false, false, null]],
        '/payment-cancel' => [[['_route' => 'app_payment_cancel', '_controller' => 'App\\Controller\\PaymentController::paymentCancel'], null, null, null, false, false, null]],
        '/create-gift-checkout-session' => [[['_route' => 'app_create_gift_checkout_session', '_controller' => 'App\\Controller\\PaymentController::createGiftCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
        '/api/search-user' => [[['_route' => 'api_search_user', '_controller' => 'App\\Controller\\PaymentController::searchUser'], null, ['GET' => 0], null, false, false, null]],
        '/stripe/webhook' => [[['_route' => 'app_stripe_webhook', '_controller' => 'App\\Controller\\PaymentController::handleStripeWebhook'], null, ['POST' => 0], null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/edit/avatar' => [[['_route' => 'app_profile_edit_avatar', '_controller' => 'App\\Controller\\ProfileController::editAvatar'], null, ['POST' => 0], null, false, false, null]],
        '/profile/edit/banner' => [[['_route' => 'app_profile_edit_banner', '_controller' => 'App\\Controller\\ProfileController::editBanner'], null, ['POST' => 0], null, false, false, null]],
        '/profile/edit/bio' => [[['_route' => 'app_profile_edit_bio', '_controller' => 'App\\Controller\\ProfileController::editBio'], null, ['POST' => 0], null, false, false, null]],
        '/profile/edit/birthdate' => [[['_route' => 'app_profile_edit_birthdate', '_controller' => 'App\\Controller\\ProfileController::editBirthdate'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/settings/account' => [[['_route' => 'app_settings_account', '_controller' => 'App\\Controller\\SettingsAccountController::index'], null, null, null, false, false, null]],
        '/support' => [[['_route' => 'app_support', '_controller' => 'App\\Controller\\SupportController::index'], null, null, null, false, false, null]],
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
                .'|/chat/(?'
                    .'|message/([^/]++)(*:284)'
                    .'|private/([^/]++)(*:308)'
                    .'|conversation/([^/]++)/messages(*:346)'
                .')'
                .'|/a(?'
                    .'|dd\\-friend/([^/]++)(*:379)'
                    .'|ccept\\-friends\\-request(?'
                        .'|/([^/]++)(*:422)'
                        .'|\\-base/([^/]++)(*:445)'
                    .')'
                    .'|pi/(?'
                        .'|check_user/([^/]++)/([^/]++)(*:488)'
                        .'|re(?'
                            .'|move_(?'
                                .'|user/([^/]++)/([^/]++)(*:531)'
                                .'|invitation/([^/]++)(*:558)'
                            .')'
                            .'|quest_join/([^/]++)(*:586)'
                            .'|spond_invitation(?'
                                .'|_base/([^/]++)(*:627)'
                                .'|/([^/]++)(*:644)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|move\\-friend/([^/]++)(*:683)'
                    .'|set\\-password/reset(?:/([^/]++))?(*:724)'
                .')'
                .'|/block\\-user/([^/]++)(*:754)'
                .'|/decline\\-friends\\-request(?'
                    .'|/([^/]++)(*:800)'
                    .'|\\-base/([^/]++)(*:823)'
                .')'
                .'|/g(?'
                    .'|roupe/jdr/([^/]++)(?'
                        .'|(*:858)'
                        .'|/(?'
                            .'|edit(*:874)'
                            .'|leave(*:887)'
                        .')'
                        .'|(*:896)'
                    .')'
                    .'|ift\\-payment\\-success/([^/]++)(*:935)'
                .')'
                .'|/notifications/([^/]++)/respond(*:975)'
                .'|/profile/(\\d+)(*:997)'
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
        284 => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\FirebaseController::sendMessageToUser'], ['userId'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'start_private_conversation', '_controller' => 'App\\Controller\\FirebaseController::startPrivateConversation'], ['userId'], ['POST' => 0], null, false, true, null]],
        346 => [[['_route' => 'get_conversation_messages', '_controller' => 'App\\Controller\\FirebaseController::getConversationMessages'], ['conversationId'], ['GET' => 0], null, false, false, null]],
        379 => [[['_route' => 'add_friend', '_controller' => 'App\\Controller\\FriendShipController::addFriend'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'accept_request', '_controller' => 'App\\Controller\\FriendShipController::acceptRequest'], ['id'], null, null, false, true, null]],
        445 => [[['_route' => 'accept_request_base', '_controller' => 'App\\Controller\\FriendShipController::acceptRequestBase'], ['id'], ['POST' => 0], null, false, true, null]],
        488 => [[['_route' => 'check_user', '_controller' => 'App\\Controller\\PlayerInvitationController::checkUser'], ['pseudo', 'jdrId'], ['GET' => 0], null, false, true, null]],
        531 => [[['_route' => 'remove_user_from_jdr', '_controller' => 'App\\Controller\\PlayerInvitationController::removeUserFromJdr'], ['userId', 'jdrId'], ['DELETE' => 0], null, false, true, null]],
        558 => [[['_route' => 'remove_invitation', '_controller' => 'App\\Controller\\PlayerInvitationController::removeInvitation'], ['invitationId'], ['DELETE' => 0], null, false, true, null]],
        586 => [[['_route' => 'request_join', '_controller' => 'App\\Controller\\PlayerInvitationController::requestJoin'], ['groupeId'], ['POST' => 0], null, false, true, null]],
        627 => [[['_route' => 'respond_invitation_base', '_controller' => 'App\\Controller\\PlayerInvitationController::respondInvitationBase'], ['invitationId'], ['POST' => 0], null, false, true, null]],
        644 => [[['_route' => 'respond_invitation', '_controller' => 'App\\Controller\\PlayerInvitationController::respondInvitation'], ['invitationId'], ['POST' => 0], null, false, true, null]],
        683 => [[['_route' => 'remove_friend', '_controller' => 'App\\Controller\\FriendShipController::removeFriend'], ['id'], null, null, false, true, null]],
        724 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        754 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\FriendShipController::blockUser'], ['id'], null, null, false, true, null]],
        800 => [[['_route' => 'decline_request', '_controller' => 'App\\Controller\\FriendShipController::declineRequest'], ['id'], null, null, false, true, null]],
        823 => [[['_route' => 'decline_request_base', '_controller' => 'App\\Controller\\FriendShipController::declineRequestBase'], ['id'], ['POST' => 0], null, false, true, null]],
        858 => [[['_route' => 'app_groupe_j_d_r_show', '_controller' => 'App\\Controller\\GroupeJDRController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        874 => [[['_route' => 'app_groupe_j_d_r_edit', '_controller' => 'App\\Controller\\GroupeJDRController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        887 => [[['_route' => 'leave_jdr', '_controller' => 'App\\Controller\\GroupeJDRController::leave'], ['id'], ['POST' => 0], null, false, false, null]],
        896 => [[['_route' => 'app_groupe_j_d_r_delete', '_controller' => 'App\\Controller\\GroupeJDRController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        935 => [[['_route' => 'app_gift_payment_success', '_controller' => 'App\\Controller\\PaymentController::giftPaymentSuccess'], ['id'], null, null, false, true, null]],
        975 => [[['_route' => 'app_notifications_respond', '_controller' => 'App\\Controller\\NotificationController::respondNotification'], ['id'], ['POST' => 0], null, false, false, null]],
        997 => [
            [['_route' => 'app_profile_show', '_controller' => 'App\\Controller\\ProfileController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
