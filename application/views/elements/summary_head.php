<!doctype html>

<html lang="en-US" class="no-js">

<head>

  <title><?php echo isset($title)? "$title" : NULL; ?></title>

  <meta charset="utf-8">
	<meta name="google-site-verification" content="7QH79CkH8KJFDRSgdSBGfpXaEVHbqrl8OPQkJDSn3dc" />
	<meta name="alexa" content="pjj5atwKKRrurykcNkVzqtuBA18" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="US" name="geo.country"/>
  <meta name="description" content="<?php echo isset($description)? "$description": NULL; ?>">

  <meta name="keywords" content="<?php echo isset($keywords)? "$keywords": NULL; ?>">
<link href="https://plus.google.com/101620821168528215986" rel="publisher" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="sitelock-site-verification" content="1972" />

    <link rel="shortcut icon" href="<?php echo base_url('assets/favico.ico');?>">

     <link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css'); ?>" />

    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>" />

  


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73449056-1', 'auto');
  ga('send', 'pageview');

</script>
<style type="text/css">

            #suggestions{
 	        
                 position: relative;
                z-index: 9999;
            }
              #autoSuggestionsList {
             background: #0F3971;
             padding: 0px 10px 10px 10px;
             top: 29px;
             }
            #autoSuggestionsList > li {

                border-bottom: 1px dotted #ffffff;
                list-style: none outside none;
                padding: 10px 5px 10px 5px;
                text-align: left;
            }
            #autoSuggestionsList > li a {  color: #ffffff; }
            .auto_list {
               
                border-radius: 0px 6px 0px 6px;
                position: absolute;
                width: 805px;
                right: -85px;
                overflow-y: scroll;
    	       max-height: 350px;
                font-size: 13px;
            }
            #autoSuggestionsList >li:first-child{
            	border-top:1px solid #fff;
            	}
#autoSuggestionsList > li a:hover{
	color:#B7C5CE;
}
#autoSuggestionsList::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
	border-radius: 10px;
	border-left: 1px solid #fff;
}

#autoSuggestionsList::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#autoSuggestionsList::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	border-left: 1px solid #fff;
	background-image: -webkit-gradient(linear,
									   left bottom,
									   left top,
									   color-stop(0.44, rgb(122,153,217)),
									   color-stop(0.72, rgb(73,125,189)),
									   color-stop(0.86, rgb(28,58,148)));
}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	 <script>

            function liveSearch() {

                var input_data = $('#search_data').val();
                if (input_data.length === 0) {
                    $('#suggestions').hide();
                } else {


                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>index.php/livesearch/search",
                        data: {search_data: input_data},
                        success: function (data) {
                            // return success
                            if (data.length > 0) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                
                                if($('#autoSuggestionsList li').length==10)
                                {
			 	  $('#autoSuggestionsList').html(data + "<button class='button alert expanded' style='width:20%; margin:0 auto; margin-top:20px; margin-bottom:10px; background:#fff; color:#0F3971; border:1px solid #fff; font-weight:bold;'>More Results >></button>");
			 }
			 else
			 {
				$('#autoSuggestionsList').html(data);
			}
                            }
                            else{
				$('#suggestions').hide();
			}
                        }
                    });
                }
            }

$(document).ready(function()
{
	$("#search_data").focusout(function() {
		
    			$("#suggestions").fadeOut(3000); 
    			});
    		});
	
        </script>
</head>
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.gminsights.com",
      "logo": "https://www.gminsights.com/assets/img/gm-logo.png",
      "contactPoint" : [{
    "@type" : "ContactPoint",
    "telephone" : "+1-302-846-7766",
    "contactType" : "contact for sales"
  }, {
    "@type" : "ContactPoint",
    "telephone" : "+1-888-689-0688",
    "contactType" : "customer service",
    "contactOption" : [
      "HearingImpairedSupported",
      "TollFree"
    ],
    "areaServed" : "US"
  }
  ]     }
    </script>    
     
    <body>
    

	

<div class="top-bar small-14" style="background: #ececec">

            <div class="row">



              

                <div class="top-bar-right " style="">

                    <div class="h-contact" style="float:right;">
                       <ul class="dropdown menu" style="" data-dropdown-menu="2z1axb-dropdown-menu" role="menubar">
                        <li role="menuitem" class="h-separator"><a href="tel:1-302-846-7766" style=""><b style="color: #808080"> <i class="fi-telephone" style="color: #808080; font-sizze:18px;"></i>&nbsp;1-302-846-7766</b></a></li>
                         <li role="menuitem" ><a href="tel:1-888-689-0688" style="padding-left:0px;"><b style="color: #808080" >| &nbsp;&nbsp;1-888-689-0688</b></a></li>
                       </ul>  
                       </div>
                       
                  <div class="h-menu mobileui" style="float:right;">
                    <ul class="dropdown menu" style="" data-dropdown-menu="2z1axb-dropdown-menu" role="menubar">
                        <li class="menu-text" role="menuitem"></li>
                     
                        <li role="menuitem">
                                <a href="https://www.gminsights.com/pressrelease" style="color: #808080;font-size: 15px;">Press Room</a>
                                </li>
                            <li role="menuitem"><a href="https://www.gminsights.com/careers" style="color: #808080; font-size: 15px;">Careers</a></li>
                            <li role="menuitem"><a  href="<?php echo base_url('contact-us'); ?>" style="color: #808080; font-size: 15px;">Contact Us</a></li>
                        
                      </ul>
                    </div>

                </div></div></div>

                <div class="boby" style="background: #0F3971;">

                <div class="row">

                <div class="top-bar-left mobileuilogodiv" style=" background: #0F3971;">

                

               <a href="<?php echo base_url(); ?>">

   <img src="https://i.imgur.com/EYwkV8d.png" style="padding-top: 3px;padding-bottom: 3px;width: 17em;" alt="Global Market Insights, Inc. - logo"></a>

       

        </div>

 <div class="top-bar-right mobileuidiv ">
 <div class="top-bar-left mobileui" style="background: #0F3971;">
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
	
</ul>


</div>

                              <ul class="menu mobile-menu"  style="padding-top: 1.68em;     float: right;">

                                <li>

    <form action="<?php echo base_url('filters'); ?>" method="get">

                      <div class="input-group mobile-input" > 

                               <input type="text" id="search_data" class="search-input search" name="q" value="<?php echo $this->input->get('q') ?>" placeholder="Search Report" onkeyup="liveSearch()" autocomplete="off" style="border-radius:1000px; padding: 0; padding-left: 8px; height: 1.93em;">
                  <div id="suggestions" class="mobileui">
                                        <div id="autoSuggestionsList">
                                        
                                        </div>
                                        
                                    </div>
                                  <div class="input-group-button" style="height: 32px">
                                  <button type="submit" style="padding-bottom: 5px;" value="Search"><p class="" style="padding-left: 10px; padding-right: 10px;"><i class="fi-magnifying-glass" style="color: #fff;     font-size: 1.3em;"></i></p></button>
                                    </div>
                                    </div>

                    </form>



</li></ul>

</div>

            </div>
            </div>