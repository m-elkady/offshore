<?php
/**
 * @var \App\View\AppView                        $this
 * @var \App\Model\Entity\FixedSystemCertificate $fixedSystemCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fixed System Certificate'), ['action' => 'edit', $fixedSystemCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Fixed System Certificate'), ['action' => 'delete', $fixedSystemCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixedSystemCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fixed System Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixed System Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fixedSystemCertificates view large-9 medium-8 columns content">
    <h3><?= h($fixedSystemCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($fixedSystemCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($fixedSystemCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fixedSystemCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($fixedSystemCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fixedSystemCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fixedSystemCertificate->modified) ?></td>
        </tr>
    </table>
</div>
