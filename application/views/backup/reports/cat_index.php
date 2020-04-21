<div class="row columns mobileui" style="padding-top: 10px;">
<nav aria-label="You are here:" role="navigation">
<ul class="breadcrumbs">
<li><a href="<?php echo base_url(''); ?>">Home</a></li>
  <li><a href="<?php echo base_url('industry-reports'); ?>">Industry Reports</a></li>
<li>
	<a href="<?php echo base_url('industry-reports/'.$category['url']); ?>"> <?php echo $category['name']; ?></a>
	
</li>
    </ul>
</nav>
</div>                
<div class="row" id="content">
                    <div class="card" style="padding-top: 21px;padding-left: 21px;">
                        <div class="medium-3 columns mobileui" >
                            <div class="sitemenucustom">
                            <h2 style="font-size:1.5625rem; ">Industries We Cover</h2>
    <hr style="margin-bottom:0px;">
                             <style>
                            	.sitemenucustom ul li
                            	{
                            		color: #1585cf !important;
					display: block;
    					border-bottom: 1px solid #cacaca;
    					padding: 9px;
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
<?php echo $row->name ?></li></a>
                  
			   
			   <?php } else{?>
<a href="<?php echo base_url('/industry-reports/'.$row->url); ?>"><li  style="color: #dad8d8; font-size: .9em;" ><?php echo $row->name; ?></li></a>
 <?php }}}?>
</ul>

</div>
</div>    
<style>
@media screen and (max-width: 770px){
.mobileuifont h2 {
      font-size: 13px !important;
      font-weight: bold;
}
hr
{
	margin-top:0px;
}
.card
{
	padding-left:0px !important;
}
.medium-9
{
	width:100%;
}
}
  </style>
                        <div class="medium-9 columns mobileuifont">
                            <h2 style="font-size:1.5625rem;"> <?php echo isset($catname)? "$catname": NULL; ?></h2>  
                            <hr class="headinghr>  
                                <div class="blog-post">
   
        	<?php if(!empty($reports)){
             foreach($reports as $row){ ?>
			 
				<b><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><p style="text-align: justify;">
<?php echo str_replace("&","&amp;",$row->name); ?></p></a></b>
                  <div class="date"  style="color: #808080;font-size: 12px; float: left;" >Published Date:&nbsp;<?php echo date('F Y',$row->publish_date);?></div>
                      <div class="date"  style="color: #808080;font-size: 12px; float: left;" >&nbsp;&nbsp;&nbsp;<?php echo str_replace("&","&amp;",$row->no_of_pages);?>&nbsp;Pages</div>
                      <br/><br/>
					<p style="text-align: justify;"><?php echo strip_tags($row->brief_desc); ?></p>
					<hr>
			   
			   <?php }}?>
			   
			    

          <?php if(!empty($upreports)){
             foreach($upreports as $row){ ?>
       
         <b><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></b>
                   
          <p><?php echo strip_tags($row->brief_desc); ?></p>
          <hr>
       
         <?php }}?>
			   
			   			</div>
      </div>
    </div>
  </div>
</div>