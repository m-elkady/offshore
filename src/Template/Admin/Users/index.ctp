<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Users') ?></h3>
            </div>
            <div class="panel-body">
                <!--Table Wrapper Start-->
                <div class="table-responsive ls-table">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <!--<th><?= $this->Paginator->sort('id') ?></th>-->
                            <th><?= $this->Paginator->sort('username') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <!--<th><?= $this->Paginator->sort('updated') ?></th>-->
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($users as $user):
//                                debug($user);
                            ?>
                            <tr>
                                <!--<td><?= $this->Number->format($user->id) ?></td>-->
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->created) ?></td>
                                <!--<td><?= h($user->updated) ?></td>-->
                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $user->username)]) ?>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="text-right ls-button-group demo-btn ls-table-pagination">
                        <ul class="pagination ls-pagination">
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
