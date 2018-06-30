<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * Vessels Controller
 *
 * @property \App\Model\Table\VesselsTable $Vessels
 *
 * @method \App\Model\Entity\Vessel[] paginate($object = null, array $settings = [])
 */
class VesselsController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'Clients']
        ];
        $vessels = $this->paginate($this->Vessels);

        $this->set(compact('vessels'));
        $this->set('_serialize', ['vessels']);
    }

    /**
     * View method
     *
     * @param string|null $id Vessel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vessel = $this->Vessels->get($id, [
            'contain' => ['Countries', 'Clients', 'FireExtinguisherCertificates']
        ]);

        $this->set('vessel', $vessel);
        $this->set('_serialize', ['vessel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vessel = $this->Vessels->newEntity();
        if ($this->request->is('post')) {
            $vessel = $this->Vessels->patchEntity($vessel, $this->request->getData());
            if ($this->Vessels->save($vessel)) {
                $this->Flash->success(__('The vessel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vessel could not be saved. Please, try again.'));
        }
        $countries = $this->Vessels->Countries->find('list', ['limit' => 200,'ValueField'=>'name']);
        $clients = $this->Vessels->Clients->find('list', ['limit' => 200]);
        $this->set(compact('vessel', 'countries', 'clients'));
        $this->set('_serialize', ['vessel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vessel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vessel = $this->Vessels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vessel = $this->Vessels->patchEntity($vessel, $this->request->getData());
            if ($this->Vessels->save($vessel)) {
                $this->Flash->success(__('The vessel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vessel could not be saved. Please, try again.'));
        }
        $countries = $this->Vessels->Countries->find('list', ['limit' => 200]);
        $clients = $this->Vessels->Clients->find('list', ['limit' => 200]);
        $this->set(compact('vessel', 'countries', 'clients'));
        $this->set('_serialize', ['vessel']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Vessel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      // $this->request->allowMethod(['post', 'delete']);
        $vessel = $this->Vessels->get($id);
        if ($this->Vessels->delete($vessel)) {
            $this->Flash->success(__('The vessel has been deleted.'));
        } else {
            $this->Flash->error(__('The vessel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
