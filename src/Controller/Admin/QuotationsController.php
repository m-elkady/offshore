<?php

namespace App\Controller\Admin;

use App\Controller\AdminController;
use App\Model\Table\QuotationItemsTable;
use Cake\ORM\TableRegistry;

/**
 * Quotations Controller
 *
 * @property \App\Model\Table\QuotationsTable $Quotations
 *
 * @method \App\Model\Entity\Quotation[] paginate($object = null, array $settings = [])
 */
class QuotationsController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Clients'],
        ];

        $quotations = $this->paginate($this->Quotations);

        $this->set(compact('quotations'));
        $this->set('_serialize', ['quotations']);
    }

    /**
     * View method
     *
     * @param string|null $id Quotation id.
     *
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quotation = $this->Quotations->get($id, [
            'contain' => [],
        ]);

        $this->set('quotation', $quotation);
        $this->set('_serialize', ['quotation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quotation = $this->Quotations->newEntity();
        if ($this->request->is('post')) {
            $quotation = $this->Quotations->patchEntity($quotation, $this->request->getData(), ['associated' => 'QuotationItems']);

            if ($this->Quotations->save($quotation)) {
                $this->Flash->success(__('The quotation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quotation could not be saved. Please, try again.'));
        }

        $clients   = TableRegistry::get('Clients')->find('list');
        $employees = TableRegistry::get('Employees')->find('list');
        $this->set(compact('quotation', 'clients', 'employees'));
        $this->set('_serialize', ['quotation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quotation id.
     *
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quotation = $this->Quotations->get($id, [
            'contain' => ['QuotationItems'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quotation = $this->Quotations->patchEntity($quotation, $this->request->getData(), ['associated' => 'QuotationItems', 'checkRules' => false]);
            if ($this->Quotations->save($quotation)) {
                $this->Flash->success(__('The quotation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quotation could not be saved. Please, try again.'));
        }
        $clients   = TableRegistry::get('Clients')->find('list');
        $employees = TableRegistry::get('Employees')->find('list');
        $this->set(compact('quotation', 'clients', 'employees'));
        $this->set('_serialize', ['quotation']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Quotation id.
     *
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $quotation = $this->Quotations->get($id);
        if ($this->Quotations->delete($quotation)) {
            $this->Flash->success(__('The quotation has been deleted.'));
        } else {
            $this->Flash->error(__('The quotation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function issue($id = null, $type = 'html')
    {
        $this->viewBuilder()->setLayout(null);
        $quotation = $this->Quotations->get($id,['contain' => ['CertificationItems','Employees','Clients']]);
        $this->set(compact('quotation'));
    }
}
