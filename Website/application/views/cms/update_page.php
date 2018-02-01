<?php 
 session_start();
//select to show update
  include_once("../mobile/connect.php");
    
  $page_id = $_GET['id'];

	$query = "SELECT * FROM post WHERE post_id = '$page_id'";
				
	$result = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_assoc($result)) {

		$tittle = $row['post_title'];
		$post_date = $row['post_date'];
    $post_by = $row['post_author'];
    $description = $row['post_content'];
		$post_from = $row['source'];
		$category = $row['type'];	
	}
?>
<?php
//Update satement
if (isset($_POST['submit'])) {

    $txtTittle = $_POST['txtTittle'];
    $txtDescription = $_POST['txtDescription'];
    $author = $_POST['txtAuthor'];
    $soure = $_POST['txtPostFrom'];
    $post_type = $_POST['type'];


    if ($txtTittle == '' or $txtDescription == '') {
      echo "<script> alert('any field is empty') </script>";
      exit();
    }else if ($post_type == "1") {
      $type_news = "local";

    }else if ($post_type == "2") {
      $type_news = "international";

    }else{
       echo "<script> alert('Please select category again')</script>";
    }

    $query = "UPDATE post SET post_title = '$txtTittle', post_author = '$author', post_content = '$txtDescription', source = '$soure', type = '$type_news' WHERE 
    post_id = '$page_id'";


    $result = mysqli_query($conn, $query);

    if ($result > 0){
       header("location: table_page.php");
       echo "Success";
       exit();        
    }else{
      echo "Update failed";
    }   

}

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title>Insert Data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style_cms.css">
</head>
<body>
 
<div class="main-body">
<?php include_once("menu_list.php"); ?>

  <div class="float-rigth">
   	<h1 class="text-center" style="color: red;">Update Data</h1>

  	<form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">

      <!-- Title -->
      <div class="form-group">
        <input type="text" class="form-control" name="txtTittle" placeholder="Tittle" value="<?php echo $tittle; ?> " required>
      </div>

      <!-- Description -->
      <div class="form-group">

		<textarea class="form-control" name="txtDescription" rows="10" placeholder="Description" required><?php echo $description; ?></textarea>
      </div>

      <!-- Author -->
     	<div class="form-group">
        <input type="text" class="form-control" name="txtAuthor" value=" <?php echo $post_by; ?> " placeholder="Author">
      </div>

      <!-- Reference -->
      <div class="form-group">
      	
    		<input type="text" class="form-control" name="txtPostFrom" value="<?php echo $post_from; ?> "placeholder="Reference">
      </div>  

      <!-- Category -->
      <div class="form-group">
      	<select class="form-control" name="type">
      		<option value=""><?php echo $category; ?></option>
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



