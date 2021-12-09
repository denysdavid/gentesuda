<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployersMovement Entity
 *
 * @property int $id
 * @property int $employer_id
 * @property int $movement_id
 * @property \Cake\I18n\FrozenDate $data_inicio
 * @property \Cake\I18n\FrozenDate|null $data_fim
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 *
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\Movement $movement
 */
class EmployersMovement extends Entity
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
        'employer_id' => true,
        'movement_id' => true,
        'data_inicio' => true,
        'data_fim' => true,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true,
        'employer' => true,
        'movement' => true,
    ];
}
