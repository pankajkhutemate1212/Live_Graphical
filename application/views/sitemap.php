<?php header('Content-type: text/xml'); ?>
<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    
             <?php if(!empty($reports)){
      
        foreach($reports as $row){ ?>
			 
        <url>
	    
	<loc>
	
	<?php echo base_url('/industry-insights/'.$row->id.'/'.$row->url); ?>  </loc>            
                     
              <priority>1.0</priority>
              <changefreq>daily</changefreq>

        </url>
  
	<?php }} ?>
			   
	 
			   
             <?php if(!empty($press)){
		 
             foreach($press as $row){ ?>
			 
		<url>
	 <loc>	<?php echo base_url('/press-release/'.$row->url); ?>  </loc>            
                     
              <priority>1.0</priority>
              <changefreq>daily</changefreq>

        </url>
				
 <?php }}?>
			 
</urlset>