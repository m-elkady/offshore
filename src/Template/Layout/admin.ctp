<?php
$this->assign('title', $title_for_layout);
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset() ?>
    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>
        <?php echo $this->fetch('title') ?>
    </title>
    <?php echo $this->Html->meta('icon') ?>
    <?php echo $this->fetch('meta') ?>

    <?php
    if ($lang == 'ar') {
        echo $this->Html->css(['admin/rtl-css/bootstrap-rtl', 'admin/rtl-css/style-rtl', 'admin/rtl-css/responsive-rtl', 'admin/plugins/summernote']);
    } else {
        echo $this->Html->css(['admin/bootstrap.min', 'admin/style']);
    }
    echo $this->Html->css(['admin/plugins/jquery.datetimepicker']);
    echo $this->Html->css(['admin/plugins/pace'])
    ?>

    <?php echo $this->Html->script(['admin/pace.min']) ?>
    <?php echo $this->fetch('css') ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="<!--deep-blue-color--> black-color ">
<nav class="navigation">
    <div class="container-fluid">
        <!--Logo text start-->
        <div class="header-logo">
            <a href="<?php echo $this->url->build('/admin') ?>" title="">
                <h1><?php echo $config['site_name_' . $lang]; ?>

                </h1>

            </a>
        </div>
        <!--Logo text End-->
        <div class="top-navigation">
            <!--Collapse navigation menu icon start -->
            <div class="menu-control hidden-xs">
                <a href="javascript:void(0)">
                    <i class="fa fa-bars"></i>
                </a>
            </div>


            <!--Collapse navigation menu icon end -->
            <!--Top Navigation Start-->

            <ul>
                <li>
                    <i class="fa fa-user"></i> <?php echo __('Hello') ?> <?php echo $user['username'] ?>
                    <a href="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'logout']) ?>">
                        <i class="fa fa-power-off"></i>
                    </a>
                </li>

            </ul>
            <!--Top Navigation End-->
        </div>
    </div>
</nav>
<!--Navigation Top Bar End-->
<section id="main-container">

    <!--Left navigation section start-->
    <section id="left-navigation">
        <!--Left navigation user details start-->
        <div class="user-image">
            <?php echo $this->Html->image('admin/logo-1.png'); ?>

        </div>

        <!--Left navigation user details end-->

        <!--Phone Navigation Menu icon start-->
        <div class="phone-nav-box visible-xs">
            <a class="phone-logo" href="index.html" title="">
                <h1><?php echo $config['site_name_' . $lang]; ?>
            </a>
            <a class="phone-nav-control" href="javascript:void(0)">
                <span class="fa fa-bars"></span>
            </a>
            <div class="clearfix"></div>
        </div>
        <!--Phone Navigation Menu icon start-->

        <!--Left navigation start-->

        <?php echo $this->element('side_menu') ?>

        <!--Left navigation end-->
    </section>
    <!--Left navigation section end-->


    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <!--<h3 class="ls-top-header">Deep Blue Layout</h3>-->
                        <!--Top header end -->

                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <?php echo $this->element('crumbs'); ?>
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $this->Flash->render() ?>
                        <?php echo $this->fetch('content') ?>
                    </div>
                </div>

                <!-- Main Content Element  End-->

            </div>
        </div>
    </section>
    <!--Page main section end -->

</section>


<footer>
</footer>
<?php echo $this->Html->script(['admin/lib/jquery-1.11.min', 'admin/bootstrap.min.js', 'admin/summernote', 'admin/summernote-ar-AR']) ?>

<?php echo $this->Html->script(['admin/multipleAccordion.js', 'admin/lib/jquery.easing.js', 'admin/bootstrap-filestyle.min', 'admin/pages/layout', 'admin/jquery.validate']) ?>

<?php echo $this->Html->script(['admin/jquery.datetimepicker']); ?>


<script>
    $(function () {
        jQuery.extend(jQuery.validator.messages, {
            required: "<?php echo __('Required') ?>",
            email: "<?php echo __('Please enter a valid email') ?>",
            url: "<?php echo __('Please enter a valid url') ?>",
            digits: "<?php echo __('This field accepts numbers only') ?>",
        });
    });
    $('.dateTimePicker').datetimepicker({
        format: 'Y-m-d H:i',
        lang: '<?php echo $lang ?>'
    });
    $(":file").filestyle({
        placeholder: '<?php echo __('No File') ?>',
        buttonText: '<?php echo __('Choose File') ?>',
        buttonName: "btn-primary",
        input: false
    });

    $(function () {
        $('.summernote').summernote({
            height: '300px',
            dialogsFade: true,
            dialogsInBody: true
        });

        $("#acts").on('change', function () {
            var action = $(this).val();
            if (action !== "") {
                if ($('input[name="chk[]"]:checked').length === 0) {
                    alert("<?php echo __('You should select one item at least.'); ?>");
                    $(this).val('');
                } else {
                    var del = confirm("<?php echo __('you sure you want to perform this operation?'); ?>");
                    if (del) {
                        $(this).closest('form').submit();
                        $(this).val('');
                    } else {
                        $(this).val('');
                    }
                }

            }
        });

        $("#checkall").on('click', function () {
            if (!$(this).is(':checked'))
                $(this).closest('table').find('input[type=checkbox][name="chk[]"]').prop('checked', false);
            else
                $(this).parents('table').find('input[type=checkbox][name="chk[]"]').prop('checked', true);

        });
    });
</script>
<?php echo $this->fetch('script') ?>
<script>
    $(function () {
        $('.note-modal-form').each(function () {
            $(this).validate({})
        });
    });
</script>
</body>
</html>
