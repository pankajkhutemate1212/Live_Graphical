<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" dir="ltr" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="US" name="geo.country"/>
    <meta name="google-site-verification" content="CDcR1u_GkR19Hs41tKqidDTeueAy0UO9keDRelAUCqM" />
    <meta name="msvalidate.01" content="0195E9DADD8CB273ADCA593FBCD65DD3" />
    <meta name="yandex-verification" content="c3ea8c76d2838786" />
    <meta name="author" content="Graphical Research">
    <title><?php echo isset($title)? "$title" : NULL; ?></title>
    <meta name="description" content="<?php echo isset($description)? "$description": NULL; ?>">
    <meta name="keywords" content="<?php echo isset($keywords)? "$keywords": NULL; ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>">
<?php if(!empty($meta_index)){ ?>
<meta name="robots" content="index, follow">
<?php } else { ?>
<meta name="robots" content="noindex, nofollow">
<?php } ?>
<?php if(!empty($amphtml)){ ?>
<link rel="amphtml" href="<?php echo isset($canonical)? "$canonical" : current_url(''); ?>/amp ">
<?php } else { ?>

<?php } ?>

<link rel="canonical" href="<?php echo isset($canonical)? "$canonical" : current_url(); ?>">
<!--Twitter Card Meta data-->
<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo base_url(uri_string());?>" />
<meta name="twitter:title" content="<?php echo isset($title)? "$title" : NULL; ?>"/>
<meta name="twitter:description" content="<?php echo isset($description)? "$description": NULL; ?>" />
<meta name="twitter:image:src" content="<?php echo base_url(); ?>assets/img/gm-logo.png" />
<meta name="twitter:site" content="@graphicalmr" />
<!-- OG meta Data -->
<meta property="og:title" content="<?php echo isset($title)? "$title" : NULL; ?>" />
<meta property="og:type" content="article" />
<meta property="og:article:author" content="Graphical Research" />
<meta property="og:url" content="<?php echo isset($canonical)? "$canonical" : current_url(); ?>" />
<meta property="og:image" content="https://i.imgur.com/vSujEYY.jpg" /> 
<meta property="og:description"  content="<?php echo isset($description)? "$description": NULL; ?>" />
<meta property="og:determiner" content="Graphical Research" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="es_US" />
<meta property="og:site_name" content="Graphical Research" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/research.css'); ?>" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112849734-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112849734-1');
</script>

<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #707d84 !important;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #ffffff;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #1769aa;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (min-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
    
}
    
    @media only screen and (min-width:968px)
    {
        
        .menu-new{
            
            display: none;
        }
        
    }

    @media only screen and (max-width:768px)
    {
        
        .menu{
            
            display: ;
        }
        .top-bar{
            display: none;
        }

         .fixed-sticky-head{
            display: none !important;
        }
        
    }
</style>
<!---code added from pankaj------->
<style>


      #suggestions {
            position: relative;
            z-index: 9999;
        }

			
		#autoSuggestionsList {
            background: white;
			display:none;
			margin-top: 29px;
            margin-right: 38px;
			font-weight: normal;
            width: 90%;
			height:60%;
			border:1px solid #e5e5e5;

        }
		
		@media only screen and (max-width: 1024px){
#autoSuggestionsListMobile {
				width: 100%;
                font-family: inherit;
                font-weight: 400;
				background:white;
						
						
			}
		}
		
		@media only screen and (max-width: 1024px) {
            .auto_list {
				height: 417px;
				margin-right: -1px;
				border: 1px solid #9e9e9e52;
				list-style:none;}
				.auto_list li {
				margin-top:22px;
		}	
		.auto_list li a {
		color:#0274b3;}
		}
		
		

        #autoSuggestionsList>li {
            <!--border-bottom: 2px solid #0274B3;-->
            list-style: none outside none;
            <!--padding: 10px 5px 10px 5px;-->
            text-align: justify;
            margin-top: 15px;
        }

        #autoSuggestionsList>li a {
            color: #0274b3;
            font-family: inherit;
            font-weight: 400;
            font-size: 14px;
			
			


			}

        .auto_list {
            border-radius: 0px 6px 0px 6px;
            position: absolute;
            right: 1px;
            overflow-y: scroll;
            max-height: 100%;
            font-size: 13px;
            padding: 15px;
            font-weight: normal;

			}

        #autoSuggestionsList>li a:hover {
            text-decoration: none;
            color: #0274B3;
        }

        #autoSuggestionsList::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
            border-left: 1px solid #fff;
        }

        #autoSuggestionsList::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #autoSuggestionsList::-webkit-scrollbar-thumb {
            border-radius: 10px;
            border-left: 1px solid #fff;
            background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.44, rgb(6, 133, 187)), color-stop(0.72, rgb(33, 153, 232)), color-stop(0.86, rgb(6, 133, 187)))
        }

      
    </style>
