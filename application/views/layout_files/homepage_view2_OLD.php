<style type="text/css">
  .onoff{
    display: none;
  }
    .alignmento{
        text-align: justify;
    }
    .svgsize{
            height: 17px;
    }
</style>

  <div class="marketing-site-hero3">
  <div class="marketing-site-hero-content2">
    <h1>Tailor-made Reports</h1>
    <p class="subheader">Consulting services encompass customized research, business strategy, and organizational development initiatives. Consulting provides help companies successfully address their growth challenges and accomplish startegy.</p>
    <a href="#" class="round button">Customized Report<br><span class="button-subtitle">Learn More  <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="12" viewBox="0 0 24 12" width="12">
    <path d="M8 5v14l11-7z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg></a>
  </div>
</div>





<div class="row">
      <div class="medium-8 columns">
<h3 class="text-headline marketing-site-features-headline" style="    font-size: 24px !important;font-weight: 600;color: #1b334b;">Latest Published Research Report</h3>
    <?php if(!empty($reports))
		    {
	              foreach($reports as $row){ ?>
  
        <h1 class="text-headline">
        <a href="<?php echo 'industry-report/'.$row->url; ?>"><?php echo strip_tags($row->name);?></a><br>
             <span class="text-caption">
         <?php echo date('F  Y',$row->publish_date);?> | <?php echo str_replace("&","&amp;",$row->no_of_pages);?> Pages
        </span>
        </h1>
     
        <p class="text-body-1">
          <?php echo substr(strip_tags($row->brief_desc),0,540-strlen($row->name)); ?>
        </p>

      
    <?php }} ?></div>
         <div class="medium-4 columns">
    
        <h3 class="text-headline marketing-site-features-headline">Latest Press Released</h3>
          
          
           <?php if(!empty($press11))

		    {

              foreach($press11 as $row){ ?>
          
   
        <h1 class="text-headline">  <a href=""><?php echo str_replace("&","&amp;",$row->name); ?> </a><br><span class="text-caption">
          <?php echo date('F  Y',$row->date);?>
        </span></h1>
              
				         
		<p class="text-body-1"><?php if(strlen(str_replace("&","&amp;",$row->name)) > 50){$data= substr(strip_tags($row->full_desc), 0,200);}else{$data= substr(strip_tags($row->full_desc), 0,240);}
			  echo strip_tags($data); 
			?> </p>
     
             <?php }} ?>
     </div>
    
    <!-- DYNAMIC DATA END -->
    </div>
    <br>
    <hr>
  
    
   <div class="row">
    <!-- Part two -->
    
    <div class="marketing-site-features">
  <h3 class="text-headline marketing-site-features-headline">Market Research Industry Covered</h3>
  
  <div class="row">
    <div class="small-12 medium-3 columns">
      
      <a href="<?php echo base_url(); ?>industry-reports/automotive-and-transportation"><h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/automotive.svg" class="svgsize"> Automotive and Transportation</h5></a>
      
    </div>
    <div class="small-12 medium-3 columns">
     
      <a href="<?php echo base_url(); ?>industry-reports/biomass-bioenergy-and-renewable-chemistry"> <h5 class="industry-covered"> <img  src="<?php echo base_url(); ?>assets/images/svg/biomass.svg" class="svgsize"> Biomass, Bioenergy and Renewable </h5></a>
    
    </div>
    <div class="small-12 medium-3 columns">
      
      <a href="<?php echo base_url(); ?>industry-reports/bulk-and-speciality-chemicals"><h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/chemical.svg" class="svgsize"> Bulk and Specialty Chemicals</h5></a>
      
    </div>
    <div class="small-12 medium-3 columns">
      
       <a href="<?php echo base_url(); ?>industry-reports/electronics-and-media"><h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/electronics.svg" class="svgsize"> Electronics and Media</h5></a>
      
    </div>
       <div class="small-12 medium-3 columns">
      
      <a href="<?php echo base_url(); ?>industry-reports/energy-mining-oil-and-gas"> <h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/energy.svg" class="svgsize"> Energy, Mining, Oil and Gas</h5> </a>
      
    </div>
    <div class="small-12 medium-3 columns">
      
    <a href="<?php echo base_url(); ?>industry-reports/food-nutrition-and-animal-feed">   <h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/food.svg" class="svgsize"> Food, Nutrition and Animal Feed </h5> </a>
    
    </div>
    <div class="small-12 medium-3 columns">
      
      <a href="<?php echo base_url(); ?>industry-reports/hvac-and-construction"> <h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/hvac.svg" class="svgsize"> HVAC and Construction</h5> </a>
      
    </div>
    <div class="small-12 medium-3 columns">
      
 <a href="<?php echo base_url(); ?>industry-reports/polymers-and-advanced-materials"><h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/polymer.svg" class="svgsize"> Polymers and Advanced Materials</h5></a>
      
    </div>
      
      <div class="small-12 medium-3 columns">
      
       <a href="<?php echo base_url(); ?>industry-reports/sustainable-and-smart-technologies"><h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/sustainable.svg" class="svgsize"> Sustainable & Smart Technologies </h5></a>
      
    </div>
      
      <div class="small-12 medium-3 columns">
      
       <a href="<?php echo base_url(); ?>industry-reports/healthcare-and-medical-devices"><h5 class="industry-covered"><img  src="<?php echo base_url(); ?>assets/images/svg/healthcare.svg" class="svgsize"> Healthcare and Medical Devices </h5></a> 
    </div>
  </div>
