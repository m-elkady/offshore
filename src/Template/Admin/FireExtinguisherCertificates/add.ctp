<?php
/**
 * @var \App\View\AppView                             $this
 * @var \App\Model\Entity\FireExtinguisherCertificate $fireExtinguisherCertificate
 */
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
            <?php
            if (!$fireExtinguisherCertificate->id) {
                echo __('Add Fire Extinguisher Certificate');
            } else {
                echo __('Edit Fire Extinguisher Certificate');
            }
            ?></h3>
      </div>
      <div class="panel-body">

          <?= $this->Form->create($fireExtinguisherCertificate) ?>
          <?php
          echo $this->Form->control('id');
          echo $this->Form->control('certificate_number', ['class' => 'form-control']);
          echo $this->Form->control('vessel_id', ['class' => 'form-control', 'empty' => 'Select Vessel']);
          echo $this->Form->control('certificate_text_id', ['class' => 'form-control', 'empty' => 'Select Certificate Text']);
          echo $this->Form->control('certificate_type', ['class' => 'form-control', 'empty' => 'Select Certificate Type']);
          ?>
        <div id="options-div" style="display: none">
          <h2><?php echo __('Items') ?></h2>
          <div id="Options" class="row">
              <?php
              $section_count = 0;

              if (!empty($fireExtinguisherCertificate->fire_extinguisher_certificate_items)) {
                  foreach ($fireExtinguisherCertificate->fire_extinguisher_certificate_items as $j => $option) {
                      ?>

                    <div id='row<?php echo $j ?>' class="col-md-11 url-div">
                      <div class="row">
                          <?php
                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.id');
                          echo $this->Form->hidden('fire_extinguisher_certificate_items.' . $j . '.fire_extinguisher_certificate_id',
                              ['value' => $fireExtinguisherCertificate->id]);

                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.quantity', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control item-quantity',
                              'type'         => 'text',
                          ]);

                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.serial_no', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control item-serial',
                              'type'         => 'text',
                          ]);
                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.fire_extinguisher_item_type_id', [
                              'templateVars' => ['div_classes' => 'col-md-3 '],
                              'class'        => 'form-control',
                              'empty'        => true,
                              'options'      => $itemTypes,
                          ]);
                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.capacity', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                          ]);
                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.capacity_unit', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                          ]);
                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.last_hydro_test', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control datePicker',
                              'type'         => 'text',
                              'value'        => isset($option->last_hydro_test) ? $option->last_hydro_test->format('Y-m-d') : '',
                          ]);
                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.status', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'multiple'     => 'checkbox',
                              'value'        => !empty($option->status) && is_string($option->status) ? explode(',', $option->status) : '',
                          ]);
                          echo $this->Form->control('fire_extinguisher_certificate_items.' . $j . '.remarks', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
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

                      echo $this->Form->hidden('fire_extinguisher_certificate_items.0.fire_extinguisher_certificate_id',
                          ['value' => $fireExtinguisherCertificate->id]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.quantity', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control item-quantity',
                          'type'         => 'text',
                      ]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.serial_no', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control item-serial',
                          'type'         => 'text',
                      ]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.fire_extinguisher_item_type_id', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                          'empty'        => true,
                          'options'      => $itemTypes,
                      ]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.capacity', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.capacity_unit', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.last_hydro_test', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control datePicker',
                          'type'         => 'text',
                      ]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.status', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'multiple'     => 'checkbox',
                          'options'      => $statuses,
                      ]);
                      echo $this->Form->control('fire_extinguisher_certificate_items.0.remarks', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
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
          <a href="#" class="add-item btn btn-xs btn-success">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add Item') ?>
          </a>
        </div>
          <?php

          echo $this->Form->control('inspection_date', [
              'value' => $fireExtinguisherCertificate->inspection_date ? $fireExtinguisherCertificate->inspection_date->format('Y-m-d') : '',
              'class' => 'form-control datePicker', 'type' => 'text']);

          echo $this->Form->control('status', ['class' => 'form-control', 'options' => $certificateStatuses, 'empty' => 'Choose Certificate Status']);

          echo $this->Form->control('phase', ['options' => $certificatePhases, 'empty' => 'Choose Certificate Phase?>', 'class' => 'form-control',]);
          ?>
          <?php echo $this->Form->button('<i class="fa fa-save"></i> ' . __('Submit'), ['escape' => false]); ?>
          <?php
          echo $this->Form->button('<i class="fa fa-save"></i> ' . __('Save and Print'),
              ['class' => 'btn btn-lg btn-success', 'name' => 'print', 'value' => '1']);
          ?>
          <?php if ($fireExtinguisherCertificate->id) {
              echo $this->Html->link('<i class="fa fa-repeat"></i> ' . __('Reissue'), ['action' => 'reissue',
                                                                                       $fireExtinguisherCertificate->id], ['class' => 'btn btn-lg btn-info', 'escape' => false]);
          }
          echo $this->Form->end();
          ?>

      </div>
    </div>
  </div>
</div>

<?php $this->append('script'); ?>
<script>

    $(function () {
        $('#certificate-type').on('change', function () {
            const value = $(this).val();
            if (value === '') {
                $('#options-div').slideUp();
            } else {
                $('#options-div').slideDown();
                if (value === '1') {
                    $('.item-serial').closest('div').removeClass('hide').show();
                    $('.item-quantity').closest('div').addClass('hide').hide();
                } else if (value === '2') {
                    $('.item-serial').closest('div').addClass('hide').hide();
                    $('.item-quantity').closest('div').removeClass('hide').show();
                }
            }
        }).trigger('change');

        $('.add-item').on('click', function () {
            if ($('#Options').is(':visible')) {
                $('#Options').append('<div class="url-div col-md-11">' + $('.url-div:first').html().replace(/\[0\]/g, '[' + $('.url-div').length + ']').replace(/-0/g, '-' + $('.url-div').length + '-') + '</div>');
                $('#Options .url-div:last input:text, #Options .url-div:last input[type="number"]').val(null);
                $('#Options .url-div:last input:hidden').val(null);
                $('#Options .url-div:last input[type="checkbox"]').prop("checked", false);
                $('#Options .url-div:last textarea').val(null);
                $('#Options .url-div:last select').val(null);
                $('#Options .url-div:last .asset-type').trigger('change');
                $('#Options .url-div:last').find('.image_between').remove();
                $('.datePicker').datetimepicker({
                    format: 'Y-m-d',
                    timepicker: false,
                    scrollInput: false,
                    lang: '<?php echo $lang ?>'
                });
                $("#Options .url-div:last .badge").remove();
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
