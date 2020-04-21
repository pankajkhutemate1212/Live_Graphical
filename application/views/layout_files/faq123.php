 <div class="card" style="padding-top: 21px;">
     
     <div class="row columns" style="padding-top: 10px;">
<nav aria-label="You are here:" role="navigation">
<ul class="breadcrumbs">
<li><a href="<?php echo base_url('');?>">Home</a></li>
 
  <li><?php echo $pages['name']; ?></li>
</ul>
</nav>
</div>
     
 <div class="medium-12 columns mobileuifont">

                            <h5><?php echo $pages['name']; ?></h5>
     <div class="blog-post">      


<p style="text-align: justify;">

          <?php if(!empty($pages))

          {

            

              echo ($pages['description']);

            

          }?> </p>

        </div>

      </div>
</div>
  