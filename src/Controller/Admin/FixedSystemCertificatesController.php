<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * FixedSystemCertificates Controller
 *
 * @property \App\Model\Table\FixedSystemCertificatesTable $FixedSystemCertificates
 *
 * @method \App\Model\Entity\FixedSystemCertificate[] paginate($object = null, array $settings = [])
 */
class FixedSystemCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fixedSystemCertificates = $this->paginate($this->FixedSystemCertificates);

        $this->set(compact('fixedSystemCertificates'));
        $this->set('_serialize', ['fixedSystemCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Fixed System Certificate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fixedSystemCertificate = $this->FixedSystemCertificates->get($id, [
            'contain' => []
        ]);

        $this->set('fixedSystemCertificate', $fixedSystemCertificate);
        $this->set('_serialize', ['fixedSystemCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fixedSystemCertificate = $this->FixedSystemCertificates->newEntity();
        if ($this->request->is('post')) {
            $fixedSystemCertificate = $this->FixedSystemCertificates->patchEntity($fixedSystemCertificate, $this->request->getData());
            if ($this->FixedSystemCertificates->save($fixedSystemCertificate)) {
                $this->Flash->success(__('The fixed system certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fixed system certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('fixedSystemCertificate'));
        $this->set('_serialize', ['fixedSystemCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fixed System Certificate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fixedSystemCertificate = $this->FixedSystemCertificates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fixedSystemCertificate = $this->FixedSystemCertificates->patchEntity($fixedSystemCertificate, $this->request->getData());
            if ($this->FixedSystemCertificates->save($fixedSystemCertificate)) {
                $this->Flash->success(__('The fixed system certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fixed system certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('fixedSystemCertificate'));
        $this->set('_serialize', ['fixedSystemCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Fixed System Certificate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $fixedSystemCertificate = $this->FixedSystemCertificates->get($id);
        if ($this->FixedSystemCertificates->delete($fixedSystemCertificate)) {
            $this->Flash->success(__('The fixed system certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The fixed system certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
