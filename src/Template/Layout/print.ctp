<?php
/**
 * @var \App\View\AppView                             $this
 * @var \App\Model\Entity\FireExtinguisherCertificate $fireExtinguisherCertificate
 */
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="OSSE Data System">
  <meta name="author" content="Abdalrahman Mokhles">
  <title><?php echo $this->fetch('title') ?></title>
  <!-- Custom styles for this template -->
    <?php echo $this->Html->css(['admin/bootstrap4.min.css', 'admin/view.css']); ?>
    <?php echo $this->Html->css('admin/print.css', ['media' => 'print']); ?>
    <?php echo $this->fetch('css') ?>
</head>
<body>
<?php echo $this->fetch('content') ?>
</body>
<script>
    window.addEventListener('load', function () {
        window.print();
    })
</script>
</html>