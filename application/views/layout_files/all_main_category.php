  

		<div class="row columns mobileui" style="padding-top: 10px;">
			<nav aria-label="You are here:" role="navigation">
			<ol vocab="http://schema.org/" typeof="BreadcrumbList">
				<ul class="breadcrumbs">
					<li property="itemListElement" typeof="ListItem">
					<a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>">
					<span property="name">Home </span></a>
<meta property="position" content="1" hidden>
					</li>

<li property="itemListElement" typeof="ListItem">

<span property="name">All Category</span></a>
<meta property="position" content="2" hidden>
</li>  		</ul>
			</ol>
				</nav>

</div>     
<div class="row" style="">
    <div class="medium-12 columns mobileuifont">

                          



                                <div class="card blog-post">      
                                    
                                      <h2 style="font-size:1.5625rem;">All Category</h2>  


<p style="text-align: justify;">
    
     <?php if(!empty($category)) {
	 
	 foreach($category as $row){ //echo $row->name; ?>
    
  
    
  <a href="<?php echo base_url('industry-reports/'.$row->url.'') ?>" style=""> <?php echo str_replace("and","&",$row->name); ?> </a></br>
	      
	<?php   }  } ?>

        </p>

        </div>
    </div></div>
 
    
  
            

    
