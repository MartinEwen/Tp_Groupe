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
        '/categories' => [[['_route' => 'categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contents' => [[['_route' => 'contents_index', '_controller' => 'App\\Controller\\ContentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contents/new' => [[['_route' => 'contents_new', '_controller' => 'App\\Controller\\ContentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/images' => [[['_route' => 'images_index', '_controller' => 'App\\Controller\\ImagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/images/new' => [[['_route' => 'images_new', '_controller' => 'App\\Controller\\ImagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/pages' => [[['_route' => 'pages_index', '_controller' => 'App\\Controller\\PagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pages/new' => [[['_route' => 'pages_new', '_controller' => 'App\\Controller\\PagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/article/([^/]++)(*:186)'
                .'|/c(?'
                    .'|ategories/([^/]++)(?'
                        .'|(*:220)'
                        .'|/edit(*:233)'
                        .'|(*:241)'
                    .')'
                    .'|ontents/([^/]++)(?'
                        .'|(*:269)'
                        .'|/edit(*:282)'
                        .'|(*:290)'
                    .')'
                .')'
                .'|/images/([^/]++)(?'
                    .'|(*:319)'
                    .'|/edit(*:332)'
                    .'|(*:340)'
                .')'
                .'|/pages/([^/]++)(?'
                    .'|(*:367)'
                    .'|/edit(*:380)'
                    .'|(*:388)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        233 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        269 => [[['_route' => 'contents_show', '_controller' => 'App\\Controller\\ContentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'contents_edit', '_controller' => 'App\\Controller\\ContentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'contents_delete', '_controller' => 'App\\Controller\\ContentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        319 => [[['_route' => 'images_show', '_controller' => 'App\\Controller\\ImagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'images_edit', '_controller' => 'App\\Controller\\ImagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        340 => [[['_route' => 'images_delete', '_controller' => 'App\\Controller\\ImagesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        367 => [[['_route' => 'pages_show', '_controller' => 'App\\Controller\\PagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        380 => [[['_route' => 'pages_edit', '_controller' => 'App\\Controller\\PagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        388 => [
            [['_route' => 'pages_delete', '_controller' => 'App\\Controller\\PagesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
