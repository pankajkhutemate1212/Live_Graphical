
<div id="mySidenav" class="sidenav mobileviewui" style="display: none;">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br/>
<a id="abc" href="#"><i class="fi-page-multiple mobilenav"></i>&nbsp; Industry Reports</a>
    <ul>
      <li><a href="#"><i class="fi-elevator mobilenav"></i>&nbsp; Automotive & Transportation</a></li>
      
    </ul>

<a  id="abc" href="#"><i class="fi-eye mobilenav"></i>&nbsp; Upcoming Reports</a>
<a  id="abc" href="#"><i class="fi-calendar mobilenav"></i>&nbsp; Press Room</a>
<a  id="abc" href="#"><i class="fi-list mobilenav"></i>&nbsp; Blog</a>

</div>



<span class="mobileviewui" style="display : none; font-size:15px;cursor:pointer;background: #00695c;padding-right: 10px; color: #fff;font-size: 18px;" onclick="openNav()">&#9776; Menu</span>
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

<div class="row">
    
    <div class="container breadcrumbs"> 
     
            <ul>
                <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                <li><a href="<?php echo base_url('/industry-reports/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>
    <li><?php echo  substr($reports['name'],0,100); ?>...</li>
            </ul>
    </div>
    <div class="medium-12 columns end">
        <h1 class="market-research-report-title" style="padding-top: 0;"><?php echo $reports['name']; ?><br>
        </h1>
        
        
        <!-- Demo Site -->
        <div class="medium-8" style="    margin-bottom: -45px !important;">
 
            
            <p class="text-body-1">
            <a href="<?php echo base_url(''.$reports['id'].'/request/table-of-content') ?>" class="button secondary" style="font-size:14px;"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 23 20" width="17">
    <path d="M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>&nbsp;Table of Content</a>
       
            <a  href="<?php echo base_url(''.$reports['id'].'/request/inquiry-before-buying') ?>"class="raised-button ink" style="font-size:14px;float: right;    margin: 0px 13px 0px 0px !important;"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 24 24" width="17">
    <path d="M17.75 7L14 3.25l-10 10V17h3.75l10-10zm2.96-2.96c.39-.39.39-1.02 0-1.41L18.37.29c-.39-.39-1.02-.39-1.41 0L15 2.25 18.75 6l1.96-1.96z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M0 20h24v4H0z" fill-opacity=".36"/>
