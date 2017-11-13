<?php
/**
 * @var \App\View\AppView                                                 $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Employees') ?></h3>
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
                                <th scope="col"><?= $this->Paginator->sort('iqama_number') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('iqama_expiry_date') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($employees as $employee): ?>
                                <tr>
                                    <td><input type="checkbox" name="chk[]" value="<?php echo $employee->id ?>"/></td>
                                    <td><?= h($employee->name) ?></td>
                                    <td><?= h($employee->iqama_number) ?></td>
                                    <td><?= h($employee->iqama_expiry_date) ?></td>
                                    <td><?= h($employee->phone_number) ?></td>
                                    <td><?= h($employee->created) ?></td>
                                    <td><?= h($employee->modified) ?></td>
                                    <td class="actions">

                                        <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $employee->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $employee->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
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
