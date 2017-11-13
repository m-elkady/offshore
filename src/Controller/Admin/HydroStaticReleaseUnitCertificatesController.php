<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;

/**
 * HydroStaticReleaseUnitCertificates Controller
 *
 * @property \App\Model\Table\HydroStaticReleaseUnitCertificatesTable $HydroStaticReleaseUnitCertificates
 *
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate[] paginate($object = null, array $settings = [])
 */
class HydroStaticReleaseUnitCertificatesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hydroStaticReleaseUnitCertificates = $this->paginate($this->HydroStaticReleaseUnitCertificates);

        $this->set(compact('hydroStaticReleaseUnitCertificates'));
        $this->set('_serialize', ['hydroStaticReleaseUnitCertificates']);
    }

    /**
     * View method
     *
     * @param string|null $id Hydro Static Release Unit Certificate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hydroStaticReleaseUnitCertificate = $this->HydroStaticReleaseUnitCertificates->get($id, [
            'contain' => []
        ]);

        $this->set('hydroStaticReleaseUnitCertificate', $hydroStaticReleaseUnitCertificate);
        $this->set('_serialize', ['hydroStaticReleaseUnitCertificate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hydroStaticReleaseUnitCertificate = $this->HydroStaticReleaseUnitCertificates->newEntity();
        if ($this->request->is('post')) {
            $hydroStaticReleaseUnitCertificate = $this->HydroStaticReleaseUnitCertificates->patchEntity($hydroStaticReleaseUnitCertificate, $this->request->getData());
            if ($this->HydroStaticReleaseUnitCertificates->save($hydroStaticReleaseUnitCertificate)) {
                $this->Flash->success(__('The hydro static release unit certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hydro static release unit certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('hydroStaticReleaseUnitCertificate'));
        $this->set('_serialize', ['hydroStaticReleaseUnitCertificate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hydro Static Release Unit Certificate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hydroStaticReleaseUnitCertificate = $this->HydroStaticReleaseUnitCertificates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hydroStaticReleaseUnitCertificate = $this->HydroStaticReleaseUnitCertificates->patchEntity($hydroStaticReleaseUnitCertificate, $this->request->getData());
            if ($this->HydroStaticReleaseUnitCertificates->save($hydroStaticReleaseUnitCertificate)) {
                $this->Flash->success(__('The hydro static release unit certificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hydro static release unit certificate could not be saved. Please, try again.'));
        }
        $this->set(compact('hydroStaticReleaseUnitCertificate'));
        $this->set('_serialize', ['hydroStaticReleaseUnitCertificate']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Hydro Static Release Unit Certificate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
        $hydroStaticReleaseUnitCertificate = $this->HydroStaticReleaseUnitCertificates->get($id);
        if ($this->HydroStaticReleaseUnitCertificates->delete($hydroStaticReleaseUnitCertificate)) {
            $this->Flash->success(__('The hydro static release unit certificate has been deleted.'));
        } else {
            $this->Flash->error(__('The hydro static release unit certificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
