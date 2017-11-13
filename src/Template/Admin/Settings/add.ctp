<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Add Setting') ?></h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($setting) ?>

                <?php
                echo $this->Form->input('setting_key', ['class' => 'form-control']);
                echo $this->Form->input('setting_value', ['class' => 'form-control']);
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
