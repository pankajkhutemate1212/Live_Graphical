

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
<a property="item" typeof="WebPage" href="<?php echo base_url('pressrelease'); ?>">
<span property="name">Press Release</span></a>
<meta property="position" content="2" hidden>
</li>

  

  <li class="active" property="itemListElement" typeof="ListItem">
  <a property="item" typeof="WebPage" href="<?php echo base_url('pressrelease/'.$press['url']); ?>">
  <span property="name"> <?php echo $press['name']; ?></span></a>
<meta property="position" content="3" hidden>
    </li>
  		</ul>
			</ol>
				</nav>

</div>
<style>
	@media screen and (max-width: 770px)
	{
.mobileuifont h2 {
    font-size: 13px !important;
    font-weight: bold;
}
hr {
    margin-top: 0px;
}
h6{
	font-size: 0.7rem;
}
.expand
{
	margin-left:0px !important;
}
}
</style>
    <div class="row" id="content">

 <div class=""  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;">

            <div class="medium-12 columns">

            <div class="blog-post">

             <div class="medium-12 columns mobileuifont">
                       <h2 style="font-size: 1.5625rem;">Press Room</h2>  

                            <hr>  

                                <div class="card blog-post">

        
<div itemscope itemtype="http://schema.org/NewsArticle">
  <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
				     <h1 itemprop="headline" style="text-align: justify; font-size: 18px; font-weight: bold; color: #0F3971;"><?php echo $press['name']; ?></h1> 
				   
				        
				        <div></div>
			<h6 style="color: #808080" itemprop="author" itemscope itemtype="https://schema.org/Person"> Published Date:&nbsp;<?php echo date('F j, Y',$press['date']);?> &nbsp;  Author:<span itemprop="name"> Global Market Insights, Inc.</span></h6>
                        
                        
                                    <p> <span itemprop="description"><?php echo $press['full_desc']; ?></span></p> <hr>

                  			 <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

    <meta itemprop="url" content="https://www.gminsights.com/assets/img/gm-logo.png">
    <meta itemprop="width" content="800">
    <meta itemprop="height" content="400">
  </div>
<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">

      <meta itemprop="url" content="https://www.gminsights.com/assets/img/gm-logo.png">
      <meta itemprop="width" content="300">
      <meta itemprop="height" content="60">
    </div>
    <meta itemprop="name" content="Google">
  </div>	  				  
 <meta itemprop="datePublished" content="<?php echo date('Y-m-d',$press['date']);?>"/>
 <meta itemprop="dateModified" content="<?php echo date('Y-m-d',$press['date']);?>"/>
</div>
				    </div></div>

		    

    </div>

    </div>

     </div></div>
      