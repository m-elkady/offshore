<?php
/**
 * @var \App\View\AppView           $this
 * @var \App\Model\Entity\PriceList $priceList
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Price List'), ['action' => 'edit', $priceList->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Price List'), ['action' => 'delete', $priceList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceList->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Price Lists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Price List'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="priceLists view large-9 medium-8 columns content">
    <h3><?= h($priceList->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($priceList->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Name') ?></th>
            <td><?= h($priceList->client_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Person') ?></th>
            <td><?= h($priceList->contact_person) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($priceList->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($priceList->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($priceList->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($priceList->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($priceList->modified) ?></td>
        </tr>
    </table>
</div>
