<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendor $vendor
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$vendor->id) {
                        echo __('Add Vendor');
                    } else {
                        echo __('Edit Vendor');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($vendor) ?>
                <?php
                                            echo $this->Form->control('name');
                                                        echo $this->Form->control('contact_person');
                                                        echo $this->Form->control('email');
                                                        echo $this->Form->control('address');
                                                        echo $this->Form->control('zip_code');
                                                        echo $this->Form->control('phone');
                                                        echo $this->Form->control('fax');
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
