<div class="row">
    <!-- Part two -->
    <div class="marketing-site-features">
  <h2 class="marketing-site-features-headline industry-report-title"><?php echo $category['name']; ?></h2>

  
  <ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home </a></li>
   
  <li><?php echo $category['name']; ?></li>

      

</ul>
  
</div>
<div class="people-you-might-know">
    <?php if(!empty($reports)){
	    foreach($reports as $row){ ?>
    <div class="card row add-people-section" >
    <div class="small-12 medium-10 columns about-people">
      <div class="about-people-author">
        <p class="report-title-name">
     <a href="<?php echo base_url('/industry-insights/'.$row->id.'/'.$row->url); ?>">
<?php echo str_replace("&","&amp;",$row->name); ?></a></p>
           <p class="author-location">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          Delivery: PDF <img src="<?php echo base_url('assets/images/market-research-pdf.png'); ?>" >
        </p>
        
        </div>    
    </div>
  <div class="small-12 medium-2 columns add-friend">
      <div class="add-friend-action">
        <button class="button primary small" style="
    width: 97%;
">
    <img class="icon-button" src="<?php echo base_url(); ?>assets/images/research-report-buy-now-list.png">&nbsp;
          <a href="<?php echo base_url('/request/'.$row->id.'/inquiry-before-buying'); ?>" style="color:#fff;">Inquiry Before Buying</a>
        </button>
          <button class="button primary small" style="
    width: 97%;
">
       <img class="icon-button" src="<?php echo base_url(); ?>assets/images/inquiry-before-buying.png">&nbsp;
       <a href="<?php echo base_url('/request/'.$row->id.'/sample') ?>" style="color:#fff;">Request Sample</a>
        </button>
      </div>
    </div>
  </div>
    <?php }}?>    
 
    
</div>
</div><br>
    