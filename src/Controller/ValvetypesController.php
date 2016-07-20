<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Valvetypes Controller
 *
 * @property \App\Model\Table\ValvetypesTable $Valvetypes
 */
class ValvetypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $valvetypes = $this->paginate($this->Valvetypes);

        $this->set(compact('valvetypes'));
        $this->set('_serialize', ['valvetypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Valvetype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $valvetype = $this->Valvetypes->get($id, [
            'contain' => ['Valves']
        ]);

        $this->set('valvetype', $valvetype);
        $this->set('_serialize', ['valvetype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $valvetype = $this->Valvetypes->newEntity();
        if ($this->request->is('post')) {
            $valvetype = $this->Valvetypes->patchEntity($valvetype, $this->request->data);
            if ($this->Valvetypes->save($valvetype)) {
                $this->Flash->success(__('The valvetype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The valvetype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('valvetype'));
        $this->set('_serialize', ['valvetype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Valvetype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $valvetype = $this->Valvetypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $valvetype = $this->Valvetypes->patchEntity($valvetype, $this->request->data);
            if ($this->Valvetypes->save($valvetype)) {
                $this->Flash->success(__('The valvetype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The valvetype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('valvetype'));
        $this->set('_serialize', ['valvetype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Valvetype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $valvetype = $this->Valvetypes->get($id);
        if ($this->Valvetypes->delete($valvetype)) {
            $this->Flash->success(__('The valvetype has been deleted.'));
        } else {
            $this->Flash->error(__('The valvetype could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
