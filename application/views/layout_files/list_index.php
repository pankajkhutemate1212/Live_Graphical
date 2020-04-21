<div class="row columns mobileui" >
<nav aria-label="You are here:" role="navigation">
    <ul class="breadcrumbs">
        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
        <li><a href="<?php echo base_url('press-release'); ?>">Press Release</a></li>
    </ul>
</nav>
</div>      
<style>
    .justify{
        text-align: justify;
    }
	@media screen and (max-width: 770px)
	{
.mobileuifont h2 {
    font-size: 13px !important;
    font-weight: bold;
}
hr {
    margin-top: 0px;
}
}
</style>          
<div class="row" id="content">
    <div class="">
        <div class="medium-12 columns mobileuifont">
            <h2 style="font-size:1.5625rem;" class="industry-report-title"> Press Release </h2>  
                <div class="card blog-post mobileuifont" >
<?php if(!empty($press))
		    {foreach($press as $row){ ?>  
<p style="text-align: justify;">
    <a href="<?php echo base_url() .'press-release/'.$row->url; ?>"><b>
			<?php echo str_replace("&","&amp;",$row->name); ?></b>				  	
            </a>
<label style="color: #808080;font-size: 13px;"><?php echo date('F j, Y',$row->date);?>
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
                  
              <hr style="max-width: inherit">
			<?php }} ?>
		  </div>
        </div>
    </div>
</div>
<br>