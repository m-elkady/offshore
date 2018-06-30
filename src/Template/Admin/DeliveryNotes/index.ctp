<?php
/**
 * @var \App\View\AppView                                                     $this
 * @var \App\Model\Entity\DeliveryNote[]|\Cake\Collection\CollectionInterface $deliveryNotes
 */
?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?= __('Delivery Notes') ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $this->Url->build(["action" => "do-operation"]) ?>" method="post">
          <!--Table Wrapper Start-->
          <div class="table-responsive ls-table">
            <table class="table table-bordered table-striped">
              <thead>
              <tr>
                <th><input type="checkbox" id="checkall"/></th>
                <th scope="col"><?= $this->Paginator->sort('quotation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dispatch_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($deliveryNotes as $deliveryNote): ?>
                <tr>
                  <td><input type="checkbox" name="chk[]" value="<?php echo $deliveryNote->id ?>"/></td>
                  <td><?= $deliveryNote->has('quotation') ? $this->Html->link($deliveryNote->quotation->id, ['controller' => 'Quotations', 'action' => 'edit', $deliveryNote->quotation->id]) : '' ?></td>
                  <td><?= $deliveryNote->has('client') ? $this->Html->link($deliveryNote->client->name, ['controller' => 'Clients', 'action' => 'edit', $deliveryNote->client->id]) : '' ?></td>
                  <td><?= h($deliveryNote->dispatch_date) ?></td>
                  <td><?= h($deliveryNote->created) ?></td>
                  <td><?= h($deliveryNote->modified) ?></td>
                  <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $deliveryNote->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $deliveryNote->id], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $deliveryNote->id)]) ?>
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
