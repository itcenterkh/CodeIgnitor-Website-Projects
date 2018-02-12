<!DOCTYPE html>
<html>
<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<title>CMS AMDMIN</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style_cms.css ">
        <script src="<?= base_url() ?>asset/plugins/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="main-body">
		<div class="float-rigth">
				<h1 class="text-center" >Admin Insert Data</h1>

				<form method="post" action="" enctype="multipart/form-data">

						<!-- Categories -->
                    <div class="form-group">

                        <select class="form-control" name="type">
                            <option value="1">Fruit</option>
                            <option value="2">Vegetable</option>

                        </select>
                    </div>
<!--                    Product -->
                    <div class="form-group">

                        <select class="form-control" name="type">
                            <option value="1">Mango </option>
                            <option value="2">Banana</option>

                        </select>
                    </div>


                    <!-- Description -->
						<div class="form-group">
                            <textarea  class="ckeditor" name="Editor" rows="16"></textarea>
						</div>

						<!-- image -->
						<div class="form-group">
								<input type="text" class="form-control" name="txtImage" placeholder="Address(st.271 sangkat : Boeung Tompun Khan : Mean Chey )" required>
						</div>

						<!-- Price -->
						<div class="form-group">

								<input type="text" class="form-control" name="txtAuthor" placeholder="Price (1kg 2$)">
						</div>

						<!-- phone Number -->
						<div class="form-group">

								<input type="text" class="form-control" name="txtPostFrom" placeholder="Phone Number (012 985988 , 011859475)">
						</div>

                    <!-- Image thumbnail  -->
                    <div class="form-group">
                        <p>Thumbnail</p>
                        <input type="file" class="form-control" name="thumbnail" >
                    </div>
<!--                    Other Image-->
                    <div class="form-group">
                        <p>Other Image</p>
                        <input type="file" class="form-control" name="img1">
                        <input type="file" class="form-control" name="img2">
                        <input type="file" class="form-control" name="img3">
                        <input type="file" class="form-control" name="img4">
                        <input type="file" class="form-control" name="img5">
                    </div>

                    <!-- Button -->
						<button type="submit" name="submit" class="btn btn-success">Upload</button>

				</form>
		</div>
    <?php include_once("menu_list.php"); ?>

</div>
</body>
</html> 