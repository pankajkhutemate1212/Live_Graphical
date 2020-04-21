<style>
    select{
        margin: 0;
        border: 1px solid #e0e0e0 !important;
    border-radius: 0;
    background-color: #fff;
    }
    .text-body-1{
        text-shadow: none;
    }
</style>
      
      
      <header class="hero-search-filter">
  <div class="hero-search-filter-content">
   
      <h3 style="text-shadow: 0 1px 1px rgba(0,0,0,.6);color:#1b334b;"> Find the market research reports and industry analysis.</h3>
    <form class="hero-search-filter-form" action="">
      <label for="findtext">Title</label>
      <input id="findtext" class="hero-search-filter-form-find" type="text" placeholder="Report Keyword"/>
      &nbsp;
      <label for="findlocate">Industry</label>
        <select id="findlocate" class="hero-search-filter-form-near">
          <option value="husker">All Industry</option>
          <option value="starbuck">Automotive</option>
          <option value="hotdog">Chemical</option>
       
        </select>
        
     
      <button class="button"><i class="fa fa-search"></i></button>
    </form>
    <ul class="hero-search-filter-menu menu align-center">
         <li><img src="<?php echo base_url(); ?>assets/images/search-research-report.png"> Most Searched by Visitors:</li>
      <li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i> Automotive and Transportation</a></li>
      <li><a href="#"><i class="fa fa-glass" aria-hidden="true"></i> Healthcare & Medical Devices</a></li>
      <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i> Bulk and Specialty Chemicals</a></li>
      <li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i> Energy</a></li>
    </ul>
  </div>
</header>
<div class="row">
<h3 class="text-headline marketing-site-features-headline">Latest Published Research Report</h3>
    <?php if(!empty($reports))
		    {
	              foreach($reports as $row){ ?>
    <div class="medium-3 columns card end">
        <h1 class="text-headline">
        <?php $data= substr($row->name, 0,300); 
			  echo strip_tags($data);
			?>
        </h1>
      <span class="text-caption">
         <?php echo date('F  Y',$row->publish_date);?> | <?php echo str_replace("&","&amp;",$row->no_of_pages);?> Pages
        </span>
        <p class="text-body-1">
          <?php echo strip_tags($row->brief_desc); ?>
        </p>
        <p>
          <a href="<?php echo 'industry-report/'.$row->url; ?>">Read Full Report</a> 
        </p>
      </div>
    <?php }} ?>
    <!-- DYNAMIC DATA END -->
    </div>
    <div class="marketing-site-hero1">
  <div class="marketing-site-hero-content2">
    <h1>Global Market 
Research Reports</h1>
    <p class="subheader">Instant access market research country, economy, industry and company reports, and custom research.</p>
    <a href="#" class="round button">learn more</a>
  </div>
</div>
    
   <div class="row">
    <!-- Part two -->
    
    <div class="marketing-site-features">
  <h3 class="text-headline marketing-site-features-headline">Market Research Industry Covered</h3>

  <div class="row">
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Automotive and Transportation</h5>
      
    </div>
    <div class="small-12 medium-3 columns">
     
      <h5 class="industry-covered"> <i class="fa fa-angellist" aria-hidden="true"></i> Biomass, Bioenergy and Renewable </h5>
    
    </div>
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-bullseye" aria-hidden="true"></i> Bulk and Specialty Chemicals</h5>
      
    </div>
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-battery-full" aria-hidden="true"></i> Electronics and Media</h5>
      
    </div>
       <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Energy, Mining, Oil and Gas</h5>
      
    </div>
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-angellist" aria-hidden="true"></i> Food, Nutrition and Animal Feed </h5>
    
    </div>
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-bullseye" aria-hidden="true"></i>HVAC and Construction</h5>
      
    </div>
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-battery-full" aria-hidden="true"></i> Polymers and Advanced Materials</h5>
      
    </div>
       <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Automotive and Transportation</h5>
      
    </div>
    <div class="small-12 medium-3 columns">
     
      <h5 class="industry-covered"> <i class="fa fa-angellist" aria-hidden="true"></i> Automotive and Transportation</h5>
    
    </div>
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-bullseye" aria-hidden="true"></i> Automotive and Transportation</h5>
      
    </div>
    <div class="small-12 medium-3 columns">
      
      <h5 class="industry-covered"><i class="fa fa-battery-full" aria-hidden="true"></i> Automotive and Transportation</h5>
      
    </div>
  </div>
</div>
      </div>
      
      <div class="marketing-site-hero2">
  <div class="marketing-site-hero-content">
    <h1>Consulting Services
</h1>
    <p class="subheader">Your unique questions and challenges across all B2B and B2C industries and geographies through custom, tailor-made research projects, designed to your specific goals.</p>
    <a href="#" class="button">learn more</a>
  </div>
</div>
      
      
      <div class="row">
    <h3 class="text-headline marketing-site-features-headline">Latest Press Released</h3>
          
          
           <?php if(!empty($press11))

		    {

              foreach($press11 as $row){ ?>
          
          <div class="medium-3 columns card end">
        <h1 class="text-headline"><?php echo str_replace("&","&amp;",$row->name); ?></h1>
              <span class="text-caption">
          <?php echo date('F  Y',$row->date);?>
        </span>
				         
		<p class="text-body-1"><?php $data= substr($row->full_desc, 0,240); 
			  echo strip_tags($data); 
			?> </p>
      <a  href="<?php echo base_url(); ?>press-release<?php echo $row->url; ?>"class="flat-button bottom-button" >Read more</a>
              </div><?php }} ?>
			
			
    
      </div>
      
  
<!-- Branding content -->
    
    


    <div class="marketing-site-hero3">
  <div class="marketing-site-hero-content2">
    <h1>Consulting Services</h1>
    <p class="subheader">Your unique questions and challenges across all B2B and B2C industries and geographies through custom, tailor-made research projects, designed to your specific goals.</p>
    <a href="#" class="round button">learn more</a>
  </div>
</div>