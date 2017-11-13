<?php
/**
 * @var \App\View\AppView                  $this
 * @var \App\Model\Entity\ScapaCertificate $scapaCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scapa Certificate'), ['action' => 'edit', $scapaCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Scapa Certificate'), ['action' => 'delete', $scapaCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scapaCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scapa Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scapa Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scapaCertificates view large-9 medium-8 columns content">
    <h3><?= h($scapaCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($scapaCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($scapaCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($scapaCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($scapaCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($scapaCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($scapaCertificate->modified) ?></td>
        </tr>
    </table>
</div>
