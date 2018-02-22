
<!DOCTYPE html>
<html>
<head>

		<title>List</title>
		<link rel="stylesheet" type="text/css" href="style_cms.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="float-left">
    <div class="list-group">
        <a href="<?= base_url() ?>index.php/admincontroller/index" class="list-group-item list-group-item-success" id="margin">Admin</a>
        <a href="<?= base_url() ?>index.php/admincontroller/add" class="list-group-item list-group-item-info" id="margin">Add Post</a>
        <a href="<?= base_url() ?>index.php/admincontroller/show" class="list-group-item list-group-item-warning" id="margin">Show Post</a>
        <a href="<?= base_url() ?>index.php/admincontroller/addProduct" class="list-group-item list-group-item-info" id="margin">Add Product</a>
        <a href="<?= base_url() ?>index.php/admincontroller/addCategories" class="list-group-item list-group-item-dark" id="margin">Add Categories</a>
        <a href="<?= base_url() ?>index.php/auth/logout" class="list-group-item list-group-item-danger" id="margin">Log out</a>

    </div>
</div>
</body>
</html>