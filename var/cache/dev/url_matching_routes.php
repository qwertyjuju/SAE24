<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'racine', '_controller' => 'App\\Controller\\ArtmathController::racine'], null, null, null, false, false, null]],
        '/cr' => [[['_route' => 'app_cr', '_controller' => 'App\\Controller\\ArtmathController::cr'], null, null, null, false, false, null]],
        '/koch' => [[['_route' => 'app_koch', '_controller' => 'App\\Controller\\ArtmathController::koch'], null, null, null, false, false, null]],
        '/nee_carre' => [[['_route' => 'app_nee_carre', '_controller' => 'App\\Controller\\ArtmathController::nee_carre'], null, null, null, false, false, null]],
        '/suite_carre' => [[['_route' => 'app_suite_carre', '_controller' => 'App\\Controller\\ArtmathController::suite_carre'], null, null, null, false, false, null]],
        '/oeuvre_perso' => [[['_route' => 'app_oeuvre_perso', '_controller' => 'App\\Controller\\ArtmathController::oeuvre_perso'], null, null, null, false, false, null]],
        '/oeuvre_perso2' => [[['_route' => 'app_oeuvre_perso2', '_controller' => 'App\\Controller\\ArtmathController::oeuvre_perso2'], null, null, null, false, false, null]],
        '/calculer_koch' => [[['_route' => 'calculer_koch', '_controller' => 'App\\Controller\\ArtmathController::calculer_koch'], null, null, null, false, false, null]],
        '/calculer_nee_carre' => [[['_route' => 'calculer_nee_carre', '_controller' => 'App\\Controller\\ArtmathController::calculer_nee_carre'], null, null, null, false, false, null]],
        '/calculer_suite_carre' => [[['_route' => 'calculer_suite_carre', '_controller' => 'App\\Controller\\ArtmathController::calculer_suite_carre'], null, null, null, false, false, null]],
        '/calculer_oeuvre' => [[['_route' => 'calculer_oeuvre', '_controller' => 'App\\Controller\\ArtmathController::calculer_oeuvre'], null, null, null, false, false, null]],
        '/calculer_oeuvre2' => [[['_route' => 'calculer_oeuvre2', '_controller' => 'App\\Controller\\ArtmathController::calculer_oeuvre2'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
