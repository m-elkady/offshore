<?php
/**
 * @var \App\View\AppView                                                  $this
 * @var \App\Model\Entity\PriceList[]|\Cake\Collection\CollectionInterface $priceLists
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __('Price Lists') ?></h3>
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
                                <th scope="col"><?= $this->Paginator->sort('client_name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('contact_person') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($priceLists as $priceList): ?>
                                <tr>
                                    <td><input type="checkbox" name="chk[]" value="<?php echo $priceList->id ?>"/></td>
                                    <td><?= h($priceList->serial_no) ?></td>
                                    <td><?= h($priceList->date_of_issue) ?></td>
                                    <td><?= h($priceList->client_name) ?></td>
                                    <td><?= h($priceList->contact_person) ?></td>
                                    <td><?= h($priceList->phone_number) ?></td>
                                    <td><?= h($priceList->created) ?></td>
                                    <td><?= h($priceList->modified) ?></td>
                                    <td class="actions">

                                        <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $priceList->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $priceList->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $priceList->id)]) ?>
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
