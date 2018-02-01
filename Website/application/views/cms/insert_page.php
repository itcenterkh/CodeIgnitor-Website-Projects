<?php  session_start();?>
<?php
include_once("../mobile/connect.php");


if (isset($_POST['submit'])) {
    $txtTittle = $_POST['txtTittle'];
    $txtDescription = $_POST['txtDescription'];
    $txtImage = $_POST['txtImage'];


//date time
    $date = date('Y-m-d H:i:s');
    $post_by = $_POST['txtAuthor'];
    $post_from = $_POST['txtPostFrom'];
    $post_type = $_POST['type'];

    if ($post_type == "1") {
        $type_news = "local";

    } else if ($post_type == "2") {
        $type_news = "international";

    } else {
        echo "Error";
    }
    if ($txtTittle == '' or $txtDescription == '') {
        echo "<script> alert('any field is empty') </script>";
        exit();
    }

//insert image
//    $image_name = $_FILES['image']['name'];
//    $image_type = $_FILES['image']['type'];
//    $image_size = $_FILES['image']['size'];
//    $image_tmp = $_FILES['image']['tmp_name'];

    $query = "INSERT INTO post(post_title , post_date ,post_author , post_image , post_content , source, type ) VALUE ('$txtTittle', '$date','$post_by','$txtImage', '$txtDescription',  '$post_from', '$type_news')";

    $result = mysqli_query($conn, $query);

//Success Insert
    if ($result > 0) {

        echo "<script> alert('Insert successfully')</script>";

//condition images
//        if ($image_type == "image/jpeg" or $image_type == "image/png" or $image_type == "image/jpg" or $image_type == "image/gif") {
//
//            //move_uploaded_file($image_tmp,"../images/admin/$image_name");
//            move_uploaded_file($image_tmp, "../../images/$image_name");
//
//
//        } else {
//            echo "<h1>Your image failed</h1>";
//
//        }

//Notification OneSignal


    //     $GLOBALS['oneSingal_Title'] = $txtTittle;
    //     $GLOBALS['oneSingal_Description'] = $txtDescription;
    //     $GLOBALS['oneSingal_Image'] = $txtImage;
    //     $GLOBALS['oneSingal_DateTime'] = $date;
    //     $GLOBALS['oneSingal_Author'] = $post_by;
    //     $GLOBALS['oneSingal_Reference'] = $post_from;
    //     $GLOBALS['oneSingal_Category'] = $type_news;

    //     function sendMessage()
    //     {
    //         $content = array(
    //             "en" => $GLOBALS['oneSingal_Title']
    //         );

    //         $fields = array(
    //             'app_id' => "8c3cce11-ab84-4827-93ba-7b860606bdae",
    //             'included_segments' => array('Active Users'),
    //             'data' => array("title" => $GLOBALS['oneSingal_Title'],
    //                 "description" => $GLOBALS['oneSingal_Description'],
    //                 "image" => $GLOBALS['oneSingal_Image'],
    //                 "date" => $GLOBALS['oneSingal_DateTime'],
    //                 "author" => $GLOBALS['oneSingal_Author'],
    //                 "reference" => $GLOBALS['oneSingal_Reference'],
    //                 "category" => $GLOBALS['oneSingal_Category']
    //             ),
    //             'contents' => $content
    //         );

    //         $fields = json_encode($fields);
    //         print("\nJSON sent:\n");
    //         print($fields);

    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
    //             'Authorization: Basic YjJlYmY0ZDItMmQ0NS00YTlmLWFhOGEtMDZiODg4YmE2ZDVl'));
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //         curl_setopt($ch, CURLOPT_HEADER, FALSE);
    //         curl_setopt($ch, CURLOPT_POST, TRUE);
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    //         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    //         $response = curl_exec($ch);
    //         curl_close($ch);

    //         return $response;
    //     }

    //     $response = sendMessage();
    //     $return["allresponses"] = $response;
    //     $return = json_encode($return);

    //     print("\n\nJSON received:\n");
    //     print($return);
    //     print("\n");


    } else {
        echo "<script> alert('Insert failed...! Please try again')</script>";
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
		<div class="float-rigth">
				<h1 class="text-center" style="color: red;">Admin Insert Data</h1>

				<form method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">

						<!-- Title -->
						<div class="form-group">
								<input type="text" class="form-control" name="txtTittle" placeholder="Tittle" required>
						</div>

						<!-- Description -->
						<div class="form-group">
								<textarea class="form-control" name="txtDescription" rows="10" placeholder="Description"
													required></textarea>
						</div>

						<!--						<!-- Image -->
						<!--						<div class="form-group">-->
						<!--								<input type="file" name="image" required>-->
						<!--						</div>-->


						<!-- image -->
						<div class="form-group">
								<input type="text" class="form-control" name="txtImage" placeholder="Paste Url" required>
						</div>

						<!-- Author -->
						<div class="form-group">

								<input type="text" class="form-control" name="txtAuthor" placeholder="Author">
						</div>

						<!-- Reference -->
						<div class="form-group">

								<input type="text" class="form-control" name="txtPostFrom" placeholder="Reference">
						</div>

						<!-- Category -->
						<div class="form-group">

								<select class="form-control" name="type">
										<option value="1">Local</option>
										<option value="2">International</option>
										<!--										<option value="3">Health</option>-->
										<!--										<option value="4">Sotfware</option>-->
										<!--										<option value="5">Youtube</option>-->
								</select>
						</div>

						<!-- Button -->
						<button type="submit" name="submit" class="btn btn-success">Upload</button>

				</form>
		</div>
    <?php include_once("menu_list.php"); ?>

</div>
</body>
</html> 