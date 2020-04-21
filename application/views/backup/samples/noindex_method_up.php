<div class="row columns mobileui" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="#">Home</a></li>

  <li><a href="<?php echo base_url('/industry-reports/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>

   <li><a href="<?php echo base_url('/industry-analysis/'.$reports['url']);?>">

  <?php echo  substr($reports['name'],0,100);

  ?>...</a></li>

  <li class="active"><a href="<?php echo base_url('/methodology/detail/'.$reports['url']);?>">

  Methodology</a></li>

    

</ul>

</nav>

</div>

<div class="row" id="content">

 <div class="card"  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;">

<div class="medium-9 columns">

    <div class="blog-post mobileuifont">

<h1 style="text-align: justify; font-size: 14px; font-weight: bold; color: #0F3971;"><?php echo $reports['name']; ?></h1>

    <p style="color: #808080;" class="date mobileuifont" >Report ID:&nbsp;GMI<?php echo $reports['id']; ?></p>

  <?php $this->load->view('elements/upcoming_buttons'); ?>
  
<div  class="mobileuibtn" style="text-align: center; padding: 0 2px;">



    <a href="<?php echo base_url('industry-analysis/'.$reports['url'].'') ?>" class="button secondary"> <span>Summary</span></a>



    <a href="" class="button "> <span>Methodology</span></a>



<span class="mobileui"><a href="<?php echo base_url('/roc/'.$reports['id']); ?>" class="button secondary"><span>Request for Customization</span></a></span>



</div>





<style>



    .button{

        

        width: 32.955%;

    }


	/* Style added by 20 jan*/

ul.square li{font-size:12px;}



 

 @media only screen and (max-width:600px){

 	.mobile{

		display:none !important;

	}

 	

	.pdpBuyBtton{

		display: inline-block !important;

    padding: 10px;

    position: fixed;

    bottom: 0px;

    left: 0;

    width: 100%;

    z-index: 10;

    box-sizing: border-box;

    box-shadow: 0 -1px 1px #ddd;

    background: #ffffff;

	}

}

</style>

<div class="callout mobileuifont" style="font-size: 0.8rem">

<p> <?php echo $reports['market_overview']; ?></p>



</div>

</div>

<div class="pdpBuyBtton" id="normal-buy-btn" style="display:none;">

                    <a href="<?php echo base_url('roc/'.$reports['id'].'') ?>" class="button secondary expanded" style="display:inline-block;padding: 12px 0px;font-size: 12px;width: 49%;margin-right: 1%;margin-bottom: 0px;"> <span>Request for Customization</span></a><a href="<?php echo base_url('request-toc/upcoming/'.$reports['id'].'') ?>" class="button btncustomreq" style="display:inline-block;padding: 12px 0px;font-size: 12px;width: 49%;border-radius: 0px;margin-left: 1%;margin-bottom: 0px;"> <span><i class="fi-download"></i>&nbsp;Table of Contents</span></a>

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

       <li>Unique methodology</li>

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





 <script type="text/javascript" src="https://sealserver.trustwave.com/seal.js?code=2985049217b847c5a0bc91e77db98b16"></script>

<script type="text/javascript" language="javascript">var ANS_customer_id="f534e903-febc-4c58-b61a-4d78c8e5c66a";</script> <script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script>











</div>



  </div>

    <div class="callout mobileuifont" style="font-size: 0.9rem;">

<p style="font-weight:bold; color:#0F3971; font-size:15px;"><i class="fi-page-add" style="font-size: 2em;"></i>  Tailor this report</p> 

<p style="margin-top: -0.5em;">Customize this report to suit your needs, speak to our research team to avail these benefits</p><br />

<a style="color:#fff;" href="<?php echo base_url('/roc/'.$reports['id']); ?>"><button type="button" class="button secondary expanded" style=" background-color:#d7ab00 !important;">Request for Customization</button></a>

</div>



    

    <div class="callout mobileuifont" style="font-size: 0.9rem;">

        <p style="font-weight:bold; color:#0F3971; font-size:15px;"><i class="fi-torsos" style="font-size: 2em;"></i>  Connect with our sales team</p>

       <ul>

        <li>Phone: <a href="tel:13028467766" style="font-size: 1em;">1-302-846-7766</a></li>

                <li>Toll Free: <a href="tel:18886890688" style="font-size: 1em;">1-888-689-0688</a></li>

                    <li> Email: <a href="mailto:sales@gminsights.com" style="font-size: 13px;">sales@gminsights.com</a></li>

        

        </ul>       

        </div>   

           </div>

           </div>

                </div>

                 <!-- end side bar-->

                        </div> <!-- Row end--></div><div id="back-top">

  <a href="#" style="color:#0F3971;font-size:2em;"> <i class="fi-arrow-up"></i>  </a>

</div>