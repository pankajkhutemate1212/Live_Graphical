<?php error_reporting(0); ?>



<style>

.blink {
	-webkit-animation: blink .90s linear infinite;
	-moz-animation: blink .90s linear infinite;
	-ms-animation: blink .90s linear infinite;
	-o-animation: blink .90s linear infinite;
	 animation: blink .90s linear infinite;
}
@-webkit-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-moz-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-o-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}


.button.secondary:hover{
	
background-color:#259b24;
}
.button.secondary{
	box-shadow:1px 5px 11px #cacaca;
}
h2, h3{
	
	font-size:16px !important;
}


<!--Faq Style-->

/* Accordion styles */

input[type='checkbox'] {
  position: fixed !important;
  opacity: 0;
  z-index: -1;
 
}
.tabscollapsepr-1 {
  margin-top: 15px;
  overflow: hidden;
/*box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.5);*/
}

 

.tab-collapsepr-1 {
  width: 100%;
  color: white;
  overflow: hidden;
}
.tab-label-collaps-1 {
  display: flex;
  justify-content: space-between;
  padding: 1em;
  background: #f2f2f2;
  
  cursor: pointer;
  font-size: 15px;
  border-bottom: 1px solid #fefefe;
  /* Icon */
}
.tab-label-collaps-1:hover {
  background: #9e9e9e85;
}
.tab-label-collaps-1::after {
  content: "\25bc";
  width: 1em;
  height: 1em;
  color:#0274b3;
  text-align: center;
  transition: all .35s;
}
.tab-content-collapspr-1 {
  max-height: 0;
  padding: 0 1em;
  color: #383737;
  background: white;
  transition: all .35s;
  border: 1px solid rgba(204, 202, 202, 0.26);

}
.tab-close-collapsepr-1 {
  display: flex;
  justify-content: flex-end;
  padding: 1em;
  font-size: 0.75em;
  background: #9e9e9e;
  cursor: pointer;
}
.tab-close-collapsepr-1:hover {
  background: #9e9e9e;
}

 

input:checked + .tab-label-collaps-1 {
  background: #9e9e9e;
}
input:checked + .tab-label-collaps-1::after {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
input:checked ~ .tab-content-collapspr-1 {
  max-height: 100vh;
  padding: 1em;
}
 html, body {
    max-width: 100%;
    overflow-x: hidden;
}
.rowcollapspr-1 {
  display: flex;
}
.rowcollapspr-1 .col-1 {
  flex: 1;
}
.rowcollapspr-1 .col-1:last-child {
/*  margin-left: 1em;*/
}   

<!--End FAQ  Style*/-->

    <!--h2, h3, h4, h5, h6 {
        font-weight: 500 !important;
        font-size: 14px !important;
    }-->
    .report-menu-name{
       margin: 0.85em 1em 0.5em 1em !important;
    letter-spacing: 1px !important;
    }
    .raised-button, .floating-action-button {
    display: inline-block !important;
    text-align: center !important;
    line-height: 1 !important;
    cursor: pointer !important;
    -webkit-appearance: none !important;
    transition: background-color 0.25s ease-out, color 0.25s ease-out !important;
    vertical-align: middle !important;
    padding: 0.85em 1em 0.7em 1em !important;
    border: 1px solid #0000004a !important;
    border-radius: 0;
   
    margin: 5px !important;
    
    background-color: white !important;
    color: #8c8c8c !important;
    box-shadow: none !important;
    text-shadow: none !important;
    }
    
    .raised-button:hover, .raised-button:focus, .floating-action-button:hover, .floating-action-button:focus{
        border-bottom: 7px solid #1769aa !important;
    }
	
	 .tabs-content img{
		
		border: 1px solid #9e9e9ed4;
	}
	
	@media only screen and (max-width: 768px)
.button-size {
    width: 109px !important;
}

@media only screen and (max-width:768px){
	   
	    .button-hide{
			display:none !important;
			
		}
		
		.button-size{
			width:109px !important;
		}
		.sidebarcards{
			
			
			
			margin-top: 10px;
		}
   }
   @media only screen and (-webkit-device-pixel-ratio: 3) and (device-height: 812px) and (device-width: 375px)
.sidebarcards {
    width: 353px !important;
    margin-left: 8px !important;
    margin-top: 10px;
}
  @media only screen 
    and (device-width : 375px) 
    and (device-height : 667px) 
    and (-webkit-device-pixel-ratio : 2) {.sidebarcards{
			
			width: 352px !important;
			margin-left: 11px !important;
			margin-top: 10px;
		} }
		
     @media only screen 
    and (device-width : 414px) 
    and (device-height : 736px) 
    and (-webkit-device-pixel-ratio : 3) {.sidebarcards{
			
			width: 391px !important;
			margin-left: 11px !important;
			margin-top: 10px;
		}  }
  
</style>
<script>
    digitalData = {
 pageInstanceID: "<?php echo $reports['name']; ?>",
 page:{
 pageInfo:{
pageID: "Market Research Report",
destinationURL:
 "<?php echo base_url('industry-insights/'.$reports['id'].'/'.$reports['url']) ?>"},
category:{
primaryCategory: "Market Researh Industry Report",
 subCategory1: "<?php echo $category['name']; ?>",
 pageType: "<?php echo isset($description)? "$description": NULL; ?>"},
 attributes:{
 Seasonal: "Global Market"}
 },
 product:[{
 productInfo:{
 productName: "<?php echo isset($title)? "$title" : NULL; ?>",
 sku: "GR<?php echo $reports['id']; ?>",
 manufacturer: "Graphical Research"},
 category:{
 primaryCategory: "Market Researh Industry Report"},
 attributes:{
 productType: "Special Offer"}
 }]
 digitalData.transaction.total:[{
 basePrice: <?php echo $reports['price_sul']; ?>,
 currency: "USD",
  shippingMethod: "PDF",
 }]

 }; 
    </script>


<!--<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>-->
<?php  if(!empty($faq)){ $totalcnt=count($faq); $flag=0; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
      <?php foreach($faq as $row){ $flag++ ?>
            {
    "@type": "Question",
    "name": "<?php echo $row->question; ?>",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "<?php echo $row->answer; ?><a href='<?php echo current_url(); ?>'> Read More</a>"
    }
  } <?php if($totalcnt!=$flag){ ?>, <?php }?> <?php } ?>]
  }
