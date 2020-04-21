<?php $this->load->view('admin/components/page_head'); ?>



<?php $this->load->view('admin/components/admin_header_menu'); ?>
<div class="row">
<div class="container">
<h3> Upload Image</h3>
<hr>
<div style="color:red; font-size:18px; font-weight:bold;">
<?php echo $error;?></div>

<?php echo form_open_multipart('admin/upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />
</div></div>	
<?php $this->load->view('admin/components/page_foot'); ?>