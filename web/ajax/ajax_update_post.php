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
            .done(function(data){
                var categories = '';
                var i = 0 ;
//                alert(JSON.stringify(data)) ;
                $.each(data["data"] , function(key, values){
                    categories += "<option value ="+ data["data"][i]["id"]+">" + data["data"][i]["name_kh"]+"</option>"
                    i++ ;
                }) ;
                $('#select_categories').append(categories);

                successCallBack();


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
        function successCallBack(){


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
        }
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
                    $("#cid").text("");
                    $("#pid").text("");
                    $("#description").val("");
                    $("#address").val("");
                    $("#price").val("") ;
                    $("#phone").val("");
                    window.open("<?= base_url() ?>index.php/admincontroller/index" , '_self');
                } ,
                cache: false,
                contentType :false ,
                processData : false
            });

        });



    });
</script>