</script>
<?php } ?>


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Graphical Research",
    "item": "<?php echo base_url(''); ?>"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "<?php echo $category['name']; ?>",
    "item": "<?php echo base_url('/industry-insights/'.$category['url']);?>"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "<?php echo $reports['name']; ?>",
    "item": "<?php echo base_url('industry-insights/'.$reports['id'].'/'.$reports['url']) ?>"
  }]
}
</script>
<div class="row">
      <div class=" breadcrumbs"> 
     
            <ul>
                <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                <li><a href="<?php echo base_url('/industry-insights/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>
    <li><?php echo  substr($reports['name'],0,100); ?>...</li>
            </ul>
    </div>

    <div class="medium-12 columns end">
        <h1 class="market-research-report-title" style="padding-top: 0;"><?php echo $reports['name']; ?><br>    
      </h1>
         <span class="text-caption">
             Published Date: <?php echo date('F Y',$reports['publish_date']);?> | Publisher: Graphical Research 
             Report ID: GR<?php echo $reports['id']; ?> | Delivery : PDF
        </span>
        <div class="medium-6" style="float: right;" >
           
            <a href="<?php echo base_url('request/'.$reports['id'].'/sample') ?>" class="button secondary  button-hide" style="font-size:14px;    background-color: #259b24 !important;
    color: white !important;
    "> <span class="blink "><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 23 20" width="17">
    <path d="M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>&nbsp;Request a sample</span></a>
            
             
</div> 
     </div>
	 <div>
	 <div class="medium-12 columns">
    <div class="medium-8 columns ">     
     <div class="z-depth-1">
				<div class="cust-tab-details-div">
                <a href="<?php echo base_url('industry-insights/'.$reports['id'].'/'.$reports['url']) ?>" class=" button-size raised-button ink cust-tab-details report-menu-name  <?php if(!empty($RD)){echo 'is-active'; }  ?>" style="position: unset;font-size:14px;    background-color: #0274b3 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;margin:0;width: 23%;
    ">Summary</a>
                <a id="a1" href="<?php echo base_url('table-of-content/'.$reports['id'].'/'.$reports['url'].'') ?>" class=" button-size raised-button ink cust-tab-details report-menu-name <?php if(!empty($isactive)){echo 'is-active'; }  ?>" style="position: unset;font-size:14px;    background-color: #0274b3 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;margin:0;width: 23%;
    ">Table of Contents</a>
                <a id="a4" href="<?php echo base_url('request/'.$reports['id'].'/customize-this-report') ?>" class=" button-size raised-button ink cust-tab-details report-menu-name report-detail-option" style="position: unset;font-size:14px;    background-color: #0274b3 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;margin:0;width: 29%;">&nbsp;Customized Report</a>
                <a id="a4" href="<?php echo base_url('request/'.$reports['id'].'/inquiry-before-buying'); ?>" class="raised-button ink cust-tab-details report-menu-name report-detail-option button-hide" style="position: unset;font-size:14px;    background-color: #0274b3 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;margin:0;width: 27%;">
                   &nbsp;
                    &nbsp;Inquiry Before Buying</a>

            </div>
        <div class="tabs-content" data-tabs-content="material-tabs">
          <div class="tabs-panel is-active" id="panel1" role="tabpanel" aria-hidden="false" aria-labelledby="panel1-label">
	      
	     
         
