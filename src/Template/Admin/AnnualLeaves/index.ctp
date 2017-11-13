<?php
/**
 * @var \App\View\AppView                                                    $this
 * @var \App\Model\Entity\AnnualLeave[]|\Cake\Collection\CollectionInterface $annualLeaves
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Annual Leaves') ?></h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo $this->Url->build(["action" => "do-operation"]) ?>" method="post">
                    <!--Table Wrapper Start-->
                    <div class="table-responsive ls-table">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th><input type="checkbox" id="checkall"/></th>
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('id_number') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('id_expiry_date') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('leaving_date') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($annualLeaves as $annualLeave): ?>
                                <tr>
                                    <td><input type="checkbox" name="chk[]" value="<?php echo $annualLeave->id ?>"/>
                                    </td>
                                    <td><?= h($annualLeave->name) ?></td>
                                    <td><?= h($annualLeave->id_number) ?></td>
                                    <td><?= h($annualLeave->id_expiry_date) ?></td>
                                    <td><?= h($annualLeave->phone_number) ?></td>
                                    <td><?= h($annualLeave->leaving_date) ?></td>
                                    <td><?= h($annualLeave->created) ?></td>
                                    <td><?= h($annualLeave->modified) ?></td>
                                    <td class="actions">

                                        <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $annualLeave->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $annualLeave->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $annualLeave->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" id="acts" name="operation">
                                    <option value=""><?php echo __("Choose Operation") ?></option>
                                    <option value="delete"><?php echo __("Delete") ?></option>
                                </select>
                            </div>
                            <div class="col-md-9 text-right">
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
                </form>
            </div>
        </div>
    </div>
</div>
