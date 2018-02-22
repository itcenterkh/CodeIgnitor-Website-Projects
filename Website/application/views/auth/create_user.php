<!--Include Header and Navigation-->
<?php include "./include/header_and_nav.php"?>


<div class="content-wrapper">
    <section class="content-header">
            <h1>Create new User</h1>
            <p><?php echo lang('create_user_subheading');?></p>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="col-md-6">
                    <div id="infoMessage"><?php echo $message;?></div>

                    <?php echo form_open("auth/create_user");?>

                      <p>
                            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                            <?php echo form_input($first_name ,'',[
                                'class'=>'form-control input-sm' ,
                                'placeholder' => 'First Name '
                            ]);?>
                      </p>

                      <p>
                            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                            <?php echo form_input($last_name,'',[
                                'class'=>'form-control input-sm' ,
                                'placeholder' => 'Last Name '
                            ]);?>
                      </p>

                      <?php
                      if($identity_column!=='email') {
                          echo '<p>';
                          echo lang('create_user_identity_label', 'identity');
                          echo '<br />';
                          echo form_error('identity');
                          echo form_input($identity);
                          echo '</p>';
                      }
                      ?>

                      <p>
                            <?php echo lang('create_user_company_label', 'company');?> <br />
                            <?php echo form_input($company,'',[
                                'class'=>'form-control input-sm' ,
                                'placeholder' => 'Company Name'
                            ]);?>
                      </p>

                      <p>
                            <?php echo lang('create_user_email_label', 'email');?> <br />
                            <?php echo form_input($email,'',[
                                'class'=>'form-control input-sm' ,
                                'placeholder' => 'First Name '
                            ]);?>
                      </p>

                      <p>
                            <?php echo lang('create_user_phone_label', 'phone');?> <br />
                            <?php echo form_input($phone,'',[
                                'class'=>'form-control input-sm' ,
                                'placeholder' => 'Phone Number '
                            ]);?>
                      </p>

                      <p>
                            <?php echo lang('create_user_password_label', 'password');?> <br />
                            <?php echo form_input($password,'',[
                                'class'=>'form-control input-sm' ,
                                'placeholder' => 'Password'
                            ]);?>
                      </p>

                      <p>
                            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                            <?php echo form_input($password_confirm,'',[
                                'class'=>'form-control input-sm' ,
                                'placeholder' => 'Comfirm Password '
                            ]);?>
                      </p>


                      <p><?php echo form_submit('submit', lang('create_user_submit_btn') , [
                                  'class' => 'btn btn-success'
                              ]);?></p>

                    <?php echo form_close();?>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Include Footer-->
<?php include "./include/footer.php"?>