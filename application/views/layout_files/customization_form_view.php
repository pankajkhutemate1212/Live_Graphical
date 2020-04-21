<div class="row columns" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>
  <li><a href="<?php echo base_url('/industry-report'); ?>/<?php echo $reports['url']; ?>"><?php echo $reports['meta_title']; ?></a></li>
  <li>Request for customization</li>

     

</ul>

</nav>

</div>
<style>
	 .mobileuifont h3{
	color:rgb(39, 39, 39) !important;
	}
	@media screen and (max-width: 770px){
		h5 {
    font-weight: bold !important;
}}
</style>

             <div class="row" id="content">

             <div >

            <div class="medium-9 columns">

            <div class="blog-post mobileuifont">

               

                

               <style>
               @media screen and (max-width: 770px){
               	img.secure{
			width:40% !important;
		}
		}
		ul.square li{font-size:12px;}
               </style>

  <a href="<?php echo base_url('/industry-report/'.$reports['url']); ?>"><h5 style="color: #0F3971;"><?php echo $reports['meta_title']; ?> </h5></a>



<br/>
            <h3  style="text-align: justify; font-size: 14px;">Request for customization</h3>
             <br/>

             <?php $attributes = array('class'=> 'ccform');  echo form_open('smail/inquirycustom/'.$reports['id'], $attributes); ?>



                <?php echo form_error('name'); ?>
           
<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"> Full Name*</label>
</div>

<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px;   background-color: #FFF; max-width:100%;  border: solid 1px #c6c6c6;" type="text" name="name"  required placeholder="Full name">
</div>

                   <input class="" autocomplete="off"  type="hidden" name="report" value="<?php echo $reports['name']; ?>" >
			<input type="hidden" name="id" autocomplete="off"  value="<?php echo $reports['id']; ?>" />
                <input  class="" type="hidden" autocomplete="off" name="rcatt" value="<?php echo $category['name']; ?>" >
                  <input class=""  type="hidden" autocomplete="off" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >

                  <?php echo form_error('email'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Email*</label>
</div>
<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="email" name="email" placeholder="name@company.com"  required>
</div>

                      <?php echo form_error('company'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Company*</label>
</div>
<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="company"  required placeholder="Company name">
</div>
                

<?php echo form_error('phone'); ?>
<div class="small-3 columns">
                   <label class="mobileuifont" style=" color: #000000;" >Phone*</label>
</div>

		<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="number" name="phone" required placeholder="Company phone">
		</div>
		
		<div class="medium-3 columns"> 
					<label class="mobileuifont" style=" color: #000000;">Country*</label>
				</div>

				<div class="medium-9 columns">
					<select class="form-in" name="country_user" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="number" name="phone" required="required">
					    <option value="">Select Country</option>
					    
					    <?php if(!empty($country_data))
					    {
					        foreach($country_data as $row){?>
					        <option value="<?php echo $row->country_name;?>"><?php echo $row->country_name;?></option>
					            
					       <?php }
					    }
					    ?>
					</select>
				</div>

                <?php echo form_error('message'); ?>
			<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"  > Message*</label>
			</div>
<div class="small-9 columns">
                    <textarea class="" style="width: 295px;   background-color: #FFF;   border: solid 1px #c6c6c6;" name="message"  required placeholder="Any specific requirement?"></textarea>
</div>

          <div id="ruleset" style="display:none">
				    <div class="medium-3 columns">
				        <label class="mobileuifont">Manage preferences <p style="font-size:11.5px;">[Optional - for newsletters/other promotion purposes]</p></label>
				    </div>
				    <div class="medium-9 columns">
				        <ul style="list-style:none;font-size:13px;margin-left:0;">
				            <li style="display:block;border-bottom:1px solid #d0cece;margin-bottom:10px;">
                                                <input style="margin-bottom:8px" type="checkbox" name="SelectAll" class="selectall1" value="I'm also interested to receive further industry updates and Research Report newsletter from Graphical Research"> I'm also interested to receive further industry updates and Research Report newsletter from Graphical Research</li>
				         
				            <li><input class="checklist_none1" type="checkbox" name="none1" value="None"> None</li>
				        </ul>
				    </div>
				   
				    <div style="clear:both"></div>
				</div>    

              
<div class="small-3 columns" style="padding:1px;"></div>
            <div class="small-9 columns">
                    <input class="button" type="submit" value="Submit Request" >
                    </div>
                  <div class="small-12 columns">  
  <p style="font-size: 12px;">Your personal information is kept secure & confidential.  <br /><a target="_blank" href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>"> Privacy Policy</a></p></div>
       

                </form>

              </div>


             

             </div>
             <!-- start side bar-->
    <div class="medium-3 columns" style="display:none" >
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
                </div>
                 <!-- end side bar-->
             
             </div></div>
             
             
             <script>

var input_data = $('select.form-in').change(function (){
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    if (valueSelected.length === 0) 
    {
        $('#ruleset').hide();
    } 
    else 
    {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>index.php/validate-form",
            data: {search_data: valueSelected},
            success: function (data) {
                if(data=='1'){
                $('#ruleset').removeAttr("style");
                }
                else
                {
                    $('#ruleset').removeAttr("style");
                    $('#ruleset').css("display","none");
                }
            }
        });
    }
});
</script>
             
               
 <script>$('.selectall1').on('click',function(){if(this.checked){$('.checklist_none1').prop('checked',false)}});
$('.checklist_none1').on('click',function(){if(this.checked){$('.selectall1').prop('checked',false)}});
 </script>
             
             </div>