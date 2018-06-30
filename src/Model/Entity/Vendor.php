<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendor Entity
 *
 * @property int $id
 * @property string $name
 * @property string $contact_person
 * @property string $email
 * @property int $address
 * @property int $zip_code
 * @property string $phone
 * @property string $fax
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 */
class Vendor extends Entity
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
        'contact_person' => true,
        'email' => true,
        'address' => true,
        'zip_code' => true,
        'phone' => true,
        'fax' => true,
        'created' => true,
        'updated' => true
    ];
}
