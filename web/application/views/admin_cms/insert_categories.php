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
                            <form role="form" method="post" action="" enctype="multipart/form-data" id="formcategories">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="Product_en">Categories Name EN</label>
                                        <input type="text" name="cate_name" class="form-control" id="Categoreis_en" placeholder="Categoreis Name EN ">
                                    </div>
                                    <div class="form-group">
                                        <label for="Product_en">Categories Name EN</label>
                                        <input type="text" name="cate_name_kh" class="form-control" id="Categoreis_kh" placeholder="Categoreis Name KH ">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
                            <table id="product_table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categories EN</th>
                                    <th>Categories KH</th>
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
<?php include "./ajax/ajax_categories.php"?>
