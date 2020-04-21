<div id="page-banner">
  <h1>Industry Publications</h1>
  <p><?php if(isset($category)){echo $category['name'];} else { echo "<br/>";} ?></p>
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
        	<?php if(!empty($reports)){
             foreach($reports as $row){ ?>
			   <div class="item news-item">
				<h2><a href="<?php echo '/industry-analysis/'.$row->url; ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></h2>
                   <a class="date" href="#"><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('M j, Y',$row->publish_date);?></a><br/>
					<p><?php echo strip_tags($row->brief_desc); ?>...</p>
					<hr>
			   </div>
			   <?php }}?>
			</div>
      </div>
    </div>
  </div>
</div>