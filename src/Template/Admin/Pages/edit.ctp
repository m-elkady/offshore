<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php
                    if (!$page->id) {
                        echo __('Add Page');
                    } else {
                        echo __('Edit Page');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($page) ?>

                <?php
                echo $this->Form->input('ar_title');
                echo $this->Form->input('en_title');
                echo $this->Form->input('ar_content');
                echo $this->Form->input('en_content');
                echo $this->Form->input('add_to_mainmenu');
                echo $this->Form->input('image');
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
