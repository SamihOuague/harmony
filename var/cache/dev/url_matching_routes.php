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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/programme/new' => [[['_route' => 'app_dashboard_programme', '_controller' => 'App\\Controller\\DashboardController::programme'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/guide' => [[['_route' => 'guide', '_controller' => 'App\\Controller\\HomeController::guide'], null, null, null, false, false, null]],
        '/harmony-promotion' => [[['_route' => 'harmony', '_controller' => 'App\\Controller\\HomeController::harmony'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/programme' => [[['_route' => 'programme', '_controller' => 'App\\Controller\\HomeController::programme'], null, null, null, false, false, null]],
        '/rappel' => [[['_route' => 'rappel', '_controller' => 'App\\Controller\\HomeController::rendezVous'], null, null, null, false, false, null]],
        '/recevoir-le-guide' => [[['_route' => 'telecharge', '_controller' => 'App\\Controller\\HomeController::telecharge'], null, null, null, false, false, null]],
        '/FAQ' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\HomeController::faq'], null, null, null, false, false, null]],
        '/actus' => [[['_route' => 'news', '_controller' => 'App\\Controller\\NewsController::index'], null, null, null, false, false, null]],
        '/add/new' => [[['_route' => 'newnew', '_controller' => 'App\\Controller\\NewsController::createArticle'], null, null, null, false, false, null]],
        '/page/new' => [[['_route' => 'app_new_page', '_controller' => 'App\\Controller\\PageController::new'], null, null, null, false, false, null]],
        '/page' => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\PresentationController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/b(?'
                    .'|ien/([^/]++)/(?'
                        .'|edit(*:194)'
                        .'|new(*:205)'
                    .')'
                    .'|rochure/([^/]++)/([^/]++)(*:239)'
                .')'
                .'|/p(?'
                    .'|rogramme/([^/]++)/(?'
                        .'|edit(*:278)'
                        .'|delete(*:292)'
                    .')'
                    .'|age/([^/]++)/delete(*:320)'
                .')'
                .'|/d(?'
                    .'|ashboard/([^/]++)/(?'
                        .'|bien(*:359)'
                        .'|lot(*:370)'
                    .')'
                    .'|etail/([^/]++)(*:393)'
                .')'
                .'|/lot/([^/]++)/new(*:419)'
                .'|/rappel/([^/]++)/([^/]++)(*:452)'
                .'|/article/([^/]++)(*:477)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'app_dashboard_editbien', '_controller' => 'App\\Controller\\DashboardController::editBien'], ['id'], null, null, false, false, null]],
        205 => [[['_route' => 'app_dashboard_newbien', '_controller' => 'App\\Controller\\DashboardController::newBien'], ['id'], null, null, false, false, null]],
        239 => [[['_route' => 'app_home_brochure', '_controller' => 'App\\Controller\\HomeController::brochure'], ['id', 'type'], null, null, false, true, null]],
        278 => [[['_route' => 'app_dashboard_editprogramme', '_controller' => 'App\\Controller\\DashboardController::editProgramme'], ['id'], null, null, false, false, null]],
        292 => [[['_route' => 'app_dashboard_deleteprogramme', '_controller' => 'App\\Controller\\DashboardController::deleteProgramme'], ['id'], null, null, false, false, null]],
        320 => [[['_route' => 'app_page_deletepage', '_controller' => 'App\\Controller\\PageController::deletePage'], ['id'], null, null, false, false, null]],
        359 => [[['_route' => 'app_dashboard_bien', '_controller' => 'App\\Controller\\DashboardController::bien'], ['id'], null, null, false, false, null]],
        370 => [[['_route' => 'app_dashboard_lot', '_controller' => 'App\\Controller\\DashboardController::lot'], ['id'], null, null, false, false, null]],
        393 => [[['_route' => 'app_home_detail', '_controller' => 'App\\Controller\\HomeController::detail'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'app_dashboard_newlot', '_controller' => 'App\\Controller\\DashboardController::newLot'], ['id'], null, null, false, false, null]],
        452 => [[['_route' => 'app_home_rappel', '_controller' => 'App\\Controller\\HomeController::rappel'], ['id', 'type'], null, null, false, true, null]],
        477 => [
            [['_route' => 'app_news_article', '_controller' => 'App\\Controller\\NewsController::article'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
