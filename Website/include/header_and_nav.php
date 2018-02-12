<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url()?>/asset/dist/css/skins/_all-skins.min.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <nav class="navbar navbar-static-top">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=base_url()?>/asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>

                </div>
            </div>
            <!--Manu Bar-->

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?= base_url() ?>index.php/admincontroller/index">
                        <i class="fa fa-globe"></i> <span>Show Post</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="<?= base_url() ?>index.php/admincontroller/add">
                        <i class="fa fa-pencil-square-o"></i> <span>Add Post</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="<?= base_url() ?>index.php/admincontroller/addProduct">
                        <i class="fa fa-cart-plus"></i> <span>Product</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="<?= base_url() ?>index.php/admincontroller/addCategories">
                        <i class="fa fa-cart-plus"></i> <span>Categories</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="<?= base_url() ?>index.php/auth/logout">
                        <i class="fa  fa-sign-out"></i> <span>Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


