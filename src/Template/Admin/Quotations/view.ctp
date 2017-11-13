<?php
/**
 * @var \App\View\AppView           $this
 * @var \App\Model\Entity\Quotation $quotation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quotation'), ['action' => 'edit', $quotation->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Quotation'), ['action' => 'delete', $quotation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quotations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quotation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quotations view large-9 medium-8 columns content">
    <h3><?= h($quotation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($quotation->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Name') ?></th>
            <td><?= h($quotation->client_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Person') ?></th>
            <td><?= h($quotation->contact_person) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($quotation->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quotation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($quotation->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quotation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quotation->modified) ?></td>
        </tr>
    </table>
</div>
