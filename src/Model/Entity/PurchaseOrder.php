<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PurchaseOrder Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $vendor_id
 * @property string $terms_conditions
 * @property int $discount
 * @property string $notes
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Vendor $vendor
 */
class PurchaseOrder extends Entity
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
        'employee_id' => true,
        'vendor_id' => true,
        'terms_conditions' => true,
        'discount' => true,
        'notes' => true,
        'created' => true,
        'modified' => true,
        'employee' => true,
        'vendor' => true,
        'purchase_order_items'=>true,
    ];
}
