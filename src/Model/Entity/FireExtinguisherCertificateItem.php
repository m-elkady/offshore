<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FireExtinguisherCertificateItem Entity
 *
 * @property int                                           $id
 * @property int                                           $quantity
 * @property string                                        $type
 * @property int                                           $capacity
 * @property int                                           $capacity_unit
 * @property \Cake\I18n\FrozenTime                         $last_hydro_test
 * @property string                                        $status
 * @property int                                           $remarks
 * @property \Cake\I18n\FrozenTime                         $created
 * @property \Cake\I18n\FrozenTime                         $updated
 * @property int                                           $fire_extinguisher_certificate_id
 *
 * @property \App\Model\Entity\FireExtinguisherCertificate $fire_extinguisher_certificate
 */
class FireExtinguisherCertificateItem extends Entity
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
        'quantity'                         => true,
        'serial_no'                        => true,
        'capacity'                         => true,
        'capacity_unit'                    => true,
        'last_hydro_test'                  => true,
        'status'                           => true,
        'remarks'                          => true,
        'created'                          => true,
        'updated'                          => true,
        'fire_extinguisher_certificate_id' => true,
        'fire_extinguisher_certificate'    => true,
        'fire_extinguisher_item_type_id'   => true,
    ];

//    protected function _getStatus($status)
//    {
//        return explode(',', $status);
//    }

//    protected function _setStatus($status)
//    {
//        debug($status);
//        return implode(',', $status);
//    }

}
