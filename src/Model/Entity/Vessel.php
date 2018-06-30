<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vessel Entity
 *
 * @property int $id
 * @property string $name
 * @property string $imo_number
 * @property int $country_id
 * @property string $call_sign
 * @property int $client_id
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\FireExtinguisherCertificate[] $fire_extinguisher_certificates
 */
class Vessel extends Entity
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
        'imo_number' => true,
        'country_id' => true,
        'call_sign' => true,
        'client_id' => true,
        'country' => true,
        'client' => true,
        'fire_extinguisher_certificates' => true
    ];
}
