 <html>
 <head>
 	<style>
	.login_submit_btn{
	background: #0274b3;
    color: white;
    width: 74px;
    height: 34px;
    border: none;
    border-radius: 6px;
    margin-top: 24px;
		
	}
	 
	</style>
<meta name="robots" value="noindex" />
<link rel="shortcut icon" href="https://beta.graphicalresearch.com/assets/images/favicon.png">
   <meta name="robots" value="nofollow" />
 </head>
<body>
<div class="">
<div style="margin-top: 20%; background: lightgrey;   padding: 30px;">
	<div id="infoMessage" style="color:red; text-align:center"><?php echo $message;?></div>
<center><img src="https://beta.graphicalresearch.com/assets/images/brand-name.jpg" style="height: 64px;margin: 18px;"></center>

<?php echo form_open("paylinklogin/login");?>
<div style="width: 24%; margin: auto;">
  <table>
  	<tr>
  		<td style="
    font-size: 19px;
    color: #126796;
    /* margin-left: 0px; */
">
  			 <?php echo lang('login_identity_label', 'identity');?>
  		</td>
  		<td>
  			<?php echo form_input($identity);?>
  		</td>
  	</tr>
  	<tr>
  		<td style="font-size: 19px;color: #126796;">
  			<?php echo lang('login_password_label', 'password');?>
  		</td>
  		<td>
  			<?php echo form_input($password);?>
  		</td>
  	</tr>
  	<tr>
  		<td colspan='2'>
  			<center><?php echo form_submit('submit', lang('login_submit_btn'));?></p></center>
  		</td>
  	</tr>
  </table>  </div>
    <!--<p style="float: left;"> All right reservered &copy;  2017 | Global Market Insights Inc.Developers</p>-->
	<center><p style="
    color: #0274b3;
    font-size: 17px;
"> ©2020 Graphicals Research. All rights reserved. </p></center>

<?php echo form_close();?>

</div>
</div>
</body>
</html>