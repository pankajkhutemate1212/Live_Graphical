<?php include('amp_header.php'); ?>
  

		<div class="row columns mobileui">
			<nav aria-label="You are here:" role="navigation">
			<ol vocab="http://schema.org/" typeof="BreadcrumbList">
				<ul class="breadcrumbs">
					<li property="itemListElement" typeof="ListItem">
					<a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>">
					<span property="name">Home </span></a>
<meta property="position" content="1" hidden>
					</li>

<li property="itemListElement" typeof="ListItem">
<a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>">
<span property="name"><?php echo $pages['name'] ; ?></span></a>
<meta property="position" content="2" hidden>
</li>  		</ul>
			</ol>
				</nav>

</div>     
<div class="row-bottom row">
    <div class="medium-12 columns mobileuifont">

                          



                                <div class="card blog-post">      
                                    
                                      <h2 class="press_release_title"> <?php echo $pages['name'] ; ?></h2>  


<p>

          <?php if(!empty($pages))

          {

              echo ($pages['description']);

            

          }?> </p>

        </div>
    </div></div>
 
    
  
            

    

	

<?php include('amp_footer.php'); ?>