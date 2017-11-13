<?php
/**
 * @var \App\View\AppView              $this
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
    </ul>
</nav>
<div class="deliveryNotes view large-9 medium-8 columns content">
    <h3><?= h($deliveryNote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($deliveryNote->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Name') ?></th>
            <td><?= h($deliveryNote->client_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Person') ?></th>
            <td><?= h($deliveryNote->contact_person) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($deliveryNote->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($deliveryNote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($deliveryNote->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($deliveryNote->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($deliveryNote->modified) ?></td>
        </tr>
    </table>
</div>
