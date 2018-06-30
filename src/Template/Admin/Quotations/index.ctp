<?php
/**
 * @var \App\View\AppView                                                  $this
 * @var \App\Model\Entity\Quotation[]|\Cake\Collection\CollectionInterface $quotations
 */
?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?= __('Quotations') ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $this->Url->build(["action" => "do-operation"]) ?>" method="post">
          <!--Table Wrapper Start-->
          <div class="table-responsive ls-table">
            <table class="table table-bordered table-striped">
              <thead>
              <tr>
                <th><input type="checkbox" id="checkall"/></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($quotations as $quotation): ?>
                <tr>
                  <td><input type="checkbox" name="chk[]" value="<?php echo $quotation->id ?>"/></td>
                  <td><?= $quotation->has('client') ? $this->Html->link($quotation->client->name, ['controller' => 'Clients', 'action' => 'edit', $quotation->client->id]) : '' ?></td>
                  <td><?= $quotation->has('employee') ? $this->Html->link($quotation->employee->name, ['controller' => 'Employees', 'action' => 'edit', $quotation->employee->id]) : '' ?></td>
                  <td><?= $this->Number->format($quotation->discount) ?></td>
                  <td><?= h($quotation->created) ?></td>
                  <td><?= h($quotation->modified) ?></td>
                  <td class="actions">

                      <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $quotation->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                      <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $quotation->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $quotation->id)]) ?>
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
