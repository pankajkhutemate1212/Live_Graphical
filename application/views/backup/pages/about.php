  

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
<a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>about-us">
<span property="name">Press Release</span></a>
<meta property="position" content="2" hidden>
</li>  		</ul>
			</ol>
				</nav>

</div>     
<div class="row" style="">
    <div class="medium-12 columns mobileuifont">

                          



                                <div class="card blog-post">      
                                    
                                      <h2 style="font-size:1.5625rem;">About our company</h2>  


<p style="text-align: justify;">

          <?php if(!empty($pages))

          {

            

              echo ($pages['description']);

            

          }?> </p>

        </div>
    </div></div>
 
    
  
            

    
