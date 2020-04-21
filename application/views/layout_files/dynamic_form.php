<style>
    .report-privacy{
        font-size: 10px;
    }
@media screen and (max-width: 770px) {
	.mobileui
	{
		display:none;
	}
        .column, .columns{
            float: none;
        }
	.mobileuifont, .mobileuifont h3,  .mobileuifont h5
	{
		font-size:0.6875rem !important;
	}
	 .mobileuifont h3{
	color:rgb(39, 39, 39) !important;
	}
               	img.secure{
			width:40% !important;
		}
		h5{
			font-weight:bold !important;
		}
		}
		ul.square li{font-size:12px;}
               </style>
<div class="row columns" style="padding-top: 10px;">
<nav aria-label="You are here:" role="navigation">
<ul class="breadcrumbs">
<li><a href="<?php echo base_url('');?>">Home</a></li>
  <li><a href="<?php echo base_url('/industry-insights/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>
  <li><a href="<?php echo base_url('/industry-insights/'.$reports['id'].'/'.$reports['url'].''); ?>"><?php echo $reports['meta_title']; ?></a></li>
  <li><?php echo isset($breadcumbtitle)? "$breadcumbtitle" : NULL; ?></li>
</ul>
</nav>
</div>
<div class="row" id="content">
<div class="" >
<div class="medium-7 columns sidebarcards" style="background: #f5f5f5 !important;">

<div class="blog-post mobileuifont"> 
    <h5>
    <a href="<?php echo base_url('/industry-insights/'.$reports['id'].'/'.$reports['url'].''); ?>"><?php echo $reports['meta_title']; ?></a></h5>   
</div>
<h3 class="form-sentence"><?php echo isset($sentence)? "$sentence" : NULL; ?></h3>

                  <div>
                     <?php $attributes = array('class'=> 'jsform');
                echo form_open("smail/toc", $attributes); ?>
                <input type="hidden" name="requestId" id="requestId" value="<?php echo $reports['id']; ?>" />
                <input type="hidden" name="url" id="url" value="<?php echo current_url(''); ?>" />
                <input type="hidden" name="segment" id="segment" value="<?php echo  $this->uri->segment(3); ?>" />
                 
                  </div>
                  
                  
                  <?php echo form_error('name'); ?>
           
<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"> Full Name*</label>
</div>

<div class="small-9 columns">
                    <input class="" style="width: 295px;   background-color: #FFF; max-width:100%;  border: solid 1px #c6c6c6;" type="text" name="name"  required>
</div>

                  <?php echo form_error('email'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Email*</label>
</div>
<div class="small-9 columns">
                    <input class="" style="width: 295px;    font-size: 12px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="email" name="email" placeholder="Please Enter Your Company Email Address"  required>
</div>
                  <?php echo form_error('company'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Company*</label>
</div>
<div class="small-9 columns">
                    <input class="" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="company"  required>
</div>
              <input type="hidden" name="id" value="<?php echo $reports['id']; ?>">
             
             
                                           
<?php echo form_error('phone'); ?>
<div class="small-3 columns">
                   <label class="mobileuifont" style=" color: #000000;" >Phone*</label>
</div>

		<div class="small-9 columns">
                    <input class="" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="number" name="phone" required>
		</div>
		
		<div class="small-3 columns"> 
					<label class="mobileuifont" style=" color: #000000;">Country*</label>
				</div>

				<div class="medium-9 columns">
					<select class="form-in small-9 columns" name="country_user" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="number" name="phone" required="required">
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
                
                <input class=""  type="hidden" name="report" value="<?php echo $reports['name']; ?>" >
                <input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
                   <input  class="" type="hidden" name="ridd" value="<?php echo $reports['id']; ?>" >
                <input  class="" type="hidden" name="rcatt" value="<?php echo $category['name']; ?>" >
                
			<div class="small-10 medium-3 large-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"  > Any specific research requirements?</label>
			</div>
<div class="small-9 columns">
                    <textarea class="" style="width: 295px;   background-color: #FFF;   border: solid 1px #c6c6c6;" name="message"></textarea>
</div>
                
                                  
           
            <div class="small-12 columns">
                  <!--<input class="button" type="submit" value="Submit Request"> -->
                <span class="form-newsletter-label"> <input type="checkbox" name="interested" value="yes"> I'm also interested to receive further industry updates and Research Report newsletter. </span>
    <button class="button expanded" type="submit" style="width: 295px;">Submit Request&nbsp;<img class="icon-button" src="<?php echo base_url(); ?>assets/images/submit-request.png"></button>
    </div>
                 
            <span class="report-privacy">Your personal information is kept secure & confidential.<a target="_blank" href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>"> Privacy Policy</a></span>
                </form>




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