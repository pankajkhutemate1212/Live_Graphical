<?php $this->load->view('admin/components/page_head'); ?>



<?php $this->load->view('admin/components/admin_header_menu'); ?>
<div class="row">
<div class="container">



<h3 style="color:green;">Your file was successfully uploaded!</h3>
<hr><br/>
<?php foreach ($upload_data as $item => $value):?>
<p style="margin-left:50px; font-size:18px; color:#0F3971;"><span style="color:green; font-weight:bold;"><?php echo $item;?> : </span> <?php echo base_url('assets/img/'.$value);?></p>
<?php endforeach; ?>
<br/><br/>
<p><?php echo anchor('admin/upload', 'Upload Another File!'); ?></p>

</div>
</div>	