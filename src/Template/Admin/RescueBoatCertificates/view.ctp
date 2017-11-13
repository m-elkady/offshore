<?php
/**
 * @var \App\View\AppView                       $this
 * @var \App\Model\Entity\RescueBoatCertificate $rescueBoatCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rescue Boat Certificate'), ['action' => 'edit', $rescueBoatCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Rescue Boat Certificate'), ['action' => 'delete', $rescueBoatCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rescueBoatCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rescue Boat Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rescue Boat Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rescueBoatCertificates view large-9 medium-8 columns content">
    <h3><?= h($rescueBoatCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($rescueBoatCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($rescueBoatCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rescueBoatCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($rescueBoatCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rescueBoatCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rescueBoatCertificate->modified) ?></td>
        </tr>
    </table>
</div>
