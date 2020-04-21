       
<div class="row medium-6 columns" style="padding:18px 0">
<div class="blog-post" >
<div class="collout" style="background: #ebebeb; padding: 2em;"> 
<form action="<?php echo base_url('newsletter/subscribe');?>" method="post">

<h4 style="font-size: 14px;font-weight: bold;">Subscribe For Latest Updates on one or all of these industries</h4>


 <div class="large-12 columns">
     
      <?php $abc=validation_errors(); if(!empty($abc)){ echo '<p style="color:red">Select Indusrty</p>';} ?>
      <input type="checkbox" name="newsletter[]" value="Advanced Materials"><label>Advanced Materials</label><br/>
<input type="checkbox" name="newsletter[]" value="Automotive"><label>Automotive</label><br/>
<input type="checkbox" name="newsletter[]" value="Chemicals"><label>Chemicals</label><br/>
<input type="checkbox" name="newsletter[]" value="Construction & Utilitie"><label>Construction & Utilities</label><br/>
<input type="checkbox" name="newsletter[]" value="Electronics & Semiconductors"><label>Electronics & Semiconductorss</label><br/>
<input type="checkbox" name="newsletter[]" value="Energy & Mining"><label>Energy & Mining</label><br/>
<input type="checkbox" name="newsletter[]" value="Food & Feed"><label>Food & Feed</label><br/>
<input type="checkbox" name="newsletter[]" value="Medical Devices & Pharma"><label>Medical Devices & Pharma</label><br/><input type="checkbox" name="newsletter[]" value="Next generation Technologies"><label>Next generation Technologies</label><br/>
<input type="checkbox" name="newsletter[]" value="Renewable & Green Chemistry"><label>Renewable & Green Chemistry</label><br/>
    </div>








 <input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
<input type="email" id="middle-label" name="email" placeholder="Subscription Email ID *" required="">




<!--<?php echo $widget;?>
<?php echo $script;?>-->

<p style="font-size: 11px;">Your personal details are safe.<a target="_blank" href="<?php echo base_url('terms-of-use-and-privacy-policy');?>"> Privacy Policy</a></p>
<input  class="button" type="submit" value="Subscribe"  style="width: 40%;"/>
</form>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

	function validate(form) {
		if(form.newsletter[0].checked==false && form.newsletter[1].checked==false && form.newsletter[2].checked==false && form.newsletter[3].checked==false && form.newsletter[4].checked==false && form.newsletter[5].checked==false && form.newsletter[6].checked==false && form.newsletter[7].checked==false && form.newsletter[8].checked==false && form.newsletter[9].checked==false) {
			alert('Please check at least one of the Industry.');
			return false;
		}
		return true;
	}
	
</script>
</div>
</div>
</div>
