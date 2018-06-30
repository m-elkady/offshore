<?php
/**
 * @var \App\View\AppView                 $this
 * @var \App\Model\Entity\EebdCertificate $eebdCertificate
 */
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php
            if (!$eebdCertificate->id) {
                echo __('Add Eebd Certificate');
            } else {
                echo __('Edit Eebd Certificate');
            }
            ?></h3>
      </div>
      <div class="panel-body">

          <?= $this->Form->create($eebdCertificate) ?>
          <?php
          echo $this->Form->control('certificate_number', ['class' => 'form-control']);
          echo $this->Form->control('vessel_name', ['class' => 'form-control']);
          echo $this->Form->control('certificate_text', ['class' => 'form-control']);
          ?>
        <div id="options-div">
          <h2><?php echo __('Items') ?></h2>
          <div id="Options" class="row">
              <?php
              $section_count = 0;

              if (!empty($eebdCertificate->eebd_certificate_items)) {
                  foreach ($eebdCertificate->eebd_certificate_items as $j => $option) {
                      ?>

                    <div id='row<?php echo $j ?>' class="col-md-11 url-div">
                      <div class="row">
                          <?php
                          echo $this->Form->control('eebd_certificate_items.' . $j . '.id');
                          echo $this->Form->hidden('eebd_certificate_items.' . $j . '.eebd_certificate_id',
                              ['value' => $eebdCertificate->id]);

                          echo $this->Form->control('eebd_certificate_items.' . $j . '.type', [
                              'templateVars' => ['div_classes' => 'col-md-3 '],
                              'class'        => 'form-control',
                          ]);
                          echo $this->Form->control('eebd_certificate_items.' . $j . '.serial_no', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                          ]);
                          echo $this->Form->control('eebd_certificate_items.' . $j . '.set_serial_no', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                          ]);

                          echo $this->Form->control('eebd_certificate_items.' . $j . '.capacity', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control',
                          ]);

                          echo $this->Form->control('eebd_certificate_items.' . $j . '.last_hydro_test', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control datePicker',
                              'type'         => 'text',
                              'value'        => isset($option->last_hydro_test) ? $option->last_hydro_test->format('Y-m-d') : '',
                          ]);
                          echo $this->Form->control('eebd_certificate_items.' . $j . '.status', [
                              'templateVars' => ['div_classes' => 'col-md-3'],
                              'class'        => 'form-control select2',
                              'multiple'     => true,
                              'value'        => !empty($option->status) ? explode(',', $option->status) : '',
                          ]);
                          echo $this->Form->control('eebd_certificate_items.' . $j . '.remarks', [
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

                      echo $this->Form->hidden('eebd_certificate_items.0.eebd_certificate_id',
                          ['value' => $eebdCertificate->id]);

                      echo $this->Form->control('eebd_certificate_items.0.type', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);
                      echo $this->Form->control('eebd_certificate_items.0.serial_no', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);
                      echo $this->Form->control('eebd_certificate_items.0.set_serial_no', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);

                      echo $this->Form->control('eebd_certificate_items.0.capacity', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control',
                      ]);

                      echo $this->Form->control('eebd_certificate_items.0.last_hydro_test', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control datePicker',
                          'type'         => 'text',
                      ]);
                      echo $this->Form->control('eebd_certificate_items.0.status', [
                          'templateVars' => ['div_classes' => 'col-md-3'],
                          'class'        => 'form-control select2',
                          'multiple'     => true,
                      ]);
                      echo $this->Form->control('eebd_certificate_items.0.remarks', [
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
          <a href="#" class="add-author btn">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add Item') ?>
          </a>
        </div>


          <?php

          echo $this->Form->control('inspection_date', [
              'value' => $eebdCertificate->inspection_date ? $eebdCertificate->inspection_date->format('Y-m-d') : '',
              'class' => 'form-control datePicker', 'type' => 'text',
          ]);
          echo $this->Form->control('next_inspection_date', [
              'value' => $eebdCertificate->next_inspection_date ? $eebdCertificate->next_inspection_date->format('Y-m-d') : '',
              'class' => 'form-control datePicker', 'type' => 'text',
          ]);
          echo $this->Form->control('next_hydro_test', [
              'value' => $eebdCertificate->next_hydro_test ? $eebdCertificate->next_hydro_test->format('Y-m-d') : '',
              'class' => 'form-control datePicker', 'type' => 'text']);
          ?>

          <?= $this->Form->button(__('Submit')) ?>
          <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>
<?php echo $this->Html->css(['admin/plugins/select2.min'], ['block' => true]) ?>
<?php echo $this->Html->script(['admin/select2.full.min'], ['block' => true]) ?>

<?php $this->append('script'); ?>
<script>

    $(function () {
        var options = {
            tags: true
        };
        var select2 = $('.select2').select2(options);
        $('.add-author').on('click', function () {
            if ($('#Options').is(':visible')) {
                var selected = $('#Options .url-div:first .select2').val();
                select2.select2('destroy');
                $('#Options').append('<div class="url-div col-md-11">' + $('.url-div:first').html().replace(/\[0\]/g, '[' + $('.url-div').length + ']').replace(/-0-/g, '-' + $('.url-div').length + '-') + '</div>');


                $('#Options .url-div:last input').val(null);
                $("#Options .url-div:last .badge").remove();
                $('#Options .url-div:last textarea').val(null);
                $('#Options .url-div:last select').val(null);
                $('#Options .url-div:last .asset-type').trigger('change');
                $('#Options .url-div:last').find('.image_between').remove();
                $('#Options .url-div:last select.select2').select2(options);
                $('.datePicker').datetimepicker({
                    format: 'Y-m-d',
                    timepicker: false,
                    scrollInput: false,
                    lang: '<?php echo $lang ?>'
                });
                $('#Options .url-div:first .select2').val(selected);
                select2.select2(options);

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
