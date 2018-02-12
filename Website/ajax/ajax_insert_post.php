<script type="text/javascript">
    $(document).ready(function(){

        $('#select_categories').change(function(){
            var id = $("#select_categories").val();

            $.ajax({
                type: "GET" ,
                headers:{
                    "x-api-key" : "12345"
                } ,
                url : "<?= base_url() ?>/index.php/api/productbyid/"+ id,
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





        $("form#formdata").submit(function(e){

            e.preventDefault() ;
            var formData = new FormData(this) ;
            $.ajax({

                headers : {
                    "x-api-key" : "12345"
                } ,
                url : "<?= base_url()?>/index.php/api/post" ,
                type : 'POST' ,
                data : formData ,
                success : function(data){
//                    alert("The Data has been upload") ;
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