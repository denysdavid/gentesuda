<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployersMovements Controller
 *
 * @property \App\Model\Table\EmployersMovementsTable $EmployersMovements
 *
 * @method \App\Model\Entity\EmployersMovement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployersMovementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employers', 'Movements'],
        ];
        $employersMovements = $this->paginate($this->EmployersMovements);

        $this->set(compact('employersMovements'));
    }

    /**
     * View method
     *
     * @param string|null $id Employers Movement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employersMovement = $this->EmployersMovements->get($id, [
            'contain' => ['Employers', 'Movements'],
        ]);

        $this->set('employersMovement', $employersMovement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employersMovement = $this->EmployersMovements->newEntity();
        if ($this->request->is('post')) {
            $employersMovement = $this->EmployersMovements->patchEntity($employersMovement, $this->request->getData());
            if ($this->EmployersMovements->save($employersMovement)) {
                $this->Flash->success(__('The employers movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employers movement could not be saved. Please, try again.'));
        }
        $employers = $this->EmployersMovements->Employers->find('list', ['keyField' =>'id' ,'valueField' => 'nome' ]);
        $movements = $this->EmployersMovements->Movements->find('list', ['keyField' =>'id' ,'valueField'=>'movimentacao' ]);
        $this->set(compact('employersMovement', 'employers', 'movements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employers Movement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employersMovement = $this->EmployersMovements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employersMovement = $this->EmployersMovements->patchEntity($employersMovement, $this->request->getData());
            if ($this->EmployersMovements->save($employersMovement)) {
                $this->Flash->success(__('The employers movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employers movement could not be saved. Please, try again.'));
        }
        $employers = $this->EmployersMovements->Employers->find('list', ['limit' => 200]);
        $movements = $this->EmployersMovements->Movements->find('list', ['limit' => 200]);
        $this->set(compact('employersMovement', 'employers', 'movements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employers Movement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employersMovement = $this->EmployersMovements->get($id);
        if ($this->EmployersMovements->delete($employersMovement)) {
            $this->Flash->success(__('The employers movement has been deleted.'));
        } else {
            $this->Flash->error(__('The employers movement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
