<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FireExtinguisherCertificate Entity
 *
 * @property int $id
 * @property string $serial_no
 * @property \Cake\I18n\FrozenTime $date_of_issue
 * @property string $vessel_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class FireExtinguisherCertificate extends Entity
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
        'serial_no' => true,
        'date_of_issue' => true,
        'vessel_name' => true,
        'created' => true,
        'modified' => true
    ];
}
