<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * DeliveryNotes Controller
 *
 * @property \App\Model\Table\DeliveryNotesTable $DeliveryNotes
 *
 * @method \App\Model\Entity\DeliveryNote[] paginate($object = null, array $settings = [])
 */
class DeliveryNotesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quotations', 'Clients']
        ];
        $deliveryNotes = $this->paginate($this->DeliveryNotes);

        $this->set(compact('deliveryNotes'));
        $this->set('_serialize', ['deliveryNotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Delivery Note id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deliveryNote = $this->DeliveryNotes->get($id, [
            'contain' => ['Quotations', 'Clients', 'DeliveryNoteItems']
        ]);

        $this->set('deliveryNote', $deliveryNote);
        $this->set('_serialize', ['deliveryNote']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deliveryNote = $this->DeliveryNotes->newEntity();
        if ($this->request->is('post')) {
            $deliveryNote = $this->DeliveryNotes->patchEntity($deliveryNote, $this->request->getData());
            if ($this->DeliveryNotes->save($deliveryNote)) {
                $this->Flash->success(__('The delivery note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The delivery note could not be saved. Please, try again.'));
        }
        $quotations = $this->DeliveryNotes->Quotations->find('list', ['limit' => 200]);
        $clients = $this->DeliveryNotes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('deliveryNote', 'quotations', 'clients'));
        $this->set('_serialize', ['deliveryNote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Delivery Note id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deliveryNote = $this->DeliveryNotes->get($id, [
            'contain' => ['DeliveryNoteItems']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deliveryNote = $this->DeliveryNotes->patchEntity($deliveryNote, $this->request->getData());
            if ($this->DeliveryNotes->save($deliveryNote)) {
                $this->Flash->success(__('The delivery note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The delivery note could not be saved. Please, try again.'));
        }
        $quotations = $this->DeliveryNotes->Quotations->find('list', ['limit' => 200]);
        $clients = $this->DeliveryNotes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('deliveryNote', 'quotations', 'clients'));
        $this->set('_serialize', ['deliveryNote']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Delivery Note id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      // $this->request->allowMethod(['post', 'delete']);
        $deliveryNote = $this->DeliveryNotes->get($id);
        if ($this->DeliveryNotes->delete($deliveryNote)) {
            $this->Flash->success(__('The delivery note has been deleted.'));
        } else {
            $this->Flash->error(__('The delivery note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
