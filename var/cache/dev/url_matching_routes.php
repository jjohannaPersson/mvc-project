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
        '/high/score' => [[['_route' => 'high_score', '_controller' => 'App\\Controller\\HighScoreController::index'], null, null, null, false, false, null]],
        '/highscore/create' => [[['_route' => 'create_score', '_controller' => 'App\\Controller\\HighScoreController::createHighscore'], null, ['POST' => 0], null, false, false, null]],
        '/highscore' => [[['_route' => 'highscore', '_controller' => 'App\\Controller\\HighScoreController::findAllHighscore'], null, null, null, false, false, null]],
        '/highscore/bitcoins' => [[['_route' => 'bitcoins', '_controller' => 'App\\Controller\\HighScoreController::findAllBitcoins'], null, null, null, false, false, null]],
        '/histograms' => [[['_route' => 'histograms', '_controller' => 'App\\Controller\\HistogramController::index'], null, null, null, false, false, null]],
        '/histogram/create' => [[['_route' => 'create_histogram', '_controller' => 'App\\Controller\\HistogramController::createHistogram'], null, null, null, false, false, null]],
        '/histogram' => [[['_route' => 'histogram', '_controller' => 'App\\Controller\\HistogramController::findHistogram'], null, null, null, false, false, null]],
        '/hello-world' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\HelloWorldController::helloMessage'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'hello-view', '_controller' => 'App\\Controller\\HelloWorldController::helloMessageView'], null, null, null, false, false, null]],
        '/dice' => [[['_route' => 'dice', '_controller' => 'App\\Controller\\DiceController::diceGame'], null, ['GET' => 0], null, false, false, null]],
        '/game21' => [
            [['_route' => 'game21', '_controller' => 'App\\Controller\\Game21Controller::game21'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'game21post', '_controller' => 'App\\Controller\\Game21Controller::game21post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/bitcoin' => [
            [['_route' => 'bitcoin', '_controller' => 'App\\Controller\\Game21Controller::bitcoin'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'bitcoinpost', '_controller' => 'App\\Controller\\Game21Controller::bitcoinpost'], null, ['POST' => 0], null, false, false, null],
        ],
        '/play21' => [
            [['_route' => 'play21', '_controller' => 'App\\Controller\\Game21Controller::play21'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'play21post', '_controller' => 'App\\Controller\\Game21Controller::play21post'], null, ['POST' => 0], null, false, false, null],
        ],
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
