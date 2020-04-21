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

        	<?php if(!empty($press)){

             foreach($press as $row){ ?>

			   <div class="item news-item">

				<h2><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></h2>

                   <a class="date" href="#"><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('M j, Y',$row->date);?></a><br/>

					

             <?php   echo ($row->brief_desc,0,60); ?>?>

					<hr>

			   </div>

			   <?php }}?>

			</div>

      </div>

    </div>

  </div>

</div>