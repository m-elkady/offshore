<?php
namespace App\Controller\Admin;

use App\Controller\AdminController;
use App\Helper\CertificateHelper;

/**
 * CertificateTexts Controller
 *
 * @property \App\Model\Table\CertificateTextsTable $CertificateTexts
 *
 * @method \App\Model\Entity\CertificateText[] paginate($object = null, array $settings = [])
 */
class CertificateTextsController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $certificateTexts = $this->paginate($this->CertificateTexts);

        $this->set(compact('certificateTexts'));
        $this->set('_serialize', ['certificateTexts']);
    }

    /**
     * View method
     *
     * @param string|null $id Certificate Text id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $certificateText = $this->CertificateTexts->get($id, [
            'contain' => []
        ]);

        $this->set('certificateText', $certificateText);
        $this->set('_serialize', ['certificateText']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $certificateText = $this->CertificateTexts->newEntity();
        if ($this->request->is('post')) {
            $certificateText = $this->CertificateTexts->patchEntity($certificateText, $this->request->getData());
            if ($this->CertificateTexts->save($certificateText)) {
                $this->Flash->success(__('The certificate text has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certificate text could not be saved. Please, try again.'));
        }
        $types = CertificateHelper::getCertificateTypes();
        $this->set(compact('certificateText','types'));
        $this->set('_serialize', ['certificateText']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Certificate Text id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $certificateText = $this->CertificateTexts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $certificateText = $this->CertificateTexts->patchEntity($certificateText, $this->request->getData());
            if ($this->CertificateTexts->save($certificateText)) {
                $this->Flash->success(__('The certificate text has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certificate text could not be saved. Please, try again.'));
        }
        $this->set(compact('certificateText'));
        $types = CertificateHelper::getCertificateTypes();
        $this->set(compact('certificateText','types'));
        $this->set('_serialize', ['certificateText']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Certificate Text id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      // $this->request->allowMethod(['post', 'delete']);
        $certificateText = $this->CertificateTexts->get($id);
        if ($this->CertificateTexts->delete($certificateText)) {
            $this->Flash->success(__('The certificate text has been deleted.'));
        } else {
            $this->Flash->error(__('The certificate text could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
