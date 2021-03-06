<!--Include Header and Navigation-->
<?php include "./include/header_and_nav.php"?>

<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo lang('edit_user_heading');?></h1>
        <p><?php echo lang('edit_user_subheading');?></p>
    </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="col-md-6">
                        <div id="infoMessage"><?php echo $message;?></div>

                        <?php echo form_open(uri_string());?>

                              <p>
                                    <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                                    <?php echo form_input($first_name ,'',[
                                        'class'=>'form-control input-sm' ,
                                        'placeholder' => 'First Name '
                                    ]);?>
                              </p>

                              <p>
                                    <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                                    <?php echo form_input($last_name,'',[
                                        'class'=>'form-control input-sm' ,
                                        'placeholder' => 'Last Name '
                                    ]);?>
                              </p>

                              <p>
                                    <?php echo lang('edit_user_company_label', 'company');?> <br />
                                    <?php echo form_input($company,'',[
                                        'class'=>'form-control input-sm' ,
                                        'placeholder' => 'Company Name '
                                    ]);?>
                              </p>

                              <p>
                                    <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                                    <?php echo form_input($phone,'',[
                                        'class'=>'form-control input-sm' ,
                                        'placeholder' => 'Phone Number '
                                    ]);?>
                              </p>

                              <p>
                                    <?php echo lang('edit_user_password_label', 'password');?> <br />
                                    <?php echo form_input($password,'',[
                                        'class'=>'form-control input-sm' ,
                                        'placeholder' => 'Password'
                                    ]);?>
                              </p>

                              <p>
                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                                    <?php echo form_input($password_confirm,'',[
                                        'class'=>'form-control input-sm' ,
                                        'placeholder' => 'Comfirm Password'
                                    ]);?>
                              </p>

                              <?php if ($this->ion_auth->is_admin()): ?>

                                  <h3><?php echo lang('edit_user_groups_heading');?></h3>
                                  <?php foreach ($groups as $group):?>
                                      <label class="checkbox">
                                      <?php
                                          $gID=$group['id'];
                                          $checked = null;
                                          $item = null;
                                          foreach($currentGroups as $grp) {
                                              if ($gID == $grp->id) {
                                                  $checked= ' checked="checked"';
                                              break;
                                              }
                                          }
                                      ?>
                                      <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                      <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                      </label>
                                  <?php endforeach?>

                              <?php endif ?>

                              <?php echo form_hidden('id', $user->id);?>
                              <?php echo form_hidden($csrf); ?>

                              <p><?php echo form_submit('submit', lang('edit_user_submit_btn') , [
                                  'class' => 'btn btn-success'
                              ]);?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php echo form_close();?>
