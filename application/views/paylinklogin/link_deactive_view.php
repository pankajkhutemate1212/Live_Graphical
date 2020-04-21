	
<!DOCTYPE html>
<html>
<head>
 <meta name="robots" value="noindex" />
<link rel="shortcut icon" href="https://graphicalresearch.com/assets/images/favicon.png">

   <meta name="robots" value="nofollow" />
</head>
<body>
	<div class="container" style="width: 1170px;margin: 0 auto;">
  <div style="display:inline-block;width:49%">
  <img src="https://beta.graphicalresearch.com/assets/images/brand-name.jpg" style="height:102px;">
  </div>
  
  <div style="display:inline-block;width:50%;vertical-align:top;text-align:right;">
<h4>WELCOME:   <span style='color:#FF5722'><?php echo $user;?></span></h4>
    <h2 style="color:#2196F3;"><a style="background: #E91E63;color: #fff;padding: 6px;font-size: 17px;margin-right:20px;text-decoration: none;" href="<?php echo base_url('paylinklogin/deactive_link')?>">Active Links</a><a style="background: #2196F3;color: #fff;padding: 6px;font-size: 17px;margin-right: 20px;text-decoration: none;" href="<?php echo site_url('paylinklogin/logout')?>">logout</a> </h2>
    
  </div>
  <hr/> 
<div>
          <div>
            <div class="blog-post">
<div class="callout mobileuifont">
<?php if(empty($msg)){ ?>

<style>
	table {
    border-collapse: collapse;
    margin-top:40px;
}

table, th, td {
    border: 1px solid black;
        padding: 10px;
}
</style>
<table>
                <?php if(!empty($links)){?>
                	<tr STYLE="background: #0f3971;font-weight: bold;color: #fff;">
					<td style="border-right: 1px solid #fff;width:2%;text-align:center">ID</td>
					<td style="border-right: 1px solid #fff;border-left: 1px solid #fff;text-align:center">REPORT NAME</td>
					<td style="border-right: 1px solid #fff;border-left: 1px solid #fff;width:5%;text-align:center">PRICE</td>
					<td style="border-right: 1px solid #fff;border-left: 1px solid #fff;text-align:center">URL</td>
					<td style="border-right: 1px solid #fff;border-left: 1px solid #fff;width:20%;text-align:center">CREATED BY</td>
					<td style="border-right: 1px solid #fff;border-left: 1px solid #fff;width:7%;text-align:center">DATE</td>
					<td style="border-left: 1px solid #fff;text-align:center">ACTION</td>
				</tr>
            <?php foreach($links as $row){ ?>
				<tr>
					<td style="width:2%;text-align:center"><?php echo $row->id; ?></td>
					<td><?php echo $row->name; ?></td>
					<td style="width:5%;text-align:center">$<?php echo $row->price_sul; ?></td>
					<td><a target="_blank" href="<?php echo $row->url; ?>"><?php echo $row->url; ?></a></td>
					<td style="width:20%;text-align:center"><?php echo $row->user_name; ?></td>
					<td style="width:7%;text-align:center"><?php echo $row->creation_date; ?></td>
					<td><a style="color:red;" href="<?php echo base_url('paylinklogin/deactivated'); ?>?id=<?php echo $row->id ?>"><b>Deactivate</b></a></td>
				</tr>
			   <?php }}else{?>
			   <h2 style="color: #FF5722;background: rgba(66, 88, 240, 0.29);padding: 10px;">Currently no link active.</h2>
			   <?php } ?>
</table>
<?php } else{
echo $msg;
}?>
                <br/><br/>
<a href="<?php echo base_url('paylinklogin/pay_link');?>" ><button>Create New Link</button></a>
             

                </div></div></div>
				
             </div>
			 
  </div>
</body>
</html>
