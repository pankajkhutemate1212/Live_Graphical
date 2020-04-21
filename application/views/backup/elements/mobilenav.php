<div id="mySidenav" class="sidenav mobileviewui" style="display: none;">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br/>
<a id="abc" href="<?php echo base_url('industry-reports'); ?>"><i class="fi-page-multiple mobilenav"></i>&nbsp; Industry Reports</a>
    <ul>
      <li><a href="<?php echo base_url('industry-reports/automotive-and-transportation'); ?>"><i class="fi-elevator mobilenav"></i>&nbsp; Automotive & Transportation</a></li>
      <li><a href="<?php echo base_url('industry-reports/biomass-bioenergy-and-renewable-chemistry'); ?>"><i class="fi-paint-bucket mobilenav"></i>&nbsp; Biomass & Renewable Chemistry</a></li>
      <li><a href="<?php echo base_url('industry-reports/bulk-and-speciality-chemicals'); ?>"><i class="fi-die-five mobilenav"></i>&nbsp; Bulk & Specialty Chemicals</a></li>
      <li><a href="<?php echo base_url('industry-reports/electronics-and-media'); ?>"><i class="fi-power mobilenav"></i>&nbsp; Electronics & Media</a></li>
	  <li><a href="<?php echo base_url('industry-reports/energy-mining-oil-and-gas'); ?>"><i class="fi-battery-half mobilenav"></i>&nbsp; Energy, Mining, Oil & Gas</a></li>
      <li><a href="<?php echo base_url('industry-reports/food-nutrition-and-animal-feed'); ?>"><i class="fi-shopping-bag mobilenav"></i>&nbsp; Food, Nutrition & Animal Feed</a></li>
	  <li><a href="<?php echo base_url('industry-reports/healthcare-and-medical-devices'); ?>"><i class="fi-first-aid mobilenav"></i>&nbsp; Healthcare & Medical Devices</a></li>
	  <li><a href="<?php echo base_url('industry-reports/hvac-and-construction'); ?>"><i class="fi-map mobilenav"></i>&nbsp; HVAC & Construction</a></li>
	  <li><a href="<?php echo base_url('industry-reports/polymers-and-advanced-materials'); ?>"><i class="fi-braille mobilenav"></i>&nbsp; Polymers & Advanced Materials</a></li>
	  <li><a href="<?php echo base_url('industry-reports/sustainable-and-smart-technologies'); ?>"><i class="fi-social-joomla mobilenav"></i>&nbsp; Sustainable & Smart Technologies</a></li>
    </ul>

<a  id="abc" href="<?php echo base_url('upcomingreports'); ?>"><i class="fi-eye mobilenav"></i>&nbsp; Upcoming Reports</a>
<a  id="abc" href="<?php echo base_url('pressrelease'); ?>"><i class="fi-calendar mobilenav"></i>&nbsp; Press Room</a>
<a  id="abc" href="<?php echo base_url('blogs'); ?>"><i class="fi-list mobilenav"></i>&nbsp; Blog</a>
<a  id="abc" href="<?php echo base_url('about-us'); ?>"><i class="fi-comment-quotes mobilenav"></i>&nbsp; About Us</a>
	<ul>
      <li><a href="<?php echo base_url('research-methodology'); ?>"><i class="fi-web mobilenav"></i>&nbsp; Research Methodology</a></li>
      <li><a href="<?php echo base_url('corporate-presentation'); ?>"><i class="fi-projection-screen mobilenav"></i>&nbsp; Corporate Presentation</a></li>
      <li><a href="<?php echo base_url('our-services'); ?>"><i class="fi-torsos mobilenav"></i>&nbsp; Research Services</a></li>
	</ul>
	<a  id="abc" href="<?php echo base_url('careers'); ?>"><i class="fi-results-demographics mobilenav"></i>&nbsp; Careers</a>
<a  id="abc" href="<?php echo base_url('contact-us'); ?>"><i class="fi-telephone mobilenav"></i>&nbsp; Contact Us</a>
</div>



<span class="mobileviewui" style="display : none; font-size:15px;cursor:pointer;background: #0F3971; text-align:right;padding-right: 10px; color: #fff;font-size: 18px;" onclick="openNav()">&#9776; Menu</span>
<div class="mobileviewui" onclick="closeNav()" style="display: none; ">

</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>