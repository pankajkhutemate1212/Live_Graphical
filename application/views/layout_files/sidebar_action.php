<style>

input[type="radio"] {
  -webkit-appearance: checkbox; /* Chrome, Safari, Opera */
  -moz-appearance: checkbox;    /* Firefox */
  -ms-appearance: checkbox;     /* not currently supported */
}
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
}

/* Create a custom radio button */
.checkmark {
    
    top: 0;
    left: 0;
    height: 16px;
    width: 16px;
    background-color: #fafafa;
	border: 2px solid #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #fff;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
	content: "\2714";
    font-size: 25px;
    text-align: center;
    line-height: 6px;
    font-weight: bold;
    color: #0F3971;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 3px;
	left: 0;
}
    
    .checkbox {
  position: relative;
  margin-bottom: 20px;
}

.checkbox label {
  padding-left: 30px;
  display: block;
}

.checkbox input {
  top: 0;
  left: 0;
  z-index: 1;
  cursor: pointer;
  opacity: 0;
  position: absolute;
}

.checkbox input:checked + .input-helper:before {
  border-color: #009688;
}

.checkbox .input-helper:before,
.checkbox .input-helper:after {
  position: absolute;
  content: "";
  transition: all 200ms;
}

.checkbox .input-helper:before {
  left: 0;
  border: 2px solid #7a7a7a;
}

.checkbox input {
  width: 15px;
  height: 15px;
}

.checkbox input:checked + .input-helper:before {
  background-color: #009688;
}

.checkbox input:checked + .input-helper:after {
  transform: scale(1);
  opacity: 1;
}

.checkbox .input-helper:before {
  top: 0;
  width: 15px;
  height: 15px;
  border-radius: 2px;
  color: #fff;
}

.checkbox .input-helper:after {
  content: '\2713';
  font-size: 13px;
  left: 3px;
  top: 0x;
  color: #fff;
  transform: scale(0);
  opacity: 0;
}

.report-purchase{box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.35), inset 0 -3px 10px rgba(255,255,255,0.3);
    text-shadow: 0 1px 0 rgba(0,0,0,0.3);
width:100%;}
.tips-tool{
    margin: 0 !important;
    padding: 0 !important;border-bottom: none !important;
}

@media only screen 
    and (min-device-width : 375px)
    and (max-device-width : 667px){.sidebarcards{
			margin-left:0px !important;
		}
		
	}
</style>

<div class="medium-4 columns sidebarcards" > <!-- class name - end create-sticky card mobile-hide -->
    
    <h5 class="text-headline" style="       color: #ffffff;
    background: #1769aa;
    font-size: 14px;
    margin: -15px -15px 0px -15px;
    line-height: 20px;
    text-align: justify;
    margin-bottom: 11px;
    letter-spacing: 0;
    font-weight: 600;
    padding: 1rem;
    letter-spacing: 1px;">Select License  </h5>
    <h1 class="market-research-report-title" style="padding-top: 0;"><?php echo $reports['meta_title']; ?> 
        </h1>
    <form class="form-horizontal sidebar-form" role="form">              
   <input type='hidden' value="<?php echo $reports['meta_title']; ?>" id="checkout_report_name"/>

   <input type='hidden' value="<?php echo $reports['id']; ?>" id="checkout_report_id"/>

                 <div class="radio buynow">
           <label>
    <input type="radio" id="license_type_s"  name="license_type" value="1"  checked="checked" >Single User $<?php echo $reports['price_sul']; ?>

           <span class="tips-tool" data-tooltip aria-haspopup="true" title="The research report will be delivered in PDF format. It is recommended for a single user.
 " >
            <img alt="Report Licence Details" src="<?php echo base_url('assets/images/svg/info.svg'); ?>">
                </span></label>
        </div>
                
                 <div class="radio buynow">
           <label>
    <input type="radio" id="license_type_m"   name="license_type" value="2">Multi User $<?php echo $reports['price_el']; ?>
   

           <span class="tips-tool" data-tooltip aria-haspopup="true" title="
The research report will be delivered in PDF format. It is recommended for up to five users.
" >
            <img alt="Report Licence Details" src="<?php echo base_url('assets/images/svg/info.svg'); ?>">
                </span></label>
        </div>
        
         <div class="radio buynow">
           <label>
    <input type="radio" id="license_type_e"   name="license_type" value="3">Enterprise User $<?php echo $reports['price_cul']; ?>
  
          <span class="tips-tool" data-tooltip aria-haspopup="true" title="
