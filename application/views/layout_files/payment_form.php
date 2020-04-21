
<?php

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

 ?>
 
 <style>
 .required-field{
	 color:#ea0707;
 }
 
 input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], input[type="color"], textarea,select {
    //: ;
    border: 1px solid #e0e0e0;
    border-radius: 0px ;
    background: #f3f3f3;
    box-shadow: inset 1px 1px 7px 0px #d9d9d996;
}

select {
    height: 2.4375rem;
    padding: 1.2px;
    border: 1px;
    margin: 0 0 1rem;
    font-size: 14px;
    font-family: inherit;
    line-height: normal;
    color: rgba(0, 0, 0, 0.87);
    background-color: #f3f3f3;
    border-radius: 8px;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url(data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.…nts="0,0 32,0 16,24" style="fill: rgb%28158, 158, 158%29"></polygon></svg>);
    background-size: 9px 6px;
    background-position: right center;
    background-origin: content-box;
    background-repeat: no-repeat;
}


 </style>

 
<div class="row">  <br> 
  <div class="medium-4 columns" style="    
   
    border: 1px solid #DDDDDD;
   
    border-radius: 3px;
  
    color: #000 !important;">
        <div class="blog-post">
       
            <div class="checkout-summary-details">
<div class="left">
     <h5 style="
    font-weight: 300;
    color: #c05c6b;
"> Order  Summary</h5>
<p style="text-align:justify;font-size: 15px;"><span style="
    font-weight: 400;
    color: #c05c6b;
" >Report Name:</span> <?php echo $reports['name']; ?></p>
<p style="border-bottom: 1px solid #9f9d9d"><span style="
    font-weight: 500;
    color: rgba(0, 0, 0, 0.87);
">Total : </span> $<?php 

if ($this->uri->segment(2) == 0)
{
       echo $reports['price_sul'];
}
else if ($this->uri->segment(2) == 1)
{
      echo $reports['price_el'];
}
else if ($this->uri->segment(2) == 2)
{
        echo $reports['price_cul'];
}

?></p>


</div>

</div>
      
        <br>
       
       
                    <!--<h5 style="font-weight: 400;">Payment & Security Compliance</h5>
        <ul class="menu vertical">
            <li><img  src="<?php echo base_url(); ?>assets/images/payment.jpg" style="height: 20px;">
           <img  src="<?php echo base_url(); ?>assets/images/norton-protection.png" style="height: 24px;">
            <img  src="<?php echo base_url(); ?>assets/images/godaddy-secured.svg" style="height: 24px;">
            </li>
        </ul>-->
     
        <br>

                   <!-- <h5 style="font-weight: 400;">24/7 Research Support</h5>
        <p class="ecommerce-other-links" style="font-weight:600">
Phone: <a href="tel:+9102065228555">+91 020 65228555 </a><br>
Email: <a href="mailto:sales@graphicalresearh.com" style="font-size: 13px;">sales@graphicalresearh.com</a>
            </p>-->
        </div>
		
		<div class="aaa" style="margin-top:-21px;display:none;">
<p style="font-weight: 500;color:#c05c6b;font-size: 16px;">Select License Price</p>
<form id="formprice" method="get">
<?php $product_id = $this->uri->segment(2);?>
 
                                	<label style="margin-right:10px;font-size: 15px;">

                                	
                                	<input type="radio" id="license_type_s"  name="license_type" value="0"  <?php echo ($product_id == '0') ? 'checked' : '';?>  onclick="window.location='https://graphicalresearch.com/secure-report-purchase/0/1245'">
                                	
 Single User: $2750</label>

                                	<label style="margin-right:10px;font-size: 15px;">


<input type="radio" id="license_type_m"   name="license_type" value="1" <?php echo ($product_id == '1') ? 'checked' : '';?> onclick="window.location='https://graphicalresearch.com/secure-report-purchase/1/1245'">

 Multi User: $4750</label>

                                	<label style="margin-right:10px;font-size: 15px;">


<input type="radio" id="license_type_e"   name="license_type" value="2" <?php echo ($product_id == '2') ? 'checked' : '';?> onclick="window.location='https://graphicalresearch.com/secure-report-purchase/2/1245'">

