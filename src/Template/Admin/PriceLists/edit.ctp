<?php
/**
 * @var \App\View\AppView           $this
 * @var \App\Model\Entity\PriceList $priceList
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$priceList->id) {
                        echo __('Add Price List');
                    } else {
                        echo __('Edit Price List');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($priceList) ?>
                <?php
                echo $this->Form->control('serial_no');
                echo $this->Form->control('date_of_issue');
                echo $this->Form->control('client_name');
                echo $this->Form->control('contact_person');
                echo $this->Form->control('phone_number');
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
