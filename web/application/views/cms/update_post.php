
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title>CMS ADMIN</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style_cms.css ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>asset/js/bootstrap-filestyle.js"></script>
<style type="text/css">
    .imgname {
        text-align: left ; font-size: 20px ; margin-left: 10px
    }
</style>
</head>
<body>
 
<div class="main-body">
    <?php include_once("menu_list.php"); ?>

  <div class="float-rigth">
   	<h1 class="text-center" style="color: red;">Update Data</h1>

      <form method="post" action="" enctype="multipart/form-data" id="formdata">

          <!-- Categories -->
          <div class="form-group">

              <select class="form-control" name="cid" id="select_categories">
                  <option value="0">ជ្រើសរិសប្រភេទ</option>
              </select>
          </div>
          <!--                    Product -->
          <div class="form-group">

              <select class="form-control" name="pid" id="select_product">

              </select>
          </div>


          <!-- Description -->
          <div class="form-group">
              <textarea id="description" name="description" rows="16" style="width:100% " placeholder="Add Description here"></textarea>
          </div>

          <!-- address -->
          <div class="form-group">
              <input type="text" id="address" class="form-control" name="address" placeholder="Address(st.271 sangkat : Boeung Tompun Khan : Mean Chey )" >
          </div>

          <!-- Price -->
          <div class="form-group">

              <input type="text" id="price" class="form-control" name="price" placeholder="Price (1kg 2$)">
          </div>

          <!-- phone Number -->
          <div class="form-group">

              <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone Number (012 985988 , 011859475)">
          </div>

          <!-- Image thumbnail  -->
          <div class="form-group">
              <p>Thumbnail</p>

              <input type="file" class="form-control" name="thumbnail" >
              <p id="lblthumbnail" class="imgname" ></p>
          </div>
          <!--                    Other Image-->
          <div class="form-group">
              <p>Other Image</p>

              <input type="file" id="file_ta" class="form-control" name="img1" allow-type="gif,jpg,png">
              <p id="lblimg1" class="imgname"></p>

              <input type="file" class="form-control" name="img2" allow-type="gif,jpg,png">
              <p id="lblimg2" class="imgname"></p>

              <input type="file" class="form-control" name="img3" allow-type="gif,jpg,png">
              <p id="lblimg3" class="imgname"></p>
              <input type="file" class="form-control" name="img4" allow-type="gif,jpg,png">
              <p id="lblimg4" class="imgname"></p>

              <input type="file" class="form-control" name="img5" allow-type="gif,jpg,png">
              <p id="lblimg5" class="imgname"></p>
          </div>

          <!-- Button -->
          <button type="submit" name="submit" class="btn btn-success"​ id="save">update</button>

      </form>
</div>
  

</div>  
</body>
</html>
<!--get id from controller -->

<script type="text/javascript">
    $(document).ready(function(){
        var post_id = "<?php echo $id?>";
        var cate_id;

        // show categories
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
                $('#select_categories').append(categories);
            })
            .fail(function() {
                alert("error");

            });

        //================================//==========================
//        show product by categories id

        $('#select_categories').change(function(){
            var id = $("#select_categories").val();

            $.ajax({
                type: "GET" ,
                headers:{
                    "x-api-key" : "12345"
                } ,
                url : "<?= base_url() ?>/index.php/api/productbyid/"+id,
                dataType: 'json' ,
            }).done(function(data){
                var product = '';
                var i = 0 ;
                $('#select_product').empty().append('whatever');
                $.each(data["data"] , function(key ,values){
                    product += "<option value ="+ data["data"][i]["id"]+">" + data["data"][i]["pname_kh"]+"</option>"
                    i++ ;
                });
                $('#select_product').append(product);
            });
        });
//=========================================//==============================================

//      Show Post By id
        $.ajax({
            type: "GET",
            headers: {
                "x-api-key" : "12345"
            } ,
            url: "<?= base_url()?>/index.php/api/postdetail/"+post_id ,
            dataType: 'json',

        })
        .done(function(data) {

            var cid = data["post"][0]["cid"];
            var pid = data["post"][0]["pid"];
            $("#select_categories option[value="+ cid + "]").prop("selected", true) ;
            $('#select_product').append($('<option>', {
                value: pid,
                text: data["post"][0]["pname_kh"]
            }));

            $("#description").val(data["post"][0]["description"]);
            $("#address").val(data["post"][0]["address"]);
            $("#phone").val(data["post"][0]["phone"]);
            $("#price").val(data["post"][0]["price"]);
            $("#lblthumbnail").text(data["post"][0]["img_thumbnail"]);
            $("#lblimg1").text(data["image"][0]["img1"]);
            $("#lblimg2").text(data["image"][0]["img2"]);
            $("#lblimg3").text(data["image"][0]["img3"]);
            $("#lblimg4").text(data["image"][0]["img4"]);
            $("#lblimg5").text(data["image"][0]["img5"]);
        })
        .fail(function() {
                alert("error");
        });
// ==========================//=============================
/// submit to data update to server
        $("form#formdata").submit(function(e){

            e.preventDefault() ;
            var formData = new FormData(this) ;
            $.ajax({

                headers : {
                    "x-api-key" : "12345"
                } ,
                url : "<?= base_url()?>index.php/api/postupdate/"+post_id ,
                type : 'POST' ,
                data : formData ,
                success : function(data){
                    alert("The Data has been Update") ;
                    $("#cid").text("");
                    $("#pid").text("");
                    $("#description").val("");
                    $("#address").val("");
                    $("#price").val("") ;
                    $("#phone").val("");
                } ,
                cache: false,
                contentType :false ,
                processData : false
            });

        });



    });
</script>


