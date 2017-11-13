<?php
/**
 * @var \App\View\AppView                          $this
 * @var \App\Model\Entity\MedicalOxygenCertificate $medicalOxygenCertificate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medical Oxygen Certificate'), ['action' => 'edit', $medicalOxygenCertificate->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Medical Oxygen Certificate'), ['action' => 'delete', $medicalOxygenCertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicalOxygenCertificate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medical Oxygen Certificates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medical Oxygen Certificate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicalOxygenCertificates view large-9 medium-8 columns content">
    <h3><?= h($medicalOxygenCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serial No') ?></th>
            <td><?= h($medicalOxygenCertificate->serial_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vessel Name') ?></th>
            <td><?= h($medicalOxygenCertificate->vessel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medicalOxygenCertificate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Issue') ?></th>
            <td><?= h($medicalOxygenCertificate->date_of_issue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($medicalOxygenCertificate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($medicalOxygenCertificate->modified) ?></td>
        </tr>
    </table>
</div>
