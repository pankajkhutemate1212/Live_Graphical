<style>
@media screen and (max-width: 770px) {
	
	.mobileui
	{
		display:none;
	}
	.mobileuifont, .mobileuifont h3,  .mobileuifont h4
	{
		font-size:0.6875rem !important;
	}
		 .mobileuifont h3{
	color:rgb(39, 39, 39) !important;
	}
		h5 {
    font-weight: bold !important;
}
	.footer
	{
		    padding: 2rem 2rem;
	}
	.footer h4{
		padding-right:0% !important;
		text-align:left;
	}
img.secure{
			width:40% !important;
		}
		}
		ul.square li{
			font-size:12px;
		}
	</style>
<div class="row columns" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>
<li><a href="<?php echo base_url('/industry-reports/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>
<li><a href="<?php echo base_url('/industry-analysis'); ?>/<?php echo $reports['url']; ?>"><?php echo $reports['meta_title']; ?></a></li>
  <li><a href="<?php echo base_url('/inquiry-before-buying/'.$reports['id']);  ?>">Inquiry before buying</a></li>

     

</ul>

</nav>

</div>

             <div class="row" id="content">

             <div class="card"  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px; background: #ebebeb;">

            <div class="medium-9 columns">

            <div class="blog-post mobileuifont"> 
            <!--modified= name to meta title -->
<a href="<?php echo base_url('/industry-analysis/'.$reports['url']); ?>"><h5 style="color: #0F3971;"><?php echo $reports['meta_title']; ?> </h5></a>
<div > 
<div >
<br />
             <h3  style="text-align: justify; font-size: 14px;">Inquiry before buying</h3>
             
             <br />
     
             <?php $attributes = array('class'=> 'ccform','onsubmit'=>'return validate();');

                echo form_open("smail/inquiry", $attributes); ?>

<?php echo form_error('name'); ?>
           
<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"> Full Name *</label>
</div>

<div class="small-9 columns">
 <span style="color: red" id='errorname'></span>
                    <input class="" autocomplete="off" style="width: 295px;   background-color: #FFF; max-width:100%;  border: solid 1px #c6c6c6;" type="text" name="name" id="name">
