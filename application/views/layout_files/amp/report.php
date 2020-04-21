<?php include('amp_header.php'); ?>

<?php  if(!empty($faq)){ $totalcnt=count($faq); $flag=0; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
      <?php foreach($faq as $row){ $flag++ ?>
            {
    "@type": "Question",
    "name": "<?php echo $row->question; ?>",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "<?php echo $row->answer; ?><a href='<?php echo current_url(); ?>'> Read More</a>"
    }
  } <?php if($totalcnt!=$flag){ ?>, <?php }?> <?php } ?>]
  }
</script>
<?php } ?>
<div class="row">

    <div class="container breadcrumbs">

            <ul>
                <li><a href="<?php echo base_url(''); ?>" >Home</a></li>
                <li><a href="<?php echo base_url('/industry-insights/'.$category['url']);?>">Next generation Technologies</a></li>
				<li><?php echo  $reports['meta_title']; ?></li>
            </ul>
    </div>
    <div class="medium-12 columns end">
    
    <h1 class="market-research-report-title"><?php echo $reports['name']; ?> <br>
      </h1>
         <span class="text-caption">
             Published Date: <?php echo date('F Y',$reports['publish_date']);?> | Publisher: Graphical Research
             Report ID: GR<?php echo $reports['id']; ?> | Delivery : PDF
        </span>

         <a href="https://www.graphicalresearch.com/request/1247/sample" class="button secondary request-button" style="margin: 2px 10px 10px 88px;"> <span class="blink_me "><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="12" viewBox="0 0 23 20" width="17">
    <path d="M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>&nbsp;Request a sample</span></a>

     </div>
    <div class="medium-8 columns end">
     <div class="z-depth-1">




        <div class="cust-tab-details-div">
        <a  href="https://www.graphicalresearch.com/industry-insights/1002/europe-AR-augmented-reality-market" class="raised-button ink cust-tab-details report-menu-name is-active" style="
    margin-top: 11px;
">Summary</a>
  <a id="a1" href="https://www.graphicalresearch.com/table-of-content/1002/europe-AR-augmented-reality-market" class="raised-button ink cust-tab-details report-menu-name " style="
    margin-top: 11px;
">Table of Contents</a>



</div>
        <div class="tabs-content" data-tabs-content="material-tabs">
          <div class="tabs-panel is-active" id="panel1" role="tabpanel" aria-hidden="false" aria-labelledby="panel1-label">



    <p class="text-body-1">
        <?php
$cname= $this->uri->segment(1);

