     <?php $this->load->view('elements/meta_header'); ?>

            <?php $this->load->view('elements/header'); ?>



<div class="row columns" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li><a href="<?php echo base_url('companybrochure');?>">Contact Us</a></li>

     

</ul>

</nav>

</div>

             <div class="row" id="content">

             <div class="card"  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;">

            <div class="medium-9 columns">



            <div class="blog-post">

                <h4>Please fill and submit the form below to receive our corporate presentation</h4><br/>

                <hr>

             

                <div class="" style="width: 40%;">


             <?php $attributes = array('class'=> '');

                echo form_open('smail/contact_us_bro', $attributes); ?>

                <div class="ccfield-prepend">

                    <?php echo form_error('name'); ?>

                  <label  style=" color: #808080;">Full Name *</label ><br>

                    <input class="" style="

    background-color: #FFF;

    border: solid 1px #c6c6c6;" type="text" name="name" required>

                </div>

         

              

                 

                 

                <div class="ccfield-prepend">

                  <?php echo form_error('email'); ?>

                    <label  style="color: #808080;">Email *</label><br>

                    <input class="" style="

    background-color: #FFF;

    border: solid 1px #c6c6c6;" type="text" name="email" required>

                </div>

                <div class="ccfield-prepend">

                    <?php echo form_error('phone'); ?>

                    <label style=" color: #808080;">Phone (With Country Code) *</label><br>

                    <input class="" style="

    background-color: #FFF;

    border: solid 1px #c6c6c6;" type="text" name="phone"  required>

                </div>

                <div class="ccfield-prepend">

                    <?php echo form_error('designation'); ?>

                    <label style=" color: #808080;">Designation</label><br>

                    <input class="" style="

    background-color: #FFF;

    border: solid 1px #c6c6c6;" type="text" name="designation" ">

                </div>

                <div class="ccfield-prepend">

                    <label  style=" color: #808080;">Message *</label><br>

                    <textarea class="" style="

    background-color: #FFF;

    border: solid 1px #c6c6c6;" name="message" rows="4"  required></textarea>

                </div>

                    <p>This website is secure and your personal details are safe.<a href="<?php echo base_url('privacy-policy'); ?>"> Privacy policy</a></p>

                <div class="ccfield-prepend" style="">

                    <input class="button expanded"  type="submit" value="Submit" style="float: left;">

                </div></form>

                </div>

                </div></div>





<div class="medium-3 columns" style="" data-sticky-container>

<div class="sticky" data-sticky data-anchor="content" style="padding-bottom: 30px;    padding-right: 25px;">

  <div class="callout">

  

        <h4 style="padding-top: 12px;">Headquarters</h4>

        <p class="contact_box">Global Market Insights Inc.<br>
       29L Atlantic Avenue,<br/>Suite L 105, Ocean View,<br/>Delaware 19970<br/>
        United States<br/>Phone: <a href="tel:18004893075">1-302-257-2444</a><br/>

            Toll Free: <a href="tel:18004893075">1-800-421-1507</a><br/>

            

            Email: <a href="mailto:sales@gminsights.com">sales@gminsights.com</a></p>

      

   <h4 style="padding-top: 12px;">Asia Pacific</h4>

        <p class="contact_box">A 401, Astral Court, Aundh, Pune, MH, 411007<br/>India<br/> </a><br/><br/><br/></p>

     


     </div></div></div>

             

             </div></div><?php $this->load->view('elements/footer'); ?>