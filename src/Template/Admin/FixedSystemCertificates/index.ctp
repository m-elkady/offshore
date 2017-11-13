<?php
/**
 * @var \App\View\AppView                                                               $this
 * @var \App\Model\Entity\FixedSystemCertificate[]|\Cake\Collection\CollectionInterface $fixedSystemCertificates
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Fixed System Certificates') ?></h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo $this->Url->build(["action" => "do-operation"]) ?>" method="post">
                    <!--Table Wrapper Start-->
                    <div class="table-responsive ls-table">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th><input type="checkbox" id="checkall"/></th>
                                <th scope="col"><?= $this->Paginator->sort('serial_no') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('date_of_issue') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('vessel_name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($fixedSystemCertificates as $fixedSystemCertificate): ?>
                                <tr>
                                    <td><input type="checkbox" name="chk[]"
                                               value="<?php echo $fixedSystemCertificate->id ?>"/></td>
                                    <td><?= h($fixedSystemCertificate->serial_no) ?></td>
                                    <td><?= h($fixedSystemCertificate->date_of_issue) ?></td>
                                    <td><?= h($fixedSystemCertificate->vessel_name) ?></td>
                                    <td><?= h($fixedSystemCertificate->created) ?></td>
                                    <td><?= h($fixedSystemCertificate->modified) ?></td>
                                    <td class="actions">

                                        <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $fixedSystemCertificate->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $fixedSystemCertificate->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $fixedSystemCertificate->id)]) ?>
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
