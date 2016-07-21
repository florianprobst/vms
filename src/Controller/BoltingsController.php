<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Boltings Controller
 *
 * @property \App\Model\Table\BoltingsTable $Boltings
 */
class BoltingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Boltclasses', 'Materials']
        ];
        $boltings = $this->paginate($this->Boltings);

        $this->set(compact('boltings'));
        $this->set('_serialize', ['boltings']);
    }

    /**
     * View method
     *
     * @param string|null $id Bolting id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bolting = $this->Boltings->get($id, [
            'contain' => ['Boltclasses', 'Materials', 'Valves']
        ]);

        $this->set('bolting', $bolting);
        $this->set('_serialize', ['bolting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bolting = $this->Boltings->newEntity();
        if ($this->request->is('post')) {
            $bolting = $this->Boltings->patchEntity($bolting, $this->request->data);
            if ($this->Boltings->save($bolting)) {
                $this->Flash->success(__('The bolting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bolting could not be saved. Please, try again.'));
            }
        }
        $boltclasses = $this->Boltings->Boltclasses->find('list', ['limit' => 200]);
        $materials = $this->Boltings->Materials->find('list', ['limit' => 200]);
        $this->set(compact('bolting', 'boltclasses', 'materials'));
        $this->set('_serialize', ['bolting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bolting id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bolting = $this->Boltings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bolting = $this->Boltings->patchEntity($bolting, $this->request->data);
            if ($this->Boltings->save($bolting)) {
                $this->Flash->success(__('The bolting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bolting could not be saved. Please, try again.'));
            }
        }
        $boltclasses = $this->Boltings->Boltclasses->find('list', ['limit' => 200]);
        $materials = $this->Boltings->Materials->find('list', ['limit' => 200]);
        $this->set(compact('bolting', 'boltclasses', 'materials'));
        $this->set('_serialize', ['bolting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bolting id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bolting = $this->Boltings->get($id);
        if ($this->Boltings->delete($bolting)) {
            $this->Flash->success(__('The bolting has been deleted.'));
        } else {
            $this->Flash->error(__('The bolting could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
