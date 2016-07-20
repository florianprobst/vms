<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Boltclasses Controller
 *
 * @property \App\Model\Table\BoltclassesTable $Boltclasses
 */
class BoltclassesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $boltclasses = $this->paginate($this->Boltclasses);

        $this->set(compact('boltclasses'));
        $this->set('_serialize', ['boltclasses']);
    }

    /**
     * View method
     *
     * @param string|null $id Boltclass id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $boltclass = $this->Boltclasses->get($id, [
            'contain' => []
        ]);

        $this->set('boltclass', $boltclass);
        $this->set('_serialize', ['boltclass']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $boltclass = $this->Boltclasses->newEntity();
        if ($this->request->is('post')) {
            $boltclass = $this->Boltclasses->patchEntity($boltclass, $this->request->data);
            if ($this->Boltclasses->save($boltclass)) {
                $this->Flash->success(__('The boltclass has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The boltclass could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('boltclass'));
        $this->set('_serialize', ['boltclass']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Boltclass id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $boltclass = $this->Boltclasses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $boltclass = $this->Boltclasses->patchEntity($boltclass, $this->request->data);
            if ($this->Boltclasses->save($boltclass)) {
                $this->Flash->success(__('The boltclass has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The boltclass could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('boltclass'));
        $this->set('_serialize', ['boltclass']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Boltclass id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $boltclass = $this->Boltclasses->get($id);
        if ($this->Boltclasses->delete($boltclass)) {
            $this->Flash->success(__('The boltclass has been deleted.'));
        } else {
            $this->Flash->error(__('The boltclass could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
