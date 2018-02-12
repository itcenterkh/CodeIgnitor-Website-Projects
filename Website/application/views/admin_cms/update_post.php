<!--Include Header and Navigation-->
<?php include "./include/header_and_nav.php"?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show All Post
            <small>All Data</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-6">
                            <!-- general form elements -->

                            <div class="box-header with-border">
                                <h3 class="box-title">Quick Example</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="" enctype="multipart/form-data" id="formdata">
                                <div class="box-body">
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

                                        <input type="file"  class="form-control" name="img1" allow-type="gif,jpg,png">
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
                </div>
            </div>
        </div>
    </section>
</div>

<!--Include Footer-->
<?php include "./include/footer.php"?>
<?php include "./ajax/ajax_update_post.php"?>
