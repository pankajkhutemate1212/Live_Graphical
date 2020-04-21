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
<div class="medium-8 columns end" >
    <div class="z-depth-1">
        <div class="mobile-visible">
            <h1 class="market-research-report-title" style="padding-top: 0;"><?php echo $reports['name']; ?></h1>
            <span class="text-caption">
                Published Date: <?php echo date('F Y',$reports['publish_date']);?> | Publisher: Graphical Research | Report ID: GMR<?php echo $reports['id']; ?>| Report Delivery Format: PDF
            </span>
            <form class="txt-center">
                <select class="medium-7">
                <option value="husker">Single User $4500</option>
                <option value="starbuck">Multi User $6500</option>
                <option value="hotdog">Enterprice User $8500</option>
                </select>
                <button class="medium-4 raised-accent-button ink" type="submit" style="margin-top: 15px;font-size: 13px;"><img class="icon-button" src="images/buy-report.png">&nbsp;Buy Now</button>
            </form>
            <p class="text-body-1 txt-center">
            <a class="raised-button ink" href="<?php echo base_url('get-request-sample/'.$reports['id'].'') ?>" style="font-size:10px;">
                <img class="icon-button" src="<?php echo base_url(); ?>assets/images/download-request-sample-pdf.png">&nbsp;Request a sample</a>
       
            <a  class="raised-button ink" href="<?php echo base_url('/inquiry-before-buying/'.$reports['id']); ?>" style="font-size:10px;">
                <img class="icon-button" src="<?php echo base_url(); ?>assets/images/inquiry-before-buying.png">&nbsp;Inquiry Before Buying</a>
        </p>
        
           

        
          </div>
        
       
	
        <div class="cust-tab-details-div">
        <a  href="<?php echo base_url('industry-report/'.$reports['url'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($RD)){echo 'is-active'; }  ?>">Summary</a>
	<a id="a1" href="<?php echo base_url('table-of-content/'.$reports['url'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($isactive)){echo 'is-active'; }  ?>">Table of Contents</a>
            <a id="a2" href="<?php echo base_url('industry-coverage/'.$reports['url'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($ICD)){echo 'is-active'; }  ?>">Industry Coverage</a>
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
  <a id="a1" href="<?php echo base_url('table-of-content/'.$reports['url'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($isactive)){echo 'is-active'; }  ?>">Table of Contents</a>
            <a id="a2" href="<?php echo base_url('industry-coverage/'.$reports['url'].'') ?>" class="raised-button ink cust-tab-details <?php if(!empty($ICD)){echo 'is-active'; }  ?>">Industry Coverage</a>
            <a id="a3" href="<?php echo base_url('methodology/'.$reports['url'].'') ?>"  class="raised-button ink cust-tab-details <?php if(!empty($MD)){echo 'is-active'; }  ?>">Methodology</a>
           <a id="a4" href="<?php echo base_url('get-customized-report/'.$reports['id'].'') ?>" class="raised-button ink cust-tab-details "><img src="<?php echo base_url(); ?>assets/images/customize-research-report.png">&nbsp;Customized Report</a>

         </div>
        </div>
    </div>