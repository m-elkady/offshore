<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$client->id) {
                        echo __('Add Client');
                    } else {
                        echo __('Edit Client');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($client) ?>
                <?php
                                            echo $this->Form->control('name');
                                                        echo $this->Form->control('email');
                                                        echo $this->Form->control('phone');
                                                        echo $this->Form->control('contact_person');
                                            ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
