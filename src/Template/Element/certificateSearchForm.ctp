<?php
$url = ['action' => $this->request->params['action']];
echo $this->Form->create($model, ['type' => 'GET', 'url' => $url]) ?>
<div class="row">
    <?php echo $this->Form->control('vessel_id',
        [
            'value'        => isset($this->request->query['vessel_id']) ? $this->request->query['vessel_id'] : '',
            'class'        => 'form-control',
            'templateVars' => ['div_classes' => 'col-md-6'],
            'empty'        => 'Select Vessel',
            'label'        => 'Vessel Name',
        ]) ?>
    <?php echo $this->Form->control('certificate_number', [
        'value'        => isset($this->request->query['certificate_number']) ? $this->request->query['certificate_number'] : '',
        'class' => 'form-control', 'templateVars' => ['div_classes' => 'col-md-6'],]) ?>
  <div class="clear"></div>
  <div class="col-md-6">
    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> <?php echo __('Search') ?></button>
  </div>
</div>
<?php echo $this->Form->end(); ?>
<br/>
<br/>