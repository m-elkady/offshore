<?php

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Firebase\JWT\JWT;
use Cake\Mailer\Email;

/**
 * Drivers Controller
 *
 * @property \App\Model\Table\DriversTable $Drivers
 */
class DriversController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function initialize() {
        parent::initialize();
        parent::authInitialize('Drivers');
        $this->Auth->allow(['register', 'login', 'forget']);
    }

    /**
     * Login method
     *
     * @return \Cake\Network\Response|void
     */
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if (!$user) {
                throw new UnauthorizedException('Invalid username or password');
            }
            $this->set([
                'success' => true,
                'data' => [
                    'id' => $user['id'],
                    'token' => JWT::encode([
                        'sub' => $user['id'],
                        'exp' => time() + 604800
                            ], Security::salt())
                ],
                '_serialize' => ['success', 'data']
            ]);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function register() {
        $driver = $this->Drivers->newEntity();
        $errors = '';
//        debug(Security::salt());exit;
        if ($this->request->is('post')) {
            $driver = $this->Drivers->patchEntity($driver, $this->request->data);
            $driver->national_id_copy = $driver->national_id;
            $driver->car_license_copy = $driver->car_license;
            $driver->driver_license_copy = $driver->driver_license;
            if ($this->Drivers->save($driver)) {
                $success = true;
                $data['id'] = $driver->id;
                $data['token'] = JWT::encode(
                                [
                            'sub' => $driver->id,
                            'exp' => time() + 604800
                                ], Security::salt());
            } else {
                $success = false;

                $this->set('errors', $driver->errors());
            }
        }
        $this->set(compact('driver', 'success', 'data'));
        $this->set('_serialize', ['success', 'data', 'errors']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Driver id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function profile() {
        $user = $this->Auth->user();
        $driver = $this->Drivers->get($user['id'], [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $driver = $this->Drivers->patchEntity($driver, $this->request->data);
            $hiddenFields = ['national_id', 'car_license', 'driver_license'];
            foreach ($hiddenFields as $field) {
                if (empty($driver->getOriginal($field)) && !empty($driver->{$field})) {
                    $driver->{$field . '_copy'} = $driver->$field;
                }
            }
            if ($this->Drivers->save($driver)) {
                $success = true;
                $message = __('Your profile has been saved.');
            } else {
                $success = false;
                $this->set('errors', $driver->errors());
                $message = __('Your profile could not be saved. Please, try again.');
            }
        }

        $this->set(compact('driver', 'message', 'success'));
        $this->set('_serialize', ['driver', 'message', 'success']);
//        debug($user);exit;
        $this->render('add');
    }

    public function forget() {
        if ($this->request->is('post')) {
            $driver = $this->Drivers->find()->where(['Drivers.email' => $this->request->getData('email')])->first();
            if ($driver) {
                $email = new Email('default');
                $email->setTemplate('forget')
                        ->setEmailFormat('html')
                        ->setTo($driver->email)
                        ->setFrom($this->config['email'])
                        ->setSubject("{$this->config['site_name_' . $this->lang]}: " . __('Reset your password'))
                        ->setViewVars(['data' => $driver, 'lang' => $this->lang, 'config' => $this->config]);

                if ($email->send()) {
                    $success = true;
                    $message = __('A message has been sent with verification code');
                } else {
                    $success = false;
                    $message = __('Could not send message');
                }
            } else {
                $success = false;
                $message = __('Could not reset your password');
            }
        }
        $this->set(compact('driver', 'message', 'success'));
        $this->set('_serialize', ['driver', 'message', 'success']);
    }

    /**
     * View method
     *
     * @param string|null $id Driver id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view() {
        $user = $this->Auth->user();
        $driver = $this->Drivers->get($user['id'], [
            'contain' => []
        ]);

        $this->set('driver', $driver);
        $this->set('_serialize', ['driver']);
    }

    public function forgot() {
        
    }

}
