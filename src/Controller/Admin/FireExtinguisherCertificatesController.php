<?php

namespace App\Controller\Admin;

use App\Controller\AdminController;
use App\Helper\CertificateHelper;

/**
 * FireExtinguisherCertificates Controller
 *
 * @property \App\Model\Table\FireExtinguisherCertificatesTable $FireExtinguisherCertificates
 *
 * @method \App\Model\Entity\FireExtinguisherCertificate[] paginate($object = null, array $settings = [])
 */
class FireExtinguisherCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $conditions = [];
        if ($this->request->getQuery('vessel_id')) {
            $conditions['vessel_id'] = $this->request->getQuery('vessel_id');
        }

        if ($this->request->getQuery('certificate_number')) {
            $conditions['certificate_number LIKE '] = '%' . $this->request->getQuery('certificate_number') . '%';
        }

        $this->paginate               = [
            'contain'    => ['Vessels'],
            'conditions' => $conditions,
        ];
        $fireExtinguisherCertificates = $this->paginate($this->FireExtinguisherCertificates);
        $vessels                      = $this->FireExtinguisherCertificates->Vessels->find('list');
        $this->set(compact('fireExtinguisherCertificates', 'vessels'));
        $this->set('_serialize', ['fireExtinguisherCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Fire Extinguisher Certificate id.
     *
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $fireExtinguisherCertificate = $this->FireExtinguisherCertificates->get($id, [
            'contain' => ['FireExtinguisherCertificateItems', 'Vessels', 'Vessels.Countries', 'CertificateTexts', 'FireExtinguisherCertificateItems.FireExtinguisherItemTypes'],
        ]);

        $statuses         = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->statuses;
        $capacityUnits    = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->capacityUnits;
        $certificateTypes = $this->FireExtinguisherCertificates->certificateTypes;

        $this->set(compact('fireExtinguisherCertificate', 'statuses', 'capacityUnits', 'certificateTypes'));
        $this->set('_serialize', ['fireExtinguisherCertificate']);
        $this->viewBuilder()->setLayout('print');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fireExtinguisherCertificate                     = $this->FireExtinguisherCertificates->newEntity();
        $fireExtinguisherCertificate->certificate_number =
            CertificateHelper::getCertificateSerialNo(CertificateHelper::FE_PREFIX,
                $this->FireExtinguisherCertificates->getMaxSerialNumber());
        if ($this->request->is('post')) {
            $fireExtinguisherCertificate = $this->FireExtinguisherCertificates->patchEntity($fireExtinguisherCertificate,
                $this->request->getData(), ['associated' => ['FireExtinguisherCertificateItems']]);
            if ($this->FireExtinguisherCertificates->save($fireExtinguisherCertificate)) {
                $this->Flash->success(__('The fire extinguisher certificate has been saved.'));
                if ($this->request->getData('print')) {
                    $this->redirect(['action' => 'view', $fireExtinguisherCertificate->id]);
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fire extinguisher certificate could not be saved. Please, try again.'));
        }
        $statuses         = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->statuses;
        $capacityUnits    = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->capacityUnits;
        $certificateTypes = $this->FireExtinguisherCertificates->certificateTypes;
        $certificateTexts = $this->FireExtinguisherCertificates->CertificateTexts->find('list');
        $itemTypes        = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->FireExtinguisherItemTypes->find('list');
        $vessels          = $this->FireExtinguisherCertificates->Vessels->find('list');
        $this->set(compact('fireExtinguisherCertificate', 'statuses', 'capacityUnits', 'certificateTexts', 'vessels', 'certificateTypes', 'itemTypes'));
        $this->set('_serialize', ['fireExtinguisherCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fire Extinguisher Certificate id.
     *
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fireExtinguisherCertificate = $this->FireExtinguisherCertificates->get($id, [
            'contain' => ['FireExtinguisherCertificateItems'],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $fireExtinguisherCertificate = $this->FireExtinguisherCertificates->patchEntity($fireExtinguisherCertificate,
                $this->request->getData(), ['associated' => ['FireExtinguisherCertificateItems']]);
            if ($this->FireExtinguisherCertificates->save($fireExtinguisherCertificate)) {
                $this->Flash->success(__('The fire extinguisher certificate has been saved.'));
                if ($this->request->getData('print')) {
                    $this->redirect(['action' => 'view', $id]);
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fire extinguisher certificate could not be saved. Please, try again.'));
        }
        $statuses         = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->statuses;
        $capacityUnits    = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->capacityUnits;
        $itemTypes        = $this->FireExtinguisherCertificates->FireExtinguisherCertificateItems->FireExtinguisherItemTypes->find('list');
        $vessels          = $this->FireExtinguisherCertificates->Vessels->find('list');
        $certificateTexts = $this->FireExtinguisherCertificates->CertificateTexts->find('list');
        $certificateTypes = $this->FireExtinguisherCertificates->certificateTypes;
        $this->set(compact('fireExtinguisherCertificate', 'statuses', 'capacityUnits', 'certificateTexts', 'vessels', 'certificateTypes', 'itemTypes'));
        $this->set('_serialize', ['fireExtinguisherCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Fire Extinguisher Certificate id.
     *
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $fireExtinguisherCertificate = $this->FireExtinguisherCertificates->get($id);
        if ($this->FireExtinguisherCertificates->delete($fireExtinguisherCertificate)) {
            $this->Flash->success(__('The fire extinguisher certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The fire extinguisher certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function reissue($id = false)
    {
        $oldCertificate = $this->FireExtinguisherCertificates->get($id, [
            'contain' => ['FireExtinguisherCertificateItems'],
        ]);
        $newCertificate = $this->FireExtinguisherCertificates->newEntity();
        $newData        = array_merge($oldCertificate->toArray(), [
            'certificate_number'   =>
                CertificateHelper::getCertificateSerialNo(CertificateHelper::FE_PREFIX,
                    $this->FireExtinguisherCertificates->getMaxSerialNumber()),
            'id'                   => '',
            'inspection_date'      => '',
            'next_inspection_date' => '',
        ]);
        $newCertificate = $this->FireExtinguisherCertificates->patchEntity($newCertificate,
            $newData
        );
        if ($this->FireExtinguisherCertificates->save($newCertificate)) {
            $this->Flash->success(__('The fire extinguisher certificate has been reissued.'));
        } else {
            $this->Flash->error(__('The fire extinguisher certificate could not be reissued. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
