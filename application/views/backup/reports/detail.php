<div class="row columns mobileui" style="padding-top: 10px;">
<nav aria-label="You are here:" role="navigation">
<ol vocab="http://schema.org/" typeof="BreadcrumbList">
<ul class="breadcrumbs">

<li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="<?php echo base_url(''); ?>">
<span property="name">Home </span></a>
<meta property="position" content="1" hidden>
</li>

<li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="<?php echo base_url('/industry-reports/'.$category['url']);?>">
<span property="name"><?php echo $category['name']; ?></span></a>
<meta property="position" content="2">
</li>

<li property="itemListElement" typeof="ListItem">
<a property="item" typeof="WebPage" href="<?php echo base_url('/industry-analysis/'.$reports['url']);?>">
<span property="name"><?php echo  substr($reports['name'],0,100); ?>...</span></a>
<meta property="position" content="3">
</li>   
</ul></ol>
</nav>
</div><?php $this->load->view('body/'.$reports['body']); ?>