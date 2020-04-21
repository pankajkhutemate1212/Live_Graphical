        <?php $this->load->view('elements/meta_header'); ?>

            <?php $this->load->view('elements/header'); ?>

<div class="row columns mobileui" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li><a href="<?php echo base_url('pressrelease'); ?>">Press Release</a></li>

  

    

</ul>

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
}
</style>          

<div class="row" id="content">

                    <div class="card" style="padding-top: 21px;">

                      


                        <div class="medium-12 columns mobileuifont">

                            <h2 style="font-size:1.5625rem;"> Press Release</h2>  

                            <hr>  

                                <div class="blog-post mobileuifont" >

    



          

		    <?php if(!empty($press))

		    {

              foreach($press as $row){ ?>

			   
<p style="text-align: justify;">
				  <a href="<?php echo 'https://www.gminsights.com/pressrelease/'.$row->url; ?>">
				  <b>
				  <?php echo str_replace("&","&amp;",$row->name); ?>
				  	</b>				  	
				  </a></p><p style="color: #808080;font-size: 13px;"><?php echo date('F j, Y',$row->date);?></p> 

                   

                  

				  <p style="text-align: justify;color: #000000;">
				  <?php $data =  substr($row->full_desc, 0,500);
				  echo strip_tags($data);
				  ?>...</p>
                      <a href="<?php echo 'https://www.gminsights.com/pressrelease/'.$row->url; ?>"  style="color: #000000;" >
                <u>
                      Read More</u></a>
                   
                   

                  

				  <hr>

			<?php }} ?>

		  </div>

         

      

       </div></div>

    

    </div></div>

  

  

 

 



 



  <?php $this->load->view('elements/footer'); ?> </div> </div>