<?php
$cname= $this->uri->segment(1);

if($cname=="table-of-content"){ ?>
	      
	      
   
     <p class="text-body-1"><?php echo $reports['table_of_content']; ?></p>
    
     <?php
}else if($cname=="industry-coverage"){  ?>
     
	      <p class="text-body-1"><?php echo $reports['free_analysis']; ?></p>
  <?php
  
  
} else  if($cname=="methodology"){ ?>
	      
	      <p class="text-body-1"><?php echo $reports['market_overview']; ?></p>
	      
<?php     
} else if($cname=="get-customized-report"){ ?>
    
    <p class="text-body-1"><?php echo $reports['full_desc']; ?></p>
    
    <?php
} else { ?>
     <?php
        $summary=$reports['full_desc'];
         $count_img = substr_count($summary, '<img');

       for($i =0 ; $i < $count_img; $i++) {
           
           if($i==0){
               
            $testcase = substr($summary, strpos($summary,"<img"));
            
              }
            else {
                
            $testcase= substr($summary,strripos($summary,'<p style="text-align:center">Get more details on this report - <b><a class="button secondary" href='));
             }
             
             /*$aaa=substr($testcase, strpos($testcase, '<img'));
              
             $img_html = substr($testcase, strpos($testcase, '<img'), stripos($aaa, '" />')).'" />';
         
     $summary= str_replace($img_html, $img_html.'<p style="text-align:center">Get more details on this report - <b><a class="button secondary" href="'.base_url().'request-sample/detail/'.$inserted_id.'?sum=img">Request Free Sample PDF</a></b><br /></p>',$summary);*/
     
     $aaa=substr($testcase, strpos($testcase, '<img'));
				$img_html1 = substr($testcase, strpos($testcase, '<img'), stripos($aaa, '" />')+4);
				$img_html1 = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $img_html1);
				$myschemaimage =  substr($img_html1, -92, -4);
				$myschemaimage_schema=substr(substr($img_html1,strpos($img_html1, 'src="')+5),0,strpos(substr($img_html1,strpos($img_html1, 'src="')+5), '"'));
				
				$img_html=substr($testcase, strpos($testcase, '<img'),stripos($aaa,'</p>')).'</p>';
				$img_html_check=substr($testcase, strpos($testcase, '<img'),stripos($aaa,'</p>
<p style="text-align:center">Get more details on this report - <b><a href="')).'</p>';
if(stripos($aaa,'</p>
<p style="text-align:center">Get more details on this report - <b><a href="')==false){
	
				
				if(strpos($img_html,'</strong>'))
				{
					if(strpos($img_html,'</u></strong></em>'))
					{
						$summary= str_replace($img_html, $img_html1.'</u></strong></em></p>
<p style="text-align:center">Get more details on this report - <b><a class="button secondary"  href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a></b><br />
</p>',$summary);
							
					}
					elseif(strpos($img_html,'</u></strong>'))
					{
						$summary= str_replace($img_html, $img_html1.'</u></strong></p>
<p style="text-align:center">Get more details on this report - <b><a class="button secondary"  href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a></b><br />
</p>',$summary);
					}
					elseif(strpos($img_html,'</u></em></strong>'))
					{
						$summary= str_replace($img_html, $img_html1.'</u></em></strong></p>
<p style="text-align:center">Get more details on this report - <b><a class="button secondary" href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a></b><br />
</p>',$summary);
					}
					else
					{
						$summary= str_replace($img_html, $img_html1.'</strong></p>
<p style="text-align:center">Get more details on this report - <b><a class="button secondary"  href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a></b><br />
</p>',$summary);  
					} 
				}
				else
				{
					$summary= str_replace($img_html, $img_html1.'</p>
<p style="text-align:center">Get more details on this report - <b><a class="button secondary" href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a></b><br />
</p>',$summary);
				}
       } 
       
       } ?>			
                    <p class="text-body-1"><?php echo $summary; ?></p>
<?php }  ?>
	      
	      
	      
	      
	      
       
              
              
          </div>
		  <?php if(isset($faq) && !empty($faq)){ ?>
		    <h2><u><b style="font-size: 16px;margin-left: 11px;">Frequently Asked Question(FAQ) : </u></b> </h2>
		   <div class="rowcollapspr-1">
  
  <div class="col-1">
    
    <div class="tabscollapsepr-1">
        <?php  $flag = 1;
        if(!empty($faq)){foreach($faq as $clipRow){?>
                      <div class="tab-collapsepr-1">
          <input type="checkbox" id="<?php echo $flag; ?>" name="rd" style="position:fixed;">
        <label class="tab-label-collaps-1" for="<?php echo $flag; ?>" style="
    display: flex;margin: 0;
"><?php echo $clipRow->question;?></label>
        <div class="tab-content-collapspr-1" style="
    text-align: justify;
">
        <?php echo $clipRow->answer;?>       </div>
        </div>      

       <?php $flag++; }} ?>
         
      </div>
      
    </div>
  </div>  
		  
		    <?php } ?>
          </div><br/>
         <div class="cust-tab-details-div">
        <a href="<?php echo base_url('industry-insights/'.$reports['id'].'/'.$reports['url']) ?>" class=" button-size raised-button ink cust-tab-details report-menu-name  <?php if(!empty($RD)){echo 'is-active'; }  ?>" style="position: unset;font-size:14px;    background-color: #0274b3 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;margin:0;width: 23%;
    ">Summary</a>
  <a id="a1" href="<?php echo base_url('table-of-content/'.$reports['id'].'/'.$reports['url'].'') ?>" class=" button-size raised-button ink cust-tab-details report-menu-name <?php if(!empty($isactive)){echo 'is-active'; }  ?>" style="position: unset;font-size:14px;    background-color: #0274b3 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;margin:0;width: 23%;
    ">Table of Contents</a>
           
          <a id="a4" href="<?php echo base_url('request/'.$reports['id'].'/customize-this-report') ?>" class=" button-size raised-button ink cust-tab-details report-menu-name report-detail-option" style="position: unset;font-size:14px;    background-color: #0274b3 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;margin:0;width: 29%;">&nbsp;Customized Report</a>

</div>
        </div>
    </div>   
    
    <!-- END here -->
    
<div class="sticky-btn-mob" id="normal-buy-btn" style="display:none;">

                   <a class="button secondary ink" href="<?php echo base_url('request/'.$reports['id'].'/sample') ?>" >
                       <img class="icon-button" src="<?php echo base_url(); ?>assets/images/download-request-sample-pdf.png">&nbsp;Request a sample</a>
       
            <a class="button ink" href="<?php echo base_url('request/'.$reports['id'].'/inquiry-before-buying') ?>" ><img class="icon-button" src="<?php echo base_url(); ?>assets/images/inquiry-before-buying.png">&nbsp;Inquiry Before Buying</a>

</div>

    
    <?php include('sidebar_action.php'); ?>
  
</div>
</div>
</div>
<br>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(window).scroll(function(){
    if ($(window).scrollTop() >= 97 && $(window).width() >=640) {
       $('.create-sticky').addClass('sticky is-stuck');
       var a= $(".medium-8" ).height()+$("header" ).height()+$( ".breadcrumbs" ).height()-$( ".medium-4" ).height();
       //alert(a);
    }
    else {
       $('.create-sticky').removeClass('sticky is-stuck');
    }
});
</script>
 

<style>
.txt-center{text-align:center;}
@media only screen and (min-width:640px){.sticky.is-stuck{top:0px;width: 32.8%;right: 11px;}.mobile-visible{display:none;}.bot{position:fixed;width: 32.8%;right: 11px;}.ecommerce-footer{padding-bottom: 0px;}.ecommerce-footer-bottom-bar{padding-bottom: 10px;padding-top: 10px;}}
@media only screen and (max-width:639px){.mobile-hide{display:none;}.mobile-visible select{width:60%}.mobile-visible{padding:10px;background:#FFF;float:right;}.tabs-content{padding:0;}.ecommerce-footer-bottom-bar{padding-bottom: 30px;}
.sticky-btn-mob {
        display: inline-block !important;
    padding: 10px 0px 0px 7px;
    position: fixed;
    bottom: 0px;
    left: 0;
    width: 100%;
    z-index: 10;
    box-sizing: border-box;
    box-shadow: 0 -1px 1px #ddd;
    background: #c7c7c7;
}}
</style>

 <script>
		  $(".raised-button").click(function(){
    //$("p:first").addClass("intro");
    //$("a").removeClass("is-active");
    //alert( this.id);
    jQuery('#'+this.id).addClass('is-active');
});
		  </script>
		  <!--<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "<?php echo $reports['meta_title']; ?>",
  "image": [
   "<?php echo $myschemaimage_schema; ?>"
   ],
  "description": "<?php echo $reports['name']; ?>",
  "mpn": "<?php echo $reports['id']; ?>",
  "brand": {
    "@type": "Organization",
    "name": "Graphical Research"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "USD",
    "price": "<?php echo $reports['price_sul']; ?>",
	"availability": "https://schema.org/InStock",
	"seller": {
      "@type": "Organization",
      "name": "Graphical Research"
    }
  }
}
</script>-->
</body>
</html>
