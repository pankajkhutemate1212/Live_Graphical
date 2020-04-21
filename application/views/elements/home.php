<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://www.gminsights.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.gminsights.com/filters?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
        <section class="full banner">
		<div class="banner_contant">
<h1 class="lead" style="color: #0F3971; line-height: 23px;     text-shadow: 0 1px 1px rgba(0,0,0,0.25),0 1px 30px rgba(160, 170, 220, 0.75);">A one stop solution for market research, business intelligence, technology & competitive insights and consulting services; we help organizations achieve sustainable growth by facilitating strategic decision making</h1>
</div>
<div class="bannerimg">
<img src="https://i.imgur.com/yUcYJHu.jpg" style="width:100%; height:auto;" alt="banner"> 
</div>
</section>
 <div class="row" id="content">
<div class="medium-8 columns">
<div class="blog-post mobileuifont">
<h2 style="padding-top: 17px; font-size: 29px;">Latest Published Reports </h2>
		    <?php if(!empty($reports))
		    {
	              foreach($reports as $row){ ?>
		   <b> 
		   <p class="mobileuifonthead" style="text-align: justify; font-size: 0.8rem;"> <a href="<?php echo 'industry-analysis/'.$row->url; ?>"><?php echo str_replace("&","&amp;",$row->name); ?>
                  </a></p></b>
                    <Div class="mobileuifont" style="color: #808080;font-size: 12px; " >Published Date:&nbsp;<?php echo date('F  Y',$row->publish_date);?>&nbsp;&nbsp;&nbsp;   <?php echo str_replace("&","&amp;",$row->no_of_pages);?>&nbsp;Pages  
                        </div><br>
				  <p class="mobileuifonthead" style="text-align: justify; font-size:13px"><?php echo strip_tags($row->brief_desc); ?> <a href="<?php echo 'industry-analysis/'.$row->url; ?>">Read More </a> </p><hr><?php }} ?><a href="<?php echo base_url('industry-reports'); ?>" class="button">
    
    
    <i class="fi-list"></i> <span>View all industry reports</span></a></div>
</div><div class="medium-3 columns mobileuifont" data-sticky-container>
<h2 style="padding-top: 17px;font-size: 23px;">Press Room</h2>

     <?php 

        $data['press'] = $this->press_model->get_report();

       $this->load->view('layouts/press_home', $data);

       ?>


<style>
@media screen and (max-width: 770px){
	.mobileuifont h2
	{
		font-size:15px !important;
	}
	}
</style>




</div>

                 </div> <!-- row exxit-->



<div class="body" style="background: #fff; padding-top: 18px;">

<div class="row">

<div class="medium-4 columns" >



<div class="media-object" >



<div class="media-object-section">

    <h3 style="font-size:1.25rem;">Industry Reports</h3>

<p style="text-align: justify; font-size: 13px;">Global Market Insights offers in-depth and exhaustive off the shelf market research reports to enable clients to access accurate and granular data, along with penetrative business insights.  At their core, these reports include a quality market forecast, forged using a robust research methodology and are designed for use across multiple disciplines and industries including chemicals, advanced materials, renewable energy, technology, biochemistry and biotechnology. </p>

<p style="text-align: justify;"><a href="<?php echo base_url('our-services'); ?>">Read More </a> </p>

</div>
</div>



</div>

<div class="medium-4 columns">

<div class="media-object">



<div class="media-object-section">

    <h3 style="font-size:1.25rem;">Custom Research</h3>

<p style="text-align: justify; font-size: 13px;">We offer clients the option to have a dedicated team of analysts, working solely for their research needs. This model facilitates clients to hire a dedicated business intelligence team, without going through the process of recruitment and training. Subscription services also include unlimited access to our report bank for a particular industry along with the option to customize these reports to suit information needs.</p>

    <p style="text-align: justify;"><a href="<?php echo base_url('our-services'); ?>">Read More </a> </p>

</div>

</div>





</div>

<div class="medium-4 columns">



<div class="media-object">



<div class="media-object-section">

    <h3 style="font-size:1.25rem;">Consulting Practice</h3>

<p style="text-align: justify; font-size: 13px;">Along with market research, Global Market Insights also engages with clients along the entire strategy process, including idea generation, evaluation, strategy design, implementation and monitoring. We offer clients significant expertise in solving core strategy problems such as growth platform design, technology scouting studies, IP tracking, customer insight and competitive intelligence exercises.</p>

    <p style="text-align: justify;"><a href="<?php echo base_url('our-services'); ?>">Read More </a> </p>
</div>
</div>
</div>
</div> <!-- end row--></div></div></div></div>
<!-- End content sections -->