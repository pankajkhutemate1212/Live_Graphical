 <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/signin.css" rel="stylesheet">
<div class="container">


<?php $attributes = array('class' => 'form-signin');

echo form_open("auth/change_password", $attributes);?>


<h1><?php echo lang('change_password_heading');?></h1>

<?php if(!empty($message)){ ?>
<div  class="alert alert-danger"><?php echo $message;?></div><!-- id="infoMessage" -->
<?php } ?>


      <!-- <p> -->
            <?php /*echo lang('change_password_old_password_label', 'old_password');*/?> <!-- <br /> -->
            <?php echo form_input($old_password);?>
      <!-- </p> -->

      <!-- <p> -->
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      <!-- </p> -->

      <!-- <p> -->
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      <!-- </p> -->

      <?php echo form_input($user_id);?>
      <!-- <p> --> <?php echo form_submit('submit', lang('change_password_submit_btn') ,'class="btn btn-lg btn-primary btn-block"' );?><!-- </p> -->

<?php echo form_close();?>
</div><!-- class="container"