<div class="form-group">
    <label class="control-label"><?php echo isset($labelTitle) ? $labelTitle : $this->Form->label($field) ?></label>
    <div>
        <?php
        foreach ($options as $key => $option) {
            echo $this->Form->radio($field, [$key => $option], ['hiddenField' => false, 'disabled' => isset($disabled) ? $disabled : false, 'value' => isset($selected) ? $selected : NULL, 'label' => ['class' => 'radio-inline']]);
        }
        ?>
    </div>
    <?php echo $this->Form->error($field); ?>
</div>
