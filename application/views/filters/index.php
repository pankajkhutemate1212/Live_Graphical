<div class="row columns mobileui" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li><a href="<?php echo base_url('industry-reports'); ?>">Search Reports</a></li>



    </ul>

</nav>

</div>               

<div class="row" id="content">

                    <div class="card" style="padding-top: 21px;padding-left: 21px;padding-bottom: 53px;">

                        <div class="medium-3 columns mobileui"  style="padding-bottom:21px;"  >
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
}
  
</style>
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

                        <div class="medium-9 columns mobileuifont">

                            <h2 style="font-size:1.5625rem;"> Search Results</h2>  

                            <hr> 





<div class="blog-post" style="text-align:justify;">

  

    

    

    

    <?php if(!empty($records)){

             foreach($records as $row){ ?>

			        

				        



    <b><a href="<?php echo base_url('/industry-analysis/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></b><br/>
                            

					<p><?php echo strip_tags($row->brief_desc); ?></p>

					<hr>

			        

			    <?php }} else {  ?>
			     <div class="callout" style="background: #ebebeb; font-size: 0.8rem;">
					<h5 style="font-weight:600">Your search query : <?php echo $this->input->get('q') ?></h5>
                  				<p>Cannot find the report of your interest? Please fill the below form to receive a proposal.</p><br/>
                  				<?php $attributes = array('class'=> 'jsform');
                echo form_open("smail/searchquery", $attributes); ?>
              				<div class="ccfield-prepend">
                  
                    				<?php echo form_error('name'); ?>
                        
                    				<i style=" color: #808080;"></i>Full Name *<br>
                 					<input class="" style="width: 295px;    background-color: #FFF;    border: solid 1px #c6c6c6;" type="text" name="name"  
                 					required>
                				</div>
                				<div class="ccfield-prepend">
                  					<?php echo form_error('email'); ?>
                  					<i  style=" color: #808080;"></i>Email ID*<br>
                    				<input class=""style="width: 295px; background-color: #FFF;  border: solid 1px #c6c6c6;" type="text" name="email"  
                    				required>
                				</div>
                 				<div class="ccfield-prepend">
                  					<?php echo form_error('company'); ?>
                  					<i  style=" color: #808080;"></i>Company*<br>
                    				<input class=""style="width: 295px; background-color: #FFF; border: solid 1px #c6c6c6;" type="text" name="company"  
                    				required>
                				</div>                            
                 				<div class="ccfield-prepend">
                    				<?php echo form_error('phone'); ?>
                   				<i  style=" color: #808080;"></i>Phone (With Country Code) *<br>
                    				<input class=""style="width: 295px;   background-color: #FFF; border: solid 1px #c6c6c6;" type="text" name="phone" 
                    				required>
                				</div>
                				<div class="ccfield-prepend">
                  					<i  style=" color: #808080;"></i>Any specific research requirements? <br>
                    				<textarea class="" style="width: 295px;   background-color: #FFF;  border: solid 1px #c6c6c6;" name="message" >
                    				</textarea>
                				</div>
                				<input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
                				<input class=""  type="hidden" name="searchquery" value="<?php echo $this->input->get('q'); ?>" >
                      			<p style="font-size: 12px;">This website is secure and your personal details are safe.<a target="_blank" href="http://www.gminsights.com/privacy-policy"> Privacy Policy</a></p> <br />
                				<div class="ccfield-prepend" style="width:8	4%">
                    				<input class="button" type="submit" value="Submit Query" style="float: left;">
                				</div>

				</div>



            <?php } ?>





           

        	

			</div>

      </div>

    </div>

  </div>










