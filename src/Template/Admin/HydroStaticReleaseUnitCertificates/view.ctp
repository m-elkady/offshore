<?php
/**
 * @var \App\View\AppView                                   $this
 * @var \App\Model\Entity\HydroStaticReleaseUnitCertificate $hydroStaticReleaseUnitCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hydro Static Release Unit Certificate'), ['action' => 'edit', $hydroStaticReleaseUnitCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Hydro Static Release Unit Certificate'), ['action' => 'delete', $hydroStaticReleaseUnitCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hydroStaticReleaseUnitCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hydro Static Release Unit Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hydro Static Release Unit Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hydroStaticReleaseUnitCertificates view large-9 medium-8 columns content">
    <h3><?= h($hydroStaticReleaseUnitCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($hydroStaticReleaseUnitCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($hydroStaticReleaseUnitCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hydroStaticReleaseUnitCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($hydroStaticReleaseUnitCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hydroStaticReleaseUnitCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hydroStaticReleaseUnitCertificate->modified) ?></td>
        </tr>
    </table>
</div>
