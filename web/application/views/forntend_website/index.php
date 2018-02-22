<?php include "header.php";?>
<?php include "slider.php";?>
    <!-- vegetable -->
    <div class="container">
        <div class="linehead">
            <h3>Vegetables</h3>
        </div>
    </div>
<div class="container">
    <div class="row">
     <div class="col-md-4 ">
            <div class="affected">
              <a href="">
                <img src="" style="width:356px;height: 228px" class="img-responsive affected_img">
                      <div class="overlay">
                        <p class="t1">Detail</p>
                      </div>
              </a>
            </div>
            <div class="containprice">
                <div class="titlefruit">
                  <h4 id="pname_kh"></h4>
                </div>
                <div class="price">
                  <h4 id="price"></h4>
                </div>
            </div>
      </div>
    </div>
</div>
<script type="text/javascript">
   $.ajax({
                type: "GET",
                url: "http://localhost/web/Api/postdetail/4" ,
                dataType: 'json',headers: {
                "x-api-key" : "12345"
            } ,

            })
                // .done(function(data) {
                //   // alert(data["post"][0]["price"]);
                //   $("#price").text(data["post"][0]["price"]);
                //   $("#pname_kh").text(data["post"][0]["pname_kh"]);
                  
                // })
                //  .fail(function() {
                //     alert("error");
                // });

          .done(function(data) {
              var post_data = '';
              var i =0 ;
              var id = null ;
              $("#pname_kh").text(data["post"][0]["pname_kh"]);
              $("#price").text(data["post"][0]["price"]);
              $("#img_thumbnail").text(data["post"][0]["img_thumbnail"]);
              $.each(data["data"],function(key ,value){
                  post_data += "<div>" ;
                  id = data["data"][i]["id"] ;
                  post_data += "<div scope='row'>"+ data["data"][i]["img_thumbnail"]  +"</div>";
                  post_data += "<div scope='row'>"+ data["data"][i]["pname_kh"]  +"</div>";
                  post_data += "<div scope='row'>"+ data["data"][i]["price"]   +"</div>";
                  post_data += "</div>";
                  i++ ;
              });
                $("#post_table").append(post_data);
          })
              .fail(function() {
                alert("error");
            });
</script>
<?php include "footer.php";?>