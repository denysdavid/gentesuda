<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employers Model
 *
 * @property \App\Model\Table\EmployersDataTable&\Cake\ORM\Association\HasMany $EmployersData
 * @property \App\Model\Table\MovementsTable&\Cake\ORM\Association\BelongsToMany $Movements
 *
 * @method \App\Model\Entity\Employer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employer findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployersTable extends Table
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

        $this->setTable('employers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('EmployersData', [
            'foreignKey' => 'employer_id',
        ]);
        $this->belongsToMany('Movements', [
            'foreignKey' => 'employer_id',
            'targetForeignKey' => 'movement_id',
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('funcionario_cod')
            ->maxLength('funcionario_cod', 45)
            ->requirePresence('funcionario_cod', 'create')
            ->notEmptyString('funcionario_cod')
            ->add('funcionario_cod', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('pis_pasep')
            ->maxLength('pis_pasep', 45)
            ->notEmptyString('pis_pasep');

        $validator
            ->integer('rg')
            ->maxLength('rg', 15)
            ->requirePresence('rg', 'create')
            ->notEmptyString('rg');

        $validator
            ->integer('cpf')
            ->maxLength('cpf', 11)
            ->minLength('cpf', 11)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf')
            ->add('cpf', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('ctps')
            ->maxLength('ctps', 15)
            ->notEmptyString('ctps');

        $validator
            ->date('data_inicio')
            ->requirePresence('data_inicio', 'create')
            ->notEmptyDate('data_inicio');

        $validator
            ->date('data_admissao')
            ->requirePresence('data_admissao', 'create')
            ->notEmptyDate('data_admissao');

        $validator
            ->date('data_demissao')
            ->allowEmptyDate('data_demissao');

        $validator
            ->date('data_nascimento')
            ->requirePresence('data_nascimento', 'create')
            ->notEmptyDate('data_nascimento');

        $validator
            ->date('data_referencia')
            ->allowEmptyDate('data_referencia');

        $validator
            ->integer('idade')
            ->allowEmptyString('idade');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 11)
            ->requirePresence('telefone', 'create')
            ->notEmptyString('telefone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('adicional_salario')
            ->maxLength('adicional_salario', 45)
            ->allowEmptyString('adicional_salario');

        $validator
            ->date('data_experiencia_1')
            ->requirePresence('data_experiencia_1', 'create')
            ->notEmptyDate('data_experiencia_1');

        $validator
            ->date('data_experiencia_2')
            ->requirePresence('data_experiencia_2', 'create')
            ->notEmptyDate('data_experiencia_2');

        $validator
            ->scalar('assinatura_home_office')
            ->maxLength('assinatura_home_office', 3)
            ->requirePresence('assinatura_home_office', 'create')
            ->notEmptyString('assinatura_home_office');

        $validator
            ->scalar('assinatura_admissao')
            ->maxLength('assinatura_admissao', 3)
            ->requirePresence('assinatura_admissao', 'create')
            ->notEmptyString('assinatura_admissao');

        $validator
            ->scalar('salario_banco')
            ->maxLength('salario_banco', 3)
            ->requirePresence('salario_banco', 'create')
            ->notEmptyString('salario_banco');

        $validator
            ->scalar('salario_agencia')
            ->maxLength('salario_agencia', 5)
            ->requirePresence('salario_agencia', 'create')
            ->notEmptyString('salario_agencia');

        $validator
            ->scalar('salario_conta')
            ->maxLength('salario_conta', 15)
            ->requirePresence('salario_conta', 'create')
            ->notEmptyString('salario_conta');

        $validator
            ->scalar('chave_pix')
            ->maxLength('chave_pix', 100)
            ->requirePresence('chave_pix', 'create')
            ->notEmptyString('chave_pix');

        $validator
            ->scalar('observacoes')
            ->maxLength('observacoes', 255)
            ->allowEmptyString('observacoes');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['funcionario_cod']));

        return $rules;
    }
}
