	
<!DOCTYPE html>
<html>
<head>
 <meta name="robots" value="noindex" />

   <meta name="robots" value="nofollow" />
   <link rel="shortcut icon" href="https://www.gminsights.com/assets/favico.ico">

</head>
<body>
<?php 

$user=$this->session->userdata('log_user');
if(empty($user)){

redirect('paylinklogin/logout');

}

?>

<div class="container" style="width: 1170px;margin: 0 auto;">
  <div style="display:inline-block;width:49%">
  <img src="https://www.graphicalresearch.com/assets/images/brand-name.jpg" style="height: 103px;">
  </div>
  
  <div style="display:inline-block;width:50%;vertical-align:top;text-align:right;">
<h4>WELCOME:   <span style='color:#FF5722'><?php echo $user;?></span></h4>
    <h2 style="color:#2196F3;">
    <a style="background: #E91E63;color: #fff;padding: 6px;font-size: 17px;margin-right:20px;text-decoration: none;" href="<?php echo base_url('paylinklogin/deactive_link')?>">Active Links</a><a style="background: #2196F3;color: #fff;padding: 6px;font-size: 17px;margin-right: 20px;text-decoration: none;" href="<?php echo site_url('paylinklogin/logout')?>">logout</a> </h2>
    
  </div> 
<div>

          <div>
            <div class="blog-post">
<div class="callout mobileuifont">
                <h2 style="color: #0F3971;background: rgba(66, 88, 240, 0.29);padding: 10px;">Create Discount Link Panel</h2>

                <hr>

             <form id="myform" action="<?php echo base_url(); ?>paylinklogin/paylink" class="" method="post" accept-charset="utf-8">
  <table>
    <tbody><tr>
      <td>

                
        Report Name *</td>
      <td>
                    <input id="rname" type="text" class="req-field" name="reportname">
      </td></tr>

                
<tr>
      <td>Price *</td><td>
                    <input type="text" class="req-field" id="price" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="price">
  </td></tr>
                
                <tr><td>
                                        Email *</td><td>
                    <input style="color: #0f3971;font-weight: bold;border: none;background: #e8e7e7;" type="text" value="<?php echo $user; ?>" name="email" required="" readonly="">     
                </td></tr>
                

                 
                    

              <tr><td></td><td>

			  
                    <input class="button expanded"  type="button" value="Submit" style="width: 10%;background: #6370c5;border: 1px solid #373e6a;color: #fff;">
</td></tr></tbody></table>
        <input class="" type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>">        
</form>

                </div></div></div>
				<div style="color:#000">


</div>
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
			  
			  var res=confirm("Are you sure want to generate link.?");
			  
				if(res==true){
					$('#myform').submit();
				}
			  
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
