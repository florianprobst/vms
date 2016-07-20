<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flangetypes Controller
 *
 * @property \App\Model\Table\FlangetypesTable $Flangetypes
 */
class FlangetypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $flangetypes = $this->paginate($this->Flangetypes);

        $this->set(compact('flangetypes'));
        $this->set('_serialize', ['flangetypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Flangetype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flangetype = $this->Flangetypes->get($id, [
            'contain' => ['Valves']
        ]);

        $this->set('flangetype', $flangetype);
        $this->set('_serialize', ['flangetype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flangetype = $this->Flangetypes->newEntity();
        if ($this->request->is('post')) {
            $flangetype = $this->Flangetypes->patchEntity($flangetype, $this->request->data);
            if ($this->Flangetypes->save($flangetype)) {
                $this->Flash->success(__('The flangetype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flangetype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('flangetype'));
        $this->set('_serialize', ['flangetype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flangetype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flangetype = $this->Flangetypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flangetype = $this->Flangetypes->patchEntity($flangetype, $this->request->data);
            if ($this->Flangetypes->save($flangetype)) {
                $this->Flash->success(__('The flangetype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flangetype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('flangetype'));
        $this->set('_serialize', ['flangetype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flangetype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flangetype = $this->Flangetypes->get($id);
        if ($this->Flangetypes->delete($flangetype)) {
            $this->Flash->success(__('The flangetype has been deleted.'));
        } else {
            $this->Flash->error(__('The flangetype could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
