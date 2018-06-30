<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.8
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
// You can remove this if you are confident that your PHP version is sufficient.
if (version_compare(PHP_VERSION, '5.5.9') < 0) {
    trigger_error('You PHP version must be equal or higher than 5.5.9 to use CakePHP.', E_USER_ERROR);
}

// You can remove this if you are confident you have intl installed.
if (!extension_loaded('intl')) {
    trigger_error('You must enable the intl extension to use CakePHP.', E_USER_ERROR);
}

// You can remove this if you are confident you have mbstring installed.
if (!extension_loaded('mbstring')) {
    trigger_error('You must enable the mbstring extension to use CakePHP.', E_USER_ERROR);
}
ini_set('memory_limit', '265M');
/**
 * Configure paths required to find CakePHP + general filepath
 * constants
 */
require __DIR__ . '/paths.php';

// Use composer to load the autoloader.
require ROOT . DS . 'vendor' . DS . 'autoload.php';

/**
 * Bootstrap CakePHP.
 *
 * Does the various bits of setup that CakePHP needs to do.
 * This includes:
 *
 * - Registering the CakePHP autoloader.
 * - Setting the default application paths.
 */
require CORE_PATH . 'config' . DS . 'bootstrap.php';

use Cake\Cache\Cache;
use Cake\Console\ConsoleErrorHandler;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;
use Cake\Core\Plugin;
use Cake\Database\Type;
use Cake\Datasource\ConnectionManager;
use Cake\Error\ErrorHandler;
use Cake\Log\Log;
use Cake\Mailer\Email;
use Cake\Network\Request;
use Cake\Routing\DispatcherFactory;
use Cake\Utility\Security;

/**
 * Read configuration file and inject configuration into various
 * CakePHP classes.
 *
 * By default there is only one configuration file. It is often a good
 * idea to create multiple configuration files, and separate the configuration
 * that changes from configuration that does not. This makes deployment simpler.
 */
try {
    Configure::config('default', new PhpConfig());
    Configure::load('app', 'default', false);
//    Configure::load('buttons', 'default');
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}

// Load an environment local configuration file.
// You can use a file like app_local.php to provide local overrides to your
// shared configuration.
//Configure::load('app_local', 'default');
// When debug = false the metadata cache should last
// for a very very long time, as we don't want
// to refresh the cache while users are doing requests.
if (!Configure::read('debug')) {
    Configure::write('Cache._cake_model_.duration', '+1 years');
    Configure::write('Cache._cake_core_.duration', '+1 years');
}

/**
 * Set server timezone to UTC. You can change it to another timezone of your
 * choice but using UTC makes time calculations / conversions easier.
 */
date_default_timezone_set('Africa/Cairo');

/**
 * Configure the mbstring extension to use the correct encoding.
 */
mb_internal_encoding(Configure::read('App.encoding'));

/**
 * Set the default locale. This controls how dates, number and currency is
 * formatted and sets the default language to use for translations.
 */
ini_set('intl.default_locale', Configure::read('App.defaultLocale'));

/**
 * Register application error and exception handlers.
 */
$isCli = PHP_SAPI === 'cli';
if ($isCli) {
    (new ConsoleErrorHandler(Configure::read('Error')))->register();
} else {
    (new ErrorHandler(Configure::read('Error')))->register();
}

// Include the CLI bootstrap overrides.
if ($isCli) {
    require __DIR__ . '/bootstrap_cli.php';
}

/**
 * Set the full base URL.
 * This URL is used as the base of all absolute links.
 *
 * If you define fullBaseUrl in your config file you can remove this.
 */
if (!Configure::read('App.fullBaseUrl')) {
    $s = null;
    if (env('HTTPS')) {
        $s = 's';
    }

    $httpHost = env('HTTP_HOST');
    if (isset($httpHost)) {
        Configure::write('App.fullBaseUrl', 'http' . $s . '://' . $httpHost);
    }
    unset($httpHost, $s);
}

Cache::setConfig(Configure::consume('Cache'));
ConnectionManager::setConfig(Configure::consume('Datasources'));
Email::setConfigTransport(Configure::consume('EmailTransport'));
Email::setConfig(Configure::consume('Email'));
Log::setConfig(Configure::consume('Log'));
Security::setSalt(Configure::consume('Security.salt'));

/**
 * The default crypto extension in 3.0 is OpenSSL.
 * If you are migrating from 2.x uncomment this code to
 * use a more compatible Mcrypt based implementation
 */
//Security::engine(new \Cake\Utility\Crypto\Mcrypt());

/**
 * Setup detectors for mobile and tablet.
 */
Request::addDetector('mobile', function ($request) {
    $detector = new \Detection\MobileDetect();

    return $detector->isMobile();
});
Request::addDetector('tablet', function ($request) {
    $detector = new \Detection\MobileDetect();

    return $detector->isTablet();
});

/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize
 * table, model, controller names or whatever other string is passed to the
 * inflection functions.
 *
 * Inflector::rules('plural', ['/^(inflect)or$/i' => '\1ables']);
 * Inflector::rules('irregular', ['red' => 'redlings']);
 * Inflector::rules('uninflected', ['dontinflectme']);
 * Inflector::rules('transliteration', ['/å/' => 'aa']);
 */
/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on Plugin to use more
 * advanced ways of loading plugins
 *
 * Plugin::loadAll(); // Loads all plugins at once
 * Plugin::load('Migrations'); //Loads a single plugin named Migrations
 *
 */
Plugin::load('Migrations');


// Only try to load DebugKit in development mode
// Debug Kit should not be installed on a production system


/**
 * Connect middleware/dispatcher filters.
 */
DispatcherFactory::add('Asset');
DispatcherFactory::add('Routing');
DispatcherFactory::add('ControllerFactory');

