<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Core\Configure;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('DashedRoute');
Router::scope('/admin', ['prefix' => 'admin'], function (RouteBuilder $routes) {
    $routes->fallbacks('DashedRoute');
});

Router::scope('/api', ['prefix' => 'api'], function (RouteBuilder $routes) {
    $routes->setExtensions(['json']);
    $routes->resources('drivers');
    $routes->connect('/:controller/', []);
    $routes->fallbacks('DashedRoute');
});



Router::scope('/', function (RouteBuilder $routes) {

    $routes->setExtensions(['json']);
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/:language', array('controller' => 'pages', 'action' => 'home'), ['language' => join('|', array_keys(Configure::read('Langs')))]);
    $routes->connect('/:language/content/*', array('controller' => 'pages', 'action' => 'view'), ['language' => join('|', array_keys(Configure::read('Langs')))]);
    $routes->connect('/:language/:controller', array(), ['language' => join('|', array_keys(Configure::read('Langs')))]);
    $routes->connect('/:language/:controller/:action/*', array(), ['language' => join('|', array_keys(Configure::read('Langs')))]);

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/admin', ['controller' => 'users', 'action' => 'login', 'prefix' => 'admin']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
//    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - 
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('DashedRoute');
//    $routes->fallbacks('SlugRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
