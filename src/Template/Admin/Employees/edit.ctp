<?php
/**
 * @var \App\View\AppView          $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$employee->id) {
                        echo __('Add Employee');
                    } else {
                        echo __('Edit Employee');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($employee) ?>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('iqama_number');
                echo $this->Form->control('iqama_expiry_date');
                echo $this->Form->control('phone_number');
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