</div>
               
                  <?php echo form_error('email'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Email *</label>
</div>
<div class="small-9 columns">
 <span style="color: red" id='erroremail'></span>
                    <input class="" autocomplete="off" style="width: 295px;font-size: 12px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="email" placeholder="Please Enter Your Company Email Address" id="email">
</div>
                

                  <?php echo form_error('company'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Company*</label>
</div>
<div class="small-9 columns">
 <span style="color: red" id='errorcompany'></span>
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="company" id="company">
</div>
                
                
                              

                

<?php echo form_error('phone'); ?>
<div class="small-3 columns">
                   <label class="mobileuifont" style=" color: #000000;" >Phone*</label>
</div>

		<div class="small-9 columns">
		  <span style="color: red" id='errorphone'></span>
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="phone" id="ph">
		</div>
              
                <?php echo form_error('message'); ?>
			<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"  > Specify Your Inquiry Details*</label>
			</div>
<div class="small-9 columns">
 <span style="color: red; font-size: 12px;" id='errorinquiry'></span>
 
                    <textarea class="" style="background-color: #FFF;font-size:12px; height: 80px;   border: solid 1px #c6c6c6;" name="message"  placeholder="Please share your detailed inquiry on this report. This will help us provide the best solution to you business needs" id="message"></textarea>
</div>
                
<div class="small-3 columns" style="padding:1px;"></div>
            <div class="small-9 columns">
                    <input class="button sub-btn" type="submit" value="Submit Request">
</div>

<div class="small-12 columns">
           <p style="font-size: 12px;">

                               Your personal information is kept secure & confidential.<br /> <a  target="_blank"  href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>">Privacy Policy</a>

  </p>
</div>

   <input class=""  type="hidden" name="id" value="<?php echo $reports['id']; ?>" >
                <input class=""  type="hidden" name="report" value="<?php echo $reports['name']; ?>" >
                <input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
                <input  class="" type="hidden" name="rcatt" value="<?php echo $category['name']; ?>" >
                </form>

                </div>
</div>
             

             </div>
             </div>
              <!-- start side bar-->
     <div class="medium-3 columns" style="" >
<div  data-anchor="content" style="padding-bottom: 30px;">
<div class="callout mobileuifont " style="font-size: 0.9rem">
   <p style="font-weight:bold;color:#0F3971;font-size:1.1em;font-weight:bold;"> Why Global Market Insights?</p>
   
    <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-checkbox" style="font-size: 2em;"></i>&nbsp;Comprehensive Research</span>
    <ul class="square">
           
    <li>All-inclusive coverage</li>
        <li >In-depth and granular data (ex: information for 8 to 15 countries, with clients open to add to this list, in each report)</li>
    <li >Penetrative insights & latest trends</li>
        <li >Offers holistic understanding of the market </li>    
 
    </ul>
           <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-clock" style="font-size: 2em;"></i>&nbsp;Data Accuracy & Reliability </span>
    <ul class="square">
       <li>Unique methodology</li>
            <li>Iterative in nature to eliminate errors</li>
                    <li>Detailed methodology, scope, assumptions and data sources available for reference</li>
    </ul>

  <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-torso-business" style="font-size:2em;"></i>&nbsp;Post-Sales Support</span>
<ul class="square">
  
    <li>Committed to making a positive difference for our clients </li>
    <li>Given the nature of this industry, we are committed to ensure that our clients get maximum return on their investment in our services </li>
        <li>Every purchase comes with an option to obtain additional information:</li>
            <ul class="square" style="list-style-type: upper-latin;">
                <li>up to 10% of the original cost</li>
                    <li>45-minute analyst tele-call to obtain further clarity on the market. </li>
            </ul>
    </ul>
      
     <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-lock" style="font-size:2em;"></i>&nbsp;Security & Confidentiality </span>
    <ul class="square">
       
        <li> Global Market Insights, Inc. strictly adheres to PCI-DSS security norms.  </li>
    <li>Only PCI-DSS compliant payment methods used for highest level of client data security </li>
</ul>
    
    
  <div style="text-align: center;">


 <script type="text/javascript" src="https://sealserver.trustwave.com/seal.js?code=2985049217b847c5a0bc91e77db98b16"></script>
<script type="text/javascript" language="javascript">var ANS_customer_id="f534e903-febc-4c58-b61a-4d78c8e5c66a";</script> <script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script>





</div>

  </div>
      
    <div class="callout mobileuifont" style="font-size: 0.9rem;">
        <p style="font-weight:bold; color:#0F3971; font-size:15px;"><i class="fi-torsos" style="font-size: 2em;"></i>  Connect with our sales team</p>
       <ul>
        <li>Phone: <a href="tel:13028467766" style="font-size: 1em;">1-302-846-7766</a></li>
                <li>Toll Free: <a href="tel:18886890688" style="font-size: 1em;">1-888-689-0688</a></li>
                    <li> Email: <a href="mailto:sales@gminsights.com" style="font-size: 13px;">sales@gminsights.com</a></li>
        
        </ul>       
        </div>
           </div>
                 </div>
                 <!-- end side bar-->
             </div></div><div id="back-top">
  <a href="#" style="color:#0F3971;font-size:2em;"> <i class="fi-arrow-up"></i>  </a>
   
  <script>
  function validate(){
     
  var fname,lname,from_email,phone,address,city,country,company,rname,rid,ip,procost,zip,state,message;
  fname=$("input[name='name']").val().trim();
  //lname=$("input[name='x_last_name']").val().trim();
  from_email=$("input[name='email']").val().trim();
  company=$("input[name='company']").val().trim();
  phone=$("input[name='phone']").val().trim();    
  message=$("textarea[name='message']").val().trim();
  
     if (fname == "") {
        
        $("input[name='name']").focus();
	$("input[name='name']").css('border-color', 'red');  
	 
	//$("#errorname").html("Please enter name.").show().fadeOut("slow");
        $("#errorname").text("Please enter name.");
        return false;
	
    }else if(from_email == ""){
	 
	$("input[name='email']").focus();
	$("input[name='email']").css('border-color', 'red');
	$("#erroremail").text("Please enter email.");
	
	// alert("Enter your email");
        return false;
    } else if(company == ""){
	
	$("input[name='company']").focus();
	$("input[name='company']").css('border-color', 'red');
	$("#errorcompany").text("Please enter company.");
	
	// alert("Enter your company");
	 
        return false;
    }else if(phone == ""){
	 
	 
	 $("input[name='phone']").focus();
	 $("input[name='phone']").css('border-color', 'red');
	$("#errorphone").text("Please enter phone.");
	
	  //alert("Enter your phone");
        
        return false;
    }
    else if(message == ""){
	 
	// $("#spanLengthValidation").text("Please enter a numeric value.");
	 $("textarea[name='message']").css('border-color', 'red');
	$("#errorinquiry").text("Please specify your inquiry details, answer(s) to which will help decide in purchasing the report.");
	
	 $("textarea[name='message']").focus();
	 // alert("Please specify your inquiry details");
        
        return false;
    }
    else{
	
	return true;
    }
     
     
 }
 
 $(document).ready(function () {
  //called when key is pressed in textbox
  $("#ph").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     if ((e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errorphone").html("Digits Only").show().fadeOut("slow");
	
               return false;
    }else{
	
	$("input[name='phone']").css("border-color",""); 
	$("#errorphone").empty();
	
	return true;
    }
   });
   
   
   
       $("#ph").click(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
		    
		    //alert("sdsd");
		    $("input[name='phone']").css("border-color",""); 
	            $("#errorphone").empty();
		
             
    
   });
   
   
   
   
   
    $("#name").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
		    
		    //alert("sdsd");
		     $("input[name='name']").css("border-color",""); 
	      
	              $("#errorname").empty();
		
             
    
   });
   
    $("#name").click(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
		    
		    //alert("sdsd");
		     $("input[name='name']").css("border-color",""); 
	      
	              $("#errorname").empty();
		
             
    
   });
   
   
    $("#email").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
              $("input[name='email']").css("border-color",""); 
	      $("#erroremail").empty();
    
   });
     $("#email").click(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
              $("input[name='email']").css("border-color",""); 
	      $("#erroremail").empty();
    
   });
   
     $("#company").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
              $("input[name='company']").css("border-color",""); 
	      $("#errorcompany").empty();
    
   });
   
    $("#company").click(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
              $("input[name='company']").css("border-color",""); 
	      $("#errorcompany").empty();
    
   });
   
    $("#message").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
              $("textarea[name='message']").css("border-color",""); 
	      $("#errorinquiry").empty();
    
   });
   
     $("#message").click(function (e) {
     //if the letter is not digit then display error and don't type anything e.which != 8 && e.which != 0 && 
     
              $("textarea[name='message']").css("border-color",""); 
	      $("#errorinquiry").empty();
    
   });
   
});
 
function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };

    $(document).ready(function(){
    $(".sub-btn").click(function(){
        if (!ValidateEmail($("#email").val())) {
            $("#erroremail").text("Invalid Email!");
        }
    });
    });
  </script>
  
  
  
  
</div>