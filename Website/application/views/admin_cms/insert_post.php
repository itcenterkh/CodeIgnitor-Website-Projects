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
                                            <label for="select_categories">Categories</label>
                                            <select class="form-control" name="cid" id="select_categories">
                                                <option value="0">ជ្រើសរិសប្រភេទ</option>
                                                <option value="1">ផ្លែឈើ</option>
                                                <option value="2">បន្លែ</option>
                                                <option value="3">គ្រាប់ធញ្ញជាតិ</option>
                                                <option value="4">Other</option>
                                            </select>
                                        </div>
                                        <!--                    Product -->
                                        <div class="form-group">
                                            <label for="select_product">Product</label>
                                            <select class="form-control" name="pid" id="select_product">
                                            </select>
                                        </div>
                                        <!-- Title -->
                                        <div class="form-group">
                                            <label for="description">title</label>
                                            <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                                        </div>

                                        <!-- Description -->
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="ckeditor" id="description" rows="16" style="width:100% " placeholder="Add Description here"></textarea>
                                        </div>

                                        <!-- address -->
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" class="form-control" name="address" placeholder="Address(st.271 sangkat : Boeung Tompun Khan : Mean Chey )" >
                                        </div>

                                        <!-- Price -->
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" id="price" class="form-control" name="price" placeholder="Price (1kg 2$)">
                                        </div>

                                        <!-- phone Number -->
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone Number (012 985988 , 011859475)">
                                        </div>

                                        <!-- Image thumbnail  -->
                                        <div class="form-group">
                                            <label for="phone">Thumbnail</label>
                                            <input type="file" class="form-control" name="thumbnail" required>
                                        </div>
                                        <!--                    Other Image-->
                                        <div class="form-group">
                                            <label for="phone">Other Image</label>
                                            <input type="file" class="form-control" name="img1">
                                            <input type="file" class="form-control" name="img2">
                                            <input type="file" class="form-control" name="img3">
                                            <input type="file" class="form-control" name="img4">
                                            <input type="file" class="form-control" name="img5">
                                        </div>

                                        <!-- Button -->

                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-success"​ id="save">Publish</button>
                                    </div>
                                </form>
                            </div>

                </div>
            </div>
        </div>
    </section>
</div>



<!--Include Footer-->
<?php include "./include/footer.php"?>
<?php include  "./ajax/ajax_insert_post.php"?>