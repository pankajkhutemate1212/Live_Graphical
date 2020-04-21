<?php $this->load->view('layout_files/amp/amp_header') ;?>



<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://www.graphicalresearch.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.graphicalresearch.com/filters?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<div class="row">
<div class="">
			<nav aria-label="You are here:" role="navigation">
			<ol vocab="http://schema.org/" typeof="BreadcrumbList">
				<ul class="breadcrumbs">
					<li property="itemListElement" typeof="ListItem">
					<a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>">
					<span property="name">Home </span></a>
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
    
    <div class="medium-12 columns end card" >

    <div class="row medium-12">
        <h1 class="market-research-report-title"><?php echo $press['name']; ?><br>    
      </h1>

  <h6 class="market-research-release-date press-details-suheading" itemprop="author" itemscope itemtype="https://schema.org/Person">  Published Date:&nbsp;<?php echo date('F j, Y',$press['date']);?> &nbsp;  Published by:<span itemprop="name"> @Graphical Research</h6>
 </div>    
        <span itemprop="description" class="align">
                                        
<?php $full_desc_press=$press['full_desc'];

$a1=substr($full_desc_press, strpos($full_desc_press, '<img'));

$img_html1 = substr($full_desc_press, strpos($full_desc_press, '<img'), stripos($a1, '" />')).'" />';
$bb1=strpos($img_html1 , 'src="');
$cc1=substr($img_html1,$bb1+5);
$filename_old1=substr($cc1,0,strpos($cc1 , '"'));

$filename1=str_replace('https://www.gminsights.com/','./',trim($filename_old1));
if(!empty($filename1)){
$data = getimagesize(trim($filename1));

$width = $data[0];
$height = $data[1];

$abc= str_replace('/>','width="'.$width.'" height="'.$height.'" layout="responsive"></amp-img>',str_replace('<img', '<amp-img',$img_html1));

$full_desc_press=str_replace("".$img_html1."","".$abc."",str_replace('style="margin-left: 2em;padding-left: 3.5em; padding-right: 3.5em;"','id="buynow-btn-cust-amp"',str_replace('style="margin-left: 2em;"','id="inquiry-btn-cust-amp"',str_replace('style="margin-left: 2em;padding-left: 3.5em;    padding-right: 3.5em;"','id="buynow-btn-cust-amp"',str_replace('style="padding-left: 2em;    padding-right: 2em;"','id="request-btn-cust-amp"',str_replace('style="list-style-type:circle"','class="list-square-style-circle"',str_replace('style="text-align: center;"','class="div-center"',str_replace('style="text-align:center"','class="div-center"',str_replace('style="text-align: justify;"','class="div-justify"',str_replace('style="text-align:justify"','class="div-justify"',$full_desc_press))))))))));
} 
else { 
$full_desc_press=str_replace('style="margin-left: 2em;padding-left: 3.5em; padding-right: 3.5em;"','id="buynow-btn-cust-amp"',str_replace('style="margin-left: 2em;"','id="inquiry-btn-cust-amp"',str_replace('style="margin-left: 2em;padding-left: 3.5em;    padding-right: 3.5em;"','id="buynow-btn-cust-amp"',str_replace('style="padding-left: 2em;    padding-right: 2em;"','id="request-btn-cust-amp"',str_replace('style="list-style-type:circle"','class="list-square-style-circle"',str_replace('style="text-align: center;"','class="div-center"',str_replace('style="text-align:center"','class="div-center"',str_replace('style="text-align: justify;"','class="div-justify"',str_replace('style="text-align:justify"','class="div-justify"',$full_desc_press)))))))));
}
echo $full_desc_press;

?>
</span>
    </div>
</div>
    </div>
</div>   
    </div>
<?php include('amp_footer.php'); ?>