<!---//code added from pankaj---------------------->
  </head>
  
 <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Graphical Research",
  "url": "https://www.graphicalresearch.com",
  "logo": "https://www.graphicalresearch.com/assets/images/brand-name.jpg",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+91-020-65228555",
    "contactType": "customer service"
  }],
  "sameAs": [
    "https://plus.google.com/u/3/113985787646609868147",
    "https://twitter.com/graphicalmr",
    "https://www.facebook.com/graphicalresearchoffcial/",
    "https://www.linkedin.com/company/graphical-research-official/"
  ]
}
</script>
  <body>


    <header class="sky-head" style="background: #1769aa !important;height: 30px;">
        
      <div class="row">
      
        <div class="top-bar-right no-collapse">
          <ul class="menu">
          
           <li><a class="sky-head-a" href="mailto:sales@graphicalresearch.com"style="color:#ffffff !important;"><svg fill="#ffffff" height="17" viewBox="0 0 24 15" width="17" xmlns="http://www.w3.org/2000/svg" style="
    margin-left: 9px;
">
    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>&nbsp;sales@graphicalresearch.com</a></li>
          
              
                
          </ul>
        </div>
        </div>
 
    </header>
      <header class="header-style">
          <div class="row">

	<div class="top-bar">
            
        <div class="top-bar-left no-collapse">
          <ul class="menu menu-menubar" style="
    margin-top: 4px !important !important;
">
              <a href="https://www.graphicalresearch.com/" style="float: left;">  <li class="menu-text text-title " role="menuitem" >
                
             <img src="https://www.graphicalresearch.com/assets/images/brand-name.jpg" style="height:51px;margin-left: 13px; ">
                
                     </li>  </a>
              <li class="report-menu-mobile " style="display:inline-block;margin-top:16px;margin-left: 75px;"><a href="https://www.graphicalresearch.com/industry-insights" style="
    font-family: inherit;
    font-weight: 400;
    transform: initial;
	font-size:17px;
  
">Industry Reports</a></li> 
                <li class="report-menu-mobile" style="display:inline-block;margin-top:16px;"><a href="https://www.graphicalresearch.com/our-services" style="
    font-family: inherit;
    font-weight: 400;
    transform: initial;
    font-size: 17px;
">Services</a></li>
                 <li class="report-menu-mobile" style="display:inline-block;margin-top:16px"><a href="https://www.graphicalresearch.com/press-release" style="
    font-family: inherit;
    font-weight: 400;
    transform: initial;
    font-size: 17px;
">Press Release</a></li>
                   <li class="report-menu-mobile " style="display:inline-block;margin-top:16px;"><a href="https://www.graphicalresearch.com/contact-us" style="
    font-family: inherit;
    font-weight: 400;
    transform: initial;
    font-size: 17px;
">Contact us</a></li>              
                    <li class="report-menu-mobile" style="display:inline-block;margin-top:16px;"> <a href="https://www.graphicalresearch.com/about-us" style="
    font-family: inherit;
    font-weight: 400;
    transform: initial;
    font-size: 17px;
">About us</a></li>
                    
                    <li style="display:inline-block;margin-bottom:-17px;"> <form class="hero-search-filter-form onoff" action="https://www.graphicalresearch.com/search" method="get">

                               <input id="search_data" name="findtext" class="hero-search-filter-form-find responsive-input" type="text" value="" placeholder="Search Report" onkeyup="liveSearch()" autocomplete="off" style="height: 45px;border:1px solid #1769aa;width: 316px;">
                                <button class="button search-btn-back responsive-button" style="
    margin-left: -54px;
"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="19" viewBox="0 0 24 24" width="24">
                                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg></button>
                            </form>
							
                            </li> 
							<div id="autoSuggestionsList" class="">
                                <div id="autoSuggestionsList">

                                </div>

                            </div>
          </ul>
        </div>
      </div>
    </div>
      </header>
	  
	  
	   <!--mobile-view menu--->
   <div id="mySidenavNew" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
  <a href="https://graphicalresearch.com/industry-insights">Industry Reports</a>
  <a href="https://graphicalresearch.com/our-services">Services</a>
  <a href="https://graphicalresearch.com/press-release">Press Release</a>
  <a href="https://graphicalresearch.com/contact-us">Contact us</a>
  <a href="https://graphicalresearch.com/about-us">About us</a>
</div>
<div class="menu-new">
  
 

<div class="medium-12" style=" margin-top: 19px;">
  
    <span style="font-size: 41px;cursor:pointer;color: #1769aa;margin-right: 33px;float: right;margin-top:-5px;/* border: 1px solid; *//* border-radius: 32px; */"  onclick="openNav()" style="display: none;">&#9776; </span><a href="https://graphicalresearch.com/"><span> <img src="https://graphicalresearch.com/assets/images/brand-name.jpg" style="height: 54px;margin-left: 9px; "></span></a>
</div>


<li style="display:inline-block"> <form class="hero-search-filter-form onoff" action="https://graphicalresearch.com/search" method="get">

                                <input id="search_data_mobile" name="findtext" class="hero-search-filter-form-find responsive-input" type="text" value="" placeholder="Search Report" onkeyup="liveSearchMobile()" autocomplete="off" style="height: 45px;border:1px solid #1769aa;width: 286px;margin-left: 46px;margin-top: 11px;">
                                <button class="button search-btn-back responsive-button" style="
   
    margin-left: -54px;
    margin-top: 10px;

