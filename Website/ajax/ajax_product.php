<script type="text/javascript">
    $(document).ready(function(){
////    Get data to categories LISt
//        $.ajax({
//            type: "GET",
//            headers: {
//                "x-api-key" : "12345"
//            } ,
//            url: "<?//= base_url() ?>///index.php/api/category" ,
//            dataType: 'json',
//
//        })
//            .done(function(data) {
//                var categories = '';
//                var i = 0 ;
////                alert(JSON.stringify(data)) ;
//                $.each(data["data"] , function(key, values){
//                    categories += "<option value ="+ data["data"][i]["id"]+">" + data["data"][i]["name_kh"]+"</option>"
//                    i++ ;
//                }) ;
//                $('#categories').append(categories);
//            })
//            .fail(function() {
//                alert("error");
//
//            });

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
                    post_data += "<tr >" ;
                    id = data["data"][i]["id"] ;
                    post_data +=  "<td scope='row'>"+ data["data"][i]["id"]	+"</td>";
                    if(data["data"][i]["categories_id"] == 1 ){
                        post_data += "<td scope='row'>ផ្លែឈើ</td>";
                    }else if (data["data"][i]["categories_id"] == 2 ){
                        post_data += "<td scope='row'>បន្លែ</td>";
                    }else if(data["data"][i]["categories_id"] == 3 ){
                        post_data += "<td scope='row'>គ្រប់ធញ្ញជាតិ</td>";
                    }else{
                        post_data += "<td scope='row'>Other</td>";
                    }
                    post_data += "<td scope='row'>"+ data["data"][i]["pname_en"]	+"</td>";
                    post_data += "<td scope='row'>"+ data["data"][i]["pname_kh"]	+"</td>";
//                post_data += "<td scope='row'>"+ "<button type='submit' name='btnEdit' class='btn btn-success'><a href= " + "<?//= base_url() ?>//index.php/admincontroller/update/"+id+">Update</a></button>"+"</td>";
                    post_data += "<td scope='row'>"+ "<button style='margin-top: 2%' type='submit' id='delete' name='btn-delete' class='btn btn-danger'>Delete</button>"+"</td> ";
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
                        url:"<?= base_url()?>index.php/api/product/"+ID,
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