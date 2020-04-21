    <script>
    $(document).ready(function()

    {



        $("#enquiry_btn_ajax").click(function(){

            var json = {'name' : $('#full_name').val() , 'email' : $('#email_id').val() ,'job_title' : $('#job_title').val() , 'mobile_no' : $('#phone_number').val(),'message' : $('#enquiry_message').val() ,

            };

            var url = "<?php echo site_url(''); ?>";

            $.ajax({

                url: url,

                dataType: 'html',

                type: 'POST',

                data: json,

                success: function(data, textStatus, XMLHttpRequest)

                {                   

                    $("#ajax_result").html(data);

                    if(data === '<div  class="alert alert-success">Enquiry insert successfully.</div>')

                    {

                        $('#full_name').val(''); $('#email_id').val(''); $('#job_title').val(''); $('#phone_number').val('');  $('#enquiry_message').val('');

                    }

                },

                error: function(XMLHttpRequest, textStatus, errorThrown)

                {

                    $("#ajax_result").html('Error connecting to:' + url);

                }

            });

            $("#ajax_result").html('loading...');

        });

        /*---*/

        $("#chk_dis_btn_ajax").click(function(){

            var json = {'name' : $('#full_name').val() , 'company_name' : $('#company_name').val() ,

            'job_title' : $('#job_title').val() ,

            'email' : $('#email_id').val() ,'mobile_no' : $('#phone_number').val()

,'message' : $('#enquiry_message').val() 

,'captcha' : $('#captcha').val() 

,

            'reportid' : $('#reportid').val() ,

            'reportName' : $('#reportName').val() ,



            'gcaptcha' : grecaptcha.getResponse() ,

            };

            var url = "<?php echo site_url(''); ?>";

            $.ajax({

                url: url,

                dataType: 'html',/*'json'*/

                type: 'POST',

                data: json,

                success: function(data, textStatus, XMLHttpRequest)

                {                   

                    $("#ajax_result").html(data);

                    if(data === '<div  class="alert alert-success">Discount insert successfully.</div>')

                    {

                        $('#full_name').val(''); $('#email_id').val(''); $('#phone_number').val('');  $('#enquiry_message').val('');



                        $('#market_research_check_discount_form').empty();



                       



                        window.location.href = "<?php echo site_url('discount-thanks'); ?>";

                        



                    }

                },

                error: function(XMLHttpRequest, textStatus, errorThrown)

                {

                    $("#ajax_result").html('Error connecting to:' + url);

                }

            });

            $("#ajax_result").html('loading...');

        });









    /*  checkout form*/



    $('#check_out_form_btn').click(function(){

        var chk_rep_name=$('#checkout_report_name').val();

        var chk_rep_id=$('#checkout_report_id').val();

        

        var chk_rep_lic=0;

        if( $('#license_type_m').is(':checked') )

        {

            chk_rep_lic=1;

        } else if( $('#license_type_e').is(':checked') ){
            
             chk_rep_lic=2;
        }
var checkout_form_url="<?php echo site_url();?>secure-report-purchase/"+chk_rep_lic+"/"+chk_rep_id;

        window.location.assign(checkout_form_url);

    });



    });

    </script>



<!-- Footer-->
    
