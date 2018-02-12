<!DOCTYPE html>
<html>
<head>
	<title>Template</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/detail.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scroltop.js"></script>
  <link rel="stylesheet" href="jquery-ui-themes-1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
</head>
<body>
    <!-- <script type="text/javascript">
        $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 100) {
            $('.topmain').addClass('fixed');
        }
        else {
            $('.topmain').removeClass('fixed');
        }
        });
    </script> -->
    
<div class="topmain">
	<div class="header">
		<div class="container">
			<div class="col-md-2">
				<div class="image1">
					<img src="images/logo/logo1.png" style="padding: 10px">
			  </div>
		  </div>
      <div class="col-md-4">
        <div class="image1">
          <h3 style="font-size: 26px;color: green">ក្រុមហ៊ុន​ អិន​ អេស​ ធី</h3>
          <h2 style="font-size: 24px;color: orange">NST Company COL.,LTD</h2>
        </div>
      </div>
    <!-- Search Form -->
		    <div class="col-md-3" style="margin-top: 30px;">

          <form role="form" style="width: 250px;">
              <div class="form-group">
                  <div class="input-group">
                      <input class="form-control" type="text" name="search" placeholder="Search" required/>
                      <span class="input-group-btn">
                          <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"><span style="margin-left:10px;">Search</span></button>
                      </span>
                      </span>
                  </div>
              </div>
          </form>
        </div>
    <!-- End of Search Form -->

        <div class="col-md-3" style="margin-top: 30px;">
          <span><p>Language</p></span>
          <img src="images/logo/cambodia_flat.jpg" style="width: 20px;height: 20px;">
          <img src="images/logo/english_flat.jpg" style="width: 20px;height: 20px;">
        </div>
</div>

<nav class="navbar navbar-inverse" style="background-color:MediumSeaGreen   ;border:none;border-radius: 0px;color: white">
  <div class="container">
    <ul class="nav navbar-nav menu" style="font-size: 18px">
        <li><a href="index.php" style="color: white">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">Cateorey 
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="vegetable.php">vegetable</a></li>
            <li><a href="fruit.php">fruit</a></li>
            <li><a href="cereal.php">cereal</a></li>
          </ul>
        </li>
        <li><a href="gallery.php" style="color: white">Gallery</a></li>
        <li><a href="aboutus.php" style="color: white">About Us</a></li>
        <li><a href="contactus.php" style="color: white">Contact Us</a></li>
    </ul>
  </div>
</nav>

<script type="text/javascript">
          $(document).ready(function() {
            $(".fancybox").fancybox();
            $(".fancybox").fancybox({
            fitToView: false,
            beforeShow: function () {
                this.width = 700;
                this.height = 500;
            }
            });
          });
    </script>
</div>