<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AnnualLeave Entity
 *
 * @property int $id
 * @property string $name
 * @property string $id_number
 * @property \Cake\I18n\FrozenTime $id_expiry_date
 * @property string $phone_number
 * @property \Cake\I18n\FrozenTime $leaving_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class AnnualLeave extends Entity
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
        'name' => true,
        'id_number' => true,
        'id_expiry_date' => true,
        'phone_number' => true,
        'leaving_date' => true,
        'created' => true,
        'modified' => true
    ];
}
