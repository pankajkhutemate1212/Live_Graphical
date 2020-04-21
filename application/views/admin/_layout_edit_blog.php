<div class="row">

<!-- main row -->


<hr>

<div class="container">

<div>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/allblogs/blogsedited'); ?>
    

<table>

<tr>

     <input type="hidden" name="id" value="<?php echo $blogs['id']; ?>" hidden>



	<td>Report id</td>

	<td><input type="text" value="GMI<?php echo $blogs['id']; ?>" name="blog_id" readonly="readonly" >  </td>

	<td>Date</td>

	<td><div class="control-group">

				<div class="row-fluid input-append">

						<input class="span10 date-picker" name="date" id="date" type="text" value="<?php echo date('M j, Y',$blogs['date']);?>" data-date-format="dd-mm-yyyy" />

									<span class="add-on"><i class="icon-calendar"></i></span>

														</div></div>

    </td>

</tr>



<tr>

	<td>Title</td>

	<td><input type="text" name="maintitle" style="width: 400%;" value="<?php echo $blogs['name']; ?>">  </td>

</tr>

    <tr>

	<td>URL Name</td>

	<td><input type="text" name="url" style="width: 400%;"  value="<?php echo $blogs['url']; ?>">  </td>

</tr>

    <tr>

    

    <td>Meta title </td>

        <td><input type="text" name="title" style="width: 400%;" value="<?php echo $blogs['meta_title']; ?>">  </td>

	</tr>

    <tr>

    <td>Meta keyword</td>

	   <td><input type="text" name="keyword" style="width: 400%;" value="<?php echo $blogs['meta_keywords']; ?>">  </td>

    </tr>

    <tr>

        <td>Meta Description</td>

	<td><input type="text" name="desc" style="width: 400%;" value="<?php echo $blogs['meta_description']; ?>"> </td>

       </tr>


<tr>
	<td>Author : </td><td> <input name="author" id="author"  type="radio" value='Global Market Insights, Inc.' <?php echo set_radio('auther', 'Global Market Insights, Inc.', $blogs['auther'] == 'Global Market Insights, Inc.'); ?> ><span class="lbl"> Global Market Insights, Inc.</span>
	<input name="author" id="author" type="radio" value="Shikha Sinha" <?php echo set_radio('author', 'Shikha Sinha', $blogs['auther'] == 'Shikha Sinha'); ?> required=""><span class="lbl"> Shikha</span>
	<input name="author" id="author" type="radio" value="Ojaswita Kutepatil" <?php echo set_radio('author', 'Ojaswita Kutepatil', $blogs['auther'] == 'Ojaswita Kutepatil'); ?> required=""><span class="lbl"> Ojaswita</span>
	<input name="author" id="author" type="radio" value="Saipriya Iyer" <?php echo set_radio('author', 'Saipriya Iyer', $blogs['auther'] == 'Saipriya Iyer'); ?> required=""><span class="lbl"> Saipriya</span>
	
	<input name="author" id="author" type="radio" value="Satarupa De" <?php echo set_radio('author', 'Satarupa De', $blogs['auther'] == 'Satarupa De'); ?> required=""><span class="lbl"> Satarupa</span>
	
	<input name="author" id="author" type="radio" value="Dhananjay Punekar" <?php echo set_radio('author', 'Dhananjay Punekar', $blogs['auther'] == 'Dhananjay Punekar'); ?> required=""><span class="lbl"> Dhananjay Punekar</span>
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

										</ul>



										<div class="tab-content">

											<div id="summary" class="tab-pane in active">

												<p><p><textarea name="editor" class="ckeditor" ><?php echo $blogs['full_desc']; ?></textarea></p></p>

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
    </div></div>


    <!--/span-->





<?php $this->load->view('admin/components/page_foot'); ?>