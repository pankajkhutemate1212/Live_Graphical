<div class="row columns mobileui" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li><a href="<?php echo base_url('contact');?>">Contact Us</a></li>

     

</ul>

</nav>

</div>
<style>
	@media screen and (max-width: 770px) {
	img.secure{
		width:40% !important;
		margin-top: -15px;
	}
	}
</style>

             <div class="row" id="content">

             <div class="card"  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;">

            <div class="medium-9 columns">



            <div class="blog-post">
<div class="callout mobileuifont" style="background: #ebebeb; font-size: 0.8rem;">
                <h5>Let Us Reach You</h5>

                <hr>

                

             <?php $attributes = array('class'=> '');

                echo form_open('smail/contact_us', $attributes); ?>

                <div class="ccfield-prepend">
                    <?php echo form_error('name'); ?>
                  <i style=" color: #808080;"></i>Full Name *<br>
                    <input class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" type="text" name="name" required>
                </div>

                <div class="ccfield-prepend">
                  <?php echo form_error('email'); ?>
                    <i style=" color: #808080;"></i>Email *<br>
                    <input class=""style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" type="text" name="email" required>
                </div>
                
 		<div class="ccfield-prepend">
                  <?php echo form_error('company'); ?>
                    <i style=" color: #808080;"></i>Company *<br>
                    <input class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" type="text" name="company" required>
                </div>
                
                <div class="ccfield-prepend">
                    <?php echo form_error('phone'); ?>
                    <i style=" color: #808080;"></i>Phone (With Country Code) *<br>
                    <input class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" type="text" name="phone"  required>			
                </div>
                
<input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
                <div class="ccfield-prepend">
                    <i style=" color: #808080;"></i>Message *<br>
                    <textarea class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" name="message" rows="2" required=""></textarea>
                </div>

                    <p>This website is secure and your personal details are safe.<a target="_blank"  href="<?php echo base_url(''); ?>terms-of-use-and-privacy-policy"> Privacy policy</a></p><br/>

                <div class="ccfield-prepend" style="">

                    <input class="button expanded"  type="submit" value="Submit" style="float: left; width:35%;">

                </div></form>

                </div></div></div>





<div class="medium-3 columns" style="">

<div class="" style="padding-bottom: 30px; ">

  <div class="callout mobileuifont">

  

        <h4 style="padding-top: 12px;">Headquarters</h4>

        <p class="contact_box">Global Market Insights, Inc.<br>
       29L Atlantic Avenue,<br/>Suite L 105, Ocean View,<br/>Delaware 19970<br/>
        United States<br/>
        Phone: <a href="tel:13028467766" style="font-size: 1em;">1-302-846-7766</a><br/>

            Toll Free: <a href="tel:18886890688" style="font-size: 1em;">1-888-689-0688</a><br/>

            

            Email:<a href="mailto:sales@gminsights.com" style="font-size: .9em;">sales@gminsights.com</a></p>
          
      
<br />
   <h4 style="padding-top: 12px;">Asia Pacific</h4>

        <p class="contact_box">Global Market Insights Research Pvt. Ltd.<br>Office 201, 2nd Floor, Magnolia Garden Building, Baner Road, Pune, MH - 411045<br/>India<br/>
           Phone: <a href="tel:02065228555">020-65228555 </a>
        <br/></p>

     
     </div></div></div>

             

             </div></div>