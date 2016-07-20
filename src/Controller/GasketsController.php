<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gaskets Controller
 *
 * @property \App\Model\Table\GasketsTable $Gaskets
 */
class GasketsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Manufacturers', 'Gaskettypes']
        ];
        $gaskets = $this->paginate($this->Gaskets);

        $this->set(compact('gaskets'));
        $this->set('_serialize', ['gaskets']);
    }

    /**
     * View method
     *
     * @param string|null $id Gasket id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gasket = $this->Gaskets->get($id, [
            'contain' => ['Manufacturers', 'Gaskettypes', 'Valves']
        ]);

        $this->set('gasket', $gasket);
        $this->set('_serialize', ['gasket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gasket = $this->Gaskets->newEntity();
        if ($this->request->is('post')) {
            $gasket = $this->Gaskets->patchEntity($gasket, $this->request->data);
            if ($this->Gaskets->save($gasket)) {
                $this->Flash->success(__('The gasket has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The gasket could not be saved. Please, try again.'));
            }
        }
        $manufacturers = $this->Gaskets->Manufacturers->find('list', ['limit' => 200]);
        $gaskettypes = $this->Gaskets->Gaskettypes->find('list', ['limit' => 200]);
        $this->set(compact('gasket', 'manufacturers', 'gaskettypes'));
        $this->set('_serialize', ['gasket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gasket id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gasket = $this->Gaskets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gasket = $this->Gaskets->patchEntity($gasket, $this->request->data);
            if ($this->Gaskets->save($gasket)) {
                $this->Flash->success(__('The gasket has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The gasket could not be saved. Please, try again.'));
            }
        }
        $manufacturers = $this->Gaskets->Manufacturers->find('list', ['limit' => 200]);
        $gaskettypes = $this->Gaskets->Gaskettypes->find('list', ['limit' => 200]);
        $this->set(compact('gasket', 'manufacturers', 'gaskettypes'));
        $this->set('_serialize', ['gasket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gasket id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gasket = $this->Gaskets->get($id);
        if ($this->Gaskets->delete($gasket)) {
            $this->Flash->success(__('The gasket has been deleted.'));
        } else {
            $this->Flash->error(__('The gasket could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
