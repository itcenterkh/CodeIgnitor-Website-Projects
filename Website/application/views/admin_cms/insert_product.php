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
                            <form role="form" method="post" action="" enctype="multipart/form-data" id="formproduct">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="categories">Categories</label>
                                        <select class="form-control" id="categories" name="cateid">

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Product_en">Product Name EN</label>
                                        <input type="text" name="pname_en" class="form-control" id="Product_en" placeholder="Product Name EN ">
                                    </div>
                                    <div class="form-group">
                                        <label for="Product_kh">Product Name KH</label>
                                        <input type="text" name="pname_kh" class="form-control" id="Product_kh" placeholder="Product Name KH ">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="get">
                        <table id="product_table" class="table table-bordered table-hover" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Categories EN</th>
                                <th>Categories KH</th>
                                <th>Product EN</th>
                                <th>Product KH</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Include Footer-->
<?php include "./include/footer.php"?>
<?php include "./ajax/ajax_product.php" ?>
