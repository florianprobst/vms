<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actuators Controller
 *
 * @property \App\Model\Table\ActuatorsTable $Actuators
 */
class ActuatorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actuatortypes', 'Manufacturers']
        ];
        $actuators = $this->paginate($this->Actuators);

        $this->set(compact('actuators'));
        $this->set('_serialize', ['actuators']);
    }

    /**
     * View method
     *
     * @param string|null $id Actuator id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actuator = $this->Actuators->get($id, [
            'contain' => ['Actuatortypes', 'Manufacturers', 'Valves']
        ]);

        $this->set('actuator', $actuator);
        $this->set('_serialize', ['actuator']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actuator = $this->Actuators->newEntity();
        if ($this->request->is('post')) {
            $actuator = $this->Actuators->patchEntity($actuator, $this->request->data);
            if ($this->Actuators->save($actuator)) {
                $this->Flash->success(__('The actuator has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actuator could not be saved. Please, try again.'));
            }
        }
        $actuatortypes = $this->Actuators->Actuatortypes->find('list', ['limit' => 200]);
        $manufacturers = $this->Actuators->Manufacturers->find('list', ['limit' => 200]);
        $this->set(compact('actuator', 'actuatortypes', 'manufacturers'));
        $this->set('_serialize', ['actuator']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Actuator id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actuator = $this->Actuators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actuator = $this->Actuators->patchEntity($actuator, $this->request->data);
            if ($this->Actuators->save($actuator)) {
                $this->Flash->success(__('The actuator has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actuator could not be saved. Please, try again.'));
            }
        }
        $actuatortypes = $this->Actuators->Actuatortypes->find('list', ['limit' => 200]);
        $manufacturers = $this->Actuators->Manufacturers->find('list', ['limit' => 200]);
        $this->set(compact('actuator', 'actuatortypes', 'manufacturers'));
        $this->set('_serialize', ['actuator']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Actuator id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actuator = $this->Actuators->get($id);
        if ($this->Actuators->delete($actuator)) {
            $this->Flash->success(__('The actuator has been deleted.'));
        } else {
            $this->Flash->error(__('The actuator could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
