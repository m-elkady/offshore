<?php
/**
 * @var \App\View\AppView                     $this
 * @var \App\Model\Entity\LifeRaftCertificate $lifeRaftCertificate
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$lifeRaftCertificate->id) {
                        echo __('Add Life Raft Certificate');
                    } else {
                        echo __('Edit Life Raft Certificate');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($lifeRaftCertificate) ?>
                <?php
                echo $this->Form->control('serial_no');
                echo $this->Form->control('date_of_issue');
                echo $this->Form->control('vessel_name');
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