</svg>&nbsp;Inquiry Before Buying</a>
        </p>
        `</div>
    </div>
    <div class="medium-8 columns end" >
        
     <div class="z-depth-1">


     <div class="mobile-visible">
          <h1 class="market-research-report-title" style="padding-top: 0;"><?php echo $reports['name']; ?></h1>
        <span class="text-caption">
         Published Date: <?php echo date('F Y',$reports['publish_date']);?> |<?php echo $reports['no_of_pages']; ?> Pages | Report ID: GR<?php echo $reports['id']; ?>| Report Delivery Format: PDF
        </span>
        <form class="txt-center">
         <select class="medium-7">
          <option value="husker">Single User $4500</option>
          <option value="starbuck">Multi User $6500</option>
          <option value="hotdog">Enterprice User $8500</option>
       
        </select>
          <button class="medium-4 raised-accent-button ink" type="submit" style="margin-top: 15px;font-size: 13px;"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 24 20" width="17">
    <path d="M0 0h24v24H0zm18.31 6l-2.76 5z" fill="none"/>
    <path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-9.83-3.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1 2-2.76 5H8.53l-.13-.27L6.16 6l-.95-2-.94-2H1v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.13 0-.25-.11-.25-.25z"/>
</svg>&nbsp;Buy Now</button>
         </form>
        <p class="text-body-1 txt-center">
            <a class="raised-button ink" href="<?php echo base_url('get-request-sample/'.$reports['id'].'') ?>" style="font-size:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 23 20" width="17">
    <path d="M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>&nbsp;Request a sample</a>
       
            <a  class="raised-button ink" href="<?php echo base_url('/inquiry-before-buying/'.$reports['id']); ?>" style="font-size:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 24 24" width="17">
    <path d="M17.75 7L14 3.25l-10 10V17h3.75l10-10zm2.96-2.96c.39-.39.39-1.02 0-1.41L18.37.29c-.39-.39-1.02-.39-1.41 0L15 2.25 18.75 6l1.96-1.96z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M0 20h24v4H0z" fill-opacity=".36"/>
</svg>&nbsp;Inquiry Before Buying</a>
        </p>
        
           

        
          </div>
        
       
	
        <div class="cust-tab-details-div">
        <a  href="<?php echo base_url('industry-report/'.$reports['url'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($RD)){echo 'is-active'; }  ?>">Summary</a>
	<a id="a1" href="<?php echo base_url('request-toc/upcoming/'.$reports['id'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($isactive)){echo 'is-active'; }  ?>">Table of Contents</a>
          
            <a id="a3" href="<?php echo base_url('methodology/'.$reports['url'].'') ?>"  class="raised-button ink cust-tab-details <?php if(!empty($MD)){echo 'is-active'; }  ?>">Methodology</a>
           <a id="a4" href="<?php echo base_url('get-customized-report/'.$reports['id'].'') ?>" class="raised-button ink cust-tab-details "><img src="<?php echo base_url(); ?>assets/images/customize-research-report.png">&nbsp;Customized Report</a>

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
    <p class="text-body-1"><?php echo $reports['full_desc']; ?></p>
<?php }  ?>
	      
	      
	      
	      
	      
       
              
              
          </div>
          </div>
          <div class="cust-tab-details-div">
        <a  href="<?php echo base_url('industry-report/'.$reports['url'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($RD)){echo 'is-active'; }  ?>">Summary</a>
  <a id="a1" href="<?php echo base_url('request-toc/upcoming/'.$reports['id'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($isactive)){echo 'is-active'; }  ?>">Table of Contents</a>
           
            <a id="a3" href="<?php echo base_url('methodology/'.$reports['url'].'') ?>"  class="raised-button ink cust-tab-details <?php if(!empty($MD)){echo 'is-active'; }  ?>">Methodology</a>
           <a id="a4" href="<?php echo base_url('get-customized-report/'.$reports['id'].'') ?>" class="raised-button ink cust-tab-details "><img src="<?php echo base_url(); ?>assets/images/customize-research-report.png">&nbsp;Customized Report</a>

</div>
        </div>
    </div>   
    
    <!-- END here -->
    
<div class="sticky-btn-mob" id="normal-buy-btn" style="display:none;">

                   <a class="raised-button ink" href="<?php echo base_url('get-request-sample/'.$reports['id'].'') ?>" style="font-size: 10px;width: 49%;margin-bottom: 0;padding:8px 0px">
                       <img class="icon-button" src="<?php echo base_url(); ?>assets/images/download-request-sample-pdf.png">&nbsp;Request a sample</a>
       
            <a class="raised-button ink" href="<?php echo base_url('/inquiry-before-buying/'.$reports['id']); ?>" style="font-size: 10px;width: 49%;margin-bottom: 0;padding:8px 0px"><img class="icon-button" src="<?php echo base_url(); ?>assets/images/inquiry-before-buying.png">&nbsp;Inquiry Before Buying</a>

</div>
    
    <?php include('up_siderbar_action.php'); ?>
  
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
 <script>
     $('[data-toggle-menu]').on("click", function(){
  $("#overlay-nav-menu").toggleClass("is-open");
});

</script>
<!--<script>
$(window).scroll(function(){
var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
if (scrollBottom <= 300 && $(window).width() >=640) {
  $('.create-sticky').removeClass('sticky is-stuck');
$('.create-sticky').addClass('bot');
}
else{
  $('.create-sticky').addClass('sticky is-stuck');
  $('.create-sticky').removeClass('bot');
}
});
</script>-->

<style>.txt-center{text-align:center;}
@media only screen and (min-width:640px){.sticky.is-stuck{top:0px;width: 32.8%;right: 11px;}.mobile-visible{display:none;}.bot{position:fixed;width: 32.8%;right: 11px;}.ecommerce-footer{padding-bottom: 0px;}.ecommerce-footer-bottom-bar{padding-bottom: 10px;padding-top: 10px;}}
@media only screen and (max-width:639px){.mobile-hide{display:none;}.mobile-visible select{width:60%}.mobile-visible{padding:10px;background:#FFF;}.tabs-content{padding:0;}.ecommerce-footer-bottom-bar{padding-bottom: 30px;}
.sticky-btn-mob {
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
</body>
</html>