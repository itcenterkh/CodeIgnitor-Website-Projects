<!DOCTYPE html>
<html>
<head>
		<title>CMS ADMIN</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/style_cms.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="main-body">
    <?php include_once("menu_list.php"); ?>

		<div class="float-rigth">
				<form method="post">
						<table class="table">
								<thead>
								<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Description</th>
										<th>Image</th>
										<th>Date</th>
										<th>Author</th>
										<th>Reference</th>
										<th>Category</th>
										<th>Update</th>
										<th>Delete</th>
								</tr>
								</thead>

								<tbody>
										<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>
														<button type="submit" name="btnEdit" class="btn btn-success">Update</a></button>
												</td>
												<td>
														<button type="submit" name="btnDelete" class="btn btn-danger">Delete</button>
												</td>
										</tr>
										</tbody>

						</table>
				</form>
		</div>
</div>

</body>
</html>






