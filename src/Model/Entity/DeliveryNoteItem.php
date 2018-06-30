<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeliveryNoteItem Entity
 *
 * @property int $id
 * @property int $delivery_note_id
 * @property int $item_no
 * @property string $description
 * @property int $ordered
 * @property int $delivered
 * @property int $outstanding
 *
 * @property \App\Model\Entity\DeliveryNote $delivery_note
 */
class DeliveryNoteItem extends Entity
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
        'delivery_note_id' => true,
        'item_no' => true,
        'description' => true,
        'ordered' => true,
        'delivered' => true,
        'outstanding' => true,
        'delivery_note' => true
    ];
}
