<style>
ul#css3menu1,ul#css3menu1 ul{
	margin:0;
	list-style:none;
	padding:0;
	}
ul#css3menu1,ul#css3menu1 .submenu{
	border-width:0;
	border-style:solid;
	border-color:;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	}
ul#css3menu1 .submenu{
	visibility:hidden;
	position:absolute;
	left:0;
	top:75px;
	opacity:0;
	-moz-transition:all 0.5s;
	-webkit-transition:opacity 0.5s;
	-o-transition:opacity 0.5s,visibility 0.5s;
	transition:opacity 0.5s;
	float:left;
	z-index:2;
	background-color:#0F3971;
	border-radius:0 0 6px 6px;
	-moz-border-radius:0 0 6px 6px;
	-webkit-border-radius:0;
	-webkit-border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	padding:0 3px 3px;
	}
ul#css3menu1 li:hover>.submenu{
	visibility:visible;
	opacity:1;
	}
ul#css3menu1 li{
	position:relative;
	display:block;
	white-space:nowrap;
	font-size:0;
	float:left;
	}
ul#css3menu1 li:hover{
	z-index:1;
	}
ul#css3menu1 ul .submenu{
	position:absolute;
	left:100%;
	top:0;
	border-radius:6px;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	-moz-box-shadow:0px 0px 1px #bec6c7;
	-webkit-box-shadow:0px 0px 1px #bec6c7;
	box-shadow:0px 0px 1px #bec6c7;
	}
ul#css3menu1{
	font-size:0;
	z-index:999;
	position:relative;
	display:inline-block;
	zoom:1;padding:0;
	*display:inline;
	}
ul#css3menu1 .column{
	float:left;
	}
* html ul#css3menu1 li a{
	display:inline-block;
	}
ul#css3menu1>li{
	margin:0;}
ul#css3menu1 a:active, ul#css3menu1 a:focus{
	outline-style:none;
	}
ul#css3menu1 a{
	display:block;
	vertical-align:middle;
	text-align:left;
	text-decoration:none;
	font-size:16px;
	color:#fff;
	cursor:pointer;
	padding:18px 10px;
	background-color:;
	background-repeat:repeat;
	border-width:0px;
	border-style:none;
	border-color:;
	}
ul#css3menu1 ul li{
	float:none;
	margin:3px 0 0;
	}
ul#css3menu1 ul a{
	text-align:left;
	padding:7px;
	background-color:transparent;
	border-radius:0px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	-moz-transition:all 0.5s;
	-webkit-transition:all 0.5s;
	-o-transition:all 0.5s;
	font-size:13px;
	color:#fff;
	text-decoration:none;
	}
ul#css3menu1 li:hover>a,ul#css3menu1 li a.pressed{
	border-style:none;
	color:#B7C5CE;
	text-decoration:none;
	}
ul#css3menu1 img{
	border:none;
	vertical-align:middle;
	margin-right:18px;
	}
ul#css3menu1 span{
	display:block;
	overflow:visible;
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:0px;
	}
ul#css3menu1 ul span{
	background-image:url("arrowsub.gif");
	padding-right:12px;
	}
ul#css3menu1 ul li:hover>a,ul#css3menu1 ul li a.pressed{
	background-color:transparent;
	color:#B7C5CE;
	text-decoration:none;
	}
ul#css3menu1 li.topmenu>a{
	background-color:transparent;
	border-radius:0px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	-moz-transition:all 0.5s;
	-webkit-transition:all 0.5s;
	-o-transition:all 0.5s;
	}
ul#css3menu1 li.topmenu:hover>a,ul#css3menu1 li.topmenu a.pressed{
	background-color:transparent;
	}
	.submenu li
	{
		padding:10px;
		border-bottom:1px dotted #fff;
	}
	.sub_menu li
	{
		padding-left:0px;
	}
