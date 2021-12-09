<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployersRoles Controller
 *
 * @property \App\Model\Table\EmployersRolesTable $EmployersRoles
 *
 * @method \App\Model\Entity\EmployersRole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployersRolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $employersRoles = $this->paginate($this->EmployersRoles);

        $this->set(compact('employersRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Employers Role id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employersRole = $this->EmployersRoles->get($id, [
            'contain' => ['EmployersData'],
        ]);

        $this->set('employersRole', $employersRole);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employersRole = $this->EmployersRoles->newEntity();
        if ($this->request->is('post')) {
            $employersRole = $this->EmployersRoles->patchEntity($employersRole, $this->request->getData());
            if ($this->EmployersRoles->save($employersRole)) {
                $this->Flash->success(__('The employers role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employers role could not be saved. Please, try again.'));
        }
        $this->set(compact('employersRole'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employers Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employersRole = $this->EmployersRoles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employersRole = $this->EmployersRoles->patchEntity($employersRole, $this->request->getData());
            if ($this->EmployersRoles->save($employersRole)) {
                $this->Flash->success(__('The employers role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employers role could not be saved. Please, try again.'));
        }
        $this->set(compact('employersRole'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employers Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employersRole = $this->EmployersRoles->get($id);
        if ($this->EmployersRoles->delete($employersRole)) {
            $this->Flash->success(__('The employers role has been deleted.'));
        } else {
            $this->Flash->error(__('The employers role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
