<style>
	 .mobileuifont h3{
	color:rgb(39, 39, 39) !important;
	}
	@media screen and (max-width: 770px){
		h5 {
    font-weight: bold !important;
}}

.error{
 color:red;
 margin:10px;
}
</style>

               <style>
               @media screen and (max-width: 770px){
               	img.secure{
			width:40% !important;
		}
		}
		ul.square li{font-size:12px;}
               </style>


<div class="row columns">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>
   
  <li>Contact Us</li>

      

</ul>

</nav>

</div>


             <div class="row" id="content">

             <div >

            <div class="medium-7 columns card" >

            <div class="blog-post mobileuifont ">

               
 
<br/>
<h3 class="industry-report-title">Contact Us</h3>
             <br/>
             
 
             <?php echo form_open('smail/contact_us'); ?>

                   <?php echo form_error('name'); ?>
            
<div class="small-3 columns">
                    <label class="mobileuifont" style=" color: #000000;"> Full Name*</label>
</div>

<div class="small-9 columns">
                    <input class="" autocomplete="off" style="width: 295px;   background-color: #FFF; max-width:100%;  border: solid 1px #c6c6c6;" type="text" name="name"  required placeholder="Full name">
</div>

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
 

              
 <input type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
              
<div class="small-3 columns" style="padding:1px;"></div>
            <div class="small-9 columns">
                    <input class="button" type="submit" value="Submit Request" >
                    </div>
                 <div class="small-12 columns">  
                      <p style="font-size: 13px;">Your personal information is kept secure & confidential. &nbsp;&nbsp;<strong><a target="_blank" href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>" style="text-decoration:none;"> Privacy Policy</a></strong></p></div>
       

                </form>

              </div>


             

             </div>
                 
                    <?php include('sidebar_contact_us.php'); ?>
                 
            </div> 
                   </div>
                 </div>
                 
           
             
             </div>  <br>