<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * FireExtinguisherItemTypes Controller
 *
 * @property \App\Model\Table\FireExtinguisherItemTypesTable $FireExtinguisherItemTypes
 *
 * @method \App\Model\Entity\FireExtinguisherItemType[] paginate($object = null, array $settings = [])
 */
class FireExtinguisherItemTypesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fireExtinguisherItemTypes = $this->paginate($this->FireExtinguisherItemTypes);

        $this->set(compact('fireExtinguisherItemTypes'));
        $this->set('_serialize', ['fireExtinguisherItemTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Fire Extinguisher Item Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fireExtinguisherItemType = $this->FireExtinguisherItemTypes->get($id, [
            'contain' => ['FireExtinguisherCertificateItems']
        ]);

        $this->set('fireExtinguisherItemType', $fireExtinguisherItemType);
        $this->set('_serialize', ['fireExtinguisherItemType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fireExtinguisherItemType = $this->FireExtinguisherItemTypes->newEntity();
        if ($this->request->is('post')) {
            $fireExtinguisherItemType = $this->FireExtinguisherItemTypes->patchEntity($fireExtinguisherItemType, $this->request->getData());
            if ($this->FireExtinguisherItemTypes->save($fireExtinguisherItemType)) {
                $this->Flash->success(__('The fire extinguisher item type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fire extinguisher item type could not be saved. Please, try again.'));
        }
        $this->set(compact('fireExtinguisherItemType'));
        $this->set('_serialize', ['fireExtinguisherItemType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fire Extinguisher Item Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fireExtinguisherItemType = $this->FireExtinguisherItemTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fireExtinguisherItemType = $this->FireExtinguisherItemTypes->patchEntity($fireExtinguisherItemType, $this->request->getData());
            if ($this->FireExtinguisherItemTypes->save($fireExtinguisherItemType)) {
                $this->Flash->success(__('The fire extinguisher item type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fire extinguisher item type could not be saved. Please, try again.'));
        }
        $this->set(compact('fireExtinguisherItemType'));
        $this->set('_serialize', ['fireExtinguisherItemType']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Fire Extinguisher Item Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      // $this->request->allowMethod(['post', 'delete']);
        $fireExtinguisherItemType = $this->FireExtinguisherItemTypes->get($id);
        if ($this->FireExtinguisherItemTypes->delete($fireExtinguisherItemType)) {
            $this->Flash->success(__('The fire extinguisher item type has been deleted.'));
        } else {
            $this->Flash->error(__('The fire extinguisher item type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
