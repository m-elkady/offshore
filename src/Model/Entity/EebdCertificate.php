<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EebdCertificate Entity
 *
 * @property int $id
 * @property string $certificate_number
 * @property string $vessel_name
 * @property string $certificate_text
 * @property \Cake\I18n\FrozenDate $inspection_date
 * @property \Cake\I18n\FrozenDate $next_inspection_date
 * @property \Cake\I18n\FrozenTime $next_hydro_test
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\EebdCertificateItem[] $eebd_certificate_items
 */
class EebdCertificate extends Entity
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
        'certificate_number' => true,
        'vessel_name' => true,
        'certificate_text' => true,
        'inspection_date' => true,
        'next_inspection_date' => true,
        'next_hydro_test' => true,
        'created' => true,
        'modified' => true,
        'eebd_certificate_items' => true
    ];
}