Enterprise User: $6750</label>
</form>
</div>
		
		
    </div>
	
    
    <div class="medium-8 columns">
<div class=" blog-post" style="    
   
    border: 1px solid #DDDDDD;
    padding: 0px 4px 1px 13px;
    border-radius: 3px;
  
    color: #000 !important;    margin-left: 0px;">
 
   
    
    <div class="" >
<p>

<h5 style="
    font-weight: 400;
    color: #c05c6b;margin-left: 15px;
">Checkout</h5> 
<h5 style="font-weight: 400;font-size: 16px;color: #1769aa; margin-left: 15px;">Please register your details and proceed to checkout.</h5><br>

                 
                  <div>
                     <?php $attributes = array('class'=> 'jsform');
                echo form_open('pay_paypal/payment/', $attributes); ?>
<div>

                  </div>
                  </div>
                  </div>
                  
                  
                  
             <input type="hidden" name="ehjHGfsrilbfhihd" value="<?php $encrypted = encryptIt($reports['name']);echo  $encrypted; ?>">
               <input type="hidden" name="ytrgKLIVchfihhjd" value="<?php $encrypted_2 = encryptIt($reports['id']); echo  $encrypted_2; ?>">
               
               <input type="hidden" name="cmd" value="_xclick" />
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="lc" value="US" />
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
<input type="hidden" name="item_number" value="<?php echo $reports['id']; ?>" / >
<input type="hidden" name="report_name"  value="<?php echo $reports['meta_title']; ?>" />
               
            
             
             <input type="hidden" name="lesYgOwsaqbjlsf" value="<?php 

if ($this->uri->segment(2) == 0)
{
      // echo "4500";
      echo encryptIt($reports['price_sul']);
}
else if ($this->uri->segment(2) == 1)
{
      // echo "6500";
       echo encryptIt($reports['price_el']);
}
else if ($this->uri->segment(2) == 2)
{
       //echo "8500";
       
       echo encryptIt($reports['price_cul']);
       
}

