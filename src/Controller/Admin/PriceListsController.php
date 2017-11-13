<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * PriceLists Controller
 *
 * @property \App\Model\Table\PriceListsTable $PriceLists
 *
 * @method \App\Model\Entity\PriceList[] paginate($object = null, array $settings = [])
 */
class PriceListsController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $priceLists = $this->paginate($this->PriceLists);

        $this->set(compact('priceLists'));
        $this->set('_serialize', ['priceLists']);
    }

    /**
     * View method
     *
     * @param string|null $id Price List id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $priceList = $this->PriceLists->get($id, [
            'contain' => []
        ]);

        $this->set('priceList', $priceList);
        $this->set('_serialize', ['priceList']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $priceList = $this->PriceLists->newEntity();
        if ($this->request->is('post')) {
            $priceList = $this->PriceLists->patchEntity($priceList, $this->request->getData());
            if ($this->PriceLists->save($priceList)) {
                $this->Flash->success(__('The price list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The price list could not be saved. Please, try again.'));
        }
        $this->set(compact('priceList'));
        $this->set('_serialize', ['priceList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Price List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $priceList = $this->PriceLists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $priceList = $this->PriceLists->patchEntity($priceList, $this->request->getData());
            if ($this->PriceLists->save($priceList)) {
                $this->Flash->success(__('The price list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The price list could not be saved. Please, try again.'));
        }
        $this->set(compact('priceList'));
        $this->set('_serialize', ['priceList']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Price List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $priceList = $this->PriceLists->get($id);
        if ($this->PriceLists->delete($priceList)) {
            $this->Flash->success(__('The price list has been deleted.'));
        } else {
            $this->Flash->error(__('The price list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
