<?php
$this->assign('title', $title_for_layout);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->fetch('title') ?></title>

    <!--<meta name="description" content="An interactive getting started guide for Brackets.">-->

    <?php echo $this->fetch('css') ?>
    <!--[if lt IE 9]>
    <?php echo $this->Html->script(['html5shiv', 'respond.min']); ?>
    <![endif]-->
</head>
<body>
<?php echo $this->Flash->render(); ?>
<?php echo $this->fetch('content'); ?>
<?php echo $this->fetch('script'); ?>
</body>
</html>
