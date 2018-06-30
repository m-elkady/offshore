<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeliveryNote $deliveryNote
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Delivery Note'), ['action' => 'edit', $deliveryNote->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Delivery Note'), ['action' => 'delete', $deliveryNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliveryNote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Delivery Notes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Delivery Note'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Delivery Note Items'), ['controller' => 'DeliveryNoteItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Delivery Note Item'), ['controller' => 'DeliveryNoteItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deliveryNotes view large-9 medium-8 columns content">
    <h3><?= h($deliveryNote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Quotation') ?></th>
            <td><?= $deliveryNote->has('quotation') ? $this->Html->link($deliveryNote->quotation->id, ['controller' => 'Quotations', 'action' => 'view', $deliveryNote->quotation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $deliveryNote->has('client') ? $this->Html->link($deliveryNote->client->name, ['controller' => 'Clients', 'action' => 'view', $deliveryNote->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Method') ?></th>
            <td><?= h($deliveryNote->delivery_method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($deliveryNote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($deliveryNote->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($deliveryNote->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dispatch Date') ?></th>
            <td><?= h($deliveryNote->dispatch_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($deliveryNote->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Delivery Note Items') ?></h4>
        <?php if (!empty($deliveryNote->delivery_note_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Delivery Note Id') ?></th>
                <th scope="col"><?= __('Item No') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Ordered') ?></th>
                <th scope="col"><?= __('Delivered') ?></th>
                <th scope="col"><?= __('Outstanding') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($deliveryNote->delivery_note_items as $deliveryNoteItems): ?>
            <tr>
                <td><?= h($deliveryNoteItems->id) ?></td>
                <td><?= h($deliveryNoteItems->delivery_note_id) ?></td>
                <td><?= h($deliveryNoteItems->item_no) ?></td>
                <td><?= h($deliveryNoteItems->description) ?></td>
                <td><?= h($deliveryNoteItems->ordered) ?></td>
                <td><?= h($deliveryNoteItems->delivered) ?></td>
                <td><?= h($deliveryNoteItems->outstanding) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DeliveryNoteItems', 'action' => 'view', $deliveryNoteItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DeliveryNoteItems', 'action' => 'edit', $deliveryNoteItems->id]) ?>
                    <?= $this->Html->link(__('Delete'), ['controller' => 'DeliveryNoteItems', 'action' => 'delete', $deliveryNoteItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliveryNoteItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
