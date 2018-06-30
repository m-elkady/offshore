<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vessel $vessel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vessel'), ['action' => 'edit', $vessel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vessel'), ['action' => 'delete', $vessel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vessel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vessels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vessel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fire Extinguisher Certificates'), ['controller' => 'FireExtinguisherCertificates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fire Extinguisher Certificate'), ['controller' => 'FireExtinguisherCertificates', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vessels view large-9 medium-8 columns content">
    <h3><?= h($vessel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vessel->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imo Number') ?></th>
            <td><?= h($vessel->imo_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $vessel->has('country') ? $this->Html->link($vessel->country->name, ['controller' => 'Countries', 'action' => 'view', $vessel->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Call Sign') ?></th>
            <td><?= h($vessel->call_sign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $vessel->has('client') ? $this->Html->link($vessel->client->name, ['controller' => 'Clients', 'action' => 'view', $vessel->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vessel->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fire Extinguisher Certificates') ?></h4>
        <?php if (!empty($vessel->fire_extinguisher_certificates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Certificate Number') ?></th>
                <th scope="col"><?= __('Vessel Id') ?></th>
                <th scope="col"><?= __('Certificate Text Id') ?></th>
                <th scope="col"><?= __('Inspection Date') ?></th>
                <th scope="col"><?= __('Next Inspection Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vessel->fire_extinguisher_certificates as $fireExtinguisherCertificates): ?>
            <tr>
                <td><?= h($fireExtinguisherCertificates->id) ?></td>
                <td><?= h($fireExtinguisherCertificates->certificate_number) ?></td>
                <td><?= h($fireExtinguisherCertificates->vessel_id) ?></td>
                <td><?= h($fireExtinguisherCertificates->certificate_text_id) ?></td>
                <td><?= h($fireExtinguisherCertificates->inspection_date) ?></td>
                <td><?= h($fireExtinguisherCertificates->next_inspection_date) ?></td>
                <td><?= h($fireExtinguisherCertificates->created) ?></td>
                <td><?= h($fireExtinguisherCertificates->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FireExtinguisherCertificates', 'action' => 'view', $fireExtinguisherCertificates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FireExtinguisherCertificates', 'action' => 'edit', $fireExtinguisherCertificates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FireExtinguisherCertificates', 'action' => 'delete', $fireExtinguisherCertificates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fireExtinguisherCertificates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
