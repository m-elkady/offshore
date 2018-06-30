<?php
/**
 * @var \App\View\AppView               $this
 * @var \App\Model\Entity\PurchaseOrder $purchaseOrder
 */
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php
            if (!$purchaseOrder->id) {
                echo __('Add Purchase Order');
            } else {
                echo __('Edit Purchase Order');
            }
            ?></h3>
      </div>
      <div class="panel-body">

          <?= $this->Form->create($purchaseOrder) ?>
          <?php
          echo $this->Form->control('employee_id', ['options' => $employees, 'empty' => true]);
          echo $this->Form->control('vendor_id', ['options' => $vendors]);
          echo $this->Form->control('terms_conditions');
          echo $this->Form->control('discount');
          echo $this->Form->control('notes');
          ?>

          <?= $this->Form->button(__('Submit')) ?>
          <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>
