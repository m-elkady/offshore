<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FireExtinguisherCertificate[]|\Cake\Collection\CollectionInterface
 *      $fireExtinguisherCertificates
 */

use App\Helper\CertificateHelper;

?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?= __('Fire Extinguisher Certificates') ?></h3>
      </div>
      <div class="panel-body">
          <?php echo $this->element('certificateSearchForm', ['model' => 'FireExtinguisherCertificate']) ?>
        <form action="<?php echo $this->Url->build(["action" => "do-operation"]) ?>" method="post">
          <!--Table Wrapper Start-->
          <div class="table-responsive ls-table">
            <table class="table table-bordered table-striped">
              <thead>
              <tr>
                <th><input type="checkbox" id="checkall"/></th>
                <th scope="col"><?= $this->Paginator->sort('certificate_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vessel_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inspection_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next_inspection_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phase') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($fireExtinguisherCertificates as $fireExtinguisherCertificate): ?>
                <tr>
                  <td><input type="checkbox" name="chk[]" value="<?php echo $fireExtinguisherCertificate->id ?>"/>
                  </td>
                  <td><?= h($fireExtinguisherCertificate->certificate_number) ?></td>
                  <td><?= $fireExtinguisherCertificate->has('vessel') ? $fireExtinguisherCertificate->vessel->name : ''; ?></td>
                  <td><?= h($fireExtinguisherCertificate->inspection_date) ?></td>
                  <td><?= h($fireExtinguisherCertificate->next_inspection_date) ?></td>
                  <td><?= h(CertificateHelper::getCertificateStatuses()[$fireExtinguisherCertificate->status]) ?></td>
                  <td>
                      <?php echo $this->element('changePhase',
                          ['model' => 'FireExtinguisherCertificate',
                           'value' => $fireExtinguisherCertificate->phase,
                           'id'    => $fireExtinguisherCertificate->id,
                          ]) ?>
                  </td>
                  <td class="actions">

                      <?= $this->Html->link('<i class="fa fa-pencil"></i> ' . __('Edit'), ['action' => 'edit', $fireExtinguisherCertificate->id], ['class' => 'btn btn-sm btn-primary', 'escape' => false]) ?>

                      <?= $this->Html->link('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $fireExtinguisherCertificate->id], ['class' => 'btn btn-sm btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $fireExtinguisherCertificate->id)]) ?>

                      <?= $this->Html->link('<i class="fa fa-print"></i> ' . __('Print'), ['action' => 'view', $fireExtinguisherCertificate->id], ['class' => 'btn btn-sm btn-success', 'escape' => false]) ?>

                      <?= $this->Html->link('<i class="fa fa-repeat"></i> ' . __('Reissue'), ['action' => 'reissue', $fireExtinguisherCertificate->id], ['class' => 'btn btn-sm btn-info', 'escape' => false]) ?>

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

