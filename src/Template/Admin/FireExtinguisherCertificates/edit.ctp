<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FireExtinguisherCertificate $fireExtinguisherCertificate
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$fireExtinguisherCertificate->id) {
                        echo __('Add Fire Extinguisher Certificate');
                    } else {
                        echo __('Edit Fire Extinguisher Certificate');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($fireExtinguisherCertificate) ?>
                <?php
                                            echo $this->Form->control('certificate_number');
                                                        echo $this->Form->control('vessel_name');
                                                        echo $this->Form->control('certificate_text');
                                                        echo $this->Form->control('inspection_date', ['empty' => true]);
                                                        echo $this->Form->control('next_inspection_date', ['empty' => true]);
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
