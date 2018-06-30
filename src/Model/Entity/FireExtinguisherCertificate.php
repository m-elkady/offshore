<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FireExtinguisherCertificate Entity
 *
 * @property int                   $id
 * @property string                $certificate_number
 * @property string                $vessel_name
 * @property string                $certificate_text
 * @property string                $certificate_type
 * @property \Cake\I18n\FrozenTime $inspection_date
 * @property \Cake\I18n\FrozenTime $next_inspection_date
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
        'id'                                  => true,
        'certificate_number'                  => true,
        'fire_extinguisher_certificate_items' => true,
        'vessel_id'                           => true,
        'certificate_text_id'                 => true,
        'certificate_type'                    => true,
        'inspection_date'                     => true,
        'status'                              => true,
        'phase'                               => true,
        'next_inspection_date'                => true,
        'created'                             => true,
        'modified'                            => true,
    ];
}
