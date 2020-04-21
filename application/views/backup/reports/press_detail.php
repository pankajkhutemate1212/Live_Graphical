<!-- Content sections ================================================== -->

<div class="content-sections">

  <!-- Bedcrum ================================================== -->

  <div class="bedcrum-section" style="margin-top:-52px; margin-bottom:10px;">

  <ul class="breadcrumb">

  <li><a href="#">Home</a></li>

  <li><a href="<?php echo base_url('/industry-practices/'.$press['url']);?>"><?php echo $press['name']; ?></a></li>

  <li class="active"><?php echo $press['name']; ?></li>

</ul>

</div>

<!-- staff-box -->

  <div class="staff-box">

    <div class="row">

      <div class="col-md-9">

        <div class="company-mission">

          <h3 style="color: #085cb7;"><b>

<?php echo $press['name']; ?></b></h3>

            <hr>

          <div class="row">

            <div class="col-md-4" style="line-height:31px;">

            <a>Category:<?php echo $category['name']; ?></a><br/>

            <a class="date" href="#"><i class="fa fa-clock-o"></i>&nbsp;<?php echo date('F j, Y',$press['publish_date']);?></a><br/>

            <a>ISBN: <?php echo $press['isbn_code']; ?></a><br/>

                <a>No of pages: <?php echo $press['no_of_pages']; ?></a><br/>

            <a style="color:#fff;" href="<?php echo base_url('/inquiry/'.$press['id']); ?>"><button type="button" class="btn btn-primary">Inquiry Before Buying</button></a>

            </div>

            <div class="col-md-4">

              <!--img alt="" src="<?php echo base_url('assets/images/bbb.png');?>" style="width:176px; margin-top:4px;"-->

             <div class="user-box">

                <p style="font-weight:600; color:#085cb7; font-size:15px;">Choose License Type</p> 

             <form name="frmReport" id="frmReport" method="post" action="">

              <input type="hidden" name="purchase" value="<?php echo $press['id']; ?>">

              <div class="radio">

               <label>

               <input type="radio" name="type" value="S" checked>

               Single User - $ <?php echo number_format($press['price_sul']); ?></label>

               </div>

               <div class="radio">

               <label>

               <input type="radio" name="type" value="M" style="text:bold; ">

                Multi User - $ <?php echo number_format($press['price_el']); ?></label>

               </div>

               <div class="radio">

               <label>

               <input type="radio" name="type" id="optionsRadios3" value="E">

                Enterprise User - $ <?php echo number_format($press['price_cul']); ?></label>

               </div><br/>

              <button type="button" value="Add To Cart" class="btn btn-danger"><i class="fa fa-shopping-cart"></i>Pre Buy Now</button></div>

             </form>

             </div> 

            <div class="col-md-4">

              <div class="user-box" style="margin-top:4px;">

                <p style="font-weight:600; color:#085cb7; font-size:15px;">24/7 Research Support</p>

                <p style="line-height:29px; font-size:13px;">Call us or write to us<br/> 

                Phone:  1-302-257-2444 <br/>

                Toll Free:  1-800-421-1507<br/>

                Email: sales@gminsights.com</p>

              </div>

            </div>

          </div><br/>

          <div class="tabs">

            <ul class="tab-links">

              <li><a class="tab-link1 active" href="#">Summary</a></li>

              <li><a class="tab-link2" href="#toc">Table of Content</a></li>

              <li><a class="tab-link3" href="#segmentation">Segmentation</a></li>

              <li><a class="tab-link4" href="#methodology">Methodology</a></li>

              <li><a class="tab-link5" href="#request">Request Sample</a></li>

            </ul>

            <div class="tab-box">

              <div class="tab-content active">

                <!--img alt="" src="<?php echo base_url('assets/images/report/acetic-acid-market.png');?>"-->

                  <pre><?php echo $press['full_desc']; ?></pre>

              </div>

              <div class="tab-content">

                 <pre> <?php echo $press['table_of_content']; ?>

                  <?php echo $press['list_of_tables']; ?>

                  <?php echo $press['list_of_chart']; ?></pre>

              </div>

              <div class="tab-content">

                 <pre><?php echo $press['free_analysis']; ?></pre>

              </div>

              <div class="tab-content">

                 <pre><?php echo $press['market_overview']; ?></pre> 

              </div>

              <div class="tab-content">

                  <h5 style="font-weight:600">To request a sample copy of this report, please complete the form below.</h5><br/>

                  <p>We offer 10% customization including country-level data, niche applications and competitive landscape with every report, at no extra cost. This also includes a 30 minute analyst discussion option, based on your needs.</p><br/>

                  <div>

                    <?php $attributes = array('class'=> 'jsform');

                echo form_open('/request/'.$press['id'], $attributes); ?>

                <input type="hidden" name="requestId" id="requestId" value="<?php echo $press['id']; ?>" />

                <input type="hidden" name="url" id="url" value="<?php echo base_url('/request/'.$press['id']); ?>" required />



                <div class="ccfield-prepend">

                    <?php echo form_error('name'); ?>

                    <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>

                    <input class="ccformfield" type="text" name="name" placeholder="Full Name *" required>

                </div>

                <div class="ccfield-prepend">

                  <?php echo form_error('email'); ?>

                    <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>

                    <input class="ccformfield" type="text" name="email" placeholder="Email *" required>

                </div>

                <div class="ccfield-prepend">

                    <?php echo form_error('phone'); ?>

                    <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>

                    <input class="ccformfield" type="text" name="phone" placeholder="Phone *" required>

                </div>

                <div class="ccfield-prepend">

                    <?php echo form_error('designation'); ?>

                    <span class="ccform-addon"><i class="fa fa-users fa-2x"></i></span>

                    <input class="ccformfield" type="text" name="designation" placeholder="designation">

                </div>

                <div class="ccfield-prepend">

                    <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>

                    <textarea class="ccformfield" name="message" rows="8" placeholder="Message *" required></textarea>

                </div>

                <div class="ccfield-prepend" style="width:84%">

                    <input class="ccbtn" type="submit" value="Submit">

                </div>

                </form>



                  </div>

              </div>

            </div>

            

          </div>

        </div>

      </div>

    </div>

  </div>



</div>

		

