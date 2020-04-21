<html>
 <head>
 	
<meta name="robots" value="noindex" />

   <meta name="robots" value="nofollow" />
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
  <img src="https://i.imgur.com/EYwkV8d.png" style="background: #0f3971;">
  </div>
  
  <div style="display:inline-block;width:50%;vertical-align:top;text-align:right;">
<h4>WELCOME:   <span style='color:#FF5722'><?php echo $user;?></span></h4>
    <h2 style="color:#2196F3;"><a href="<?php echo site_url('paylinklogin/logout')?>">logout</a> </h2>
    
  </div> 
<div>

          <div>
            <div class="blog-post">
<div class="callout mobileuifont">
                <h2 style="color: #0F3971;background: rgba(66, 88, 240, 0.29);padding: 10px;">Create Discount Link Panel</h2>

                <hr>

             <form id="myform" action="<?php echo base_url(); ?>smail/paylink" class="" method="post" accept-charset="utf-8">
  <table>
    <tbody><tr>
      <td>

                
        Do you want approve payment link?</td>
      <td>
                    
					
					<input type="radio" name="approve" value="YES"> YES<br>
					<input type="radio" name="approve" value="female"> NO<br>
				     
      </td></tr>

                
    
                 

                 
                    

              <tr><td></td><td>

			  
                    <input class="button expanded"  type="button" value="Submit" style="width: 10%;background: #6370c5;border: 1px solid #373e6a;color: #fff;">
</td></tr></tbody></table>
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