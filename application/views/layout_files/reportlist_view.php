<div class="row">
    <!-- Part two -->
    <div class="container breadcrumbs"> 
         <ul>
           <li>Home</li>
                <li>Industry Research Reports</li>
         </ul>
    </div>

        <h1 class="industry-report-title">Latest Published</h1>

 <div class="people-you-might-know">
<?php if(!empty($reports)){
             foreach($reports as $row){ ?>
<div class="card row add-people-section">
    <div class="small-12 medium-12 columns about-people">
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
</div>


   <?php }}?> 
    

    </div>
</div>

<br />