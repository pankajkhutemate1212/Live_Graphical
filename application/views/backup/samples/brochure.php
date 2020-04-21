            <div class="card" style="padding-top: 21px;">

            <div class="medium-9 columns mobileuifont">



            <div class="callout mobileuifont" style="background: #ebebeb; font-size: 0.8rem;">

                <h5>To receive a copy of our corporate presentation, please fill and submit the form below</h5>

                <hr>

               

             <?php $attributes = array('class'=> '');

                echo form_open('smail/contact_us_bro', $attributes); ?>

                <div class="ccfield-prepend">

                    <?php echo form_error('name'); ?>

                 <i style=" color: #808080;"></i>Full Name *<br/>

                    <input class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" type="text" name="name" required>

                </div>
<div class="ccfield-prepend">

                  <?php echo form_error('email'); ?>

                    <i style=" color: #808080;"></i>Email *<br/>

                    <input class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" type="text" name="email" required>

                </div>

                <div class="ccfield-prepend">

                    <?php echo form_error('phone'); ?>

                    <i style=" color: #808080;"></i>Phone (With Country Code) *<br/>

                    <input class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" type="text" name="phone"  required>

                </div>

                
<input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
                <div class="ccfield-prepend">

                    <i style=" color: #808080;"></i>Message *<br/>

                    <textarea class="" style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6; max-width:100%;" name="message" rows="2"  ></textarea>

                </div>

                    <p>This website is secure and your personal details are safe.<a href="http://www.gminsights.com/privacy-policy"> Privacy policy</a></p><br/>

                <div class="ccfield-prepend" style="">

                    <input class="button expanded"  type="submit" value="Submit" style="float: left; width:35%;">

                </div></form>


                </div></div>





<div class="medium-3 columns mobileuifont" style="">

<div class="" style="padding-bottom: 30px; ">

  <div class="callout">
<h4 style="">Headquarters</h4>
<p class="contact_box">Global Market Insights Inc.<br>
       29L Atlantic Avenue,<br/>Suite L 105, Ocean View,<br/>Delaware 19970<br/>
        United States<br/>Phone: <a href="tel:13028467766">1-302-846-7766</a><br/>
 Toll Free: <a href="tel:18886890688">1-888-689-0688</a><br/>
 Email: <a href="mailto:sales@gminsights.com" style="font-size: .9em;">sales@gminsights.com</a></p>
           
      
<br />
   <h4 style="">Asia Pacific</h4>

        <p class="contact_box">Global Market Insights Research Pvt. Ltd.<br>Office 201, 2nd Floor, Magnolia Garden Building, Baner Road, Pune, MH - 411045<br/>India<br/>
           Phone: <a href="tel:02065228555">020-65228555 </a>
        <br/></p>
</div>
</div></div>

             

             </div><div id="back-top">
  <a href="#" style="color:#0F3971;font-size:2em;"> <i class="fi-arrow-up"></i>  </a>
</div>