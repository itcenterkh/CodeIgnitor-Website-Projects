<!--Include Header and Navigation-->
<?php include "./include/header_and_nav.php"?>
<!-- Content Wrapper. Contains page content -->

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
                        <form method="get">
                        <table id="post_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Categories </th>
                                <th>Product </th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Price</th>
                                <th>Post Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>

                        </table>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<!--Include Footer-->
<?php include "./include/footer.php"?>

<!--Include Ajax -->
<?php include "./ajax/ajax_show_post.php"?>
