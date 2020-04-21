<style>
    .add-people-section:first-child{margin-top:0px;}
</style>
<div class="row">
    <!-- Part two -->
    <div class="marketing-site-features">
  <h2 class="marketing-site-features-headline">Search Result: <?php  $findtext = $this->input->get('findtext'); echo $findtext; ?></h2>
<p class="marketing-site-features-subheadline subheader"> <a href="<?php echo base_url(''); ?>">Home</a>&nbsp;> Search Result</p>
</div>

<div class="people-you-might-know">

    <div class="medium-8 columns">
    <?php if(!empty($records)){$i = 1;
	    foreach($records as $row){ 
if ($i % 2 == 0) {?>
    <div class="row add-people-section" style="padding:10px;border: 1px solid #b5f5fd;background: #f5feff;">
        <?php } else{ ?>
        <div class="row add-people-section" style="padding:10px;border: 1px solid #e2e2e2;">
            <?php } ?>
    <!--<div class="small-12 medium-9 columns about-people">-->
      <div class="about-people-author">
        <p class="report-title-name">
     <a href="<?php echo base_url('/industry-insights/'.$row->id.'/'.$row->url); ?>">
<?php echo str_replace("&","&amp;",$row->name); ?></a></p>
           <!-- <p class="author-location">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
         <strong><?php //echo str_replace("&","&amp;",$row->no_of_pages);?> Pages</strong> | Delivery: PDF 
        </p> -->
        </div>    
    <!--</div>
  <div class="small-12 medium-3 columns add-friend">-->
      <div class="add-friend-action">
        <button class="button primary small">
    <img class="icon-button" src="<?php echo base_url(); ?>assets/images/research-report-buy-now-list.png">&nbsp;
          <a href="<?php echo base_url('/request/'.$row->id.'/inquiry-before-buying'); ?>" style="color:#fff;">Inquiry Before Buying</a>
        </button>
        
        <?php 
         
        if($row->body !="body2") { ?>
          <button class="button primary small">
       <img class="icon-button" src="<?php echo base_url(); ?>assets/images/inquiry-before-buying.png">&nbsp;
       <a href="<?php echo base_url('/request/'.$row->id.'/sample') ?>" style="color:#fff;">Request Sample</a>
        </button>
         <?php } else {?>
         
         <button class="button primary small">
       <img class="icon-button" src="<?php echo base_url(); ?>assets/images/inquiry-before-buying.png">&nbsp;
       <a href="<?php echo base_url('/request/'.$row->id.'/table-of-content') ?>" style="color:#fff;">Request TOC</a>
        </button>
        
        <?php } ?>
         
      </div>
    </div>
 <!--</div>-->
    <?php $i++;}} else { echo "<center><p>No result found</p></center>"; }?>    
     <hr>  
       </div>
       <div class="medium-4 columns" style="border: 1px solid #e2e2e2;
    background: #fafafa;">
           <div class="blog-post mobileuifont">

            

<br/>
            <h3  style="text-align: justify; font-size: 14px;">Contact Us</h3>
             <br/>
             
             
 
             <?php echo form_open('smail/search_result_form'); ?>

                   <?php echo form_error('name'); ?>
            
<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"> Full Name*</label>
</div>

<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px;   background-color: #FFF; max-width:100%;  border: solid 1px #c6c6c6;" type="text" name="name"  required placeholder="Full name" value="<?php if(!empty($name)){ echo $name; } ?>">
</div>

                  <input class=""  type="hidden" autocomplete="off" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >

                  <?php echo form_error('email'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Email*</label>
</div>
<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="email" name="email" placeholder="name@company.com"  required  value="<?php if(!empty($name)){ echo $email; } ?>">
</div>

                      <?php echo form_error('company'); ?>
<div class="small-3 columns">
                  <label class="mobileuifont" style=" color: #000000;">Company*</label>
</div>
<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px; background-color: #FFF; max-width:100%; border: solid 1px #c6c6c6;" type="text" name="company"  required placeholder="Company name"  value="<?php if(!empty($comp)){ echo $comp; } ?>">
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

              
 <input type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
               
<div class="small-3 columns" style="padding:1px;"></div>
            <div class="small-9 columns">
                    <input class="button" type="submit" value="Submit Request" >
               
                    </div>
                  <div class="small-12 columns">  
  <p style="font-size: 12px;">Your personal information is kept secure & confidential.  <br /><a target="_blank" href="<?php echo base_url('privacy-policy'); ?>"> Privacy Policy</a></p></div>
       
                </form>


 

              </div>
           </div>
           <div style="clear:both;"></div> 
    </div>
    </div>
    
    <br>
    
   
    
    