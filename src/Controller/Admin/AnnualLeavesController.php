<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * AnnualLeaves Controller
 *
 * @property \App\Model\Table\AnnualLeavesTable $AnnualLeaves
 *
 * @method \App\Model\Entity\AnnualLeave[] paginate($object = null, array $settings = [])
 */
class AnnualLeavesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $annualLeaves = $this->paginate($this->AnnualLeaves);

        $this->set(compact('annualLeaves'));
        $this->set('_serialize', ['annualLeaves']);
    }

    /**
     * View method
     *
     * @param string|null $id Annual Leave id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $annualLeave = $this->AnnualLeaves->get($id, [
            'contain' => []
        ]);

        $this->set('annualLeave', $annualLeave);
        $this->set('_serialize', ['annualLeave']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $annualLeave = $this->AnnualLeaves->newEntity();
        if ($this->request->is('post')) {
            $annualLeave = $this->AnnualLeaves->patchEntity($annualLeave, $this->request->getData());
            if ($this->AnnualLeaves->save($annualLeave)) {
                $this->Flash->success(__('The annual leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annual leave could not be saved. Please, try again.'));
        }
        $this->set(compact('annualLeave'));
        $this->set('_serialize', ['annualLeave']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Annual Leave id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $annualLeave = $this->AnnualLeaves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $annualLeave = $this->AnnualLeaves->patchEntity($annualLeave, $this->request->getData());
            if ($this->AnnualLeaves->save($annualLeave)) {
                $this->Flash->success(__('The annual leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annual leave could not be saved. Please, try again.'));
        }
        $this->set(compact('annualLeave'));
        $this->set('_serialize', ['annualLeave']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Annual Leave id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $annualLeave = $this->AnnualLeaves->get($id);
        if ($this->AnnualLeaves->delete($annualLeave)) {
            $this->Flash->success(__('The annual leave has been deleted.'));
        } else {
            $this->Flash->error(__('The annual leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
