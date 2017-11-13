<?php
/**
 * @var \App\View\AppView           $this
 * @var \App\Model\Entity\Quotation $quotation
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$quotation->id) {
                        echo __('Add Quotation');
                    } else {
                        echo __('Edit Quotation');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($quotation) ?>
                <?php
                echo $this->Form->control('serial_no', ['class' => 'form-control']);
                echo $this->Form->control('date_of_issue', ['class' => 'form-control dateTimePicker', 'type' => 'text']);
                echo $this->Form->control('client_name', ['class' => 'form-control']);
                echo $this->Form->control('contact_person', ['class' => 'form-control']);
                echo $this->Form->control('phone_number', ['class' => 'form-control']);
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
