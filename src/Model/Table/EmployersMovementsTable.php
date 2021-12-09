<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployersMovements Model
 *
 * @property \App\Model\Table\EmployersTable&\Cake\ORM\Association\BelongsTo $Employers
 * @property \App\Model\Table\MovementsTable&\Cake\ORM\Association\BelongsTo $Movements
 *
 * @method \App\Model\Entity\EmployersMovement get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployersMovement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployersMovement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployersMovement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployersMovement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployersMovement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployersMovement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployersMovement findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployersMovementsTable extends Table
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

        $this->setTable('employers_movements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employers', [
            'foreignKey' => 'employer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Movements', [
            'foreignKey' => 'movement_id',
            'joinType' => 'INNER',
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
            ->date('data_inicio')
            ->requirePresence('data_inicio', 'create')
            ->notEmptyDate('data_inicio');

        $validator
            ->date('data_fim')
            ->allowEmptyDate('data_fim');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['employer_id'], 'Employers'));
        $rules->add($rules->existsIn(['movement_id'], 'Movements'));

        return $rules;
    }
}