if($cname=="table-of-content"){ ?>



     <p class="text-body-1"><?php echo $reports['table_of_content']; ?></p>

     <?php
}else if($cname=="industry-coverage"){  ?>

          <p class="text-body-1"><?php echo $reports['free_analysis']; ?></p>
  <?php


} else  if($cname=="methodology"){ ?>

          <p class="text-body-1"><?php echo $reports['market_overview']; ?></p>

<?php
} else if($cname=="get-customized-report"){ ?>

    <p class="text-body-1"><?php echo $reports['full_desc']; ?></p>

    <?php
} else { ?>
     <?php
        $summary=str_replace('style="text-align: center;"','class="talign-center"',str_replace('style="text-align: justify;"','class="talign-justify"',str_replace('style="text-align:justify;"','class="talign-justify"',str_replace('style="text-align:justify"','class="talign-justify"',str_replace('style="text-align:center;"','class="talign-center"',str_replace('style="text-align:center"','class="talign-center"',$reports['full_desc']))))));
    $summary = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $summary);
    //$summary=$reports['full_desc'];
         $count_img = substr_count($summary, '<img');

       for($i =0 ; $i < $count_img; $i++) {

           if($i==0){

            $testcase = substr($summary, strpos($summary,"<img"));

              }
            else {

            $testcase= substr($summary,strripos($summary,'<p class="talign-center">Get more details on this report - <a class="button btncustomreq sum-reqbtn" href='));

             }

     $aaa=substr($testcase, strpos($testcase, '<img'));
                $img_html1 = substr($testcase, strpos($testcase, '<img'), stripos($aaa, '" />')+4);
        $img_html=substr($testcase, strpos($testcase, '<img'),stripos($aaa,'</p>')).'</p>';
        $img_html_check=substr($testcase, strpos($testcase, '<img'),stripos($aaa,'</p>
<p class="talign-center">Get more details on this report - <a href="')).'</p>';
if(stripos($aaa,'</p>
<p class="talign-center">Get more details on this report - <a href="')==false){


        if(strpos($img_html,'</strong>'))
        {
          if(strpos($img_html,'</u></strong></em>'))
          {
            $summary= str_replace($img_html, $img_html1.'</u></strong></em></p>
<p class="talign-center">Get more details on this report - <a class="button secondary ink " href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a>
&nbsp;</p>',$summary);
          }
          elseif(strpos($img_html,'</u></strong>'))
          {

            $summary= str_replace($img_html, $img_html1.'</u></strong></p>
<p class="talign-center">Get more details on this report - <a class="button secondary ink" href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a>
&nbsp;</p>',$summary);
          }
          elseif(strpos($img_html,'</u></em></strong>'))
          {
            $summary= str_replace($img_html, $img_html1.'</u></em></strong></p>
<p class="talign-center">Get more details on this report - <a class="button secondary ink"  href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a>
&nbsp;</p>',$summary);
          }
          else
          {
            $summary= str_replace($img_html, $img_html1.'</strong></p>
<p class="talign-center">Get more details on this report - <a class="button secondary ink" href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a>
&nbsp;</p>',$summary);
          }
        }
                elseif(strpos($img_html,'</p>'))
                {

                    $summary= str_replace($img_html, $img_html1.'</p>
<p class="talign-center">Get more details on this report - <a class="button secondary ink"  href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a>
&nbsp;</p>',$summary);
                }
        else
        {
          $summary= str_replace($img_html, $img_html1.'</p>
<p class="talign-center">Get more details on this report - <a class="button secondary ink" href="'.base_url().'request/'.$reports['id'].'/sample?sum=img">Request Free Sample PDF</a>
&nbsp;</p>',$summary);
        }
       }

       } 
     if(strpos($summary, '<img'))
      {
        $aaa=substr($summary, strpos($summary, '<img'));
        
        $img_html_aaa = substr($summary, strpos($summary, '<img'), stripos($aaa, '" />')).'" />';

        $bbb=strpos($img_html_aaa , 'src="');
        
        $ccc=substr($img_html_aaa,$bbb+5);
        
        $filename_old_aaa=substr($ccc,0,strpos($ccc, '"'));
        
        $filename_aaa=str_replace('https://www.graphicalresearch.com/','./',trim($filename_old_aaa));
        
        if(!empty($filename_aaa))
        {
          $data = getimagesize(trim($filename_aaa));

          $width_aaa = $data[0];
          $height_aaa = $data[1];

          $abc_aaa= str_replace('/>','width="'.$width_aaa.'" height="'.$height_aaa.'" layout="responsive"></amp-img>',str_replace('<img', '<amp-img',$img_html_aaa));?>

          <p class="text-body-1"><?php echo str_replace("".$img_html_aaa."","".$abc_aaa."",$summary);?></p>
          
        <?php } 
        else { ?>
          <p class="text-body-1"><?php echo $summary;?></p>
        <?php }
      }
      else{ ?>
        <p class="text-body-1"><?php echo $summary;?></p>
      <?php  }
}  ?>

		</div>
		 <?php if(isset($faq) && !empty($faq)){ ?>
			<h2><b>Frequently Asked Question(FAQ) :</b> </h2>

                      <div class="rowcollapspr-1">
  
  <div class="col-1">
    
    <div class="tabscollapsepr-1">
        <?php  $flag = 1;
        if(!empty($faq)){foreach($faq as $clipRow){?>
                      <div class="tab-collapsepr-1">
          <input type="checkbox" id="<?php echo $flag; ?>" name="rd">
        <label class="tab-label-collaps-1" for="<?php echo $flag; ?>" style="
    display: flex;margin: 0;color:black;
"><?php echo $clipRow->question;?></label>
        <div class="tab-content-collapspr-1" style="
    text-align: justify;
">
        <?php echo $clipRow->answer;?>       </div>
        </div>      

       <?php $flag++; }} ?>
 
      </div>
      
    </div>
                         
  </div>   <?php } ?>
          </div>
		  
          <div class="cust-tab-details-div">
       <a id="a4" href="<?php echo base_url('request/'.$reports['id'].'/inquiry-before-buying'); ?>" class="raised-button ink cust-tab-details report-menu-name report-detail-option" style="
    margin-top: 12px;
">&nbsp;&nbsp;Inquiry Before Buying</a>

</div>
        </div>
    </div>

<div class="sticky-btn-mob" id="normal-buy-btn">

                   <a class="button secondary ink" href="<?php echo base_url('request/'.$reports['id'].'/sample'); ?>" >
                       <amp-img alt="Webiste is safe"  fallback  width="15" height="15" class="icon-button" src="https://www.graphicalresearch.com/assets/images/download-request-sample-pdf.png"></amp-img>&nbsp;Request a sample</a>

            <a class="button primary ink" href="<?php echo base_url('request/'.$reports['id'].'/inquiry-before-buying'); ?>"><amp-img alt="Webiste is safe"  fallback  width="15" height="15" class="icon-button" src="https://www.graphicalresearch.com/assets/images/inquiry-before-buying.png"></amp-img>&nbsp;Inquiry Before Buying</a>

</div>

<div class="medium-4 columns sidebarcards">

    <h5 class="report-price" >Why Choose us?</h5>

    <ul>
        <li class="lili"><amp-img alt="Webiste is safe"  fallback  width="32" height="32" class="formsvg"  src="https://www.graphicalresearch.com/assets/images/svg/delivery.svg"></amp-img> <b>On-Time Delivery</b>
        </li>
        <li class="lili"><amp-img alt="Webiste is safe"  fallback  width="32" height="32" class="formsvg"  src="https://www.graphicalresearch.com/assets/images/svg/quility.svg"></amp-img> <b>Assured Quility</b>
        </li>
        <li class="lili"><amp-img alt="Webiste is safe"  fallback  width="32" height="32" class="formsvg"  src="https://www.graphicalresearch.com/assets/images/svg/experts.svg"></amp-img> <b>Industry Experts</b>
        </li>
        <li class="lili"><amp-img alt="Webiste is safe"  fallback  width="32" height="32" class="formsvg"  src="https://www.graphicalresearch.com/assets/images/svg/payment.svg"></amp-img> <b>Payment Security</b>
        </li>
    </ul>


      </div>

  <div class="medium-4 columns sidebarcards">

   <div class=""> 

    <h5 class="report-price" style="" >Select License</h5>

    <h1 class="market-research-report-title rd-title" style="
    font-size: 11px;
"><?php echo $reports['meta_title']; ?>
        </h1>
    <form target="_top" action="https://www.graphicalresearch.com/secure-report-purchase/0/1237" method="GET">              
   <input type='hidden' value="North America Sandblasting Media Market Share Analysis 2019-2025" id="checkout_report_name"/>

   <input type='hidden' value="1245" id="checkout_report_id"/>

                 <div class="radio buynow">
           <label>
               <input type="radio" id="license_type_s"  name="license_type" value="1"  checked="checked" ><span style="margin-left: 9px;font-size: 14px;margin: 11px 0px 5px 7px;"> Single User $2750</span>
           <span class="tips-tool" data-tooltip aria-haspopup="true" title="The research report will be delivered in PDF format. It is recommended for a single user.
 " >

                </span></label>
        </div>
                
                 <div class="radio buynow">
           <label>
               <input type="radio" id="license_type_m"   name="license_type" value="2"><span style="margin-left: 9px;font-size: 14px;margin: 11px 0px 5px 7px;">Multi User $4750   </span>

           <span class="tips-tool" data-tooltip aria-haspopup="true" title="
The research report will be delivered in PDF format. It is recommended for up to five users.
" >

                </span></label>
        </div>
        
         <div class="radio buynow">
           <label>
               <input type="radio" id="license_type_e"   name="license_type" value="3"><span style="margin-left: 9px;font-size: 14px;margin: 11px 0px 5px 7px;">Enterprise User $6750</span>  
          <span class="tips-tool" data-tooltip aria-haspopup="true" title="
The research report will be delivered in PDF format and detailed Excel sheet. It is recommended for organizations where multiple people would like to access the report from multiple locations. " >

                </span> </label>
        </div>
              
        <button  id='check_out_form_btn'  class="medium-4 hollow button general report-purchase" rel="nofollow" >
            <amp-img src="https://www.graphicalresearch.com/assets/images/svg/report-purchase.svg " width="24" height="24"></amp-img><span>Buy Now</span>
                </button>
             
           
</form>
    


      </div>


      </div>    

  <div class="medium-4 columns sidebarcards">
      
      <h5 class="report-price" style="" >Share Social media</h5>

   <ul>
        <li class="lili"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.graphicalresearch.com/industry-insights/1245/north-america-sandblasting-media-market"><amp-img class="formsvg" src="https://www.graphicalresearch.com/assets/images/fb.png" width="32" height="32"></amp-img> <b>Facebook</b></a>
        </li>
        <li class="lili"><a target="_blank" href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fwww.graphicalresearch.com%2Findustry-insights%2F1247%2Fnorth-america-cybersecurity-market&amp;ref_src=twsrc%5Etfw&amp;text=North+America+Cybersecurity+Market+Value+2019+%7C+Analysis+Report&amp;tw_p=tweetbutton&amp;url=https%3A%2F%2Fwww.graphicalresearch.com%2Findustry-insights%2F1247%2Fnorth-america-cybersecurity-market"><amp-img class="formsvg" src="https://www.graphicalresearch.com/assets/images/twt.png"  width="32" height="32" > </amp-img><b>Twitter</b></a>
        </li>
        <li class="lili"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.graphicalresearch.com/industry-insights/1245/north-america-sandblasting-media-market"><amp-img class="formsvg" src="https://www.graphicalresearch.com/assets/images/lin.png" width="32" height="32"> </amp-img><b>Linkedin</b></a>
        </li>
        
    </ul>


      </div>      
  



</div>

<br>


<?php include('amp_footer.php'); ?>





