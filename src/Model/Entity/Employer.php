<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employer Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $funcionario_cod
 * @property string|null $pis_pasep
 * @property string|null $rg
 * @property string $cpf
 * @property string|null $ctps
 * @property \Cake\I18n\FrozenDate $data_inicio
 * @property \Cake\I18n\FrozenDate $data_admissao
 * @property \Cake\I18n\FrozenDate|null $data_demissao
 * @property \Cake\I18n\FrozenDate $data_nascimento
 * @property \Cake\I18n\FrozenDate|null $data_referencia
 * @property int|null $idade
 * @property string $telefone
 * @property string $email
 * @property string|null $adicional_salario
 * @property \Cake\I18n\FrozenDate $data_experiencia_1
 * @property \Cake\I18n\FrozenDate $data_experiencia_2
 * @property string $assinatura_home_office
 * @property string $assinatura_admissao
 * @property string $salario_banco
 * @property string $salario_agencia
 * @property string $salario_conta
 * @property string $chave_pix
 * @property string|null $observacoes
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 *
 * @property \App\Model\Entity\EmployersData[] $employers_data
 * @property \App\Model\Entity\Movement[] $movements
 */
class Employer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'funcionario_cod' => true,
        'pis_pasep' => true,
        'rg' => true,
        'cpf' => true,
        'ctps' => true,
        'data_inicio' => true,
        'data_admissao' => true,
        'data_demissao' => true,
        'data_nascimento' => true,
        'data_referencia' => true,
        'idade' => true,
        'telefone' => true,
        'email' => true,
        'adicional_salario' => true,
        'data_experiencia_1' => true,
        'data_experiencia_2' => true,
        'assinatura_home_office' => true,
        'assinatura_admissao' => true,
        'salario_banco' => true,
        'salario_agencia' => true,
        'salario_conta' => true,
        'chave_pix' => true,
        'observacoes' => true,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true,
        'employers_data' => true,
        'movements' => true,
    ];
}
