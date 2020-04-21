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
    position: absolute;
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

</style>

<div class="medium-4 columns card " > <!-- class name - end create-sticky card mobile-hide -->
    
    <h1 class="market-research-report-title" style="padding-top: 0;"><?php echo $reports['meta_title']; ?>
          
<br>
            <table>
                 
                  <tbody>
                    <tr>
                     
                      <td>Published Date:&nbsp;<?php echo date('F Y',$reports['publish_date']);?></td>
                      <td>Pages: <?php echo $reports['no_of_pages']; ?></td>
                    
                    </tr>
                    <tr>
                      
                      <td>Report ID:&nbsp;GMR<?php echo $reports['id']; ?></td>
                      <td>Delivery Format: PDF</td>
                     
                    </tr>
                    
                  </tbody>
                </table>
            
            
         
        </h1>
        
  
           

    
    
    <form class="form-horizontal sidebar-form" role="form">              
   <input type='hidden' value="<?php echo $reports['meta_title']; ?>" id="checkout_report_name"/>

   <input type='hidden' value="<?php echo $reports['id']; ?>" id="checkout_report_id"/>

                 <div class="radio buynow"style="
    margin-bottom: 0.5em;
">
           <label>
    <input type="radio" id="license_type_s"  name="license_type" value="1"  checked="checked" >Single User $4500
 <span class="checkmark"></span>
           </label>
        </div>
                
                 <div class="radio buynow" style="
    margin-bottom: 0.5em;
">
           <label>
    <input type="radio" id="license_type_m"   name="license_type" value="2">Enterprice User $6500
    <span class="checkmark"></span>

           </label>
        </div>
        
         <div class="radio buynow" style="
    margin-bottom: 0.5em;
">
           <label>
    <input type="radio" id="license_type_e"   name="license_type" value="3">Multi User $8500
    <span class="checkmark"></span>

           </label>
        </div>
              
            <a  id='check_out_form_btn' class="medium-5 hollow button general" rel="nofollow"><b>Pre Book Now</b></a>
             
                        
</form>
     
      </div>