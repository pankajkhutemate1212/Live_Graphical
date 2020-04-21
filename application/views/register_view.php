<?php $this->load->view('admin/components/page_head'); ?>

<div class="">
    <div class=" container" style="text-align: center">
	<h3>Log in</h3>
	<p>Please log in using your credentials</p>
</div>
<div class="inner-content">
    <div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
<div id="login_form">
<form action="<?=site_url('user/login')?>" method="post" style="text-align: center">
<label for="email">Email</label>
<input type="text" name="l_email" value="<?=set_value('l_email') ?>" />
<label for="password">Password</label>
<input type="password" name="l_pass"/><br>
<input type="submit" value="Sign in" name="signin"/>
</form>
    <?php echo validation_errors(); ?>

</div></div></div></div></div>

    
    <a href="<?=site_url('')?>" style="float: left;"><i class="icon-desktop"></i>&nbsp; Live Website</a><br/> 
<label style="color=#fff; float: left; "> &#169; 2015 Global Markets Insights Inc. All Rights Reserved</label>