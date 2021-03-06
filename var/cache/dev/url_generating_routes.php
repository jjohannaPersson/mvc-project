<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'high_score' => [[], ['_controller' => 'App\\Controller\\HighScoreController::index'], [], [['text', '/high/score']], [], []],
    'create_score' => [[], ['_controller' => 'App\\Controller\\HighScoreController::createHighscore'], [], [['text', '/highscore/create']], [], []],
    'app_highscore_update' => [['id'], ['_controller' => 'App\\Controller\\HighScoreController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/highscore/edit']], [], []],
    'highscore' => [[], ['_controller' => 'App\\Controller\\HighScoreController::findAllHighscore'], [], [['text', '/highscore']], [], []],
    'bitcoins' => [[], ['_controller' => 'App\\Controller\\HighScoreController::findAllBitcoins'], [], [['text', '/highscore/bitcoins']], [], []],
    'histograms' => [[], ['_controller' => 'App\\Controller\\HistogramController::index'], [], [['text', '/histograms']], [], []],
    'create_histogram' => [[], ['_controller' => 'App\\Controller\\HistogramController::createHistogram'], [], [['text', '/histogram/create']], [], []],
    'app_histogram_update' => [['id'], ['_controller' => 'App\\Controller\\HistogramController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/histogram/edit']], [], []],
    'histogram' => [[], ['_controller' => 'App\\Controller\\HistogramController::findHistogram'], [], [['text', '/histogram']], [], []],
    'hello' => [[], ['_controller' => 'App\\Controller\\HelloWorldController::helloMessage'], [], [['text', '/hello-world']], [], []],
    'hello-view' => [[], ['_controller' => 'App\\Controller\\HelloWorldController::helloMessageView'], [], [['text', '/']], [], []],
    'dice' => [[], ['_controller' => 'App\\Controller\\DiceController::diceGame'], [], [['text', '/dice']], [], []],
    'game21' => [[], ['_controller' => 'App\\Controller\\Game21Controller::game21'], [], [['text', '/game21']], [], []],
    'game21post' => [[], ['_controller' => 'App\\Controller\\Game21Controller::game21post'], [], [['text', '/game21']], [], []],
    'bitcoin' => [[], ['_controller' => 'App\\Controller\\Game21Controller::bitcoin'], [], [['text', '/bitcoin']], [], []],
    'bitcoinpost' => [[], ['_controller' => 'App\\Controller\\Game21Controller::bitcoinpost'], [], [['text', '/bitcoin']], [], []],
    'play21' => [[], ['_controller' => 'App\\Controller\\Game21Controller::play21'], [], [['text', '/play21']], [], []],
    'play21post' => [[], ['_controller' => 'App\\Controller\\Game21Controller::play21post'], [], [['text', '/play21']], [], []],
];