</style>
<ul id="css3menu1" class="topmenu" style="padding-top:12px;">
	<li class="topmenu"><a href="<?php echo base_url('industry-reports'); ?>" style="height:25px;line-height:25px;"><span><i class="fi-page-multiple mobilenav"></i>&nbsp;Industry Reports&nbsp;<i class="fi-play rotate-90"></i></span></a>
	<span style="margin-top:32px;width:100%;"></span>
	<div class="submenu sub_menu" style="width:800px;">
	<span style="border-top:1px solid #fff; width:100%;"></span>
	<div class="column" style="width:34%"><ul>
		<li><a href="<?php echo base_url('industry-reports/automotive-and-transportation'); ?>"><i class="fi-elevator mobilenav"></i>&nbsp; Automotive & Transportation</a></li>
		<li><a href="<?php echo base_url('industry-reports/biomass-bioenergy-and-renewable-chemistry'); ?>"><i class="fi-paint-bucket mobilenav"></i>&nbsp;Biomass, Bioenergy & Renewable...</a></li>
		<li><a href="<?php echo base_url('industry-reports/bulk-and-speciality-chemicals'); ?>"><i class="fi-die-five mobilenav"></i>&nbsp;Bulk & Specialty Chemicals</a></li>
		<li style="border-bottom:none;"><a href="<?php echo base_url('industry-reports/electronics-and-media'); ?>"><i class="fi-power mobilenav"></i>&nbsp;Electronics & Media</a></li>
	</ul></div>
	<div class="column" style="width:33%"><ul>
	<li><a href="<?php echo base_url('industry-reports/energy-mining-oil-and-gas'); ?>"><i class="fi-battery-half mobilenav"></i>&nbsp;Energy, Mining, Oil & Gas</a></li>
		<li><a href="<?php echo base_url('industry-reports/food-nutrition-and-animal-feed'); ?>"><i class="fi-shopping-bag mobilenav"></i>&nbsp;Food, Nutrition & Animal Feed</a></li>
		<li><a href="<?php echo base_url('industry-reports/healthcare-and-medical-devices'); ?>"><i class="fi-first-aid mobilenav"></i>&nbsp;Healthcare & Medical Devices</a></li>
	</ul></div>
	<div class="column" style="width:33%"><ul>
	<li><a href="<?php echo base_url('industry-reports/hvac-and-construction'); ?>"><i class="fi-map mobilenav"></i>&nbsp;HVAC & Construction</a></li>
		<li><a href="<?php echo base_url('industry-reports/polymers-and-advanced-materials'); ?>"><i class="fi-braille mobilenav"></i>&nbsp;Polymers & Advanced Materials</a></li>
		<li><a href="<?php echo base_url('industry-reports/sustainable-and-smart-technologies'); ?>"><i class="fi-social-joomla mobilenav"></i>&nbsp;Sustainable & Smart Technologies</a></li>
	</ul></div></div>
</li>
	<li class="topmenu"><a href="<?php echo base_url('upcomingreports'); ?>" style="height:25px;line-height:25px;"><i class="fi-eye mobilenav"></i>&nbsp;Upcoming Reports</a></li>
	<li class="topmenu"><a href="<?php echo base_url('blogs'); ?>" style="height:25px;line-height:25px;"><i class="fi-list mobilenav"></i>&nbsp;Blog</a></li>
	<li class="topmenu"><a  href="<?php echo base_url('about-us'); ?>" style="height:25px;line-height:25px;"><span><i class="fi-comment-quotes mobilenav"></i>&nbsp;About Us&nbsp;<i class="fi-play rotate-90"></i></span></a>
	<span style="margin-top:32px;width:100%;"></span>
	<div class="submenu sub_menu" style="width:200px;">
	<span style="border-top:1px solid #fff; width:100%;"></span>
	<div class="column"><ul>
		<li><a href="<?php echo base_url('research-methodology'); ?>"><i class="fi-web mobilenav"></i>&nbsp;Research Methodology</a></li>
		<li><a href="<?php echo base_url('corporate-presentation'); ?>"><i class="fi-projection-screen mobilenav"></i>&nbsp;Corporate Presentation</a></li>
		<li style="border-bottom:none;"><a href="<?php echo base_url('our-services'); ?>"><i class="fi-torsos mobilenav"></i>&nbsp;Research Services</a></li>
	</ul></div></div>
</li>
	<li class="topmenu"><a  id="abc" href="<?php echo base_url('contact-us'); ?>" style="height:25px;line-height:25px;"><i class="fi-telephone mobilenav"></i>&nbsp;Contact Us</a></li>
</ul>
