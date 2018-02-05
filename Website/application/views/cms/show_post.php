<!DOCTYPE html>
<html>
<head>
		<title>CMS ADMIN</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/style_cms.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


</head>
<body>
<div class="main-body">
    <?php include_once("menu_list.php"); ?>

		<div class="float-rigth">
				<form method="post">
						<table class="table" id="post_table" style="text-align: center">
								<thead  class="thead-dark">
								<tr >
										<th scope="col"  style="text-align: center"  >Product </th>
										<th scope="col"  style="text-align: center" >Categories </th>
										<th scope="col"  style="text-align: center" >Price</th>
										<th scope="col" style="text-align: center" >Description</th>
										<th scope="col" style="text-align: center">Post Date</th>
										<th scope="col" style="text-align: center">Address</th>
										<th scope="col" style="text-align: center">Phone</th>
										<th scope="col" style="text-align: center">Update</th>
										<th scope="col" style="text-align: center">Delete</th>
								</tr>
								</thead>

								<tbody>


						</table>
				</form>
		</div>
</div>

</body>
</html>
<script type="text/javascript">

    $(document).ready(function(){

            $.ajax({
                type: "GET",
                headers: {
                    "x-api-key" : "12345"
                } ,
                url: "<?= base_url()?>/index.php/api/post/" ,
                dataType: 'json',

            })
                .done(function(data) {
                    var post_data = '';
                    var i =0 ;
                    $.each(data["data"],function(key ,value){
                        post_data += "<tr>" ;
                        post_data += "<td scope='row'>"+ data["data"][i]["pname_kh"]	+"</td>";
                        post_data += "<td scope='row'>"+ data["data"][i]["cate_name_kh"]	+"</td>";
                        post_data += "<td scope='row'>"+ data["data"][i]["price"]	+"</td>";
                        post_data += "<td scope='row'>"+ data["data"][i]["description"]	+"</td>";
                        post_data += "<td scope='row'>"+ data["data"][i]["post_date"]	+"</td>";
                        post_data += "<td scope='row'>"+ data["data"][i]["address"]	+"</td>";
                        post_data += "<td scope='row'>"+ data["data"][i]["phone"]	+"</td>";
                        post_data += "<td scope='row'>"+ "<button type='submit' name='btnEdit' class='btn btn-success'>Update</button>"	+"</td> ";
                        post_data += "<td scope='row'>"+ "<button type='submit' name='btnEdit' class='btn btn-danger'>Delete</button>"	+"</td> ";
                        post_data += "</tr>";
                        i++ ;
                    });
                    $("#post_table").append(post_data);
                })
                .fail(function() {
                    alert("error");
                });


    });
</script>






