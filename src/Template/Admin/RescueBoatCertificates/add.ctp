<?php
/**
 * @var \App\View\AppView                       $this
 * @var \App\Model\Entity\RescueBoatCertificate $rescueBoatCertificate
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$rescueBoatCertificate->id) {
                        echo __('Add Rescue Boat Certificate');
                    } else {
                        echo __('Edit Rescue Boat Certificate');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($rescueBoatCertificate) ?>
                <?php
                echo $this->Form->control('serial_no', ['class' => 'form-control']);
                echo $this->Form->control('date_of_issue', ['class' => 'form-control dateTimePicker', 'type' => 'text']);
                echo $this->Form->control('vessel_name', ['class' => 'form-control']);
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
