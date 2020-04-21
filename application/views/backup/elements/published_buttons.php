<style>.customdec form{display: inline;margin-right: 88px;}.customdec .button{margin:0;}.customdec select{width: 31%;display: inline-block;border-radius: 7px;}.customdec .alert{width: 11%;display:inline;padding:10px 0;margin-left: 7px;margin-bottom: 0px;}.customdec{margin-bottom:10px}.btncustomreq{float:none;}@media only screen and (min-width:601px) and (max-width:768px){.customdec .alert{width:15% !important;}a.cust-btn-inq{margin-left:0px !important;width:25% !important}.customdec form{margin-right: 3%;}.btncustomreq{width:23% !important;}.btncustomreq{margin-left:0 !important;}}@media only screen and (min-width:769px) and (max-width:1024px){.customdec .alert{width:14%;}a.cust-btn-inq{width:25% !important}.customdec form{margin-right:0;}}@media only screen and (max-width:600px){.customdec form{margin:0 auto;}.customdec .alert{width:21% !important;padding:10px 0;}a.cust-btn-inq{margin-left:4px !important;width:35% !important;font-size: 0.6rem !important;padding:11px 0;}select{height:34px !important;padding:2px;}.customdec select{width:35%;font-size:12px;}}</style>
<div  class="mobileuibtn customdec" style="margin-top:10px; padding: 0 2px;">

 <form action="<?php echo base_url('securecheckout/paymenta/'.$reports['id']); ?>" method="get">

<select name="gmpaycod">

  <option value="sugmp" >Single User: $<?php echo number_format($reports['price_sul']); ?> </option>

  <option value="mugmp" >Multi User: $<?php echo number_format($reports['price_el']); ?></option>

  <option value="eugmp" >Enterprise User: $<?php echo number_format($reports['price_cul']); ?></option>

</select><button type="submit" value="gmpaycod" class="button alert expanded"><i class="fi-shopping-cart"></i>  Buy Now</button></form>
<a class="button frost btncustominq cust-btn-inq" href="<?php echo base_url('/inquiry-before-buying/'.$reports['id']); ?>" style="width: 20%;margin-left: 6%;background: #d7ab00 !important;border-radius:7px;">Inquiry Before Buying</a>
 <a href="<?php echo base_url('request-sample/detail/'.$reports['id'].'') ?>" class="button btncustomreq mobile" style="width: 20%;border-radius:7px;"> <span> <i class="fi-download"></i>&nbsp; Request Sample</span></a>

 </div>