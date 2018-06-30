<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * LifeRaftCertificates Controller
 *
 * @property \App\Model\Table\LifeRaftCertificatesTable $LifeRaftCertificates
 *
 * @method \App\Model\Entity\LifeRaftCertificate[] paginate($object = null, array $settings = [])
 */
class LifeRaftCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $lifeRaftCertificates = $this->paginate($this->LifeRaftCertificates);

        $this->set(compact('lifeRaftCertificates'));
        $this->set('_serialize', ['lifeRaftCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Life Raft Certificate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lifeRaftCertificate = $this->LifeRaftCertificates->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('lifeRaftCertificate', $lifeRaftCertificate);
        $this->set('_serialize', ['lifeRaftCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lifeRaftCertificate = $this->LifeRaftCertificates->newEntity();
        if ($this->request->is('post')) {
            $lifeRaftCertificate = $this->LifeRaftCertificates->patchEntity($lifeRaftCertificate, $this->request->getData());
            if ($this->LifeRaftCertificates->save($lifeRaftCertificate)) {
                $this->Flash->success(__('The life raft certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The life raft certificate could not be saved. Please, try again.'));
        }
        $clients = $this->LifeRaftCertificates->Clients->find('list', ['limit' => 200]);
        $this->set(compact('lifeRaftCertificate', 'clients'));
        $this->set('_serialize', ['lifeRaftCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Life Raft Certificate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lifeRaftCertificate = $this->LifeRaftCertificates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lifeRaftCertificate = $this->LifeRaftCertificates->patchEntity($lifeRaftCertificate, $this->request->getData());
            if ($this->LifeRaftCertificates->save($lifeRaftCertificate)) {
                $this->Flash->success(__('The life raft certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The life raft certificate could not be saved. Please, try again.'));
        }
        $clients = $this->LifeRaftCertificates->Clients->find('list', ['limit' => 200]);
        $this->set(compact('lifeRaftCertificate', 'clients'));
        $this->set('_serialize', ['lifeRaftCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Life Raft Certificate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      // $this->request->allowMethod(['post', 'delete']);
        $lifeRaftCertificate = $this->LifeRaftCertificates->get($id);
        if ($this->LifeRaftCertificates->delete($lifeRaftCertificate)) {
            $this->Flash->success(__('The life raft certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The life raft certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
