<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PurchaseOrder $purchaseOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Purchase Order'), ['action' => 'edit', $purchaseOrder->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Purchase Order'), ['action' => 'delete', $purchaseOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Purchase Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Purchase Order Items'), ['controller' => 'PurchaseOrderItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase Order Item'), ['controller' => 'PurchaseOrderItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="purchaseOrders view large-9 medium-8 columns content">
    <h3><?= h($purchaseOrder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $purchaseOrder->has('employee') ? $this->Html->link($purchaseOrder->employee->name, ['controller' => 'Employees', 'action' => 'view', $purchaseOrder->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $purchaseOrder->has('vendor') ? $this->Html->link($purchaseOrder->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $purchaseOrder->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($purchaseOrder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($purchaseOrder->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($purchaseOrder->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($purchaseOrder->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Terms Conditions') ?></h4>
        <?= $this->Text->autoParagraph(h($purchaseOrder->terms_conditions)); ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($purchaseOrder->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Purchase Order Items') ?></h4>
        <?php if (!empty($purchaseOrder->purchase_order_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Purchase Order Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Unit Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($purchaseOrder->purchase_order_items as $purchaseOrderItems): ?>
            <tr>
                <td><?= h($purchaseOrderItems->id) ?></td>
                <td><?= h($purchaseOrderItems->purchase_order_id) ?></td>
                <td><?= h($purchaseOrderItems->description) ?></td>
                <td><?= h($purchaseOrderItems->quantity) ?></td>
                <td><?= h($purchaseOrderItems->unit_price) ?></td>
                <td><?= h($purchaseOrderItems->created) ?></td>
                <td><?= h($purchaseOrderItems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PurchaseOrderItems', 'action' => 'view', $purchaseOrderItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PurchaseOrderItems', 'action' => 'edit', $purchaseOrderItems->id]) ?>
                    <?= $this->Html->link(__('Delete'), ['controller' => 'PurchaseOrderItems', 'action' => 'delete', $purchaseOrderItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseOrderItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
