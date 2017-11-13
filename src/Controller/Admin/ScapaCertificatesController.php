<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * ScapaCertificates Controller
 *
 * @property \App\Model\Table\ScapaCertificatesTable $ScapaCertificates
 *
 * @method \App\Model\Entity\ScapaCertificate[] paginate($object = null, array $settings = [])
 */
class ScapaCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $scapaCertificates = $this->paginate($this->ScapaCertificates);

        $this->set(compact('scapaCertificates'));
        $this->set('_serialize', ['scapaCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Scapa Certificate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scapaCertificate = $this->ScapaCertificates->get($id, [
            'contain' => []
        ]);

        $this->set('scapaCertificate', $scapaCertificate);
        $this->set('_serialize', ['scapaCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scapaCertificate = $this->ScapaCertificates->newEntity();
        if ($this->request->is('post')) {
            $scapaCertificate = $this->ScapaCertificates->patchEntity($scapaCertificate, $this->request->getData());
            if ($this->ScapaCertificates->save($scapaCertificate)) {
                $this->Flash->success(__('The scapa certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scapa certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('scapaCertificate'));
        $this->set('_serialize', ['scapaCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Scapa Certificate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scapaCertificate = $this->ScapaCertificates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scapaCertificate = $this->ScapaCertificates->patchEntity($scapaCertificate, $this->request->getData());
            if ($this->ScapaCertificates->save($scapaCertificate)) {
                $this->Flash->success(__('The scapa certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scapa certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('scapaCertificate'));
        $this->set('_serialize', ['scapaCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Scapa Certificate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $scapaCertificate = $this->ScapaCertificates->get($id);
        if ($this->ScapaCertificates->delete($scapaCertificate)) {
            $this->Flash->success(__('The scapa certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The scapa certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
