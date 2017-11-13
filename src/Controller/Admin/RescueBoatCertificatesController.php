<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * RescueBoatCertificates Controller
 *
 * @property \App\Model\Table\RescueBoatCertificatesTable $RescueBoatCertificates
 *
 * @method \App\Model\Entity\RescueBoatCertificate[] paginate($object = null, array $settings = [])
 */
class RescueBoatCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rescueBoatCertificates = $this->paginate($this->RescueBoatCertificates);

        $this->set(compact('rescueBoatCertificates'));
        $this->set('_serialize', ['rescueBoatCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Rescue Boat Certificate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rescueBoatCertificate = $this->RescueBoatCertificates->get($id, [
            'contain' => []
        ]);

        $this->set('rescueBoatCertificate', $rescueBoatCertificate);
        $this->set('_serialize', ['rescueBoatCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rescueBoatCertificate = $this->RescueBoatCertificates->newEntity();
        if ($this->request->is('post')) {
            $rescueBoatCertificate = $this->RescueBoatCertificates->patchEntity($rescueBoatCertificate, $this->request->getData());
            if ($this->RescueBoatCertificates->save($rescueBoatCertificate)) {
                $this->Flash->success(__('The rescue boat certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rescue boat certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('rescueBoatCertificate'));
        $this->set('_serialize', ['rescueBoatCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rescue Boat Certificate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rescueBoatCertificate = $this->RescueBoatCertificates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rescueBoatCertificate = $this->RescueBoatCertificates->patchEntity($rescueBoatCertificate, $this->request->getData());
            if ($this->RescueBoatCertificates->save($rescueBoatCertificate)) {
                $this->Flash->success(__('The rescue boat certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rescue boat certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('rescueBoatCertificate'));
        $this->set('_serialize', ['rescueBoatCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Rescue Boat Certificate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $rescueBoatCertificate = $this->RescueBoatCertificates->get($id);
        if ($this->RescueBoatCertificates->delete($rescueBoatCertificate)) {
            $this->Flash->success(__('The rescue boat certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The rescue boat certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
