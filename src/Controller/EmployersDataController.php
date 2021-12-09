<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployersData Controller
 *
 * @property \App\Model\Table\EmployersDataTable $EmployersData
 *
 * @method \App\Model\Entity\EmployersData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployersDataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employers', 'EmployersRoles', 'Departments', 'Situations', 'Companies', 'Plans', 'Teams', 'Notes'],
        ];
        $employersData = $this->paginate($this->EmployersData);

        $this->set(compact('employersData'));
    }

    /**
     * View method
     *
     * @param string|null $id Employers Data id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employersData = $this->EmployersData->get($id, [
            'contain' => ['Employers', 'EmployersRoles', 'Departments', 'Situations', 'Companies', 'Plans', 'Teams', 'Notes'],
        ]);

        $this->set('employersData', $employersData);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employersData = $this->EmployersData->newEntity();
        if ($this->request->is('post')) {
            $employersData = $this->EmployersData->patchEntity($employersData, $this->request->getData());
            if ($this->EmployersData->save($employersData)) {
                $this->Flash->success(__('The employers data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employers data could not be saved. Please, try again.'));
        }
        $employers = $this->EmployersData->Employers->find('list', ['limit' => 200]);
        $employersRoles = $this->EmployersData->EmployersRoles->find('list', ['limit' => 200]);
        $departments = $this->EmployersData->Departments->find('list', ['limit' => 200]);
        $situations = $this->EmployersData->Situations->find('list', ['limit' => 200]);
        $companies = $this->EmployersData->Companies->find('list', ['limit' => 200]);
        $plans = $this->EmployersData->Plans->find('list', ['limit' => 200]);
        $teams = $this->EmployersData->Teams->find('list', ['limit' => 200]);
        $notes = $this->EmployersData->Notes->find('list', ['limit' => 200]);
        $this->set(compact('employersData', 'employers', 'employersRoles', 'departments', 'situations', 'companies', 'plans', 'teams', 'notes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employers Data id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employersData = $this->EmployersData->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employersData = $this->EmployersData->patchEntity($employersData, $this->request->getData());
            if ($this->EmployersData->save($employersData)) {
                $this->Flash->success(__('The employers data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employers data could not be saved. Please, try again.'));
        }
        $employers = $this->EmployersData->Employers->find('list', ['limit' => 200]);
        $employersRoles = $this->EmployersData->EmployersRoles->find('list', ['limit' => 200]);
        $departments = $this->EmployersData->Departments->find('list', ['limit' => 200]);
        $situations = $this->EmployersData->Situations->find('list', ['limit' => 200]);
        $companies = $this->EmployersData->Companies->find('list', ['limit' => 200]);
        $plans = $this->EmployersData->Plans->find('list', ['limit' => 200]);
        $teams = $this->EmployersData->Teams->find('list', ['limit' => 200]);
        $notes = $this->EmployersData->Notes->find('list', ['limit' => 200]);
        $this->set(compact('employersData', 'employers', 'employersRoles', 'departments', 'situations', 'companies', 'plans', 'teams', 'notes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employers Data id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employersData = $this->EmployersData->get($id);
        if ($this->EmployersData->delete($employersData)) {
            $this->Flash->success(__('The employers data has been deleted.'));
        } else {
            $this->Flash->error(__('The employers data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
