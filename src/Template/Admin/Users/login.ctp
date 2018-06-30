<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
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
        echo $this->Html->css(['admin/rtl-css/bootstrap-rtl', 'admin/rtl-css/style-rtl', 'admin/rtl-css/responsive-rtl']);
    } else {
        echo $this->Html->css(['admin/bootstrap.min', 'admin/style', 'admin/responsive']);
    }

    echo $this->Html->css(['admin/plugins/pace', 'admin/plugins/ladda-themeless.min',
                           'admin/plugins/humane_themes/bigbox', 'admin/plugins/humane_themes/libnotify', 'admin/plugins/humane_themes/jackedup'])
    ?>
    <?php echo $this->Html->script(['admin/pace.min']) ?>
    <?php echo $this->fetch('css') ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="login-screen">
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-content">

                        <?php echo $this->Html->image('admin/logo-1.png'); ?>


                    </div>

                    <div class="login-form">
                        <?php
                        echo $this->Flash->render();
                        $this->Form->templates(['inputContainer' => '{{content}}']);
                        ?>
                        <?php echo $this->Form->create('Users', ['class' => 'form-horizontal ls_form', 'id' => 'form-login']); ?>
                        <!--<form id="form-login" action="<?php echo $this->Url->build() ?>" class="form-horizontal ls_form">-->
                        <div class="input-group ls-group-input">
                            <?php echo $this->Form->input('username', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Username', true)]) ?>
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>


                        <div class="input-group ls-group-input">

                            <?php echo $this->Form->input('password', ['label' => false, 'class' => 'form-control', 'placeholder' => __('Password', true)]) ?>
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>


                        <div class="input-group ls-group-input login-btn-box">
                            <button type="submit" class="btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12" ty
                                    data-style="slide-down">
                                <span class="ladda-label"><i class="fa fa-key"></i></span>
                            </button>

                            <!--<a class="forgot-password" href="javascript:void(0)">Forgot password</a>-->
                        </div>
                        </form>
                    </div>
                    <div class="forgot-pass-box">
                        <form action="#" class="form-horizontal ls_form">
                            <div class="input-group ls-group-input">
                                <input class="form-control" type="text" placeholder="someone@mail.com">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            </div>
                            <div class="input-group ls-group-input login-btn-box">
                                <button class="btn ls-dark-btn col-md-12 col-sm-12 col-xs-12">
                                    <i class="fa fa-rocket"></i> Send
                                </button>

                                <a class="login-view" href="javascript:void(0)">Login</a>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<?php
echo $this->Html->script(['admin/lib/jquery-2.1.1.min', 'admin/bootstrap.min.js', 'admin/lib/jquery.easing.js',
                          'admin/loader/spin.js', 'admin/loader/ladda.js', 'admin/humane.min.js', 'admin/pages/login'])
?>
<?php echo $this->fetch('script') ?>
</body>
</html>
