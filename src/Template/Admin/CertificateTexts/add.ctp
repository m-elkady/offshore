<?php
/**
 * @var \App\View\AppView                 $this
 * @var \App\Model\Entity\CertificateText $certificateText
 */
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php
            if (!$certificateText->id) {
                echo __('Add Certificate Text');
            } else {
                echo __('Edit Certificate Text');
            }
            ?></h3>
      </div>
      <div class="panel-body">

          <?= $this->Form->create($certificateText) ?>
          <?php
          echo $this->Form->control('title', ['class' => 'form-control']);
          echo $this->Form->control('content', ['class' => 'form-control']);
          echo $this->Form->control('type', ['class' => 'form-control']);
          ?>

          <?= $this->Form->button(__('Submit')) ?>
          <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>
