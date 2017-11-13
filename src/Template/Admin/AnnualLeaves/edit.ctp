<?php
/**
 * @var \App\View\AppView             $this
 * @var \App\Model\Entity\AnnualLeave $annualLeave
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$annualLeave->id) {
                        echo __('Add Annual Leave');
                    } else {
                        echo __('Edit Annual Leave');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($annualLeave) ?>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('id_number');
                echo $this->Form->control('id_expiry_date');
                echo $this->Form->control('phone_number');
                echo $this->Form->control('leaving_date');
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
