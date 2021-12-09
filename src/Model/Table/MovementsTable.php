<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movements Model
 *
 * @property \App\Model\Table\EmployersTable&\Cake\ORM\Association\BelongsToMany $Employers
 *
 * @method \App\Model\Entity\Movement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movement findOrCreate($search, callable $callback = null, $options = [])
 */
class MovementsTable extends Table
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

        $this->setTable('movements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Employers', [
            'foreignKey' => 'movement_id',
            'targetForeignKey' => 'employer_id',
            'joinTable' => 'employers_movements',
        ]);
        
        $this->belongsToMany('Employers', [
            'foreignKey' => 'movement_id',
            'targetForeignKey' => 'employer_id',
            'joinTable' => 'employers_movements',
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
            ->scalar('movimentacao')
            ->maxLength('movimentacao', 45)
            ->requirePresence('movimentacao', 'create')
            ->notEmptyString('movimentacao');

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
