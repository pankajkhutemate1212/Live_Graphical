

<div class="row columns" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li><a href="<?php echo base_url('/industry-practices/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>

  <li class="active"><?php echo  substr($reports['name'],0,100);

  ?>...</li>

    

</ul>

</nav>

</div>



<div class="row" id="content">

 <div class="card"  style="padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;">

<div class="medium-9 columns">

    

<div class="blog-post">

<h3 style="text-align: justify; font-size: 18px; font-weight: bold; color: #0F3971;"><?php echo $reports['name']; ?></h3>

    <p style="color: #808080;" class="date" >Report ID:&nbsp;GMI<?php echo $reports['id']; ?>

         </p>

    <div class="">

    <a href="<?php echo base_url('industry-analysis/'.$reports['url'].'') ?>" class="button "> <span>Summary</span></a>

   

    <a href="<?php echo base_url('methodology/upcoming_detail/'.$reports['url'].'') ?>" class="button secondary"> <span>Methodology</span></a>

    <a href="<?php echo base_url('request_sample/upcoming_detail/'.$reports['url'].'') ?>" class="button secondary"> <span>Table of contents</span></a>

</div>

<div class="callout">

<p> <?php echo $reports['full_desc']; ?> </p>

<a style="color:#fff; float: right;" href="<?php echo base_url('/inquiry/'.$reports['id']); ?>"><button type="button" class="button small">Request for Customization</button></a>

</div>

</div>

</div> 

    <!-- start side bar-->

    <div class="medium-3 columns" style="" data-sticky-container>

<div class="sticky" data-sticky data-anchor="content" style="padding-bottom: 30px;">

<div class="callout">

<p style="font-weight:bold; color:#0F3971; font-size:15px;">Choose License</p> 



    <!-- liecence sell costing-->





             <form name="frmReport" id="frmReport" method="post" action="">

              <input type="hidden" name="purchase" value="<?php echo $reports['id']; ?>">

              <div class="radio">

               <label>

               <input type="radio" name="type" value="S" checked>

               Single User - $ <?php echo number_format($reports['price_sul']); ?></label>

               </div>

               <div class="radio">

               <label>

               <input type="radio" name="type" value="M" style="text:bold; ">

                Multi User - $ <?php echo number_format($reports['price_el']); ?></label>

               </div>

               <div class="radio">

               <label>

               <input type="radio" name="type" id="optionsRadios3" value="E">

                Enterprise User - $ <?php echo number_format($reports['price_cul']); ?></label>

               </div>

              <button type="button"style=""value="Add To Cart" class="button alert expanded"><i class="fa fa-shopping-cart"></i> Pre Book Now</button>



             </form>



    <!-- end selling--> 

    <a style="color:#fff;" href="<?php echo base_url('/inquiry/'.$reports['id']); ?>"><button type="button" class="button expanded">Inquiry Before Buying</button></a>

    <style>



    .button{

        

        width: 19.9em;

    } </style>

    </div>

    <div class="callout">

        <p style="font-weight:bold; color:#0F3971; font-size:15px;">24/7 Research Support</p>

        <ul>

        <li>Phone: 1-302-257-2444</li>

                <li>Toll Free: 1-800-421-1507</li>

                    <li> Email: <a href="mailto:sales@gminsights.com" style="font-size: 13px;">sales@gminsights.com</a>
</li>

        

        </ul>       

        </div>

           </div>

                </div>

                 <!-- end side bar-->

                        </div> <!-- Row end--></div>