<?php session_start();
include_once("../mobile/connect.php");

$query = "SELECT * FROM post ORDER BY post_id DESC";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html>
<head>
		<title>Update Page</title>
		<link rel="stylesheet" type="text/css" href="style_cms.css">
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
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['post_id'];
                    $tittle = substr($row['post_title'], 0, 50);
                    $post_date = $row['post_date'];
                    $post_by = $row['post_author'];
                    $image = substr($row['post_image'], 0, 20);
                    $description = substr($row['post_content'], 0, 50);
                    $post_from = $row['source'];
                    $category = $row['type'];
                    ?>
										<tbody>
										<tr>
												<td><?php echo $id; ?></td>
												<td><?php echo $tittle; ?></td>
												<td><?php echo $description; ?></td>
												<td><?php echo $image; ?></td>
												<td><?php echo $post_date; ?></td>
												<td><?php echo $post_by; ?></td>
												<td><?php echo $post_from; ?></td>
												<td><?php echo $category; ?></td>
												<td>
														<button type="submit" name="btnEdit" class="btn btn-success"><a href="update_page.php?id=<?php echo $id; ?>">Update</a></button>
												</td>
												<td>
														<button type="submit" name="btnDelete" class="btn btn-danger">Delete</button>
												</td>
										</tr>
										</tbody>

                <?php } ?>
						</table>
				</form>
		</div>
</div>

</body>
</html>

<?php
if (isset($_POST['btnDelete'])) {

    $delete = "DELETE FROM post WHERE post_id = '$id'";

    if (mysqli_query($conn, $delete)) {
        echo "delete successfully..";
    } else {
        echo "delete faild";
    }
}
?>






