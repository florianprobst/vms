<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;

/**
 * Valves Controller
 *
 * @property \App\Model\Table\ValvesTable $Valves
 */
class ValvesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    		$conditions = TableRegistry::get('Conditions')->find('all')->all();
    		
        $this->paginate = [
            'contain' => ['Manufacturers', 'Stocks', 'Customers', 'Flangetypes', 'Valvetypes', 'Actuators', 'Materials', 'Gaskets', 'Boltings', 'Reports']
        ];
        
        $this->set('valves', $this->paginate($this->Valves));
        $this->set('conditions', $conditions);
        $this->set('_serialize', ['valves']);
    }

    /**
     * View method
     *
     * @param string|null $id Valf id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $valf = $this->Valves->get($id, [
            'contain' => ['Manufacturers', 'Stocks', 'Customers', 'Flangetypes', 'Valvetypes', 'Actuators', 'Materials', 'Gaskets', 'Boltings', 'Reports']
        ]);
        
        $conditions = TableRegistry::get('Conditions')->find('all')->all();
        //$condition = $conditions->get($valf->condition_id)

        $this->set('valf', $valf);
        $this->set('conditions', $conditions);
        $this->set('_serialize', ['valf']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $valf = $this->Valves->newEntity();
        if ($this->request->is('post')) {
            $valf = $this->Valves->patchEntity($valf, $this->request->data);
            if ($this->Valves->save($valf)) {
                //report mit status "erfasst" anlegen
				        $reportsTable = TableRegistry::get('Reports');
				        $report = $reportsTable->newEntity();
				        $report->valve_id = $valf->id;
				        $report->operation_id = 7; //erfassung
				        $report->datum = new Time(Time::now(), 'Germany/Berlin');
				        $report->beschreibung = 'Aufnahme in das System';
				        $report->condition_id = 5; //zustand 'erfasst'
				        //$report->bild = "";
				        if($reportsTable->save($report)){
				        	$reportid = $report->id;
				        }else{
				        	$this->Flash->error(__('Report for this valve could not be saved. Please check valve dataset'));
				        }
                $this->Flash->success(__('The valve has been saved. eTag:' . $valf->etag));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The valve could not be saved. Please, try again.'));
            }
        }
        
        
        
        $manufacturers = $this->Valves->Manufacturers->find('list', ['limit' => 200]);
        $stocks = $this->Valves->Stocks->find('list', ['limit' => 200]);
        $customers = $this->Valves->Customers->find('list', ['limit' => 200]);
        $flangetypes = $this->Valves->Flangetypes->find('list', ['limit' => 200]);
        $valvetypes = $this->Valves->Valvetypes->find('list', ['limit' => 200]);
        $actuators = $this->Valves->Actuators->find('list', ['limit' => 200]);
        $materials = $this->Valves->Materials->find('list', ['limit' => 200]);
        $gaskets = $this->Valves->Gaskets->find('list', ['limit' => 200]);
        $boltings = $this->Valves->Boltings->find('list', ['limit' => 200]);
        $this->set(compact('valf', 'manufacturers', 'stocks', 'customers', 'flangetypes', 'valvetypes', 'actuators', 'materials', 'gaskets', 'boltings'));
        $this->set('_serialize', ['valf']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Valf id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $valf = $this->Valves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $valf = $this->Valves->patchEntity($valf, $this->request->data);
            if ($this->Valves->save($valf)) {
                $this->Flash->success(__('The valf has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The valve could not be saved. Please, try again.'));
            }
        }
        $manufacturers = $this->Valves->Manufacturers->find('list', ['limit' => 200]);
        $stocks = $this->Valves->Stocks->find('list', ['limit' => 200]);
        $customers = $this->Valves->Customers->find('list', ['limit' => 200]);
        $flangetypes = $this->Valves->Flangetypes->find('list', ['limit' => 200]);
        $valvetypes = $this->Valves->Valvetypes->find('list', ['limit' => 200]);
        $actuators = $this->Valves->Actuators->find('list', ['limit' => 200]);
        $materials = $this->Valves->Materials->find('list', ['limit' => 200]);
        $gaskets = $this->Valves->Gaskets->find('list', ['limit' => 200]);
        $boltings = $this->Valves->Boltings->find('list', ['limit' => 200]);
        $this->set(compact('valf', 'manufacturers', 'stocks', 'customers', 'flangetypes', 'valvetypes', 'actuators', 'materials', 'gaskets', 'boltings'));
        $this->set('_serialize', ['valf']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Valf id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $valf = $this->Valves->get($id);
        if ($this->Valves->delete($valf)) {
            $this->Flash->success(__('The valf has been deleted.'));
        } else {
            $this->Flash->error(__('The valf could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
