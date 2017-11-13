<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= __($vars['title']) ?></h3>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($setting, ['type' => 'file']) ?>

                <?php
                $i = 0;
                //                debug($vars['fields']);
                foreach ($vars['fields'] as $key => $value) {
//                    debug($value);
                    if (isset($value['id'])) {
                        echo $this->Form->hidden($i . '.id', ['value' => $value['id'], 'type' => 'hidden']);
                    }
                    echo $this->Form->input($i . '.setting_key', ['value' => $key, 'type' => 'hidden', 'class' => 'form-control']);
                    $input_options = ['value' => isset($value['value']) ? $value['value'] : '', 'type' => isset($value['input']['type']) ? $value['input']['type'] : false, 'label' => __($value['input']['title']), 'options' => isset($value['input']['options']) ? $value['input']['options'] : false, 'empty' => isset($value['input']['empty']) ? $value['input']['empty'] : false, 'class' => 'form-control'];
//                    debug($input_options);
                    if (isset($errors[$key])) {
                        $input_options['templateVars']['errors'] = '<div class="error-message">' . $errors[$key] . '</div>';
//                        echo '<div class="error-message">' .$errors[$key]  . '</div>';
                    }

                    echo $this->Form->input($i . '.setting_value', $input_options);

                    if (isset($value['behavior']) && isset($value['value']) && !is_array($value['value'])) {
                        $file['file_name'] = $value['value'];
                        $file['path']      = $this->Url->build('/' . $value['behavior']['settings']['folder'] . '/' . $file['file_name']);
                        echo $this->element('image_between', ['file' => $file]);
                    }
                    $i++;
                }
                ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
