<style>
@media screen and (max-width: 770px){
.mobileuifont h2 {
      font-size: 13px !important;
      font-weight: bold;
}
hr
{
	margin-top:0px;
}
}
  </style>
<div class="card" style="padding-top: 21px;">
<div class="medium-9 columns mobileuifont">

                            <h2 style="font-size:1.5625rem;"> Research Methodology</h2>  

                            <hr>  

                                <div class="blog-post mobileuifont">      
<p style="text-align: justify;">

          <?php if(!empty($pages))

          {

            //foreach($pages as $row)

            //{

              echo ($pages['description']);

           // }

          }?>

        </p>

        </div>

      </div>

    <div class="medium-3 columns mobileuifont">

                            <div ><h2 style="font-size:1.5625rem;">Connect Us</h2>



    <hr>

           





                            <div class="callout" style="background: #e3e1e3; ">

                                <p><b>Get in touch with our representatives</b></p>

                            <?php $attributes = array('class'=> '');

                echo form_open('smail/about_us_form', $attributes); ?>

                <div class="ccfield-prepend">

                    <?php echo form_error('name'); ?>

                  <i style=" color: #808080;"></i>Full Name *<br/>

                    <input class="" style=" background-color: #FFF;  border: solid 1px #c6c6c6;" type="text" name="name" required>

                </div>                 

                <div class="ccfield-prepend">

                  <?php echo form_error('email'); ?>

                    <i style=" color: #808080;"></i>Email *<br/>

                    <input class="" style="background-color: #FFF; border: solid 1px #c6c6c6;" type="text" name="email" required>

                </div>

                <div class="ccfield-prepend">

                    <?php echo form_error('phone'); ?>

                    <i style=" color: #808080;"></i>Phone (With Country Code) *<br/>

                    <input class="" style=" background-color: #FFF; border: solid 1px #c6c6c6;" type="text" name="phone"  required>

                </div>

              

                <div class="ccfield-prepend">

                    <i style=" color: #808080;"></i>Message *<br/>

                    <textarea class="" style="background-color: #FFF; border: solid 1px #c6c6c6;" name="message" rows="4"  ></textarea>

                </div>

                                <p style="font-size: 12px;">

                                Your personal details are secure. <a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a>

                                </p>

                <div class="ccfield-prepend" style="">

                    <input class="button expanded"  type="submit" value="Submit" style="float: left;">

                </div>
                
                <input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
                <input class=""  type="hidden" name="source" value="<?php echo current_url(); ?>" >
                	
                </form>

                            </div></div>





</div>	
         </div>