"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="19" viewBox="0 0 24 24" width="24">
                                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                    </svg></button>
                            </form>
                            </li>
						     <div id="autoSuggestionsListMobile" class="">
                                <div id="autoSuggestionsListMobile">

                                </div>

                            </div>
 </div>
	  <!----script added from pankaj------------------>
	  
	  <script>
	 
	function openNav() {
	document.getElementById("mySidenavNew").style.width = "100%";
}

	function closeNav() {
	document.getElementById("mySidenavNew").style.width = "0";
}
</script>
	  <!--livesearch-script-for-mobile-view---->
	  <script>
	  
	  
        function liveSearchMobile() {



            var input_data = $('#search_data_mobile').val();


            if (input_data.length === 0) {
                $('#autoSuggestionsListMobile').hide();
            } else {




                $.ajax({
                    type: "POST",
                    url: "/livesearch/search",
                    data: {
                        search_data: input_data
                    },
                    success: function(data) {

                        // return success
                        if (data.length > 0) {
                            $('#autoSuggestionsListMobile').show();
                            $('#autoSuggestionsListMobile').addClass('auto_list');

                            if ($('#autoSuggestionsListMobile li').length == 10) {
                                $('#autoSuggestionsListMobile').html(data + "");
                            } else {
                                $('#autoSuggestionsListMobile').html(data);
                            }
                        } else {
                            $('#suggestions').hide();
                        }
                    }
                });
            }
        }

   
	  </script>
	  
	  <!--//livesearch-script-for-mobile-view-->
	  
	  <script>
	  
	  
        function liveSearch() {



            var input_data = $('#search_data').val();


            if (input_data.length === 0) {
                $('#autoSuggestionsList').hide();
            } else {




                $.ajax({
                    type: "POST",
                    url: "/livesearch/search",
                    data: {
                        search_data: input_data
                    },
                    success: function(data) {

                        // return success
                        if (data.length > 0) {
                            $('#autoSuggestionsList').show();
                            $('#autoSuggestionsList').addClass('auto_list');

                            if ($('#autoSuggestionsList li').length == 10) {
                                $('#autoSuggestionsList').html(data + "");
                            } else {
                                $('#autoSuggestionsList').html(data);
                            }
                        } else {
                            $('#suggestions').hide();
                        }
                    }
                });
            }
        }

   
	  </script>
	  <!------//script added from pankaj------------------>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "<?php echo base_url(); ?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "<?php echo base_url(); ?>filters?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<?php $this->load->view($content); ?>
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
        <div class="small-4 medium-6 large-6 columns">
          <h5>Help</h5>
          <ul class="menu vertical">
	     <li><a href="<?php echo base_url('customer-faq'); ?>">Services</a></li><br>
            <li><a href="<?php echo base_url('customer-faq'); ?>">How To Order</a></li><br>
            <li><a href="<?php echo base_url('newsletter/subscribe'); ?>">Newsletter Subscription </a></li><br>
			  <li><a href="<?php echo base_url('terms-of-use-and-privacy-policy'); ?>">Terms of Use</a></li><br>
            <li><a href="<?php echo base_url('sitemap.xml'); ?>"></a></li>
          </ul>
        </div>
       
        <div class="small-4 medium-6 large-6 columns">
             <h5>About</h5>
        <ul class="menu vertical">
	    <li><a href="<?php echo base_url('about-us') ?>">About us</a></li><br>
          <li><a href="<?php echo base_url('contact-us'); ?>">Contact us</a></li><br>
          <li><a href="<?php echo base_url('customer-faq'); ?>">FAQs</a></li><br>
        
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
          <li class="ecommerce-other-links">Office 201, 2nd floor,<br>
Magnolia Garden Building,<br>
Baner Road, <br>
Pune, MH - 411045 India<br>

Email: <a href="mailto:sales@graphicalresearch.com">  sales@graphicalresearch.com</a></li>
        </ul>
           <h5>Business Hours</h5>
          
<p class="ecommerce-other-links">Monday-Friday: 9am EST to 6pm EST <br>Saturday, Sunday: Closed<p>
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
      <div class="bottom-copyright">
        <span>©<?php echo date("Y"); ?> Graphical Research. All rights reserved.  <ul class="menu horizontal" style="margin: 10px;" >
          <li>
              <a href="https://www.linkedin.com/company/graphical-research-official/" target="_blank" >  <img  src="<?php echo base_url(); ?>assets/images/lin.png"> </a> </li>
            <li>   <a href="https://twitter.com/graphicalmr" target="_blank" >  <img  src="<?php echo base_url(); ?>assets/images/twt.png"> </a></li>
            <li>   <a href="https://www.facebook.com/Graphical-Market-Research-186771288726093/" target="_blank">   <img  src="<?php echo base_url(); ?>assets/images/fb.png"> </a> </li>
     
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
