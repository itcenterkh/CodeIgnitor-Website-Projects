
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title>CMS ADMIN</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style_cms.css ">
</head>
<body>
 
<div class="main-body">
    <?php include_once("menu_list.php"); ?>

  <div class="float-rigth">
   	<h1 class="text-center" style="color: red;">Update Data</h1>

  	<form method="POST" action="" enctype="multipart/form-data">

      <!-- Title -->
      <div class="form-group">
        <input type="text" class="form-control" name="txtTittle" placeholder="Tittle" value="" required>
      </div>

      <!-- Description -->
      <div class="form-group">

		<textarea class="form-control" name="txtDescription" rows="10" placeholder="Description" required></textarea>
      </div>

      <!-- Author -->
     	<div class="form-group">
        <input type="text" class="form-control" name="txtAuthor" value=" " placeholder="Author">
      </div>

      <!-- Reference -->
      <div class="form-group">
      	
    		<input type="text" class="form-control" name="txtPostFrom" value=" " placeholder="Reference">
      </div>  

      <!-- Category -->
      <div class="form-group">
      	<select class="form-control" name="type">
      		<option value=""></option>
    		  <option value="1">Local</option>
    		  <option value="2">International</option>
    	  </select> 
      </div>
      
      <!-- Button -->
      <button type="submit" name="submit" class="btn btn-success">Update</button>

  </form>

</div>
  

</div>  
</body>
</html>