?>">
             
              <div class="medium-5 columns">
                  
                    <?php echo form_error('fname'); ?>
                        
                    <i style=" color: #808080;"></i><span style="font-size:14px;font-weight: 300;">First Name</span><em class="required-field">*</em><br>
                    <input class="" type="text" name="fname"  required >
                </div>
             
              <div class="medium-6 columns">
                  
                    <?php echo form_error('lname'); ?>
                        
                    <i style=" color: #808080;"></i><span style="font-size:14px;font-weight: 300;">Last Name</span><em class="required-field">*</em><br>
                    <input class=""  type="text" name="lname"  required>
                </div>
                <div class="medium-5 columns">
                  <?php echo form_error('email'); ?>
                  <i  style=" color: #808080;"></i><span style="font-size:14px;font-weight: 300;">Email ID</span><em class="required-field">*</em><br>
                    <input class=""  type="email" name="email"  >
                </div>
                <div class="medium-6 columns">
                  <?php echo form_error('company'); ?>
                  <i  style=" color: #808080;"></i><span style="font-size:14px;font-weight: 300;">Company Name</span><em class="required-field">*</em><br>
                    <input class="" type="text" name="company"  required>
                </div>
                <div class="medium-5 columns">
                    <?php echo form_error('phone'); ?>
                    <i  style=" color: #808080;"></i><span style="font-size:14px;font-weight: 300;">Phone (With Country Code)</span><em class="required-field">*</em><br>
                    <input class="" type="text" name="phone" required>
                </div>
                <div class="medium-6 columns">
                    <?php echo form_error('address'); ?>
                    <i  style=" color: #808080;"></i><span style="font-size:14px;font-weight: 300;">Address</span><em class="required-field">*</em><br>
                    <input class=""  type="text" name="address"  required>
                </div>
                <div class="medium-5 columns">
                    <?php echo form_error('city'); ?>
                    <i  style=" color: #808080;"></i> <span style="font-size:14px;font-weight: 300;">City</span><em class="required-field">*</em><br>
                    <input class=""  type="text" name="city" required>
                </div>
                <div class="medium-6 columns">
                    <?php echo form_error('state'); ?>
                    <i  style=" color: #808080;"></i> <span style="font-size:14px;font-weight: 300;">State/Province</span><em class="required-field">*</em><br>
                    <input class=""  type="text" name="state" required>
                </div>
                <input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
                <div class="ccfield-prepend medium-5 columns">
                 <?php echo form_error('country'); ?>
                    <i  style=" color: #808080;"></i><span style="font-size:14px;font-weight: 300;">Country</span><em class="required-field">*</em><br>
                <select name="country" required>
       <option value="Afghanistan">Afghanistan</option>
                                                                            <option value="Egypt">Egypt</option>
                                                                            <option value="Aland Islands">Aland Islands</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="American Samoa">American Samoa</option>
                                                                            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antarctica">Antarctica</option>
                                                                            <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Ascension">Ascension</option>
                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                            <option value="Ethiopia">Ethiopia</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrain">Bahrain</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Belgium">Belgium</option>
                                                                            <option value="Belize">Belize</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermuda">Bermuda</option>
                                                                            <option value="Bhutan">Bhutan</option>
                                                                            <option value="Bolivia">Bolivia</option>
                                                                            <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Cook Islands">Cook Islands</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="COte D'ivoire">COte D'ivoire</option>
                                                                            <option value="Denmark">Denmark</option>
                                                                            <option value="Germany">Germany</option>
                                                                            <option value="Saint Helena">Saint Helena</option>
                                                                            <option value="Diego Garcia">Diego Garcia</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="European Union">European Union</option>
                                                                            <option value="Falkland Islands (malvinas)">Falkland Islands (malvinas)</option>
                                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Finland">Finland</option>
                                                                            <option value="France">France</option>
                                                                            <option value="French Guiana">French Guiana</option>
                                                                            <option value="French Polynesia">French Polynesia</option>
                                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                                            <option value="Gabon">Gabon</option>
                                                                            <option value="Gambia">Gambia</option>
                                                                            <option value="Georgia">Georgia</option>
                                                                            <option value="Ghana">Ghana</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Grenada">Grenada</option>
                                                                            <option value="Greece">Greece</option>
                                                                            <option value="Greenland">Greenland</option>
                                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guernsey">Guernsey</option>
                                                                            <option value="Guinea">Guinea</option>
                                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                                            <option value="Guyana">Guyana</option>
                                                                            <option value="Haiti">Haiti</option>
                                                                            <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hong Kong">Hong Kong</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="Isle Of Man">Isle Of Man</option>
                                                                            <option value="Iraq">Iraq</option>
                                                                            <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
                                                                            <option value="Ireland">Ireland</option>
                                                                            <option value="Iceland">Iceland</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italy">Italy</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japan">Japan</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Jersey">Jersey</option>
                                                                            <option value="Jordan">Jordan</option>
                                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                                            <option value="Cambodia">Cambodia</option>
                                                                            <option value="Cameroon">Cameroon</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="Canary Islands">Canary Islands</option>
                                                                            <option value="Cape Verde">Cape Verde</option>
                                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Kenya">Kenya</option>
                                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Cocos (keeling) Islands">Cocos (keeling) Islands</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comoros">Comoros</option>
                                                                            <option value="Congo, The Democratic Republic Of The">Congo, The Democratic Republic Of The</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Korea, Democratic People's Republic Of">Korea, Democratic People's Republic Of</option>
                                                                            <option value="Korea, Republic Of">Korea, Republic Of</option>
                                                                            <option value="Croatia">Croatia</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Latvia">Latvia</option>
                                                                            <option value="Lebanon">Lebanon</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lithuania">Lithuania</option>
                                                                            <option value="Luxembourg">Luxembourg</option>
                                                                            <option value="Macao">Macao</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Malaysia">Malaysia</option>
                                                                            <option value="Maldives">Maldives</option>
                                                                            <option value="Mali">Mali</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Morocco">Morocco</option>
                                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                                            <option value="Martinique">Martinique</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mauritius">Mauritius</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former Yugoslav Republic Of</option>
                                                                            <option value="Mexico">Mexico</option>
                                                                            <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
                                                                            <option value="Moldova">Moldova</option>
                                                                            <option value="Monaco">Monaco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Myanmar">Myanmar</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="New Caledonia">New Caledonia</option>
                                                                            <option value="New Zealand">New Zealand</option>
                                                                            <option value="Saudi-Iraqi neutral zone">Saudi-Iraqi neutral zone</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Netherlands">Netherlands</option>
                                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Oman">Oman</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Pakistan">Pakistan</option>
                                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                            <option value="Palau">Palau</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Philippines">Philippines</option>
                                                                            <option value="Pitcairn">Pitcairn</option>
                                                                            <option value="Poland">Poland</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="REunion">REunion</option>
                                                                            <option value="Rwanda">Rwanda</option>
                                                                            <option value="Romania">Romania</option>
                                                                            <option value="Russian Federation">Russian Federation</option>
                                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                                            <option value="Sweden">Sweden</option>
                                                                            <option value="Switzerland">Switzerland</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Serbien und Montenegro">Serbien und Montenegro</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                                            <option value="Singapore">Singapore</option>
                                                                            <option value="Slovakia">Slovakia</option>
                                                                            <option value="Slovenia">Slovenia</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="Spain">Spain</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                                            <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                                                            <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
                                                                            <option value="South Africa">South Africa</option>
                                                                            <option value="Sudan">Sudan</option>
                                                                            <option value="South Georgia And The South Sandwich Islands">South Georgia And The South Sandwich Islands</option>
                                                                            <option value="Suriname">Suriname</option>
                                                                            <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                                                            <option value="Swaziland">Swaziland</option>
                                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                            <option value="Tajikistan">Tajikistan</option>
                                                                            <option value="Taiwan">Taiwan</option>
                                                                            <option value="Tanzania, United Republic Of">Tanzania, United Republic Of</option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="Timor-leste">Timor-leste</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tokelau">Tokelau</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                                            <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Czech Republic">Czech Republic</option>
                                                                            <option value="Tunisia">Tunisia</option>
                                                                            <option value="Turkey">Turkey</option>
                                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                                            <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Ukraine">Ukraine</option>
                                                                            <option value="Soviet Union">Soviet Union</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Holy See (vatican City State)">Holy See (vatican City State)</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                                            <option selected="" value="United States">United States</option>
                                                                            <option value="United Kingdom">United Kingdom</option>
                                                                            <option value="Viet Nam">Viet Nam</option>
                                                                            <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                                            <option value="Christmas Island">Christmas Island</option>
                                                                            <option value="Belarus">Belarus</option>
                                                                            <option value="Western Sahara">Western Sahara</option>
                                                                            <option value="Central African Republic">Central African Republic</option>
                                                                            <option value="Cyprus">Cyprus</option>
                                                                            <option value="Hungary">Hungary</option>
                                                                            <option value="Montenegro">Montenegro</option>
                                                                            <option value="Zebra">Zebra</option>
                                                                            
    </select>
                  </div>
				  
                <div class="ccfield-prepend medium-6 columns" style="margin-left: 0rem;">
                    <?php echo form_error('zip'); ?>
                    <i  style=" color: #808080;"></i> <span style="font-size:14px;font-weight: 300;">Zip/Postal Code</span> <em class="required-field">*</em><br>
                    <input class=""  type="text" name="zip" required>
                </div>
						<div class="medium-5">
                       <p style="font-size:14px; margin-left:14px;"><input  type="checkbox" required=""/> Yes, I accept the<a  target="_blank" href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>" style="color:  #1b334b !important;"><u> terms and conditions.</u></a></p>
                <div class="ccfield-prepend" style="width:84%">
                    <span style="margin-left:15px;"><input class="button small" type="submit" value="Proceed To Payment"> <img class="" src="<?php echo base_url(); ?>assets/images/svg/payment.svg" style="height: 31px;margin-top: -16px;"></span>
                </div>
        <br />
                </form>

 
</div>
        
       

    
    
</div>
</div>
  
</div>

<br>

