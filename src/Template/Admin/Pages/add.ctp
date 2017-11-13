<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                    if (!$page->id) {
                        echo __('Add Page');
                    } else {
                        echo __('Edit Page');
                    }
                    ?></h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($page, ['type' => 'file', 'id' => 'PageForm']) ?>
                <?php
                echo $this->Form->input('title', ['class' => 'form-control', 'label' => __('Title', true)]);
                echo $this->Form->input('content', ['class' => 'form-control ckeditor', 'label' => __('Content', true)]);
                ?>
                <?php
                echo $this->Form->input('add_to_mainmenu');
                ?>
                <?php
                echo $this->Form->input('image', ['type' => 'file']);
                if ($page->image) {
                    echo $this->element('image_between', ['file' => $page->image_info]);
                }
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<?php // echo $this->Html->script(array('ckeditor/adapters/jquery', 'admin/bootstrapvalidator/bootstrapValidator.js'), ['block' => true])  ?>
<?php echo $this->Html->script(['admin/jquery.validate'], ['block' => true]) ?>
<?php echo $this->append('script'); ?>
<script>
    $(function () {
        $("#PageForm").validate({
            errorClass: "error-message",
            highlight: function (label) {
                $(label).closest('.form-group').addClass('has-error');
//                $fieldset = $(label).closest('.tab-content');
//                if ($($fieldset).find(".tab-pane.active:has(div.has-errors)").length == 0) {
//                    $($fieldset).find(".tab-pane:has(div.has-errors)").each(function (index, tab) {
//                        $('a[href=#' + $(label).closest('.tab-pane:not(.active)').attr('id') + ']').tab('show');
//                    });
//                }
            },
            'ignore': [],
            errorElement: "div",
            rules: {
                title: {
                    required: true,
                },
                content: {
                    required: true,
                },
            },
            messages: {
                title: {
                    required: '<?php echo __('Required', true) ?>',
                },
                content: {
                    required: '<?php echo __('Required', true) ?>',
                },
                menu_id: {
                    required: '<?php echo __('Required', true) ?>',
                }
            },
            success: function (label, element) {
                label.parent().removeClass('has-error');
                label.remove();
            },
            errorPlacement: function (label, element) {
                // position error label after generated textarea

                if (element.is("textarea")) {
                    label.insertAfter(element.next());
                } else {
                    label.insertAfter(element);
                }
            }
        });
    });
    $(function () {
        $('#add-to-mainmenu').on('change', function () {
            if ($(this).prop('checked')) {
                $('.ParetntPages').removeClass('hide').show();
                $('.ParetntPages select').removeProp('disabled');
            } else {
                $('.ParetntPages').addClass('hide').hide();
                $('.ParetntPages select').prop('disabled', 'disabled');
            }
        }).trigger('change');
        $('#menu-id').change(function () {
            change_submenu($(this).val());
        }).trigger('change');
    });

    function change_submenu(menu_id) {
        if (!menu_id) {
            return false;
        }
        $.ajax({
            async: true,
            type: "GET",
            url: "<?php echo $this->Url->build('/admin/pages/get-submenus/'); ?>" + menu_id + "/" +<?php echo $page->id ? $page->id : 0; ?>,
            dataType: "json",
            success: function (data) {

                $('#parent-id').html('<option value=0>' + '<?php echo __('No parent') ?>' + '</option>');

                for (var i in data) {
                    var submenu = data[i];
                    var is_Selected = "";
                    var selected_submenu = "<?php echo $page->parent_id ? $page->parent_id : 0; ?>";
                    //alert(submenu.Submenu.id);
                    if (i == selected_submenu) {
                        is_Selected = "selected=selected";
                    }
                    $('#parent-id').append('<option value="' + i + '"' + is_Selected + '>' + submenu + '</option>');
                }
                document.getElementById('menu-id').disabled = false;
                return false;
            }


        });

    }
</script>
<?php echo $this->end(); ?>



