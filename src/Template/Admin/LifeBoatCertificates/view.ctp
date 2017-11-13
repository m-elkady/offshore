<?php
/**
 * @var \App\View\AppView                     $this
 * @var \App\Model\Entity\LifeBoatCertificate $lifeBoatCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Life Boat Certificate'), ['action' => 'edit', $lifeBoatCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Life Boat Certificate'), ['action' => 'delete', $lifeBoatCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lifeBoatCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Life Boat Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Life Boat Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lifeBoatCertificates view large-9 medium-8 columns content">
    <h3><?= h($lifeBoatCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($lifeBoatCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($lifeBoatCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lifeBoatCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($lifeBoatCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lifeBoatCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lifeBoatCertificate->modified) ?></td>
        </tr>
    </table>
</div>
