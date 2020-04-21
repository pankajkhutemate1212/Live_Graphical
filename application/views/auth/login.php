<script src='https://www.google.com/recaptcha/api.js'></script>

 
	
    	
     
    
  
          <link rel="stylesheet" type="text/css" href="https://mincss.com/entireframework.min.css">
<div class="container" style="margin-top:50px;text-align: center;">
<?php $attributes = array('class' => 'form-signin');
echo form_open("auth/login" , $attributes );?>
<?php if(!empty($message)){ ?>
<div  class="alert alert-danger"><?php echo $message;?></div><!-- id="infoMessage" -->
<?php } ?>
    <div style="    
    border: 1px #f5f5f5 solid;
    ">
        <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo">
<h2 class="form-signin-heading">Enter Credentials</h2>
    <?php echo form_input($identity);?>
    <?php echo form_input($password);?>






<?php  ?>

  <p><?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-lg btn-primary btn-block"');?></p>

<?php echo form_close();?>
     <span>  All Copyright Reserved @ 2017 AMR</span>
        </div>
</div>
