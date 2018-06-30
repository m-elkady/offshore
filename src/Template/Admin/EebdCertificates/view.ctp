<?php
/**
 * @var \App\View\AppView $this
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
        <li><?= $this->Html->link(__('List Eebd Certificate Items'), ['controller' => 'EebdCertificateItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Eebd Certificate Item'), ['controller' => 'EebdCertificateItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eebdCertificates view large-9 medium-8 columns content">
    <h3><?= h($eebdCertificate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Certificate Number') ?></th>
            <td><?= h($eebdCertificate->certificate_number) ?></td>
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
            <th scope="row"><?= __('Inspection Date') ?></th>
            <td><?= h($eebdCertificate->inspection_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Inspection Date') ?></th>
            <td><?= h($eebdCertificate->next_inspection_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Hydro Test') ?></th>
            <td><?= h($eebdCertificate->next_hydro_test) ?></td>
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
    <div class="row">
        <h4><?= __('Certificate Text') ?></h4>
        <?= $this->Text->autoParagraph(h($eebdCertificate->certificate_text)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Eebd Certificate Items') ?></h4>
        <?php if (!empty($eebdCertificate->eebd_certificate_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Eebd Certificate Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Serial No') ?></th>
                <th scope="col"><?= __('Set Serial No') ?></th>
                <th scope="col"><?= __('Capacity') ?></th>
                <th scope="col"><?= __('Last Hydro Test') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($eebdCertificate->eebd_certificate_items as $eebdCertificateItems): ?>
            <tr>
                <td><?= h($eebdCertificateItems->id) ?></td>
                <td><?= h($eebdCertificateItems->eebd_certificate_id) ?></td>
                <td><?= h($eebdCertificateItems->type) ?></td>
                <td><?= h($eebdCertificateItems->serial_no) ?></td>
                <td><?= h($eebdCertificateItems->set_serial_no) ?></td>
                <td><?= h($eebdCertificateItems->capacity) ?></td>
                <td><?= h($eebdCertificateItems->last_hydro_test) ?></td>
                <td><?= h($eebdCertificateItems->status) ?></td>
                <td><?= h($eebdCertificateItems->remarks) ?></td>
                <td><?= h($eebdCertificateItems->created) ?></td>
                <td><?= h($eebdCertificateItems->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EebdCertificateItems', 'action' => 'view', $eebdCertificateItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EebdCertificateItems', 'action' => 'edit', $eebdCertificateItems->id]) ?>
                    <?= $this->Html->link(__('Delete'), ['controller' => 'EebdCertificateItems', 'action' => 'delete', $eebdCertificateItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eebdCertificateItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
