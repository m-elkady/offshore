<?php
/**
 * @var \App\View\AppView             $this
 * @var \App\Model\Entity\AnnualLeave $annualLeave
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Annual Leave'), ['action' => 'edit', $annualLeave->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Annual Leave'), ['action' => 'delete', $annualLeave->id], ['confirm' => __('Are you sure you want to delete # {0}?', $annualLeave->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Annual Leaves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Annual Leave'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="annualLeaves view large-9 medium-8 columns content">
    <h3><?= h($annualLeave->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($annualLeave->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Number') ?></th>
            <td><?= h($annualLeave->id_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($annualLeave->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($annualLeave->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Expiry Date') ?></th>
            <td><?= h($annualLeave->id_expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Leaving Date') ?></th>
            <td><?= h($annualLeave->leaving_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($annualLeave->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($annualLeave->modified) ?></td>
        </tr>
    </table>
</div>
