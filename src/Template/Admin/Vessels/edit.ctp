<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vessel $vessel
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$vessel->id) {
                        echo __('Add Vessel');
                    } else {
                        echo __('Edit Vessel');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($vessel) ?>
                <?php
                                            echo $this->Form->control('name');
                                                        echo $this->Form->control('imo_number');
                                                        echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                                                        echo $this->Form->control('call_sign');
                                                        echo $this->Form->control('client_id', ['options' => $clients]);
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>