The research report will be delivered in PDF format and detailed Excel sheet. It is recommended for organizations where multiple people would like to access the report from multiple locations. " >
            <img alt="Report Licence Details" src="<?php echo base_url('assets/images/svg/info.svg'); ?>">
                </span> </label>
        </div>
              
            <a  id='check_out_form_btn' class="medium-4 hollow button general report-purchase" rel="nofollow" ><b>
                   <img src="<?php echo base_url(); ?>assets/images/svg/report-purchase.svg"> Buy Now</b></a>
             
                        
</form>
     
      </div>

<br  />
<!-- Related Reports-->



<div class="medium-4 columns sidebarcards"> <!-- class name - end create-sticky card mobile-hide -->
    
    <h5 class="text-headline" style="       color: #ffffff;
    background: #1769aa;
    font-size: 14px;
    margin: -15px -15px 0px -15px;
    line-height: 20px;
    text-align: justify;
    margin-bottom: 11px;
    letter-spacing: 0;
    font-weight: 600;
    padding: 1rem;
    letter-spacing: 1px;">Related Reports</h5>
   
                 <?php if(!empty($relatedreports)){ foreach($relatedreports as $rrows){ ?>
   
        <a href="<?php echo base_url('industry-insights/'.$rrows->id.'/'.$rrows->url); ?>"><h1 class="market-research-report-title" style="padding-top: 0;"><?php echo $rrows->meta_title; ?> 
        </h1></a>
   <?php }}?>
            
    
      </div>

<style>
    .lili{
            list-style: none;
            margin-bottom: 1rem;
    }
    .formsvg{
        height: 2rem;
            
    }
    </style>

<div class="medium-4 columns sidebarcards"> <!-- class name - end create-sticky card mobile-hide -->
    
    <h5 class="text-headline" style="       color: #ffffff;
    background: #1769aa;
    font-size: 14px;
    margin: -15px -15px 0px -15px;
    line-height: 20px;
    text-align: justify;
    margin-bottom: 11px;
    letter-spacing: 0;
    font-weight: 600;
    padding: 1rem;
    letter-spacing: 1px;">Why Choose us?</h5>
   
    <ul>
        <li class="lili"><img class="formsvg"  src="<?php echo base_url('assets/images/svg/delivery.svg'); ?>"> <b>On-Time Delivery</b>
        </li>
        <li class="lili"><img class="formsvg"  src="<?php echo base_url('assets/images/svg/quility.svg'); ?>"> <b>Assured Quality</b>
        </li>
        <li class="lili"><img class="formsvg"  src="<?php echo base_url('assets/images/svg/experts.svg'); ?>"> <b>Industry Experts</b>
        </li>
        <li class="lili"><img class="formsvg"  src="<?php echo base_url('assets/images/svg/payment.svg'); ?>"> <b>Payment Security</b>
        </li>
    </ul>
            
    
      </div>
	  
	  <div class="medium-4 columns sidebarcards"> <!-- class name - end create-sticky card mobile-hide -->
    
    <h5 class="text-headline" style="color: #ffffff;
    background: #1769aa;
    font-size: 14px;
    margin: -15px -15px 0px -15px;
    line-height: 20px;
    text-align: justify;
    margin-bottom: 11px;
    letter-spacing: 0;
    font-weight: 600;
    padding: 1rem;
    letter-spacing: 1px;">Share Social-media</h5>
   
    <ul>
        <li class="lili"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.graphicalresearch.com/industry-insights/1245/north-america-sandblasting-media-market"><img class="formsvg"  src="<?php echo base_url('assets/images/fb.png'); ?>" style="
    border-radius: 21px;
            "> <b style="
    margin-left: 7px;
">Facebook</b></a>
        </li>
        <li  class="lili"><a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php echo urlencode(current_url());?>&amp;ref_src=twsrc%5Etfw&amp;text=<?php echo urlencode($title)?>&amp;tw_p=tweetbutton&amp;url=<?php echo urlencode(current_url());?>"><img class="formsvg"  src="<?php echo base_url('assets/images/twt.png'); ?>" style="
    border-radius: 21px;
            "> <b style="
    margin-left: 7px;
">Twitter</b></a>
        </li>
        <li class="lili"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.graphicalresearch.com/industry-insights/1245/north-america-sandblasting-media-market"><img class="formsvg"  src="<?php echo base_url('assets/images/lin.png'); ?>" style="
    border-radius: 21px;
            "> <b style="
    margin-left: 7px;
">Linkedin</b></a>
        </li>
        
    </ul>
            
    
      </div>

   <script src="//materialfoundation.mikolajdobrucki.com/assets/js/app.js"></script>
