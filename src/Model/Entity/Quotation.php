<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quotation Entity
 *
 * @property int $id
 * @property int $client_id
 * @property int $employee_id
 * @property string $terms_conditions
 * @property string $notes
 * @property float $discount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\QuotationItem[] $quotation_items
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Employee $employee
 */
class Quotation extends Entity
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
        'client_id' => true,
        'employee_id' => true,
        'terms_conditions' => true,
        'notes' => true,
        'discount' => true,
        'created' => true,
        'modified' => true,
        'quotation_items' => true,
        'client' => true,
        'employee' => true
    ];
}
