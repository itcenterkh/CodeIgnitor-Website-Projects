<?php require_once"header.php";?>
<div class="container">
<div class="row">
		    <!-- ditail_slide -->

<div class="col-md-9" style="margin-top: 10px;">
	    <br>
	    <br/>
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
  	   <!--  <ol class="carousel-indicators">
  	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  	      <li data-target="#myCarousel" data-slide-to="1"></li>
  	      <li data-target="#myCarousel" data-slide-to="2"></li>
  	      <li data-target="#myCarousel" data-slide-to="3"></li>
  	    </ol> -->
      <?php foreach($view_data as $key => $data) {?>
	    <!-- Wrapper for slides -->
  	    <div class="carousel-inner" role="listbox">
  	      <div class="item active my-item">
  	        <img src="<?php echo base_url(); ?>/asset/img/Img_index/<?php echo $data['img_thumbnail']; ?>" alt="Chania" class="img-responsive" style="width: 100%">
  	      </div>
	    </div>

	    <!-- Left and right controls -->
  	    <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  	      <span class="sr-only">Previous</span>
  	    </a>
  	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  	      <span class="sr-only">Next</span>
  	    </a> -->
      </div>
	    <!-- end -->
  
  <!-- =========price======= -->
      
        	<div class="description_price">
        	        <h3 style="color:green">Price:<?php echo $data['price']; ?></h3>
        	</div>
      <?php }?>
  
  <!-- =========detail======= -->
	    <div class="divider">
	      <div class="line" style="top:57%;"></div>
	      <h2>Decription</h2>
	    </div>
      <?php foreach($view_data as $key => $data) {?>
    	    <div class="col-md-9" style="font-size: 20px;">
            <p><?php echo $data['description'];?></p>
    	    </div>
      <?php }?>

</div>

	<div class="col-md-3">
	  <!-- ===================line-post=================== -->
		<div class="divider">
		    <div class="line" style="top:48px;"></div>
		    <h3>Other</h3>
		</div>
			  <?php foreach($view_other as $key => $other) {?>
            <div class="affected">
              <a href="<?= base_url() ?>FrontEnd/detail/<?php echo $other['id']; ?>">
                <img src="<?php echo base_url(); ?>/asset/img/image_detail/<?php echo $other['img_thumbnail']; ?>" alt="Lights" style="width:256px;height: 156px" class="img-responsive affected_img">
                      <div class="overlay1">
                        <p class="t1" >Detail</p>
                      </div>
              </a>
            </div>
            <div class="containprice1">
                  <div class="titlefruit1">
                    <h4><?php echo $other['pname_kh']; ?></h4>
                  </div>
                  <div class="price1 ">
                    <h4><?php echo $other['price']; ?></h4>
                  </div>
            </div>
        <?php }?>
	      
	</div>
</div>
</div>
<?php require_once"footer.php";?>
