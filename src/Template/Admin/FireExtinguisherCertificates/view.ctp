<?php
/**
 * @var \App\View\AppView                             $this
 * @var \App\Model\Entity\FireExtinguisherCertificate $fireExtinguisherCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fire Extinguisher Certificate'), ['action' => 'edit', $fireExtinguisherCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Fire Extinguisher Certificate'), ['action' => 'delete', $fireExtinguisherCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fireExtinguisherCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fire Extinguisher Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fire Extinguisher Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fireExtinguisherCertificates view large-9 medium-8 columns content">
    <h3><?= h($fireExtinguisherCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($fireExtinguisherCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($fireExtinguisherCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fireExtinguisherCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($fireExtinguisherCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fireExtinguisherCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fireExtinguisherCertificate->modified) ?></td>
        </tr>
    </table>
</div>
