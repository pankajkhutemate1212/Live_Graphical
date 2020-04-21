<div class="row" id="content" >



 <div class="card"  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;box-shadow:none;">



<div class="medium-9 columns">



<div class="blog-post mobileuifont" >



<h1 style="text-align: justify; font-size: 14px; font-weight: bold; color: #0F3971;"><?php echo $reports['name']; ?></h1>



<p class="p-info" style="color: #808080;" class="date mobileuifont" >Published Date:&nbsp;<?php echo date('F Y',$reports['publish_date']);?>&nbsp;|&nbsp;<?php echo $reports['no_of_pages']; ?>&nbsp;Pages&nbsp;|&nbsp;Report ID:&nbsp;GMI<?php echo $reports['id']; ?><span class="mobiluispan" style="display:none;"> |</span><span style="float:right; color: #808080; "> Report Format: <i class="fi-page"></i> PDF </span>	

</p>

<style>@media only screen and (min-width:769px) and (max-width:1024px){p.p-info{font-size:14px;}}@media only screen and (max-width:600px){.mobile{display:none !important;}p.p-info span{float:none !important;}.pdpBuyBtton{display: inline-block !important;padding: 10px;position: fixed;bottom: 0px;left: 0;width: 100%;z-index: 10;box-sizing: border-box;box-shadow: 0 -1px 1px #ddd;background: #ffffff;}}</style>

<?php $this->load->view('elements/published_buttons'); ?>

<div class="mobileuibtn" style="text-align: center">





<a  class="button "> <span>Summary</span></a>



<a href="<?php echo base_url('toc/detail/'.$reports['url'].'') ?>" class="button secondary"> <span>Table of Contents</span></a>



<a href="<?php echo base_url('segmentation/detail/'.$reports['url'].'') ?>" class="button secondary"> <span>Industry Coverage</span></a>



<a href="<?php echo base_url('methodology/detail/'.$reports['url'].'') ?>" class="button secondary"> <span>Methodology</span></a>



<style>



    .button{



 width: 24.5%;



    }



	.enjoy-css {



 background:#e6e6e6;



      padding: 10px;



    text-align: center;



    color:#0F3971;



        font-size: 17px;



}



.infodiv1



{



	width: 8%;



    display: inline-block;



    vertical-align: top;



        padding-left: 10px;



        color:#0F3971;



}



.infodiv2



{



	    width: 89%;



    display: inline-block;



    text-align: justify;



    padding-bottom: 7px;



}



.tuchdiv1



{



	    border-radius: 50%;



    text-align: center;



    background: #0F3971;



    color: #ffffff;



    width: 9.5%;



    display: inline-block;



    vertical-align: top;



        font-size: 1.8em;



}



.tuchdiv2



{



	    width: 88%;



    display: inline-block;



    text-align: justify;



    padding-bottom: 28px;



    padding-left:10px;



}

p strong u{

	font-size:1.2em;

}



/* Style added by 20 jan*/

ul.square li{font-size:12px;}



 @media only screen and (min-width:770px){.fixed-sticky{

 	display:block !important;

	        position: fixed;

    top: 30%;

    z-index: 100;

}

.fixed-sticky a{

	    width: 100% !important;

    border-radius: 0px;	

    padding: 10px !important;

    font-size: 15px !important;

}

}

@media only screen and (min-width:1190px){

	.fixed-sticky{width:270px !important;}

}

@media only screen and (min-width:1159px) and (max-width:1189px){

	.fixed-sticky{width:21.7% !important;}

}

@media only screen and (min-width:990px) and (max-width:1158px){

	.fixed-sticky{width:21.2% !important;}

}

@media only screen and (min-width:920px) and (max-width:989px){

	.fixed-sticky{width:20% !important;}

}



</style>



</div>



<div class="callout mobileuifont" style="font-size: 0.8rem;    color: #444;">



<p> <?php echo $reports['full_desc']; ?> </p>

<br/>

<p> <b><u> What Information does this report contain? </u></b> </p>

<div style="padding:10px;">



	<div class="infodiv1"><i class="fi-play medium" style="font-size: 1.2em; vertical-align: middle;"></i></div>

<div class="infodiv2">What was the historic market data from <?php if($reports['id']==1112 || $reports['id']==851) { echo '2013';}else{echo '2012';}?> to 2015, what is the industry growth forecast from 2016 to 2024?</div>

     	<div class="infodiv1"><i class="fi-play medium" style="font-size: 1.2em; vertical-align: middle;"></i></div>

<div class="infodiv2">A detailed analysis of regulatory trends, drivers, industry pitfalls, challenges and growth opportunities for participants</div>

     	<div class="infodiv1"><i class="fi-play medium" style="font-size: 1.2em; vertical-align: middle;"></i></div>

<div class="infodiv2">Which are the leading market products, applications &amp; regions and how will they perform by 2024?</div>

     	<div class="infodiv1"><i class="fi-play medium" style="font-size: 1.2em; vertical-align: middle;"></i></div>

<div class="infodiv2">What are the technology &amp; innovation trends, how will they evolve by 2024?</div>

<div class="infodiv1"><i class="fi-play medium" style="font-size: 1.2em; vertical-align: middle;"></i></div>

<div class="infodiv2" style="padding-bottom:8px">Which companies lead the industry, how are they positioned in the market in terms of sustainability, competency, production capacity and strategic outlook?</div>

<br/><br/>

<div class="mobile" style="width:50%;display: inline-block;"><a href="<?php echo base_url('roc/'.$reports['id'].'') ?>" class="button secondary expanded" style="width: 240px;"> <span>Request for Customization</span></a></div>

<div class="mobile" style="width:50%;display: inline;"><a href="<?php echo base_url('request-sample/detail/'.$reports['id'].'') ?>" class="button btncustomreq" style="    width: 240px;float: right;border-radius:0px;"> <span>Get Sample Pages</span></a></div></div>









</div>



</div>



<div class="pdpBuyBtton" id="normal-buy-btn" style="display:none;">

                    <a href="<?php echo base_url('roc/'.$reports['id'].'') ?>" class="button secondary expanded" style="padding: 12px 0px;font-size: 12px;width: 49%;margin-right: 1%;margin-bottom: 0px;display:inline-block;"> <span>Request for Customization</span></a><a href="<?php echo base_url('request-sample/detail/'.$reports['id'].'') ?>" class="button btncustomreq" style="padding: 12px 0px;font-size: 12px;width: 49%;border-radius: 0px;margin-left: 1%;margin-bottom: 0px;display:inline-block;"> <span><i class="fi-download"></i>&nbsp;Request Sample</span></a>

                    </div>



</div> 







    <!-- start side bar-->







    <div class="medium-3 columns" style="" >







<div data-anchor="content" style="padding-bottom: 30px;">



<div class="callout mobileuifont " style="font-size: 0.9rem">

   <p style="font-weight:bold;color:#0F3971;font-size:1.1em;font-weight:bold;"> Why Global Market Insights?</p>

   

    <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-checkbox" style="font-size: 2em;"></i>&nbsp;Comprehensive Research</span>

    <ul class="square">

           

    <li>All-inclusive coverage</li>

        <li >In-depth and granular data (ex: information for 8 to 15 countries, with clients open to add to this list, in each report)</li>

    <li >Penetrative insights & latest trends</li>

        <li >Offers holistic understanding of the market </li>    

 

    </ul>

           <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-clock" style="font-size: 2em;"></i>&nbsp;Data Accuracy & Reliability </span>

    <ul class="square">

       <li>Unique methodology  <div class="" style="display:inline;"><a class="button frost btncustominq" href="<?php echo base_url('/inquiry-before-buying/'.$reports['id']); ?>" style="width: 45%; font-size: 9px; padding-top: 6px; padding-bottom: 0px;margin-bottom: 1px;background-color: #d7ab00 !important;visibility:hidden;">Inquiry Before Buying</a></div> </li>

            <li>Iterative in nature to eliminate errors</li>

                    <li>Detailed methodology, scope, assumptions and data sources available for reference</li>

    </ul>



  <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-torso-business" style="font-size:2em;"></i>&nbsp;Post-Sales Support</span>

<ul class="square">

  

    <li>Committed to making a positive difference for our clients </li>

    <li>Given the nature of this industry, we are committed to ensure that our clients get maximum return on their investment in our services </li>

        <li>Every purchase comes with an option to obtain additional information:</li>

            <ul class="square" style="list-style-type: upper-latin;">

                <li>up to 10% of the original cost</li>

                    <li>45-minute analyst tele-call to obtain further clarity on the market. </li>

            </ul>

    </ul>

      

     <span style="font-weight:bold;color:#0F3971; font-size:15px;"><i class="fi-lock" style="font-size:2em;"></i>&nbsp;Security & Confidentiality </span>

    <ul class="square">

       

        <li> Global Market Insights, Inc. strictly adheres to PCI-DSS security norms.  </li>

    <li>Only PCI-DSS compliant payment methods used for highest level of client data security </li>

</ul>

    

    

  <div style="text-align: center;">




<img src="https://sealserver.trustwave.com/seal_image.php?customerId=2985049217b847c5a0bc91e77db98b16&size=105x54&style=" alt="This site is protected by Trustwave's Trusted Commerce program" >




<img src="https://verify.authorize.net/anetseal/images/secure90x72.gif" alt="Authorize.Net Merchant - Click to Verify">








</div>



  </div>



<div class="callout mobileuifont" style="font-size: 0.9rem;">

        <div class="sticky"><p style="font-weight:bold; color:#0F3971; font-size:15px;"><i class="fi-torsos" style="font-size: 2em;"></i>  Connect with our sales team</p></div>

       <ul>

        <li>Phone: <a href="tel:13028467766" style="font-size: 1em;">1-302-846-7766</a></li>

                <li>Toll Free: <a href="tel:18886890688" style="font-size: 1em;">1-888-689-0688</a></li>

                    <li> Email: <a href="mailto:sales@gminsights.com" style="font-size: 13px;">sales@gminsights.com</a></li>

        

        </ul>       

        </div>

<div class="callout mobileuifont sticky-div " style="display:none; ">

		<a class="button frost btncustominq" href="<?php echo base_url('/inquiry-before-buying/'.$reports['id']); ?>" style="background-color: #d7ab00 !important;">Inquiry Before Buying</a>

</div>

</div>



                </div>







                 <!-- end side bar-->







                        </div> <!-- Row end--></div>



                        <div id="back-top">



  <a href="#" style="color:#0F3971;font-size:2em;"> <i class="fi-arrow-up"></i>  </a>



</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>

$(document).ready(function() {

var stickyNavTop = $('.sticky').offset().top;

 

var stickyNav = function(){

var scrollTop = $(window).scrollTop();

      

if (scrollTop > stickyNavTop) { 

    $('.sticky-div').addClass('fixed-sticky');

} else {

    $('.sticky-div').removeClass('fixed-sticky'); 

}

};

 

stickyNav();

 

$(window).scroll(function() {

  stickyNav();

});

});

</script>