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
		
				.error{
 color:red;
 margin:10px;
}
	</style>
<div class="row columns" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>
<li><a href="<?php echo base_url('/industry-reports/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>
<li><a href="<?php echo base_url('/industry-report'); ?>/<?php echo $reports['url']; ?>"><?php echo $reports['meta_title']; ?></a></li>
  <li>Inquiry before buying</li>

     

</ul>

</nav>

</div>

             <div class="row" id="content">

             <div>

            <div class="medium-7 columns form-border">

            <div class="blog-post mobileuifont"> 
            <!--modified= name to meta title -->
<a href="<?php echo base_url('/industry-report/'.$reports['url']); ?>"><h5 style="color: #0F3971;"><?php echo $reports['meta_title']; ?> </h5></a>
<div > 
<div >
<br />
             <h5 style="text-align: justify; font-size: 15px">Inquiry before buying</h5>
             
             <br />
     
             <?php $attributes = array('class'=> 'ccform','onsubmit'=>'return validate();');

                echo form_open("smail/inquiry", $attributes); ?>

<?php echo form_error('name'); ?>
           
<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"> Full Name *</label>
</div>

<div class="small-9 columns">
 <span style="color: red" id='errorname'></span>
                    <input class="" autocomplete="off" style="width: 295px;   background-color: #FFF; max-width:100%;  border: solid 1px #c6c6c6;" type="text" name="name" id="name" placeholder="Full name" required>
</div>
               
                  <?php echo form_error('email'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Email *</label>
</div>
<div class="small-9 columns">
 <span style="color: red" id='erroremail'></span>
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="email" placeholder="name@company.com" id="email" required>
</div>
                

                  <?php echo form_error('company'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Company*</label>
</div>
<div class="small-9 columns">
 <span style="color: red" id='errorcompany'></span>
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="company" id="company" placeholder="Compnay name" required>
</div>
                
                
                              

                

<?php echo form_error('phone'); ?>
<div class="small-3 columns">
                   <label class="mobileuifont" style=" color: #000000;" >Phone*</label>
</div>

		<div class="small-9 columns">
		  <span style="color: red" id='errorphone'></span>
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="phone" id="ph" placeholder="Compnay phone" required>
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
                    <label class="mobileuifont" style=" color: #000000;"  > Specify Your Inquiry Details*</label>
			</div>
<div class="small-9 columns">
 <span style="color: red; font-size: 12px;" id='errorinquiry'></span>
 
                    <textarea class="" style="    background-color:#FFF;
    font-size: 13px;
    height: 7rem;
    width: 296px;
    border: solid 1px #c6c6c6;" name="message"  placeholder="Please share your detailed inquiry on this report. This will help us provide the best solution to you business needs" required id="message"></textarea>
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
            <div class="small-4 columns">
                 <!--   <input class="button sub-btn" type="submit" value="Submit Request"> <img class="icon-button" src="<?php echo base_url(); ?>assets/images/submit-request.png"> -->
                
                <button class="button expanded" type="submit">Submit Request&nbsp;<img class="icon-button" src="<?php echo base_url(); ?>assets/images/submit-request.png"></button>
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
                 
                 <?php include('sidebar_form.php'); ?>
           
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
<br>