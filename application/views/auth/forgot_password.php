    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/signin.css" rel="stylesheet">
<div class="container">



<?php $attributes = array('class' => 'form-signin');
echo form_open("auth/forgot_password" , $attributes);?>


<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
<?php if(!empty($message)){ ?>
<div  class="alert alert-danger"><?php echo $message;?></div>
<?php } ?>

     <!--  <p> -->
      	<?php /*?><label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />php*/ ?>
      	<?php echo form_input($email);?>
      <!-- </p> -->

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn') ,'class="btn btn-lg btn-primary btn-block"');?></p>

<?php echo form_close();?>

</div><!-- <div class="container"> -->