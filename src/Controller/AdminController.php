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
use App\Controller\AppController;
use Cake\Controller\Component\AuthComponent;
use Cake\Utility\Inflector;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AdminController extends AppController
{

    public $config     = [];
    public $loggedUser = [];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth', [
            'loginAction'   => [
                'controller' => 'Users',
                'action'     => 'login',
                'prefix'     => 'admin',
            ],
            'loginRedirect' => [
                'controller' => 'pages',
                'action'     => 'dashboard',
                'prefix'     => 'admin',
            ],
            'authError'     => __('Did you really think you are allowed to see that?'),
            'authenticate'  => [
                'Form' => [
                    'fields' => [],
                ],
            ],
            'storage'       => 'Session',
        ]);
        $this->loadComponent('Paginator');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
    }

    function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $lang = 'en_US';
        $this->_setLanguage($lang);
        $this->viewBuilder()->setLayout('admin');
        $this->__change_title();
        if ($this->Auth->user()) {
            $this->set('user', $this->Auth->user());
            $this->loggedUser = $this->Auth->user();
        }
    }

    /**
     * @return void
     * @author Mohammed Elkady <m.elkady365@gmail.com>
     */
    public function doOperation(): void
    {
        $model           = $this->modelClass;
        $humanPluralName = Inflector::pluralize(Inflector::humanize(Inflector::underscore($model)));
        $ids             = $this->request->getData('chk');
        $operation       = $this->request->getData('operation');;
        if ($operation == 'delete') {
            if ($this->{$model}->deleteAll(["{$model}.id IN" => $ids])) {
                $this->Flash->success(__("{$humanPluralName} deleted successfully"));
            } else {
                $this->Flash->error(__("{$humanPluralName} can not be deleted"));
            }
        }
        $this->redirect(['action' => 'index']);
    }

}
