<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Edit Setting') ?></h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($setting) ?>

                <?php
                echo $this->Form->input('key');
                echo $this->Form->input('value');
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
