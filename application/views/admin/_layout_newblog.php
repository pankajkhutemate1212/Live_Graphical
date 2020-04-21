

<?php $this->load->view('admin/components/page_head'); ?>



<?php $this->load->view('admin/components/admin_header_menu'); ?>

<div class="row">

<!-- main row -->







<hr>

<div class="container">

<h3> Add New Blog</h3>

<div>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/newblog/insert_blog'); ?>
    <br/><br/><br/>
<table>



<tr>

	<td>Date</td>

	<td><div class="control-group">

				<div class="row-fluid input-append">

						<input class="span10 date-picker" name="date" id="date" type="text" data-date-format="dd-mm-yyyy" />

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div>

    </td>


</tr>



<tr>

	<td>Title</td>

	<td><input type="text" name="maintitle" style="width: 300%;">  </td>

</tr>

    <tr>

	<td>URL Name</td>

	<td><input type="text" name="url" style="width: 300%;" placeholder="url-name-keyword-name">  </td>

</tr>

    <tr>

    

    <td>Meta title </td>

        <td><input type="text" name="title" style="width: 300%;" placeholder="70 charcaters">  </td>

	</tr>

    <tr>

    <td>Meta keyword</td>

	   <td><input type="text" name="keyword" style="width: 300%;">  </td>

    </tr>

    <tr>

        <td>Meta Description</td>

	<td><input type="text" name="desc" style="width: 300%;" placeholder="150 charatcters">  </td>

    </tr><tr>   

         <td>Short Description</td>

	<td><input type="text" name="brief_desc" style="width: 300%;" placeholder="150 charatcters">  </td>

</tr>


<tr>
	<td>Author : </td><td> <input name="author" id="author"  type="radio" value='Global Market Insights, Inc.' required=""><span class="lbl"> Global Market Insights, Inc.</span>
	<input name="author" id="author" type="radio" value="Shikha Sinha" required=""><span class="lbl">Shikha</span>
	<input name="author" id="author" type="radio" value="Ojaswita Kutepatil" required=""><span class="lbl">Ojaswita</span>
	<input name="author" id="author" type="radio" value="Saipriya Iyer" required=""><span class="lbl">Saipriya</span>
	<input name="author" id="author" type="radio" value="Satarupa De" required=""><span class="lbl">Satarupa De</span>
	<input name="author" id="author" type="radio" value="Dhananjay Punekar" required=""><span class="lbl">Dhananjay Punekar</span>
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

													Blog Content

												</a>

											</li>

										</ul>



										<div class="tab-content">

											<div id="summary" class="tab-pane in active">

												<p><?php $this->load->view('editor/main/index.html'); ?></p>

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
    </div>  </div>


    <!--/span-->





<?php $this->load->view('admin/components/page_foot'); ?>