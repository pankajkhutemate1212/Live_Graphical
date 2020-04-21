<script>
    digitalData.page.pageInfo = {
 pageID: "316",
 pageName: "<?php echo $press['name']; ?>",
 destinationURL: "<?php echo base_url('press-release'); ?>",
 referringURL: "<?php echo base_url('press-release/'.$press['url']);?>",
sysEnv: "mobile, desktop",
 variant: "2",
 version: "1",
 breadCrumbs: ["home","press-release","<?php echo $press['name']; ?>"],
 author: "Graphical Research",
 issueDate: "<?php echo date('F j, Y',$press['date']);?>",
 effectiveDate: "<?php echo date('F j, Y',$press['date']);?>",
 language: "en-US",
 geoRegion: "US",
 industryCodes: "Graphical Research",
 publisher: "Graphical Research"
 };

    </script>


<style>
    
    h1{
        font-size: 2rem !important;
    font-weight: 600 !important;
}
    
    h2, h3, h4, h5 {
    font-weight: 500 !important;
    font-size: 1rem !important;
}
.justify{
    
    text-align: justify;
    
}

.market-research-release blog-post a {
    color: #03A9F4 !important;
    text-align: justify;
    
}
.market-research-release-date{
	font-size: 0.7rem !important;
        color: #808080;
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
.market-research-release-date{
	font-size: 0.7rem !important;
}
.expand
{
	margin-left:0px !important;
}
}
</style>
    <div class="row" id="content">
          <div class="">
                <nav aria-label="You are here:" role="navigation">
			<ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <ul class="breadcrumbs">
                                <li property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>"><span property="name">Home </span></a>
                                    <meta property="position" content="1" hidden>
				</li>
                            <li property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" href="<?php echo base_url('press-release'); ?>">
                            <span property="name">Press Release</span></a>
                            <meta property="position" content="2" hidden>
                            </li>
                        <li class="active" property="itemListElement" typeof="ListItem">
                        <span property="name"> <?php echo $press['name']; ?></span>
                        <meta property="position" content="3" hidden>
                        </li>
                        </ul>
                        </ol>
                </nav>
            </div>
        <div class="">
    <div class="medium-12 columns">
<div class="blog-post">
    <div class="card blog-post justify">
        <div itemscope itemtype="http://schema.org/NewsArticle">
            <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                <h1 itemprop="headline" ><?php echo $press['name']; ?></h1> 
                
               
		<div class="medium-8 columns market-research-release-date" itemprop="author" itemscope itemtype="https://schema.org/Person">Published Date:&nbsp;<?php echo date('F j, Y',$press['date']);?> &nbsp;  Publishedd by:<span itemprop="name"> @Graphical Research</div>
                 
             <?php    if (!empty($press['roportid'])) {
       
           echo      '<a  href="'.base_url().'request/'.$press['roportid'].'/sample" class="medium-4 columns button secondary" style="font-size:14px;    background-color: #259b24 !important;
    color: white !important;box-shadow: 1px 1px 14px 3px #00000029;;
    "><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 23 20" width="17">
    <path d="M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>&nbsp;Request a sample </a>';
} ?> <br />
              
                
                <p class="market-research-release "> <span itemprop="description"><?php echo $press['full_desc']; ?></span></p>
                    <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                    <meta itemprop="url" content="<?php echo base_url('assets/images/brand-name.jpg'); ?>">
                    <meta itemprop="width" content="800">
                    <meta itemprop="height" content="400">
                    </div>
<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <meta itemprop="url" content="<?php echo base_url('assets/images/brand-name.jpg'); ?>">
      <meta itemprop="width" content="300">
      <meta itemprop="height" content="60">
    </div>
    <meta itemprop="name" content="Graphical Research">
  </div>	  				  
 <meta itemprop="datePublished" content="<?php echo date('Y-m-d',$press['date']);?>"/>
 <meta itemprop="dateModified" content="<?php echo date('Y-m-d',$press['date']);?>"/>
</div>
</div>   
    </div>
    </div>
     </div>
</div>
<br />
      