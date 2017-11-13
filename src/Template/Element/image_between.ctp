<div class="image_between">
    <?php
    if (isset($file)) {
        ?>
        <span class="image_base_name"><?php echo $file['file_name'] ?></span>
        <a href="<?php echo $file['path'] ?>" target="_blank" class="btn btn-primary btn-small"><i class="fa fa-search"></i> <?php echo __('Preview') ?></a>
         <a href="<?php echo $file['path'] ?>" target="_blank" class="btn btn-danger btn-small"><i class="fa fa-info"></i> <?php echo __('Delete') ?></a>
    <?php } ?>
    <div class="clear"></div>
</div>
