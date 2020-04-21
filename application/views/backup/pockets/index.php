<div id="page-banner">
  <h1>Upcoming Reports</h1>
  <p>Customization is now possible in the ongoing reports at no additional cost. Please contact our sales team prior to the publication to include your inputs.</p>
</div>
<!-- End slider -->
<!-- Content sections 
================================================== -->
<div class="content-sections">
<!-- staff-box -->
  <div class="staff-box">
    <div class="row">
      <div class="col-md-9">
        <div class="company-mission">
        	<?php if(!empty($upcoming)){
             foreach($upcoming as $row){ ?>
			   <div class="item news-item">
				<h2><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></h2>
                   <a class="date" href="#"><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('M j, Y',$row->publish_date);?></a><br/>
					<p><?php echo strip_tags($row->brief_desc); ?></p>
					<hr>
			   </div>
			   <?php }}?>
			</div>
      </div>
    </div>
  </div>
</div>