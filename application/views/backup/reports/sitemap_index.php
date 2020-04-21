<div class="row columns" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li><a href="<?php echo base_url('Sitemap'); ?>">Sitemap</a></li>

    </ul>

</nav>

</div>                

<div class="row" id="content">

                    <div class="card" style="padding-top: 21px;padding-left: 21px;">

                        <div class="medium-3 columns" data-sticky-container>

                            <div class="sitemenucustom">
                            <h2 style="font-size:1.5625rem; ">Industries We Cover</h2>
    <hr style="margin-bottom:0px;">
                             <style>
                            	.sitemenucustom ul li
                            	{
                            		color: #1585cf !important;
					display: block;
    					border-bottom: 1px solid #cacaca;
    					padding: 10px;
				}
				.sitemenucustom ul li:hover{
					background:#ececec;
					color:#737171 !important;
				}
				#catcust, #catcust a
				{
					background: #0F3971 ;
  					color: #ffffff !important;
				}
                            </style>
<ul style="margin:0px;">
<?php $a=  base_url(uri_string());

 ?>
<?php 

 if(!empty($catcustom)){
             foreach($catcustom as $row){ $b= base_url('/industry-reports/'.$row->url );
              if($a == $b){?>
				<a href="<?php echo base_url('/industry-reports/'.$row->url); ?>"><li id="catcust" style="color: #dad8d8; font-size: .9em;" >
<?php echo substr($row->name,0,32); ?></li></a>
                  
			   
			   <?php } else{?>
<a href="<?php echo base_url('/industry-reports/'.$row->url); ?>"><li  style="color: #dad8d8; font-size: .9em;" ><?php echo substr($row->name,0,32); ?></li></a>
 <?php }}}?>
</ul>

</div>

</div>

                        <div class="medium-9 columns">

                            <h4> Reports & Publication</h4>  

                            <hr>  

                                <div class="blog-post" style="padding-top: 18px;">

    



           

        	<?php if(!empty($reports)){

             foreach($reports as $row){ ?>
<p style="text-align: justify;">		<b><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></b> </p>
		<br/>
 <div class="date"  style="color: #808080;font-size: 12px; float: left;" >Published Date:&nbsp;<?php echo date('M , Y',$row->publish_date);?></div>
 <div class="date"  style="color: #808080;font-size: 12px; float: right;" ><?php echo str_replace("&","&amp;",$row->no_of_pages);?>&nbsp;Pages</div>
 <br/>
<p style="text-align: justify;"><?php echo strip_tags($row->brief_desc); ?></p>
<hr>
<?php }}?>

 <?php if(!empty($reports2)){
             foreach($reports2 as $row){ ?>
       
    <p style="text-align: justify;">	     <b><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></b></a></b> </p>
		<br/> <div class="date"  style="color: #808080;font-size: 12px; float: left;" >Published Date:&nbsp;<?php echo date('M , Y',$row->publish_date);?></div>

 <br/>
                   
          <p><?php echo strip_tags($row->brief_desc); ?></p>
          <hr>
       
         <?php }}?>
</div>

      </div>

    </div>

  </div>

</div>

