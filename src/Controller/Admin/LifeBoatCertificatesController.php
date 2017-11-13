<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * LifeBoatCertificates Controller
 *
 * @property \App\Model\Table\LifeBoatCertificatesTable $LifeBoatCertificates
 *
 * @method \App\Model\Entity\LifeBoatCertificate[] paginate($object = null, array $settings = [])
 */
class LifeBoatCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $lifeBoatCertificates = $this->paginate($this->LifeBoatCertificates);

        $this->set(compact('lifeBoatCertificates'));
        $this->set('_serialize', ['lifeBoatCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Life Boat Certificate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lifeBoatCertificate = $this->LifeBoatCertificates->get($id, [
            'contain' => []
        ]);

        $this->set('lifeBoatCertificate', $lifeBoatCertificate);
        $this->set('_serialize', ['lifeBoatCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lifeBoatCertificate = $this->LifeBoatCertificates->newEntity();
        if ($this->request->is('post')) {
            $lifeBoatCertificate = $this->LifeBoatCertificates->patchEntity($lifeBoatCertificate, $this->request->getData());
            if ($this->LifeBoatCertificates->save($lifeBoatCertificate)) {
                $this->Flash->success(__('The life boat certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The life boat certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('lifeBoatCertificate'));
        $this->set('_serialize', ['lifeBoatCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Life Boat Certificate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lifeBoatCertificate = $this->LifeBoatCertificates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lifeBoatCertificate = $this->LifeBoatCertificates->patchEntity($lifeBoatCertificate, $this->request->getData());
            if ($this->LifeBoatCertificates->save($lifeBoatCertificate)) {
                $this->Flash->success(__('The life boat certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The life boat certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('lifeBoatCertificate'));
        $this->set('_serialize', ['lifeBoatCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Life Boat Certificate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $lifeBoatCertificate = $this->LifeBoatCertificates->get($id);
        if ($this->LifeBoatCertificates->delete($lifeBoatCertificate)) {
            $this->Flash->success(__('The life boat certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The life boat certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
