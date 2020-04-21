        <?php $this->load->view('elements/meta_header'); ?>



            <?php $this->load->view('elements/header'); ?>

<style>.medium-4 img{margin-bottom:10px;}</style>



<div class="row columns mobileui" style="padding-top: 10px;">



<nav aria-label="You are here:" role="navigation">



<ul class="breadcrumbs">



<li><a href="<?php echo base_url(''); ?>">Home</a></li>



  <li><a href="<?php echo base_url('blogs'); ?>">Blogs</a></li>



  



    



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
@media screen and (min-width: 770px)
{
.cust-medium-4{overflow: hidden;height: 200px;}
.cust-medium-8{overflow: hidden;min-height: 218px;}
}
@media screen and (max-width: 769px)
{
.cust-medium-4{overflow: hidden;height: 190px;}
}
</style>               



<div class="row" id="content">

<div class="card" style="padding-top: 21px;">

                    <div class="medium-12 columns mobileuifont" style="text-align: justify;">



                            <h2 style="font-size:1.5625rem;">Market Research Blogs</h2>



                                <hr>



                                <div class="blog-post">



    







 



		    <?php if(!empty($blogs))



		    {



              foreach($blogs as $row){ ?>





                        	

                        	<?php if(strpos($row->full_desc, '<img') > 0){?>

<div class="medium-4 columns mobileuifont cust-medium-4" style="text-align: justify;float: right;">

<?php 

$a=substr($row->full_desc, strpos($row->full_desc, '<img'));



echo substr($row->full_desc, strpos($row->full_desc, '<img'), stripos($a, '" />'));?>" />

</div>

<div class="medium-8 columns mobileuifont cust-medium-8" style="text-align: justify;float: left;">

<?php } else { ?>

                        

			    <div class="medium-12 columns mobileuifont" style="text-align: justify;"> <?php } ?>



				

				 <b style="color: #0F3971;">   <a style="text-align: justify;" href="<?php echo base_url('blogs/'.$row->url); ?>"><?php echo str_replace("&","&amp;",$row->name); ?></a></b>

				 

                   <p style="color: #808080">Published Date:&nbsp;<?php echo date('M j, Y',$row->date);?></p>    <br>



					<?php echo substr(strip_tags($row->full_desc), 0,350); ?>...<br>

					

				<a href="<?php echo base_url('blogs/'.$row->url); ?>">Read More</a>



				</div> 



			



				  <hr>



				



			<?php }} ?>







               </div>



                        </div>

                        

                        

                        

</div>

		  </div>



           <!-- end content load code-->



        <?php $this->load->view('elements/footer'); ?>



       