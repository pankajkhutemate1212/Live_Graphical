
<?php 

$user=$this->session->userdata('log_user');
if(empty($user)){

redirect('paylinklogin/logout');

}

?>
<html>
	<head>
	<meta name="robots" value="noindex" />
<link rel="shortcut icon" href="https://www.graphicalresearch.com/assets/images/favicon.png">
   <meta name="robots" value="nofollow" />
	</head>
	<body>
<div class="container" style="width: 1170px;margin: 0 auto;">
  <div style="display:inline-block;width:49%">
  <img src="https://www.graphicalresearch.com/assets/images/brand-name.jpg" style="background: #0f3971;height: 96px;"">
  </div>
  
  <div style="display:inline-block;width:50%;vertical-align:top;text-align:right;">
<h4>WELCOME:   <span style='color:#FF5722'><?php echo $user;?></span></h4>
<?php $error_from_otp=$this->session->flashdata('Error_otp') ?>
    <h2 style="color:#2196F3;">
    <a style="background: #2196F3;color: #fff;padding: 6px;font-size: 17px;margin-right: 20px;text-decoration: none;" href="<?php echo site_url('paylinklogin/logout')?>">logout</a> </h2>
    
  </div> 
<div>
    
    

          <div>
            <div class="blog-post">
<div class="callout mobileuifont">
                <h2 style="color: #0F3971;background: rgba(66, 88, 240, 0.29);padding: 10px;">YOUR OTP HAS BEEN SEND TO YOUR REGISTERED EMAIL ID</h2>

                <hr>

             <form id="myform" action="<?php echo base_url(); ?>paylinklogin/check_otp" class="" method="post" accept-charset="utf-8">
  <table>
    <tbody><tr>
      <td>

                
        Enter OTP *</td>
      <td>
                    <input id="rname" type="text" placeholder="Enter four digit otp" class="req-field" name="otp">
      </td></tr>

                
              <tr><td></td><td>

			  
                    <input class="button expanded"  type="button" value="Submit" style="width: 10%;background: #6370c5;border: 1px solid #373e6a;color: #fff;">
                    
                     <a class="expanded" href="<?php echo base_url('paylinklogin/resend_otp_to_mail');?>" style="width: 20%;background: #6370c5;border: 1px solid #373e6a;color: #fff;padding: 7px;text-decoration: none;">Regenerate OTP</a>
                     
</td></tr> <h2 id="Error_MSG" style="color:#ff3546;"><a href="<?php //echo site_url('paylinklogin/logout')?>"></a><?php if(!empty($error_from_otp)){echo $error_from_otp;} ?></h2></tbody></table>
        <input class="" type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>">        
</form>

                </div></div></div>
				
             </div>
			 
  </div>
			 
			
<style>
.incomplete{border:1px solid #ff0000;}
.fieldarea label{color:#ff0000;}
td{padding:20px;}
input{width:800px;padding:8px;}
form{background: #e8e7e7;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

setTimeout(function() {
    $('#Error_MSG').fadeOut('slow');
}, 5000);
	
$(document).ready(function(){
	

    $(".button").click(function(){
		 
        $(".req-field").each(function(){
			
            var a=$(this).val();
			
            if(a.trim()==''){
				
				var id=$(this).attr('id');				
				$('#'+id).css("border","1px solid #ff0000");	
 
            }
            
			 
         });
		 
		 
		 var flag=0;
		 
		  $(".req-field").each(function(){
			  
			  var a=$(this).val();
			  
			   if(a.trim()==''){
				   
				   flag=1;
			   }
			  
		  });
		  
		  
		  
		  if(flag==0){
			  
			  //var res=confirm("Are you sure generate link.?");
			  
			//	if(res==true){
					$('#myform').submit();
			//	}
			  
		  }
		  
   
});

$(".req-field").focus(function(){
	
    
	var id=$(this).attr('id');
	$('#'+id).css("border", '');
	
	
});

});




</script>

</body>
</html>