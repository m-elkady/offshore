<?php

namespace App\Controller\Admin;

use App\Controller\AdminController;


/**
 * EebdCertificates Controller
 *
 * @property \App\Model\Table\EebdCertificatesTable $EebdCertificates
 *
 * @method \App\Model\Entity\EebdCertificate[] paginate($object = null, array $settings = [])
 */
class EebdCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $eebdCertificates = $this->paginate($this->EebdCertificates);

        $this->set(compact('eebdCertificates'));
        $this->set('_serialize', ['eebdCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Eebd Certificate id.
     *
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eebdCertificate = $this->EebdCertificates->get($id, [
            'contain' => ['EebdCertificateItems'],
        ]);

        $this->set('eebdCertificate', $eebdCertificate);
        $this->set('_serialize', ['eebdCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eebdCertificate = $this->EebdCertificates->newEntity();
        if ($this->request->is('post')) {
            $eebdCertificate = $this->EebdCertificates->patchEntity($eebdCertificate, $this->request->getData()
                , ['associated' => ['EebdCertificateItems']]);
            if ($this->EebdCertificates->save($eebdCertificate)) {
                $this->Flash->success(__('The eebd certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The eebd certificate could not be saved. Please, try again.'));
        }
        $statuses      = $this->EebdCertificates->EebdCertificateItems->statuses;
        $this->set(compact('eebdCertificate','statuses'));
        $this->set('_serialize', ['eebdCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Eebd Certificate id.
     *
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eebdCertificate = $this->EebdCertificates->get($id, [
            'contain' => ['EebdCertificateItems'],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $eebdCertificate = $this->EebdCertificates->patchEntity($eebdCertificate, $this->request->getData()
                , ['associated' => ['EebdCertificateItems']]);

            if ($this->EebdCertificates->save($eebdCertificate)) {
                $this->Flash->success(__('The eebd certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The eebd certificate could not be saved. Please, try again.'));
        }
        $statuses      = $this->EebdCertificates->EebdCertificateItems->statuses;

        $this->set(compact('eebdCertificate','statuses'));
        $this->set('_serialize', ['eebdCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Eebd Certificate id.
     *
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $eebdCertificate = $this->EebdCertificates->get($id);
        if ($this->EebdCertificates->delete($eebdCertificate)) {
            $this->Flash->success(__('The eebd certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The eebd certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
