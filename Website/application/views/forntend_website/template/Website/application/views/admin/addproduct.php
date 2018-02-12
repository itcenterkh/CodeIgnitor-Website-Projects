<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />-->
    <!-- Bootstrap Core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="<?= base_url() ?>asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?= base_url() ?>asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?= base_url() ?>asset/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>asset/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?= base_url() ?>asset/css/colors/blue-dark.css" id="theme" rel="stylesheet">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="<?= base_url() ?>asset/plugins/ckeditor/ckeditor.js"></script>
<![endif]-->
</head>

<body>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn').click(function(){

                $.ajax({
                    url: "http://localhost/Codelginter/CodeIgnitor-Website-Projects/Website/api/category",
                    method  : 'get',
                    beforeSend: function( xhr ) {
                        xhr.addRequestHeader( "x-api-key","12345" );

                    }
                })
                    .done(function( data ) {
                        if ( console && console.log ) {
                            alert(data);
                        }
                });
            });
        });
    </script>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>

                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#">  </a>
                    </li>
                </ul>
            </div>

        </nav>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">

                        <a href="<?= base_url() ?>index.php/admincontroller/index" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>index.php/admincontroller/add" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">add Product</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>index.php/admincontroller/show" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">show Product</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>index.php/auth/logout" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">add Product</h4> </div>
                    </div>
                </div>
                <div class="row">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">product Name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Product name" class="form-control form-control-line"> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="(home 1 , st : 271 , sangkat **** , khan *** , PP)" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                        <textarea  class="ckeditor" name="Editor" rows="16" placeholder="Add Something Here or you can upload Image Here "></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Select Categories</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Fruit</option>
                                            <option>Vegetable</option>
                                            <option>Cerial</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Choose Images Thumbnail</label>
                                    <div class="col-md-4 mb-3">
                                         <input type="file"  multiple="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Choose other Images</label>
                                    <div class="col-md-4 mb-3">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <input id="input-b1" name="input-b1" type="file" class="file">
                                        <input id="input-b1" name="input-b1" type="file" class="file">
                                        <input id="input-b1" name="input-b1" type="file" class="file">
                                        <input id="input-b1" name="input-b1" type="file" class="file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary">Upload</button>

                                    </div>
                                </div>
                            </form>
                            <button id="btn">click</button>
                        </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>asset/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>asset/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?= base_url() ?>asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?= base_url() ?>asset/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>asset/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>asset/js/custom.min.js"></script>
</body>

</html>

