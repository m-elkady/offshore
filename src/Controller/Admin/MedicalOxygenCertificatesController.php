<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * MedicalOxygenCertificates Controller
 *
 * @property \App\Model\Table\MedicalOxygenCertificatesTable $MedicalOxygenCertificates
 *
 * @method \App\Model\Entity\MedicalOxygenCertificate[] paginate($object = null, array $settings = [])
 */
class MedicalOxygenCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $medicalOxygenCertificates = $this->paginate($this->MedicalOxygenCertificates);

        $this->set(compact('medicalOxygenCertificates'));
        $this->set('_serialize', ['medicalOxygenCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Medical Oxygen Certificate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicalOxygenCertificate = $this->MedicalOxygenCertificates->get($id, [
            'contain' => []
        ]);

        $this->set('medicalOxygenCertificate', $medicalOxygenCertificate);
        $this->set('_serialize', ['medicalOxygenCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicalOxygenCertificate = $this->MedicalOxygenCertificates->newEntity();
        if ($this->request->is('post')) {
            $medicalOxygenCertificate = $this->MedicalOxygenCertificates->patchEntity($medicalOxygenCertificate, $this->request->getData());
            if ($this->MedicalOxygenCertificates->save($medicalOxygenCertificate)) {
                $this->Flash->success(__('The medical oxygen certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medical oxygen certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('medicalOxygenCertificate'));
        $this->set('_serialize', ['medicalOxygenCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medical Oxygen Certificate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicalOxygenCertificate = $this->MedicalOxygenCertificates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicalOxygenCertificate = $this->MedicalOxygenCertificates->patchEntity($medicalOxygenCertificate, $this->request->getData());
            if ($this->MedicalOxygenCertificates->save($medicalOxygenCertificate)) {
                $this->Flash->success(__('The medical oxygen certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medical oxygen certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('medicalOxygenCertificate'));
        $this->set('_serialize', ['medicalOxygenCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Medical Oxygen Certificate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $medicalOxygenCertificate = $this->MedicalOxygenCertificates->get($id);
        if ($this->MedicalOxygenCertificates->delete($medicalOxygenCertificate)) {
            $this->Flash->success(__('The medical oxygen certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The medical oxygen certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