</div>
      </div>
      
      <hr>
      
       <div class="row">
    <!-- Part two -->
    
    <div class="marketing-site-features">
 
  
  <div class="row">
    <div class="small-12 medium-4 columns">
      

        <h4> Consulting Services</h4>
            <img src="./assets/images/banner_1.jpg">
<p class="alignmento"><br>Consulting services encompass customized research, business strategy, and organizational development initiatives. Consulting provides help companies successfully address their growth challenges and accomplish startegy.</p>
      
    </div>
    <div class="small-12 medium-4 columns">
     
    <h4> Tailor-made Reports</h4>
            <img src="./assets/images/banner_1.jpg">
<p class="alignmento"><br>Consulting services encompass customized research, business strategy, and organizational development initiatives. Consulting provides help companies successfully address their growth challenges and accomplish startegy.</p>
    
    </div>
    <div class="small-12 medium-4 columns">
  
      <h4> Global Research Data</h4>
            <img src="./assets/images/banner_1.jpg">
<p class="alignmento"><br>Consulting services encompass customized research, business strategy, and organizational development initiatives. Consulting provides help companies successfully address their growth challenges and accomplish startegy.</p>
    </div>
    
  </div>
</div>
      </div>
      
       <div class="marketing-site-hero1 pos-rel">
  <div class="marketing-site-hero-content2">
    <h1>Global Market 
Research Reports</h1>
    <p class="subheader">Instant access market research country, economy, industry and company reports, and custom research.</p>
    <a href="<?php echo base_url('industry-reports'); ?>" class="round button">360° Research Reports<br><span class="button-subtitle">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="12" viewBox="0 0 24 12" width="12">
    <path d="M8 5v14l11-7z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg></span></a>
  </div>
</div> 
      <div class="marketing-site-hero2">
  <div class="marketing-site-hero-content">
    <h1>Consulting Services
</h1>
     <p class="subheader">Consulting services encompass customized research, business strategy, and organizational development initiatives. Consulting provides help companies successfully address their growth challenges and accomplish startegy.</p>
    <a href="#" class="button">Growth Consulting Services<br><span class="button-subtitle">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="12" viewBox="0 0 24 12" width="12">
    <path d="M8 5v14l11-7z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg></span></a>
  </div>
</div>
      
      
      <div class="row">
    <h3 class="text-headline marketing-site-features-headline">Latest Press Released</h3>
          
          
           <?php if(!empty($press11))

		    {

              foreach($press11 as $row){ ?>
          
          <div class="medium-3 columns end news-home">
        <h1 class="text-headline"><?php echo str_replace("&","&amp;",$row->name); ?></h1>
              <span class="text-caption">
          <?php echo date('F  Y',$row->date);?>
        </span>
				         
		<p class="text-body-1"><?php if(strlen(str_replace("&","&amp;",$row->name)) > 50){$data= substr(strip_tags($row->full_desc), 0,200);}else{$data= substr(strip_tags($row->full_desc), 0,240);}
			  echo strip_tags($data); 
			?> </p>
      <a  href="<?php echo base_url(); ?>press-release/<?php echo $row->url; ?>"class="flat-button bottom-button" >Read more</a>
              </div><?php }} ?>
			
			
    
      </div>
      
  
<!-- Branding content -->
    
    


    <div class="marketing-site-hero3">
  <div class="marketing-site-hero-content2">
    <h1>Tailor-made Reports</h1>
    <p class="subheader">Consulting services encompass customized research, business strategy, and organizational development initiatives. Consulting provides help companies successfully address their growth challenges and accomplish startegy.</p>
    <a href="#" class="round button">Customized Report<br><span class="button-subtitle">Learn More  <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="12" viewBox="0 0 24 12" width="12">
    <path d="M8 5v14l11-7z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg></a>
  </div>
</div>
        <header class="hero-search-filter">
  <div class="hero-search-filter-content">
   
      <h3 class="home-title home-t-s"> Find the market research reports and industry analysis.</h3>
    <form class="hero-search-filter-form " action="<?php echo base_url() ?>search" method="get">
      <label for="findtext">Title</label>
      <input id="findtext" name="findtext" class="hero-search-filter-form-find" type="text" placeholder="Type  Keyword here"/>
      
   
     
      <button class="button"><i class="fa fa-search"></i></button>
    </form>
    <ul class="hero-search-filter-menu menu align-center">
         <li style="color: #fff; font-weight:300;"><img src="<?php echo base_url(); ?>assets/images/search-research-report.png" > Most Searched by Visitors:</li>
      <li ><a href="<?php echo base_url('industry-reports/automotive-and-transportation'); ?>" class="home-title"><img src="<?php echo base_url(); ?>assets/images/automotive.svg"> Automotive and Transportation</a></li>
      <li ><a href="<?php echo base_url('industry-reports/healthcare-and-medical-devices'); ?>" class="home-title"><i class="fa fa-glass" aria-hidden="true"></i> Healthcare & Medical Devices</a></li>
      <li ><a href="<?php echo base_url('industry-reports/bulk-and-speciality-chemicals'); ?>" class="home-title"><i class="fa fa-wrench" aria-hidden="true"></i> Bulk and Specialty Chemicals</a></li>
      <li><a href="<?php echo base_url('industry-reports/energy-mining-oil-and-gas'); ?>"  class="home-title"><i class="fa fa-cutlery" aria-hidden="true"></i> Energy</a></li>
    </ul>
  </div>
</header>