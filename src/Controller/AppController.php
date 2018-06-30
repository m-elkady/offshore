<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;
use Cake\Utility\Hash;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $config = [];
    public $lang = '';

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        Configure::load('buttons', 'default');
        $this->load_config();
        $this->_setLanguage('en_US');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function load_config() {
        $this->loadModel('Settings');
        $configs = $this->Settings->find('all');
        $this->config = [];

        foreach ($configs as $config) {
            $vars = Hash::extract($this->Settings->vars, '{s}.fields.' . $config->setting_key);
            if (isset($vars[0]['behavior']) && !empty($config->setting_value)) {
                $this->config[$config->setting_key] = Router::url('/' . $vars[0]['behavior']['settings']['folder'] . '/' . $config->setting_value);
            } else {
                $this->config[$config->setting_key] = $config->setting_value;
            }
        }
//        exit;
        $this->set('config', $this->config);
    }

    function _setLanguage($lang = false) {
        $session = $this->request->getSession();
        $language = $this->request->getParam('language');

        $locale_languages = ['en' => 'en_US', 'ar' => 'ar_AR'];

        if (!$lang) {
//            if (isset($params['language'])) {
//                $lang = $locale_languages[$params['language']];
//            } elseif ($session->check('Config.language')) {
//                $lang = $locale_languages[$session->read('Config.language')];
//            } else {
                $lang = 'en_US';
//            }
        }


        I18n::setLocale($lang);
        $this->set('locale', $lang);

        if ($lang == 'en_US') {
            $lang = 'en';
        } else {
            $lang = 'ar';
        }

        $session->write('Config.language', $lang);
        Configure::write('language', $lang);

        $this->lang = $lang;
        $this->set('lang', $lang);

        return $lang;
    }

    function changeLang($lang) {
        $previous_url = $this->referer('/', true);
        if (preg_match('/\/(en|ar)\/?/', $previous_url)) {
            $langUrl = preg_replace('/\/(en|ar)\/?/', '/' . $lang . '/', $previous_url);
        } else {
            $langUrl = '/' . $lang . $previous_url;
        }
        $this->redirect($langUrl);
    }

    protected function __change_title() {

        $titleArr = array();
        $titleArr[] = $this->config['site_name_' . $this->lang];
        if (!empty($this->pageTitle)) {
            $titleArr[] = $this->pageTitle;
        } else {
            $titleArr[] = __(Inflector::humanize(Inflector::underscore($this->request->getParam('controller'))));
            if ($this->request->getParam('action') != 'index') {
                $titleArr[] = __(Inflector::camelize($this->request->getParam('action')));
            }
        }

        $this->pageTitle = implode(' - ', $titleArr);
        $this->set('title_for_layout', $this->pageTitle);
    }

}
