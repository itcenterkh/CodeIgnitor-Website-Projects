<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url()?>/asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/dist/css/AdminLTE.min.css">
</head>
<body class="hold-transition login-page">
<div id="container">
    <div class="login-box">
        <div class="login-box-body">
            <h1 class="login-box-msg">Login</h1>
            <p><?php echo lang('login_subheading');?></p>

            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open("auth/login");?>

            <div class="form-group has-feedback">
                <?php echo lang('login_identity_label', 'identity', [
                    'class' => 'h4'
                ] );?>
                <?php echo form_input($identity,'',[
                    'class'=>'form-control input-sm' ,
                    'placeholder' => 'Password'
                ]);?>

            <div class="form-group has-feedback">
                <?php echo lang('login_password_label', 'password' , [
                    'class' => 'h4'
                ]);?>
                <?php echo form_input($password , '' , [
                    'class'=>'form-control input-sm' ,
                    'placeholder' => 'Password'
                ]);?>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <?php echo lang('login_remember_label', 'remember');?>
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                </div>
                <div class="col-xs-4">
                    <div class="col-xs-8">
                        <p><?php echo form_submit('submit', lang('login_submit_btn') , [
                                'class'=>'btn btn-primary'
                            ]);?></p>
                    </div>
                </div>
            </div>
            <?php echo form_close();?>

            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
        </div>
    </div>




</div>
</body>
</html>
