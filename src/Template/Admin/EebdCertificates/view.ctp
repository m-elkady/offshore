<?php
/**
 * @var \App\View\AppView                 $this
 * @var \App\Model\Entity\EebdCertificate $eebdCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Eebd Certificate'), ['action' => 'edit', $eebdCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Eebd Certificate'), ['action' => 'delete', $eebdCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eebdCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eebd Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Eebd Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eebdCertificates view large-9 medium-8 columns content">
    <h3><?= h($eebdCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($eebdCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($eebdCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($eebdCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($eebdCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($eebdCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($eebdCertificate->modified) ?></td>
        </tr>
    </table>
</div>
