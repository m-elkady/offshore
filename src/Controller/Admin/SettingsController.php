<?php

namespace App\Controller\Admin;

use App\Controller\AdminController;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Setting;

/**
 * Settings Controller
 *
 * @property \App\Model\Table\SettingsTable $Settings
 */
class SettingsController extends AdminController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $settings = $this->paginate($this->Settings);

        $this->set(compact('settings'));
        $this->set('_serialize', ['settings']);
    }

    /**
     * View method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $setting = $this->Settings->get($id, [
            'contain' => []
        ]);

        $this->set('setting', $setting);
        $this->set('_serialize', ['setting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $setting = $this->Settings->newEntity();
        if ($this->request->is('post')) {
            $setting = $this->Settings->patchEntity($setting, $this->request->data());
            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('setting'));
        $this->set('_serialize', ['setting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $setting = $this->Settings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setting = $this->Settings->patchEntity($setting, $this->request->data);
            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('setting'));
        $this->set('_serialize', ['setting']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $setting = $this->Settings->get($id);
        if ($this->Settings->delete($setting)) {
            $this->Flash->success(__('The setting has been deleted.'));
        } else {
            $this->Flash->error(__('The setting could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function editConfigs($group) {
        $settings = TableRegistry::get('Settings');
        $errors = [];
        $vars = $this->Settings->vars[$group];

        $find_keys = $this->Settings->find('all', ['conditions' => ['Settings.setting_key IN' => array_keys($vars['fields'])]]);
        if (!empty($find_keys)) {
            foreach ($find_keys as $setting) {
                $vars['fields'][$setting->setting_key]['id'] = $setting->id;
                $vars['fields'][$setting->setting_key]['value'] = $setting->setting_value;
            }
        }

        if ($this->request->is('post')) {
            foreach ($this->request->data as $item) {
                if (!empty($vars['fields'][$item['setting_key']]['behavior'])) {
                    $behavior = $vars['fields'][$item['setting_key']]['behavior'];
                    $this->Settings->addBehavior($behavior['name'], ['setting_value' => $behavior['settings']]);
                }

                $validator = isset($vars['validator']) ? $vars['validator'] : 'default';
                if (isset($item['id'])) {
                    $setting = $settings->get($item['id']);
                    $setting = $settings->patchEntity($setting, $item, ['validate' => $validator]);
                } else {
                    $setting = $settings->newEntity($item, ['validate' => $validator]);
                }
                $vars['fields'][$item['setting_key']]['value'] = $item['setting_value'];
                if (!$setting->errors()) {
                    $settings->save($setting);
                } else {

                    foreach ($setting->errors('setting_value') as $key => $error) {
                        $errors[$setting->setting_key] = __($error);
                    }
                   
                }
            }
            if (empty($errors)) {
                $this->Flash->success(__('The setting has been saved.'));
                return $this->redirect($this->referer());
            }

//            $this->Flash->error(implode('<br />', $errors));
        }

        $crumbs['action'] = $vars['title'];
        $this->set('setting', new Setting());
        $this->set('vars', $vars);
        $this->set('crumbs', $crumbs);
        $this->set('errors', $errors);
    }

}
