<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployersData Model
 *
 * @property \App\Model\Table\EmployersTable&\Cake\ORM\Association\BelongsTo $Employers
 * @property \App\Model\Table\EmployersRolesTable&\Cake\ORM\Association\BelongsTo $EmployersRoles
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\SituationsTable&\Cake\ORM\Association\BelongsTo $Situations
 * @property \App\Model\Table\CompaniesTable&\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\PlansTable&\Cake\ORM\Association\BelongsTo $Plans
 * @property \App\Model\Table\TeamsTable&\Cake\ORM\Association\BelongsTo $Teams
 * @property \App\Model\Table\NotesTable&\Cake\ORM\Association\BelongsTo $Notes
 *
 * @method \App\Model\Entity\EmployersData get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployersData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployersData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployersData|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployersData saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployersData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployersData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployersData findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployersDataTable extends Table
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

        $this->setTable('employers_data');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employers', [
            'foreignKey' => 'employer_id',
        ]);
        $this->belongsTo('EmployersRoles', [
            'foreignKey' => 'employers_role_id',
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
        ]);
        $this->belongsTo('Situations', [
            'foreignKey' => 'situation_id',
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
        ]);
        $this->belongsTo('Plans', [
            'foreignKey' => 'plan_id',
        ]);
        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
        ]);
        $this->belongsTo('Notes', [
            'foreignKey' => 'note_id',
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
        $rules->add($rules->existsIn(['employers_role_id'], 'EmployersRoles'));
        $rules->add($rules->existsIn(['department_id'], 'Departments'));
        $rules->add($rules->existsIn(['situation_id'], 'Situations'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['plan_id'], 'Plans'));
        $rules->add($rules->existsIn(['team_id'], 'Teams'));
        $rules->add($rules->existsIn(['note_id'], 'Notes'));

        return $rules;
    }
}
