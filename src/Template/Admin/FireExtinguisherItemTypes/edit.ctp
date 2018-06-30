<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FireExtinguisherItemType $fireExtinguisherItemType
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$fireExtinguisherItemType->id) {
                        echo __('Add Fire Extinguisher Item Type');
                    } else {
                        echo __('Edit Fire Extinguisher Item Type');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($fireExtinguisherItemType) ?>
                <?php
                                            echo $this->Form->control('name');
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
