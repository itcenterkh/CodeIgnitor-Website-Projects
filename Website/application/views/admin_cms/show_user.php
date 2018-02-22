<!--Include Header and Navigation-->
<?php include "./include/header_and_nav.php"?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show All User
            <small><a href="<?= base_url()?>index.php/auth/create_user">Add User</a></small>
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
                            <table id="user_table" class="table table-bordered table-hover" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
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
<?php include "./ajax/ajax_show_user.php" ?>