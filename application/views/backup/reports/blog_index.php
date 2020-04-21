       <?php $this->load->view('elements/meta_header'); ?>

            <?php $this->load->view('elements/header'); ?>

<div class="row columns" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="#">Home</a></li>

  <li><a href="">Blogs</a></li>

  

    

</ul>

</nav>

</div>                

<div class="row" id="content">

                    <div class="card" style="padding-top: 21px;padding-left: 21px;">

                  

                        <div class="medium-9 columns">

                            <h4> Market Research Blogs</h4>  

                            <hr>  

                                 <div class="blog-post" style="padding-top: 18px;">

  <p><?php if(isset($category)){echo $category['name'];} else { echo "<br/>";} ?></p>

<!-- staff-box -->

  <div class="staff-box">

    <div class="row">

      <div class="col-md-9">

        <div class="company-mission">

        	<?php if(!empty($blog)){

             foreach($blog as $row){ ?>

			   <div class="item news-item">

				<h2><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></h2>

                   <p style="color: #808080"><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('M j, Y',$row->date);?></p><br/>

					<p><?php echo strip_tags($row->body, 100); ?></p>

					<hr>

			   </div>

			   <?php }}?>

			</div>

      </div>

    </div>

  </div>

</div>

