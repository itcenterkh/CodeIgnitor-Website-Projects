<script type="text/javascript">
    $(document).ready(function(){

                $.ajax({
                    type: "GET",
                    headers: {
                        "x-api-key" : "12345"
                    } ,
                    url: "<?= base_url()?>/index.php/api/category" ,
                    dataType: 'json',

                })
                    .done(function(data) {
                        $("#cereal").text(data["data"][0]["name_kh"]);
                        $("#vegetable").text(data["data"][1]["name_kh"]);
                        $("#fruit").text(data["data"][2]["name_kh"]);
                    })
                    .fail(function() {
                        alert("error");
                    });

        $.ajax({
            type: "GET",
            headers: {
                "x-api-key" : "12345"
            } ,
            url: "<?= base_url()?>/index.php/api/showFruit" ,
            dataType: 'json',

        })
            .done(function(data) {
                var fruit_data = '';
                var i =0 ;
                $.each(data["data"],function(key ,value){
                    fruit_data += "<div class='affected'>";
                    fruit_data += "<a href=''>";
                    fruit_data += "<img src= '"+ "<?=base_url() ?>asset/img/"+data["data"][i]["img_thumbnail"] + "' alt='Lights' style='width:356px;height: 228px' class='img-responsive affected_img'>";
                    fruit_data += " <div class='overlay'>";
                    fruit_data += "<p class='t1' >Detail</p>";
                    fruit_data += "</div>";
                    fruit_data += "</a>";
                    fruit_data += "</div>";
                    fruit_data += "<div class='containprice'>" ;
                    fruit_data += "<div class='titlefruit'>";
                    fruit_data += "<h4>"+data["data"][i]["pname_kh"]+"</h4>";
                    fruit_data += "</div>";
                    fruit_data += "<div class='price'>";
                    fruit_data += "<h4>"+data["data"][i]["price"]+"</h4>";
                    fruit_data += "</div>";
                    fruit_data += "</div>";
                    i++ ;
                });
                $("#vegetable_item").append(fruit_data);
            })
            .fail(function() {
                alert("error");
            });
    });
</script>