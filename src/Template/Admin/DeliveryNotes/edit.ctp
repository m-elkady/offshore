<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeliveryNote $deliveryNote
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$deliveryNote->id) {
                        echo __('Add Delivery Note');
                    } else {
                        echo __('Edit Delivery Note');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($deliveryNote) ?>
                <?php
                                            echo $this->Form->control('quotation_id', ['options' => $quotations]);
                                                        echo $this->Form->control('client_id', ['options' => $clients]);
                                                        echo $this->Form->control('dispatch_date', ['empty' => true]);
                                                        echo $this->Form->control('delivery_method');
                                                        echo $this->Form->control('notes');
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
