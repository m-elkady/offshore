<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuotationItem Entity
 *
 * @property int $id
 * @property int $quotation_id
 * @property string $description
 * @property bool $taxed
 * @property int $quantity
 * @property float $unit_price
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Quotation $quotation
 */
class QuotationItem extends Entity
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
        'id' => true,
        'quotation_id' => true,
        'description' => true,
        'taxed' => true,
        'quantity' => true,
        'unit_price' => true,
        'created' => true,
        'modified' => true,
        'quotation' => true
    ];
}
