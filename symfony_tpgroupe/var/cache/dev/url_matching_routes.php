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
        '/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, true, false, null]],
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
                .'|/c(?'
                    .'|ategories/([^/]++)(?'
                        .'|(*:195)'
                        .'|/edit(*:208)'
                        .'|(*:216)'
                    .')'
                    .'|ontents/([^/]++)(?'
                        .'|(*:244)'
                        .'|/edit(*:257)'
                        .'|(*:265)'
                    .')'
                .')'
                .'|/images/([^/]++)(?'
                    .'|(*:294)'
                    .'|/edit(*:307)'
                    .'|(*:315)'
                .')'
                .'|/pages/([^/]++)(?'
                    .'|(*:342)'
                    .'|/edit(*:355)'
                    .'|(*:363)'
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
        195 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'contents_show', '_controller' => 'App\\Controller\\ContentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'contents_edit', '_controller' => 'App\\Controller\\ContentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [[['_route' => 'contents_delete', '_controller' => 'App\\Controller\\ContentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'images_show', '_controller' => 'App\\Controller\\ImagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'images_edit', '_controller' => 'App\\Controller\\ImagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [[['_route' => 'images_delete', '_controller' => 'App\\Controller\\ImagesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        342 => [[['_route' => 'pages_show', '_controller' => 'App\\Controller\\PagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'pages_edit', '_controller' => 'App\\Controller\\PagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [
            [['_route' => 'pages_delete', '_controller' => 'App\\Controller\\PagesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
