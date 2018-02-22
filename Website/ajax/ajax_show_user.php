<script type="text/javascript">

    $(document).ready(function(){
        $.ajax({
            type: "GET",
            headers: {
                "x-api-key" : "12345"
            } ,
            url: "<?= base_url()?>/index.php/api/user/" ,
            dataType: 'json',

        })
            .done(function(data) {
                var user_data = '';
                var i =0 ;
                var id = null ;
                $.each(data["data"],function(key ,value){
                    user_data += "<tbody>" ;
                    user_data += "<tr>" ;
                    id = data["data"][i]["id"] ;
                    user_data += "<td scope='row'>"+ data["data"][i]["id"]	+"</td>";
                    user_data += "<td scope='row'>"+ data["data"][i]["first_name"]	+"</td>";
                    user_data += "<td scope='row'>"+ data["data"][i]["last_name"]	+"</td>";
                    user_data += "<td scope='row'>"+ data["data"][i]["email"]	+"</td>";
                    user_data += "<td scope='row'>"+ data["data"][i]["phone"]	+"</td>";

                    user_data += "<td scope='row' >"+ "<a href= " + "<?= base_url() ?>index.php/auth/edit_user/"+id+">Edit</a>"+"</td>";
                    user_data += "</tr>";
                    user_data += "</tbody>";
                    i++ ;
                });
                $("#user_table").append(user_data);
            })
            .fail(function() {
                alert("error");
            });
    });

</script>