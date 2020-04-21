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

<div>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/allreports/reportsedited'); ?>

<table>

<tr>
	<td>
<label><input name="status" value="N" type="radio" ><span class="lbl"> Ongoing Report</span>	</label>
	<label> <input name="status" type="radio" value="Y" checked="">	<span class="lbl"> Published Report</span>	</label>
	<label> <input name="status" type="radio" value="D">	<span class="lbl"> Deactive</span>	</label>
		
</td>
	
</tr>

<tr>

     <input  type="hidden" name="id" value="<?php echo $reports['id']; ?>" hidden >



	<td>Report id</td>

	<td><input type="text" value="GMI<?php echo $reports['id']; ?>" name="rid" readonly="readonly" >  </td>

    <td>Total Pages</td>

	<td><input type="text" name="pages" value="<?php echo $reports['no_of_pages']; ?>" >  </td>

</tr>



<tr>

	<td>Date</td>

	<td><div class="control-group">

				<div class="row-fluid input-append">

						<input class="span10 date-picker" name="date" id="date" type="text" value="<?php echo date('M j, Y',$reports['publish_date']);?>" data-date-format="dd-mm-yyyy" />

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div>

    </td>



	<td>Category</td>

	<td> <select class="chzn-select" name="cat" id="cat" data-placeholder="Choose a Category">

															<option value="<?php echo $category['id']; ?>" selected />Default Category

															<option value="73" />Automotive & Transportation

															<option value="74" />Biomass , Bioenergy & Renewable Chemistry

															<option value="75" />Bulk & Specialty Chemicals

															<option value="76" />Electronics and Media

        													<option value="77" />Energy, Mining, Oil and Gas

															<option value="78" />Food, Nutrition and Animal Feed

															<option value="79" />HVAC and Construction

															<option value="80" />Polymers and Advanced Materials

															<option value="81" />Sustainable and Smart Technologies

															

														</select> </td>

</tr>



<tr>

	<td>Title</td>

	<td><input type="text" name="maintitle" style="width: 400%;" value="<?php echo $reports['name']; ?>">  </td>

</tr>

    <tr>

	<td>URL Name</td>

	<td><input type="text" name="url" style="width: 400%;"  value="<?php echo $reports['url']; ?>">  </td>

</tr>

    <tr>

    

    <td>Meta title </td>

        <td><input type="text" name="title" style="width: 400%;" value="<?php echo $reports['meta_title']; ?>">  </td>

	</tr>

    <tr>

    <td>Meta keyword</td>

	   <td><input type="text" name="keyword" style="width: 400%;" value="<?php echo $reports['meta_keywords']; ?>">  </td>

    </tr>

    <tr>

        <td>Meta Description</td>

	<td><input type="text" name="desc" style="width: 400%;" value="<?php echo $reports['meta_description']; ?>"> </td>

       </tr><tr>

         <td>Short Description</td>

	<td><textarea name="brief_desc" style="width: 400%;"> <?php echo $reports['brief_desc']; ?></textarea> </td>

</tr>

        <tr>

    

    <td>Single Price </td>

        <td><input type="text" name="s_price"   value="<?php echo $reports['price_sul']; ?>"></td>

	

    <td>Multi-user Price</td>

	   <td><input type="text" name="m_price"  value="<?php echo $reports['price_el']; ?>"> </td>

            <td>Enterprise Price</td>

	<td><input type="text" name="e_price"  value="<?php echo $reports['price_cul']; ?>">  </td>

</tr>

<tr>
	<td>Select Year</td><td> <input name="yearrb" id="yearrb"  type="radio" value='2022' <?php echo set_radio('yearrb', '2022', $reports['report_keyid'] == '2022'); ?> ><span class="lbl"> 2022</span>
	<input name="yearrb" id="yearrb" type="radio" value="2023" <?php echo set_radio('yearrb', '2023', $reports['report_keyid'] == '2023'); ?> required="""><span class="lbl"> 2023</span>
	<input name="yearrb" id="yearrb" type="radio" value="2024" <?php echo set_radio('yearrb', '2024', $reports['report_keyid'] == '2024'); ?> required=""><span class="lbl"> 2024</span>
	<input name="yearrb" id="yearrb" type="radio" value="2025" <?php echo set_radio('yearrb', '2025', $reports['report_keyid'] == '2025'); ?> required=""><span class="lbl"> 2025</span>
	</td>
</tr>

	</table>
	<br/>

	

        

        <div class="editor_live"> 

								

					<div class="row-fluid">

								<div class="">

									<div class="tabbable">

										<ul class="nav nav-tabs" id="myTab">

											<li class="active">

												<a data-toggle="tab" href="#summary">

													Summary

												</a>

											</li>



											<li>

												<a data-toggle="tab" href="#toc">

													Table of content

													<span class="badge badge-important"></span>

												</a>

											</li>
											<li>

												<a data-toggle="tab" href="#toc2">

													Table of content 2

													<span class="badge badge-important"></span>

												</a>

											</li>

                                            <li>

												<a data-toggle="tab" href="#segment">

													Segmentation

													<span class="badge badge-important"></span>

												</a>

											</li>

                                             <li>

												<a data-toggle="tab" href="#method">

													Methodology

													<span class="badge badge-important"></span>

												</a>

											</li>



										

										</ul>



										<div class="tab-content">

											<div id="summary" class="tab-pane in active">

												<p><p><textarea name="editor" class="ckeditor" ><?php echo $reports['full_desc']; ?></textarea></p></p>

											</div>



											<div id="toc" class="tab-pane">

												<p><textarea name="toc_editor" class="ckeditor"><?php echo $reports['table_of_content']; ?>

              

             </textarea></p>

											</div>
											<div id="toc2" class="tab-pane">

												<p><textarea name="toc_editor2" class="ckeditor">

                  <?php echo $reports['list_of_tables']; ?>

          </textarea></p>

											</div>



											<div id="segment" class="tab-pane">

												<p> <textarea name="seg_editor" class="ckeditor"><?php echo $reports['free_analysis']; ?></textarea>

            </p>

											</div>



											<div id="method" class="tab-pane">

												<p><textarea name="mix_editor" class="ckeditor"><?php echo $reports['market_overview']; ?></textarea></p>

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