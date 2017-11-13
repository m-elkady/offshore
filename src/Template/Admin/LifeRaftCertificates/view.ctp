<?php
/**
 * @var \App\View\AppView                     $this
 * @var \App\Model\Entity\LifeRaftCertificate $lifeRaftCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Life Raft Certificate'), ['action' => 'edit', $lifeRaftCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Life Raft Certificate'), ['action' => 'delete', $lifeRaftCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lifeRaftCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Life Raft Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Life Raft Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lifeRaftCertificates view large-9 medium-8 columns content">
    <h3><?= h($lifeRaftCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($lifeRaftCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($lifeRaftCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lifeRaftCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($lifeRaftCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lifeRaftCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lifeRaftCertificate->modified) ?></td>
        </tr>
    </table>
</div>
