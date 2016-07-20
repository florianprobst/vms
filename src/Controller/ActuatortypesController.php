<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actuatortypes Controller
 *
 * @property \App\Model\Table\ActuatortypesTable $Actuatortypes
 */
class ActuatortypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $actuatortypes = $this->paginate($this->Actuatortypes);

        $this->set(compact('actuatortypes'));
        $this->set('_serialize', ['actuatortypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Actuatortype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actuatortype = $this->Actuatortypes->get($id, [
            'contain' => ['Actuators']
        ]);

        $this->set('actuatortype', $actuatortype);
        $this->set('_serialize', ['actuatortype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actuatortype = $this->Actuatortypes->newEntity();
        if ($this->request->is('post')) {
            $actuatortype = $this->Actuatortypes->patchEntity($actuatortype, $this->request->data);
            if ($this->Actuatortypes->save($actuatortype)) {
                $this->Flash->success(__('The actuatortype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actuatortype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actuatortype'));
        $this->set('_serialize', ['actuatortype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Actuatortype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actuatortype = $this->Actuatortypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actuatortype = $this->Actuatortypes->patchEntity($actuatortype, $this->request->data);
            if ($this->Actuatortypes->save($actuatortype)) {
                $this->Flash->success(__('The actuatortype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actuatortype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actuatortype'));
        $this->set('_serialize', ['actuatortype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Actuatortype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actuatortype = $this->Actuatortypes->get($id);
        if ($this->Actuatortypes->delete($actuatortype)) {
            $this->Flash->success(__('The actuatortype has been deleted.'));
        } else {
            $this->Flash->error(__('The actuatortype could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
