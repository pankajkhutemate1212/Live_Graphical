
<?php $this->load->view('admin/components/page_head'); ?>

<?php $this->load->view('admin/components/admin_header_menu'); ?>
<div class="row">
<!-- main row -->
<div class="span9">
</div>
<div class="span3">
<section>
    <a href="<?=site_url('')?>" ><i class="icon-desktop"></i>&nbsp; Live Website</a><br/>
<a href=""> <i class="icon-user"> </i>&nbsp;<?php echo " ".$this->session->userdata('username');?> <br/>    </a>
<a href="<?=site_url('user/logout')?>" ><i class="icon-off"></i>&nbsp;logout</a>
</div>
    <div>
<div>
</div>
</section>
  </div>
</div>
</div>

<hr>
<div class="container">
<h3> Add New Press Release</h3>
<div>
<?php echo validation_errors(); ?>
<?php echo form_open('admin/newpress/insert_press'); ?>
<table><!--
<tr>
	<td>Press id</td>
	<td><input type="text" value="GMRP101" name="rid" readonly="readonly" >  </td>
    <td>Total Pages</td>
	<td><input type="text" name="pages" >  </td>
</tr>-->

<tr>
	<td>Date</td>
	<td><div class="control-group">
				<div class="row-fluid input-append">
						<input class="span10 date-picker" name="date" id="date" type="text" data-date-format="dd-mm-yyyy" />
									<span class="add-on"><i class="icon-calendar"></i></span>
														</div>
    </td>

	

<tr>
	<td>Title</td>
	<td><input type="text" name="maintitle" style="width: 400%;">  </td>
</tr>
    <tr>
	<td>URL Name</td>
	<td><input type="text" name="url" style="width: 400%;" placeholder="url-name-keyword-name">  </td>
</tr>
    <tr>
    
    <td>Meta title </td>
        <td><input type="text" name="title" style="width: 400%;" placeholder="70 charcaters">  </td>
	</tr>
    <tr>
    <td>Meta keyword</td>
	   <td><input type="text" name="keyword" style="width: 400%;">  </td>
    </tr>
    <tr>
        <td>Meta Description</td>
	<td><input type="text" name="desc" style="width: 400%;" placeholder="150 charatcters">  </td>
</tr>
        <tr>
    
   
</tr>

	</table>
	
        
        <div class="editor_live"> 
								
					<div class="row-fluid">
								<div class="">
									<div class="tabbable">
										<ul class="nav nav-tabs" id="myTab">
											<li class="active">
												<a data-toggle="tab" href="#summary">
													Body
												</a>
											</li>

											
										
										</ul>

										<div class="tab-content">
											<div id="summary" class="tab-pane in active">
												<p><textarea name="editor" class="ckeditor"></textarea></p>
											</div>

											
										</div>
									</div>
								</div>
    </div>		
                            
           
            

            
							<!-- <textarea class="wysiwyg-editor" name="editor1" id="editor1"> </textarea> -->
                              
						
</div>
        
       <input type="submit" value="Submit" class="btn-primary" />


</form>

</div>

    <!--/span-->


<?php $this->load->view('admin/components/page_foot'); ?>