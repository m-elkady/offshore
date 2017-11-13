<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Pages') ?></h3>
            </div>
            <div class="panel-body">
                <!--Table Wrapper Start-->
                <div class="table-responsive ls-table">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <!--<th><?= $this->Paginator->sort('id') ?></th>-->
                            <th><?= $this->Paginator->sort('ar_title') ?></th>
                            <th><?= $this->Paginator->sort('en_title') ?></th>
                            <th><?= $this->Paginator->sort('add_to_mainmenu') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pages as $page): ?>
                            <tr>
                                <!--<td><?= $this->Number->format($page->id) ?></td>-->
                                <td><?= h($page->ar_title) ?></td>
                                <td><?= h($page->en_title) ?></td>
                                <td><?= h($page->add_to_mainmenu) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $page->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $page->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $page->ar_title)]) ?>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="text-right ls-button-group demo-btn ls-table-pagination">
                        <ul class="pagination ls-pagination">
                            <?php
                            if ($this->Paginator->hasPrev()) {
                                echo $this->Paginator->prev('< ' . __('previous'));
                            }
                            echo $this->Paginator->numbers();
                            if ($this->Paginator->hasNext()) {
                                echo $this->Paginator->next(__('next') . ' >');
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