/**
 * Enable immutable time objects in the ORM.
 *
 * You can enable default locale format parsing by adding calls
 * to `useLocaleParser()`. This enables the automatic conversion of
 * locale specific date formats. For details see
 *
 * @link http://book.cakephp.org/3.0/en/core-libraries/internationalization-and-localization.html#parsing-localized-datetime-data
 */
Type::build('time')
    ->useImmutable();
Type::build('date')
    ->useImmutable();
Type::build('datetime')
    ->useImmutable();

if (isset($_GET['debug'])) {
    $envFilePath = ROOT . DS . '.env';
    if (file_exists($envFilePath)) {
        $env = env('DEBUG');
        if ($env != $_GET['debug']) {
            file_put_contents($envFilePath, preg_replace(
                "/DEBUG\=.*/", 'DEBUG="' . $_GET['debug'].'"', file_get_contents($envFilePath)
            ));
            $currentPath = (new Request())->getUri()->getPath();
            return (new \Cake\Network\Response())->withLocation($currentPath)->getHeaderLine('Location');
        }

    }
}

if (isset($_SESSION['debug'])) {
    Configure::write('debug', $_SESSION['debug']);
}


Plugin::load('DebugKit', ['bootstrap' => true, 'routes' => true]);

define('PHONE_LENGHT', 11);

function resizeOnFly($image, $width, $height, $crop, $path)
{
    $cash_dir = WWW_ROOT . 'uploads' . DS . 'cache';
    if (!file_exists($cash_dir)) {
        mkdir($cash_dir, 0775);
    }
    $cash_image = $cash_dir . DS . "{$width}x{$height}_$image";
    if (file_exists($cash_image)) {
        $image = new Eventviva\ImageResize($cash_image);

        return 'data:' . image_type_to_mime_type($image->source_type) . ';base64,' . base64_encode($image->getImageAsString());
    } else {
        $image_path = WWW_ROOT . str_replace('/', DS, $path) . DS . $image;
        if (!file_exists($image_path)) {
            return false;
        }
        $image = new Eventviva\ImageResize($image_path);

        if (!$crop) {
            if ($width == 0) {
                $image = $image->resizeToHeight($height);
            } elseif ($height == 0) {
                $image = $image->resizeToWidth($width);
            } else {
                $image = $image->resizeToBestFit($width, $height);
            }
        } elseif ($crop && $height && $width) {
            $image = $image->crop($width, $height, true);
        }
        $image->save($cash_image);

        return 'data:' . image_type_to_mime_type($image->source_type) . ';base64,' . base64_encode($image->getImageAsString());
    }
}

function hasCapablity($controller, $action, $user)
{
//    debug($capablity);
    if (!empty($user)) {
        foreach ($user['group']['permissions'] as $perm) {
            $perms     = explode('-', $perm['perm_key']);
            $capablity = $controller . '-' . $action;
            if (($perm['perm_key'] == $capablity) || (($perms[0] == $controller) &&
                                                      ($perms[1] == 'manage' && in_array($action, ['add', 'edit', 'delete', 'index']))
                ) ||
                (in_array($action, ['dashboard', 'logout', 'login']))
            ) {
//            echo "tri";
                return true;
            }
        }

        return false;
    }

    return true;
}

function parseVideoUrl($url, $return = 'embed', $width = '', $height = '', $rel = 0)
{

    if (strstr($url, 'vimeo')) {
        preg_match('/[0-9]+/', $url, $match);
        $video_id = $match[0];
        $hash     = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$video_id.php"));
//        debug($hash);
        if ($return == 'thumb') {
            return $hash[0]['thumbnail_small'];
        } elseif ($return == 'embed') {
            return '<iframe width="' . $width . '" height="' . $height . '" src="https://player.vimeo.com/video/' . $video_id . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        }
        if ($return == 'iframe_url') {
            return "https://player.vimeo.com/video/{$video_id}";
        } else {
            return $video_id;
        }
    } else {

        $urls = parse_url($url);
//        debug($urls);
//url is http://youtu.be/xxxx
        if ($urls['host'] == 'youtu.be') {
            $id = ltrim($urls['path'], '/');
        } //url is http://www.youtube.com/embed/xxxx
        else if (strpos($urls['path'], 'embed') == 1) {
            $paths = explode('/', $urls['path']);
            $id    = end($paths);
        } //url is xxxx only
        else if (strpos($url, '/') === false) {
            $id = $url;
        }

//http://www.youtube.com/watch?feature=player_embedded&v=m-t4pcO99gI
//url is http://www.youtube.com/watch?v=xxxx
        else {
            parse_str($urls['query']);
            $id = $v;
            if (!empty($feature)) {

                $id = end(explode('v=', $urls['query']));
                if (strpos($id, '&') !== false) {
                    $id = substr($id, 0, strpos($id, '&'));
                }
            }
        }
//return embed iframe
        if ($return == 'embed') {
            return '<iframe width="' . ($width ? $width : 560) . '" height="' . ($height ? $height : 349) . '" src="https://www.youtube.com/embed/' . $id . '?rel=' . $rel . '&wmode=opaque" frameborder="0" allowfullscreen></iframe>';
        }

        if ($return == 'iframe_url') {
            return "https://www.youtube.com/embed/{$id}?wmode=opaque";
        } //return normal thumb
        else if ($return == 'thumb') {
            return 'https://i1.ytimg.com/vi/' . $id . '/default.jpg';
        } //return hqthumb
        else if ($return == 'hqthumb') {
            return 'https://i1.ytimg.com/vi/' . $id . '/hqdefault.jpg';
        } // else return id
        else {
//debug($id);exit;
            return $id;
        }
    }
}

//Plugin::load('ADmad/JwtAuth');


Plugin::load('Migrations');
