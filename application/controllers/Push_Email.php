<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Push_Email extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
      
        $this->load->library('email');
        $this->load->model('report_model');
        $this->load->model('category_model');
	$this->load->model('sample_model');
        
    }
    
    function toc()
      		{
      
            $id = $this->input->post('ridd');
            $name = $this->input->post('name');
            $from_email = $this->input->post('name');
            $subject = 'Request for TOC- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $cat = $this->input->post('rcatt');
             $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             $subject2 = 'Thank you for contacting us';
	  
          $to_email = 'vikas@graphicalresearch.com';
		
		$country="";
		
		 $country_user= $this->input->post('country_user');
		  $country_user = $this->db->escape_str($country_user);
		  $selectyes = $this->input->post('SelectAll');
              $selectnone = $this->input->post('none1');
               $seletcomman='';
              if(empty($selectyes)){   
                  
                  if(empty($selectnone)){
                      $seletcomman='';   
                  }else{
                      $seletcomman = $this->input->post('none1');
                      
                  }  
                  }else{                      
                      $seletcomman = $this->input->post('SelectAll');  
                      $seletcomman = $this->db->escape_str($seletcomman);
                  }

          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
          
	$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 



		$msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($name);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);


 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`, `date`, `cat`, `time`,`rid`, `preference`,`country_by_user`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Request for TOC', '$name1', '$ip','$country', '$dates', '$cat', '$time', '$id','$seletcomman','$country_user')";

$this->db->query($sql);

	
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><strong>Request for TOC:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Company</strong>:&nbsp;'.$company.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Industry Coverage ( Category Name )</strong>:&nbsp;'.$cat.'</p>
				<p><strong>Source: &nbsp;</strong>Request for TOC &nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';

$body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
<p><br />Thank you for contacting Graphical Market Research.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Graphical Market Research.</strong></p>
<p>&nbsp;</p> -->
</body>
</html>'; 	   

            $result = $this->email
                ->from($name)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
            
                
                if ($this->email->send())
            {
               
       
             $result = $this->email
                ->from($name)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
                
               


// $xml ="<Leads><row no='1'><FL val='Company'>gmi</FL><FL val='Last Name'>".$name."</FL><FL val='Email'>".$from_email."</FL><FL val='Phone'>9403280590</FL></row></Leads>";

           

                
                
          redirect('thanks-toc/'.$id);
          }
             

            exit;
            }
            else
            {
               
     
               redirect('thanks-toc/'.$id);
            

            exit;
            }
                     
	
         
		}
}