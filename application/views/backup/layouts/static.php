
<?php
$this->load->view('elements/meta_header_noindex'); 
$this->load->view('elements/mobilenav');
?>













    <?php $this->load->view('elements/header'); ?>

   <div class="row columns mobileui" style="padding-top: 10px;">

<nav aria-label="You are here:" role="navigation">

<ul class="breadcrumbs">

<li><a href="<?php echo base_url(''); ?>">Home</a></li>

  <li><a href="<?php echo base_url(''); ?>/<?php echo $pages['url']; ?>"><?php echo $pages['name']; ?></a></li>

  

    

</ul>

</nav>

</div>                

<div class="row" id="content">

                        



                        



        <?php $this->load->view($content); ?>


    </div>



                            </div></div> 

    <?php $this->load->view('elements/footer'); ?>

  