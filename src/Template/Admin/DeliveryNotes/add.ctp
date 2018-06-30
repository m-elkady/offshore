<?php
/**
 * @var \App\View\AppView              $this
 * @var \App\Model\Entity\DeliveryNote $deliveryNote
 */
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php
            if (!$deliveryNote->id) {
                echo __('Add Delivery Note');
            } else {
                echo __('Edit Delivery Note');
            }
            ?></h3>
      </div>
      <div class="panel-body">

          <?= $this->Form->create($deliveryNote) ?>
          <?php
          echo $this->Form->control('quotation_id', ['options' => $quotations, 'class' => 'form-control',]);
          echo $this->Form->control('client_id', ['options' => $clients, 'class' => 'form-control']);
          echo $this->Form->control('dispatch_date', [
              'type'  => 'text', 'class' => 'form-control datePicker',
              'value' => isset($deliveryNote->dispatch_date) ? $deliveryNote->dispatch_date->format('Y-m-d') : '']);
          echo $this->Form->control('delivery_method', ['class' => 'form-control',]);
          ?>
        <div id="options-div">
          <h2><?php echo __('Items') ?></h2>
          <div id="Options" class="row">
              <?php
              $section_count = 0;

              if (!empty($deliveryNote->delivery_note_items)) {
                  foreach ($deliveryNote->delivery_note_items as $j => $option) {
                      ?>

                    <div id='row<?php echo $j ?>' class="col-md-11 url-div">
                      <div class="row">
                          <?php
                          echo $this->Form->control('delivery_note_items.' . $j . '.id');
                          echo $this->Form->hidden('delivery_note_items.' . $j . '.delivery_note_id',
                              ['value' => $deliveryNote->id]);

                          echo $this->Form->control('delivery_note_items.' . $j . '.item_no', [
                              'templateVars' => ['div_classes' => 'col-md-3 '],
                              'class'        => 'form-control',
                              'label'        => ['text' => 'Item #'],
                          ]);
                          echo $this->Form->control('delivery_note_items.' . $j . '.description', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                              'type'         => 'text',
                          ]);
                          echo $this->Form->control('delivery_note_items.' . $j . '.ordered', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                          ]);

                          echo $this->Form->control('delivery_note_items.' . $j . '.delivered', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                          ]);

                          echo $this->Form->control('delivery_note_items.' . $j . '.outstanding', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'type'         => 'text',
                              'class'        => 'form-control',

                          ]);

                          ?>
                        <a href='#' class="delete-section2 btn btn-small">
                          <i class="fa fa-trash-o"></i>
                        </a>
                      </div>
                    </div>
                      <?php
                      $section_count++;
                  }
              } else {
                  ?>
                <div id='row0' class="url-div col-md-11">
                  <div class="row">
                      <?php

                      echo $this->Form->control('delivery_note_items.0.id');
                      echo $this->Form->hidden('delivery_note_items.0.delivery_note_id',
                          ['value' => $deliveryNote->id]);

                      echo $this->Form->control('delivery_note_items.0.item_no', [
                          'templateVars' => ['div_classes' => 'col-md-3 '],
                          'class'        => 'form-control',
                          'label'        => ['text' => 'Item #'],
                      ]);
                      echo $this->Form->control('delivery_note_items.0.description', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);
                      echo $this->Form->control('delivery_note_items.0.ordered', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);

                      echo $this->Form->control('delivery_note_items.0.delivered', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);

                      echo $this->Form->control('delivery_note_items.0.outstanding', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'type'         => 'text',
                          'class'        => 'form-control',

                      ]);
                      ?>
                    <a href='#' class="delete-section2 btn btn-small">
                      <i class="fa fa-trash-o"></i>
                    </a>
                  </div>
                </div>
              <?php } ?>

          </div>
          <a href="#" class="add-author btn">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add Item') ?>
          </a>
        </div>
          <?php

          echo $this->Form->control('notes', ['class' => 'form-control',]);
          ?>

          <?= $this->Form->button(__('Submit')) ?>
          <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>
<?php $this->append('script'); ?>
<script>

    $(function () {
        $('.add-author').on('click', function () {
            if ($('#Options').is(':visible')) {

                $('#Options').append('<div class="url-div col-md-11">' + $('.url-div:first').html().replace(/\[0\]/g, '[' + $('.url-div').length + ']').replace(/-0-/g, '-' + $('.url-div').length + '-') + '</div>');
                $('#Options .url-div:last input').val(null);
                $("#Options .url-div:last .badge").remove();
                $('#Options .url-div:last textarea').val(null);
                $('#Options .url-div:last select').val(null);
                $('#Options .url-div:last .asset-type').trigger('change');
                $('#Options .url-div:last').find('.image_between').remove();

            } else {
                $('#Options').show();
            }
            return false;
        });
    });

    $(document).on('click', '.delete-section2', function () {
        if (confirm('<?php echo __('Are you sure you want to delete this item?') ?>')) {
            if ($('#Options').find('.url-div').length <= 1) {
                $(this).parent('.url-div').find('input').val('');
                $('#Options .url-div:last').find('.image_between').remove();
            } else {
                $(this).closest('.url-div').remove();
            }
        }
        return false;
    });

</script>
<?php $this->end(); ?>
