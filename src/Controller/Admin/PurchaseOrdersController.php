<?php

namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * PurchaseOrders Controller
 *
 * @property \App\Model\Table\PurchaseOrdersTable $PurchaseOrders
 *
 * @method \App\Model\Entity\PurchaseOrder[] paginate($object = null, array $settings = [])
 */
class PurchaseOrdersController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Vendors'],
        ];
        $purchaseOrders = $this->paginate($this->PurchaseOrders);

        $this->set(compact('purchaseOrders'));
        $this->set('_serialize', ['purchaseOrders']);
    }

    /**
     * View method
     *
     * @param string|null $id Purchase Order id.
     *
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $purchaseOrder = $this->PurchaseOrders->get($id, [
            'contain' => ['Employees', 'Vendors', 'PurchaseOrderItems'],
        ]);

        $this->set('purchaseOrder', $purchaseOrder);
        $this->set('_serialize', ['purchaseOrder']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $purchaseOrder = $this->PurchaseOrders->newEntity();
        if ($this->request->is('post')) {
            $purchaseOrder = $this->PurchaseOrders->patchEntity($purchaseOrder, $this->request->getData(), ['associated' => 'PurchaseOrderItems']);
            if ($this->PurchaseOrders->save($purchaseOrder)) {
                $this->Flash->success(__('The purchase order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase order could not be saved. Please, try again.'));
        }
        $employees = $this->PurchaseOrders->Employees->find('list', ['limit' => 200]);
        $vendors   = $this->PurchaseOrders->Vendors->find('list', ['limit' => 200]);
        $this->set(compact('purchaseOrder', 'employees', 'vendors'));
        $this->set('_serialize', ['purchaseOrder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Purchase Order id.
     *
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $purchaseOrder = $this->PurchaseOrders->get($id, [
            'contain' => ['PurchaseOrderItems'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchaseOrder = $this->PurchaseOrders->patchEntity($purchaseOrder, $this->request->getData(), ['associated' => 'PurchaseOrderItems']);
            if ($this->PurchaseOrders->save($purchaseOrder)) {
                $this->Flash->success(__('The purchase order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase order could not be saved. Please, try again.'));
        }
        $employees = $this->PurchaseOrders->Employees->find('list', ['limit' => 200]);
        $vendors   = $this->PurchaseOrders->Vendors->find('list', ['limit' => 200]);
        $this->set(compact('purchaseOrder', 'employees', 'vendors'));
        $this->set('_serialize', ['purchaseOrder']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Purchase Order id.
     *
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $purchaseOrder = $this->PurchaseOrders->get($id);
        if ($this->PurchaseOrders->delete($purchaseOrder)) {
            $this->Flash->success(__('The purchase order has been deleted.'));
        } else {
            $this->Flash->error(__('The purchase order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
