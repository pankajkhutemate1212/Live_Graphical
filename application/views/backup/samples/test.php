<!-- Content sections 
================================================== -->
<div class="content-sections">
  <!-- Bedcrum 
================================================== -->
  <div class="bedcrum-section" style="margin-top:-52px; margin-bottom:10px;">
  <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo base_url('/industry-practices/'.$category['url']);?>"><?php echo $category['name']; ?></a></li>
  <li class="active"><?php echo $reports['name']; ?></li>
</ul>
</div>
<!-- staff-box -->
  <div class="staff-box">
    <div class="row">
      <div class="col-md-9">
        <div class="company-mission">
          <h3><?php echo $reports['name']; ?></h3>
          <?php $attributes = array('class'=> 'ccform');
                echo form_open('/inquiry/'.$reports['id'], $attributes); ?>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
                    <input class="ccformfield" type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
                    <input class="ccformfield" type="text" name="email" placeholder="Email" required>
                </div>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
                    <input class="ccformfield" type="text" name="phone" placeholder="Phone">
                </div>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
                    <textarea class="ccformfield" name="message" rows="8" placeholder="Message" required></textarea>
                </div>
                <div class="ccfield-prepend">
                    <input class="ccbtn" type="submit" value="Submit">
                </div>
                </form>
        </div>
      </div>
    </div>
  </div>

