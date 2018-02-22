<?php include "header.php";?>
<?php include "slider.php";?>
<br/>    
<div class="container">
    <div class="row">
    	<?php foreach($view_data as $key => $data) {?>
			  <div class="col-xs-6 col-md-3">
				<div class="thumbnail" style="border:none;">
			    	<a href="<?= base_url() ?>asset/img/gallery/<?php echo $data['img2']; ?>" class="fancybox" rel="group">
			         <img src="<?php echo base_url(); ?>/asset/img/gallery/<?php echo $data['img2']; ?>" class="img-responsive" title="layerfinger" style="width:356px;height: 228px">
			       	</a>
			    </div>
			</div>
	  	<?php }?>
	</div>
</div>
    
<?php include "footer.php";?>