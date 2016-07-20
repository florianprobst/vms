<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gaskettypes Controller
 *
 * @property \App\Model\Table\GaskettypesTable $Gaskettypes
 */
class GaskettypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $gaskettypes = $this->paginate($this->Gaskettypes);

        $this->set(compact('gaskettypes'));
        $this->set('_serialize', ['gaskettypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Gaskettype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gaskettype = $this->Gaskettypes->get($id, [
            'contain' => ['Gaskets']
        ]);

        $this->set('gaskettype', $gaskettype);
        $this->set('_serialize', ['gaskettype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gaskettype = $this->Gaskettypes->newEntity();
        if ($this->request->is('post')) {
            $gaskettype = $this->Gaskettypes->patchEntity($gaskettype, $this->request->data);
            if ($this->Gaskettypes->save($gaskettype)) {
                $this->Flash->success(__('The gaskettype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The gaskettype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('gaskettype'));
        $this->set('_serialize', ['gaskettype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gaskettype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gaskettype = $this->Gaskettypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gaskettype = $this->Gaskettypes->patchEntity($gaskettype, $this->request->data);
            if ($this->Gaskettypes->save($gaskettype)) {
                $this->Flash->success(__('The gaskettype has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The gaskettype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('gaskettype'));
        $this->set('_serialize', ['gaskettype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gaskettype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gaskettype = $this->Gaskettypes->get($id);
        if ($this->Gaskettypes->delete($gaskettype)) {
            $this->Flash->success(__('The gaskettype has been deleted.'));
        } else {
            $this->Flash->error(__('The gaskettype could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
