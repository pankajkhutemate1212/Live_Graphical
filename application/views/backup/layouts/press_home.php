 <?php if(!empty($press11))

		    {

              foreach($press11 as $row){ ?>
<p  style="text-align: justify;font-size: 0.9rem;"> <a  href="<?php echo 'https://www.gminsights.com/pressrelease/'.$row->url; ?>" ><?php echo str_replace("&","&amp;",$row->name); ?></a> </p>
				  <Div style="color: #808080;font-size: 12px; " >Published Date:&nbsp;<?php echo date('F  Y',$row->date);?>  </div>        
			<Div style="font-size: 13px;font-decoration:none; " ><p style="text-align: justify;"><?php $data= substr($row->full_desc, 0,240); 
			  echo strip_tags($data);
			?>...</p>
			
			</Div>
                       

             <hr>
<?php }} ?><a href="<?php echo base_url('pressrelease'); ?>" class="button expanded"><i class="fi-list"></i> <span>View all press releases</span></a>