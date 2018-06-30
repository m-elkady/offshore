<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FireExtinguisherItemType $fireExtinguisherItemType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fire Extinguisher Item Type'), ['action' => 'edit', $fireExtinguisherItemType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fire Extinguisher Item Type'), ['action' => 'delete', $fireExtinguisherItemType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fireExtinguisherItemType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fire Extinguisher Item Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fire Extinguisher Item Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fire Extinguisher Certificate Items'), ['controller' => 'FireExtinguisherCertificateItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fire Extinguisher Certificate Item'), ['controller' => 'FireExtinguisherCertificateItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fireExtinguisherItemTypes view large-9 medium-8 columns content">
    <h3><?= h($fireExtinguisherItemType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($fireExtinguisherItemType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fireExtinguisherItemType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fire Extinguisher Certificate Items') ?></h4>
        <?php if (!empty($fireExtinguisherItemType->fire_extinguisher_certificate_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fire Extinguisher Certificate Id') ?></th>
                <th scope="col"><?= __('Fire Extinguisher Item Type Id') ?></th>
                <th scope="col"><?= __('Serial No') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Capacity') ?></th>
                <th scope="col"><?= __('Capacity Unit') ?></th>
                <th scope="col"><?= __('Last Hydro Test') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fireExtinguisherItemType->fire_extinguisher_certificate_items as $fireExtinguisherCertificateItems): ?>
            <tr>
                <td><?= h($fireExtinguisherCertificateItems->id) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->fire_extinguisher_certificate_id) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->fire_extinguisher_item_type_id) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->serial_no) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->quantity) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->capacity) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->capacity_unit) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->last_hydro_test) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->status) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->remarks) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->created) ?></td>
                <td><?= h($fireExtinguisherCertificateItems->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FireExtinguisherCertificateItems', 'action' => 'view', $fireExtinguisherCertificateItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FireExtinguisherCertificateItems', 'action' => 'edit', $fireExtinguisherCertificateItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FireExtinguisherCertificateItems', 'action' => 'delete', $fireExtinguisherCertificateItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fireExtinguisherCertificateItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