<div class="ecommerce-footer">
  <div class="ecommerce-footer-links row">
    <div class="small-12 medium-12 large-6 columns">
      <div class="row ecommerce-footer-links-block">
        <div class="small-4 medium-4 large-4 columns">
          <h5>Categories</h5>
          <ul class="menu vertical">
	      <li><a href="<?php echo base_url('industry-reports/biomass-bioenergy-and-renewable-chemistry'); ?>">Biomass, Bioenergy...</a></li>
            <li><a href="<?php echo base_url('industry-reports/bulk-and-speciality-chemicals'); ?>">Bulk & Speciality Chemicals </a></li>
            <li><a href="<?php echo base_url('industry-reports/electronics-and-media'); ?>">Electronics & Media </a></li>
            <li><a href="<?php echo base_url('industry-reports/energy-mining-oil-and-gas'); ?>">Energy, Mining, Oil & Gas </a></li>
            <li><a href="<?php echo base_url('industry-reports/food-nutrition-and-animal-feed'); ?>">Food, Nutrition & Animal Feed </a></li>
          </ul>
        </div>
        <div class="small-4 medium-4 large-4 columns more-categories">
          <ul class="menu vertical">
            <li><a href="<?php echo base_url('industry-reports/hvac-and-construction'); ?>">HVAC & Construction </a></li>
            <li><a href="<?php echo base_url('industry-reports/polymers-and-advanced-materials'); ?>">Polymers & Adv. Materials </a></li>
            <li><a href="<?php echo base_url('industry-reports/sustainable-and-smart-technologies'); ?>">Smart Technologies </a></li>
            <li><a href="<?php echo base_url('industry-reports/automotive-and-transportation'); ?>">Automotive & Transportation </a></li>
            <li><a href="<?php echo base_url('industry-reports/healthcare-and-medical-devices'); ?>">Healthcare & Medical Devices </a></li>
          </ul>
        </div>
        <div class="small-4 medium-4 large-4 columns">
             <h5>About</h5>
        <ul class="menu vertical">
	    <li><a href="<?php echo base_url('about-us') ?>">About us</a></li>
          <li><a href="<?php echo base_url('contact-us'); ?>">Contact us</a></li>
          <li><a href="<?php echo base_url('customer-faq'); ?>">FAQs</a></li>
          <li><a href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>">Terms of Use</a></li>
                 <li><a href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>">Privacy Policy</a></li>
        </ul>
        </div>
      </div>   
    </div>
    <div class="small-12 medium-12 large-6 columns">
     <div class="row">
        
      <div class="small-5 medium-5 large-5 columns">
     
          
          
          <h5>Address</h5>
        <ul class="menu vertical">
          <p class="ecommerce-other-links">Office 201, 2nd floor<br>
Teramax Building<br>
Season Road, Aundh<br>
Pune, MH - 411007 India<br>
Phone: <a href="tel:+9102065228555">+91 020 65228555 </a><br>
Email: sales@graphicalresearh.com</p>
        </ul>
           <h5>Business Hours</h5>
          
<p class="ecommerce-other-links">Monday-Friday: 10am to 7pm <br>Saturday, Sunday: Close<p>
      </div>
         
      <div class="small-5 medium-5 large-5 columns">
        <h5>Payment & Security Compliance</h5>
        <ul class="menu vertical">
          <li><img  src="<?php echo base_url(); ?>assets/images/payment.jpg"></li><br>
            <li><img  src="<?php echo base_url(); ?>assets/images/norton-protection.png">
            <img  src="<?php echo base_url(); ?>assets/images/godaddy-secured.svg" style="    height: 40px;">
            </li>
        </ul>
         
      </div>
         
     </div> 
    </div>
  </div>
  <div class="ecommerce-footer-bottom-bar row">
    
    <div class="small-12 medium-2 columns ecommerce-footer-logomark">
    
    </div>
    <div class="small-12 medium-5 columns">
      <div class="bottom-copyright" style="float: right;">
        <span>©2018 Graphical Research. All rights reserved.  <ul class="menu horizontal" >
          <li>
              <a href="https://www.linkedin.com/company/13608420" target="_blank" >  <img  src="<?php echo base_url(); ?>assets/images/lin.png"> </a> </li>
            <li>   <a href="https://twitter.com/graphicalmr" target="_blank" >  <img  src="<?php echo base_url(); ?>assets/images/twt.png"> </a></li>
            <li>   <a href="https://www.facebook.com/Graphical-Market-Research-186771288726093/" target="_blank">   <img  src="<?php echo base_url(); ?>assets/images/fb.png"> </a> </li>
      <li>   <a href="https://plus.google.com/u/3/113985787646609868147" target="_blank">   <img  src="<?php echo base_url(); ?>assets/images/gp.png"> </a>
            </li>
        </ul>
        </span>
      </div>
    </div>
  </div>
</div>


    <!-- End Footer -->
     <!-- Row End -->
      </div>
        
 

    <!-- <script src="<?php echo base_url(); ?>assets/js/foundation.js"></script>
      
    <script src='../node_modules/motion-ui/dist/motion-ui.js'></script> -->
    <!-- uncomment this line ^ to use the motion-ui library -->
  
<script>

$(document).foundation();

$(function() {
  $('.search')
    .bind('click', function(event) {
      $(".search-field").toggleClass("expand-search");
      $(".search-field").focus();
    })
});

</script>
</body>
</html>

<script>

$(document).foundation();

$(function() {
  $('.search')
    .bind('click', function(event) {
      $(".search-field").toggleClass("expand-search");
      $(".search-field").focus();
    })
});

</script>
</body>
</html>
