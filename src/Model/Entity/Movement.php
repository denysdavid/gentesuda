<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movement Entity
 *
 * @property int $id
 * @property string $movimentacao
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 *
 * @property \App\Model\Entity\Employer[] $employers
 */
class Movement extends Entity
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
        'movimentacao' => true,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true,
        'employers' => true,
    ];
}
