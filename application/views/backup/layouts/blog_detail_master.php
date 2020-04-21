<?php $this->load->view('elements/meta_header'); ?>
<link rel="amphtml" href="<?php echo base_url();?>blogs/<?php echo $press['url'];?>/amp">

<?php $this->load->view('elements/header'); ?>

<div class="row columns mobileui" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ol vocab="https://schema.org/" typeof="BreadcrumbList">

<ul class="breadcrumbs">

<li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>">

<span property="name">Home </span></a>

<meta property="position" content="1" hidden>

</li>

<li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="<?php echo base_url('blogs'); ?>"><span property="name">Blogs</span></a>

<meta property="position" content="2" hidden></li>

<li class="active" property="itemListElement" typeof="ListItem">

<a property="item" typeof="WebPage" href="<?php echo base_url('blogs/'.$press['url']); ?>">

<span property="name"><?php echo $press['name']; ?>

	</span></a>

<meta property="position" content="3" hidden></li>

</ul>

</ol>

</nav>



</div>

<style>
span.social-share{float:right;}.box-cust-blog{border:1px solid #000; padding:10px; width:200px; display:inline-block; margin-right:20px;vertical-align:top;margin-bottom:10px}
	@media screen and (max-width: 770px)

	{

.mobileuifont h2 {

    font-size: 13px !important;

    font-weight: bold;

}

hr {

    margin-top: 0px;

}

h6 {

    font-size: 0.7rem;

}

}
@media screen and (max-width: 600px){
	span.social-share{
	float:none;
display: block;
    text-align: right;
    margin-top: 15px;
    }}
</style>   

<div class="row" id="content">



 <div class="card"  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;">



            <div class="blog-post mobileuifont">



             <div class="medium-12 columns">



                       <h2 style="font-size: 1.5625rem;">Market Research Blogs</h2>  



                            <hr>  

 <h1 style="text-align: justify; font-size: 18px; font-weight: bold; color: #0F3971;"><?php echo $press['name']; ?></h1>





				<h6 style="color: #808080" itemprop="author" itemscope itemtype="https://schema.org/Person"> Published Date:&nbsp;<?php echo date('F j, Y',$press['date']);?> &nbsp;  Author:<span itemprop="name"> <?php echo $press['auther']; ?></span>

		

				<span class="social-share"><a style="margin-right: 7px;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('blogs/'.$press['url']); ?>" ><img src="<?php echo base_url(); ?>assets/images/homefollow-facebook.gif"></a>

				<a style="margin-right: 7px;" href="https://twitter.com/home?status=<?php echo base_url('blogs/'.$press['url']); ?>"><img src="<?php echo base_url(); ?>assets/images/homefollow-twitter.gif"></a>

				<a style="margin-right: 7px;" href="https://plus.google.com/share?url=<?php echo base_url('blogs/'.$press['url']); ?>"><img src="<?php echo base_url(); ?>assets/images/follow_googleplus.png"></a>

				<a style="margin-right: 7px;" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('blogs/'.$press['url']); ?>&title=<?php echo $press['name']; ?>&summary=<?php echo isset($description)? "$description": NULL; ?>&source=GLoba Market Insights Inc.">

				<img src="<?php echo base_url(); ?>assets/images/homefollow-linkedin.gif">

				</a></span>

		</h6>

				<br>

                                    <p><?php echo $press['full_desc']; ?></p>

<div style="float: right; margin-bottom: 1em;">

              			<a style="margin-right: 7px;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('blogs/'.$press['url']); ?>" ><img src="<?php echo base_url(); ?>assets/images/homefollow-facebook.gif"></a>

				<a style="margin-right: 7px;" href="https://twitter.com/home?status=<?php echo base_url('blogs/'.$press['url']); ?>"><img src="<?php echo base_url(); ?>assets/images/homefollow-twitter.gif"></a>

				<a style="margin-right: 7px;" href="https://plus.google.com/share?url=<?php echo base_url('blogs/'.$press['url']); ?>"><img src="<?php echo base_url(); ?>assets/images/follow_googleplus.png"></a>

				<a style="margin-right: 7px;" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('blogs/'.$press['url']); ?>&title=<?php echo $press['name']; ?>&summary=<?php echo isset($description)? "$description": NULL; ?>&source=GLoba Market Insights Inc.">

				<img src="<?php echo base_url(); ?>assets/images/homefollow-linkedin.gif">

				</a>

				

				</div>  



				    </div>



		    </div>



      



</div></div>



    



        <?php $this->load->view('elements/footer'); ?>



      