<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EebdCertificateItem Entity
 *
 * @property int                               $id
 * @property int                               $eebd_certificate_id
 * @property string                            $type
 * @property string                            $serial_no
 * @property string                            $set_serial_no
 * @property int                               $capacity
 * @property \Cake\I18n\FrozenDate             $last_hydro_test
 * @property string                            $status
 * @property string                            $remarks
 * @property \Cake\I18n\FrozenTime             $created
 * @property \Cake\I18n\FrozenTime             $updated
 *
 * @property \App\Model\Entity\EebdCertificate $eebd_certificate
 */
class EebdCertificateItem extends Entity
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
        'eebd_certificate_id' => true,
        'type'                => true,
        'serial_no'           => true,
        'set_serial_no'       => true,
        'capacity'            => true,
        'last_hydro_test'     => true,
        'status'              => true,
        'remarks'             => true,
        'created'             => true,
        'updated'             => true,
        'eebd_certificate'    => true,
    ];
}
