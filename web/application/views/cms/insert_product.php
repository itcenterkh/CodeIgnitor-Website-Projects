<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/style_cms.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <title>CMS ADMIN</title>
</head>
<body>

<div class="main-body">
    <?php include_once("menu_list.php"); ?>
    <div class="float-rigth">
        <form method="POST" id="formproduct">
            <div class="form-group">
                <label for="categories">Categories</label>
                <select class="form-control" id="categories" name="cateid">

                </select>
            </div>
            <div class="form-group">
                <label for="Product_en">Product Name EN</label>
                <input type="text" name="pname_en" class="form-control" id="Product_en" placeholder="Product Name EN ">
            </div>
            <div class="form-group">
                <label for="Product_kh">Product Name KH</label>
                <input type="text" name="pname_kh" class="form-control" id="Product_kh" placeholder="Product Name KH ">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <form method="get">

            <table class="table" style="margin-top: 100px " id="product_table">
                <thead>
                <tr>
                    <th scope="col" style="text-align: center">#</th>
                    <th scope="col"  style="text-align: center">Categories EN </th>
                    <th scope="col"  style="text-align: center">Categories KH </th>
                    <th scope="col"  style="text-align: center">Product Name EN</th>
                    <th scope="col"  style="text-align: center">Product Name KH</th>
                    <th scope="col"  style="text-align: center">Delete</th>

                </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </form>
    </div>
</div>

</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
//    Get data to categories LISt
    $.ajax({
        type: "GET",
        headers: {
            "x-api-key" : "12345"
        } ,
        url: "<?= base_url() ?>/index.php/api/category" ,
        dataType: 'json',

    })
        .done(function(data) {
            var categories = '';
            var i = 0 ;
//                alert(JSON.stringify(data)) ;
            $.each(data["data"] , function(key, values){
                categories += "<option value ="+ data["data"][i]["id"]+">" + data["data"][i]["name_kh"]+"</option>"
                i++ ;
            }) ;
            $('#categories').append(categories);
        })
        .fail(function() {
            alert("error");

        });

//    get data to table
    $.ajax({
        type: "GET",
        headers: {
            "x-api-key" : "12345"
        } ,
        url: "<?= base_url()?>/index.php/api/product" ,
        dataType: 'json',

    })
        .done(function(data) {
            var post_data = '';
            var i =0 ;
            var id = null ;
            $.each(data["data"],function(key ,value){
                post_data += "<tr>" ;
                id = data["data"][i]["id"] ;
                post_data +=  "<td scope='row'>"+ data["data"][i]["id"]	+"</td>";
                post_data += "<td scope='row'>"+ data["data"][i]["categories_name"]	+"</td>";
                post_data += "<td scope='row'>"+ data["data"][i]["name_kh"]	+"</td>";
                post_data += "<td scope='row'>"+ data["data"][i]["pname_en"]	+"</td>";
                post_data += "<td scope='row'>"+ data["data"][i]["pname_kh"]	+"</td>";
//                post_data += "<td scope='row'>"+ "<button type='submit' name='btnEdit' class='btn btn-success'><a href= " + "<?//= base_url() ?>//index.php/admincontroller/update/"+id+">Update</a></button>"+"</td>";
                post_data += "<td scope='row'>"+ "<button type='submit' id='delete' name='btn-delete' class='btn btn-danger'>Delete</button>"+"</td> ";
                post_data += "</tr>";
                i++ ;
            });
            $("#product_table").append(post_data);
        })
        .fail(function() {
            alert("error");
        });

$("form#formproduct").submit(function(e){

    e.preventDefault() ;
    var formData = new FormData(this) ;
    $.ajax({

        headers : {
            "x-api-key" : "12345"
        } ,
        url : "<?= base_url()?>index.php/api/product" ,
        type : 'POST' ,
        data : formData ,
        success : function(data){
            $("#cid").text("");
            $("#Product_en").text("");
            $("#Product_kh").val("");
            window.location.reload();
        } ,
        cache: false,
        contentType :false ,
        processData : false
    });

});

        $('body').on('click','#delete',function(){

            var ID  = $(this).closest("tr").children("td:eq(0)").html();
            var row = $(this).closest("tr").get(0);
            var r=confirm("Are you sure to delete this value?");
            if (r==true) {
                var r=confirm("If you click OK, This user will be delete the value from system?");
                if (r==true) {

                    $.ajax({
                        type: "DELETE",
                        headers: {
                            "x-api-key" : "12345"
                        } ,
                        url:"<?= base_url()?>index.php/api/categories/"+ID,
                        data: { train_id:ID},
                        success  : function(result){
                            table.fnDeleteRow(table.fnGetPosition(row));
                        }
                    });


                }
            }
        });


});

</script>