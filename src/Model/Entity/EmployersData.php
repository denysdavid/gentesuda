<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployersData Entity
 *
 * @property int $id
 * @property int|null $employer_id
 * @property int|null $employers_role_id
 * @property int|null $department_id
 * @property int|null $situation_id
 * @property int|null $company_id
 * @property int|null $plan_id
 * @property int|null $team_id
 * @property int|null $note_id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 *
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\EmployersRole $employers_role
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Situation $situation
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Plan $plan
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Note $note
 */
class EmployersData extends Entity
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
        'employers_role_id' => true,
        'department_id' => true,
        'situation_id' => true,
        'company_id' => true,
        'plan_id' => true,
        'team_id' => true,
        'note_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true,
        'employer' => true,
        'employers_role' => true,
        'department' => true,
        'situation' => true,
        'company' => true,
        'plan' => true,
        'team' => true,
        'note' => true,
    ];
}
