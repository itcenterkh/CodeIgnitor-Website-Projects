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
                var id = null ;
                $.each(data["data"],function(key ,value){
                    post_data += "<tr>" ;
                    id = data["data"][i]["id"] ;
                    post_data += "<td scope='row'>"+ data["data"][i]["id"]	+"</td>";
                    post_data += "<td scope='row'>"+ data["data"][i]["cate_name_kh"]	+"</td>";
                    post_data += "<td scope='row'>"+ data["data"][i]["pname_kh"]	+"</td>";
                    post_data += "<td scope='row'>"+ data["data"][i]["address"]	+"</td>";
                    post_data += "<td scope='row'>"+ data["data"][i]["phone"]	+"</td>";
                    post_data += "<td scope='row'>"+ data["data"][i]["price"]	+"</td>";
                    post_data += "<td scope='row'>"+ data["data"][i]["post_date"]	+"</td>";

                    post_data += "<td scope='row'>"+ "<a href= " + "<?= base_url() ?>index.php/admincontroller/update/"+id+">Edit</a>"+"</td>";
                    post_data += "<td scope='row'>"+ "<button type='submit' id='delete' name='btn-delete' class='btn btn-danger'>Delete</button>"+"</td> ";
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

