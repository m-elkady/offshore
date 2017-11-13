<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Add User') ?></h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($user) ?>
                <?php
                echo $this->Form->input('id');
                ?>
                <?php
                echo $this->Form->hidden('role', ['class' => 'form-control']);
                echo $this->Form->input('username', ['class' => 'form-control']);
                echo $this->Form->input('password', ['class' => 'form-control']);
                echo $this->Form->input('passwd', ['class' => 'form-control', 'label' => __('Confirm password')]);
                if ($user->role === 0) {
                    echo $this->Form->input('full_name', ['class' => 'form-control']);
                    echo $this->Form->input('email', ['class' => 'form-control']);
                    echo $this->Form->input('mobile', ['class' => 'form-control']);
                    echo $this->Form->input('address', ['class' => 'form-control']);
                    echo $this->Form->input('notes', ['class' => 'form-control']);
                }
                ?>


                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>


