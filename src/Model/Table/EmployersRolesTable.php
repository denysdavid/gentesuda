<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployersRoles Model
 *
 * @property \App\Model\Table\EmployersDataTable&\Cake\ORM\Association\HasMany $EmployersData
 *
 * @method \App\Model\Entity\EmployersRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployersRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployersRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployersRole|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployersRole saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployersRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployersRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployersRole findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployersRolesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('employers_roles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('EmployersData', [
            'foreignKey' => 'employers_role_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('funcao')
            ->maxLength('funcao', 45)
            ->requirePresence('funcao', 'create')
            ->notEmptyString('funcao');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        $validator
            ->dateTime('deleted_at')
            ->allowEmptyDateTime('deleted_at');

        return $validator;
    }
}
