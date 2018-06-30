<?php
/**
 * @var \App\View\AppView               $this
 * @var \App\Model\Entity\PurchaseOrder $purchaseOrder
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$purchaseOrder->id) {
                        echo __('Add Purchase Order');
                    } else {
                        echo __('Edit Purchase Order');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">

                <?= $this->Form->create($purchaseOrder) ?>
                <?php
                echo $this->Form->control('vendor_id', ['class' => 'form-control', 'empty' => 'Choose Client']);
                echo $this->Form->control('employee_id', ['class' => 'form-control', 'empty' => 'Choose Employee']);
                ?>
              <div id="options-div">
                <h2><?php echo __('Items') ?></h2>
                <div id="Options" class="row">
                    <?php
                    $section_count = 0;

                    if (!empty($purchaseOrder->purchase_order_items)) {
                        foreach ($purchaseOrder->purchase_order_items as $j => $option) {
                            ?>

                          <div id='row<?php echo $j ?>' class="col-md-11 url-div">
                            <div class="row">
                                <?php
                                echo $this->Form->control('purchase_order_items.' . $j . '.id');
                                echo $this->Form->hidden('purchase_order_items.' . $j . '.purchase_order_id', ['value' => $purchaseOrder->id]);
                                echo $this->Form->control('purchase_order_items.' . $j . '.description', [
                                    'templateVars' => ['div_classes' => 'col-md-4'],
                                    'class'        => 'form-control',
                                    'type'         => 'text',
                                ]);

                                echo $this->Form->control('purchase_order_items.' . $j . '.quantity', [
                                    'templateVars' => ['div_classes' => 'col-md-4'],
                                    'class'        => 'form-control',
                                ]);
                                echo $this->Form->control('purchase_order_items.' . $j . '.unit_price', [
                                    'templateVars' => ['div_classes' => 'col-md-4'],
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

                            echo $this->Form->control('purchase_order_items.0.description', [
                                'templateVars' => ['div_classes' => 'col-md-4'],
                                'class'        => 'form-control',
                                'type'         => 'text',
                            ]);

                            echo $this->Form->control('purchase_order_items.0.quantity', [
                                'templateVars' => ['div_classes' => 'col-md-4'],
                                'class'        => 'form-control',
                            ]);
                            echo $this->Form->control('purchase_order_items.0.unit_price', [
                                'templateVars' => ['div_classes' => 'col-md-4'],
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
                echo $this->Form->control('discount', ['class' => 'form-control']);
                echo $this->Form->control('terms_conditions', ['class' => 'form-control summernote']);
                echo $this->Form->control('notes', ['class' => 'form-control']);
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
                $('#Options .url-div:last input').val('');
                $("#Options .url-div:last .badge").remove();
                $('#Options .url-div:last textarea').val('');
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
