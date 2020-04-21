	<?php include('amp_header.php'); ?>

	<div class="row columns mobileui" >
<nav aria-label="You are here:" role="navigation">
    <ul class="breadcrumbs">
        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
        <li><a href="<?php echo base_url('press-release'); ?>">Press Release</a></li>
    </ul>
</nav>
</div>      


<div class="row" id="content">
    <div class="">
        <div class="medium-12 columns mobileuifont">
            <h2 class="press_release_title"> Press Release </h2>  
                <div class="card blog-post mobileuifont" >
<?php if(!empty($press))
		    {foreach($press as $row){ ?> 
<p>
    <a href="<?php echo base_url() .'press-release/'.$row->url; ?>"><b>
			<?php echo str_replace("&","&amp;",$row->name); ?></b>				  	
            </a>
<label><?php echo date('F j, Y',$row->date);?>
                    </label>
</p>
                    
<p class="justify">
				  <?php $data =  substr($row->full_desc, 0,500);
				  echo strip_tags($data);
				  ?>...
                    <br>
                    <a class="link" href="<?php echo base_url('press-release/'.$row->url); ?>" >
                Read More</a>
                    </p>
                  
              <hr class="width-hr">
			<?php }} ?>
		  </div>
              <!--   <p><?php echo $links; ?></p> -->
        </div>
  
    </div>
   
</div>
  
<br>


	<?php include('amp_footer.php'); ?>