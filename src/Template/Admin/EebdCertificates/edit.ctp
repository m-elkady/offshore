<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EebdCertificate $eebdCertificate
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$eebdCertificate->id) {
                        echo __('Add Eebd Certificate');
                    } else {
                        echo __('Edit Eebd Certificate');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($eebdCertificate) ?>
                <?php
                                            echo $this->Form->control('certificate_number');
                                                        echo $this->Form->control('vessel_name');
                                                        echo $this->Form->control('certificate_text');
                                                        echo $this->Form->control('inspection_date', ['empty' => true]);
                                                        echo $this->Form->control('next_inspection_date', ['empty' => true]);
                                                        echo $this->Form->control('next_hydro_test', ['empty' => true]);
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
