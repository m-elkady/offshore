<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DeliveryNote Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $quotation_id
 * @property int $client_id
 * @property \Cake\I18n\FrozenDate $dispatch_date
 * @property string $delivery_method
 * @property string $notes
 *
 * @property \App\Model\Entity\Quotation $quotation
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\DeliveryNoteItem[] $delivery_note_items
 */
class DeliveryNote extends Entity
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
        'created' => true,
        'modified' => true,
        'quotation_id' => true,
        'client_id' => true,
        'dispatch_date' => true,
        'delivery_method' => true,
        'notes' => true,
        'quotation' => true,
        'client' => true,
        'delivery_note_items' => true
    ];
}
