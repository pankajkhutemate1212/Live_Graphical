<?php
class smail extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
      
        $this->load->library('email');
        
    }
	public function contact_us()
      		{
      
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request from contact form.';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $country = $this->input->post('country');
             $company = $this->input->post('company');
             $phone = $this->input->post('phone');
	     $subject2 = 'Thank you for contacting us';
          $to_email = 'sales@gminsights.com';	  
          
          $country="";
          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
           
           $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`,`date`,`time`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip','$country', '$dates', '$time')";

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


<p><strong>Contact Sales:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Company Name</strong>:&nbsp;'.$company.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Contact Us&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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

<p><br />Thank you for contacting Global Market Insights, Inc.!<br /><br />Our representatives will get in touch with you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a style="padding:0 10px;" href="https://www.facebook.com/globalmarketinsights/">Facebook</a> <a style="padding:0 10px;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding:0 10px;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding:0 10px;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>';		  

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
               
                 if ($this->email->send())
            {
                $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
             redirect('thanks');
          }
              
            

            exit;
            }
            else
            {
              
               redirect('thanks');
          

            exit;
            }
                

           

          
		}
		public function about_us_form()
      		{
      
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request from about us form.';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $country = $this->input->post('country');
             $company = $this->input->post('company');
             $phone = $this->input->post('phone');
             $source = $this->input->post('source');
	     $subject2 = 'Thank you for contacting us';
          $to_email = 'sales@gminsights.com';	  
          
           $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip', '$dates', '$time')";

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


<p><strong>Contact Sales:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>'.$source.'</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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

<p><br />Thank you for contacting Global Market Insights, Inc.!<br /><br />Our representatives will get in touch with you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a style="padding:0 10px;" href="https://www.facebook.com/globalmarketinsights/">Facebook</a> <a style="padding:0 10px;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding:0 10px;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding:0 10px;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>';		  

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
               
                 if ($this->email->send())
            {
                $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
             redirect('thanks');
          }
              
            

            exit;
            }
            else
            {
              
               redirect('thanks');
          

            exit;
            }
                

           

          
		}
		////company brosoure request
		public function contact_us_bro()
      		{
      
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request from company presentation.';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $country = $this->input->post('country');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
	             $to_email = 'sales@gminsights.com';
		 $subject2 = 'Thank you for contacting us';
	$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`) VALUES ('$from_email', '$phone', 'n/a', 'n/a', '$message', 'n/a', 'Corporate Presentation', '$name', '$ip', '$dates',  '$time')";

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


<p><strong>Contact Sales:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Company Presentation&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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
<p><br />Thank you for contacting Global Market Insights, Inc.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a style="padding:0 10px;" href="https://www.facebook.com/globalmarketinsights/">Facebook</a> <a style="padding:0 10px;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding:0 10px;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding:0 10px;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>';	
 	    
            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
               
                 if ($this->email->send())
            {
                 $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
              redirect('thanks-corporate-presentation');
          }
              
            

            exit;
            }
            else
            {
                
               redirect('thanks-corporate-presentation');
          

            exit;
            }
                

                  
		}
		////end comp. bro. request
		function inquiry()
      		{
      
        	//get the form data
        	$id = $this->input->post('id');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Inquiry Before Buying.';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $cat = $this->input->post('rcatt');
             $report = $this->input->post('report');
             $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
            $subject2 = 'Thank you for contacting us';
         $to_email = 'sales@gminsights.com';
		$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 

$msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);

	
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`, `time`,`cat`,`rid`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Inquiry Before Buying', '$name1', '$ip', '$dates', '$time', '$cat', '$id')";

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

				<p><strong>Inquiry before buying:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one inquiry before buying request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
					<p><strong>Name:&nbsp;</strong>'.$name.'</p>
						<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
						<p><strong>Company: &nbsp;</strong>'.$company.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Industry Coverage (Category Name)</strong>:&nbsp;'.$cat.'</p>
				<p><strong>Source: &nbsp;</strong>Inquiry Before Buying&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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

			<p><br />Thank you for contacting Global Market Insights, Inc.!<br /><br />Our representatives will get in touch with you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a style="padding:0 10px;" href="https://www.facebook.com/globalmarketinsights/">Facebook</a> <a style="padding:0 10px;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding:0 10px;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding:0 10px;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>';	
 	 

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)   
                ->to($to_email)
                ->subject($subject)
                ->message($body);
              
                
                if ($this->email->send())
            {
                 $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
              redirect('thanks-inquiry-before-buying/'.$id);
          }
              
        
            exit;
            }
            else
            {
                
               redirect('thanks-inquiry-before-buying/'.$id);
              
            exit;
            }
		
       
		}
		
		//reuquest for custom
		function inquirycustom()
      		{
      
        	//get the form data
        	$id = $this->input->post('id');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Request for customization';
            $message = $this->input->post('message');
            $cat = $this->input->post('rcatt');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             $to_email = 'sales@gminsights.com';
             $subject2 = 'Thank you for contacting us';
             
             $msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);
		
	$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
    $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`,`cat`,`rid`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Request for customization', '$name1', '$ip', '$dates', '$time', '$cat', '$id')";

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

				<p><strong>Request for customization:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
			
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
					<p><strong>Company</strong>:&nbsp;'.$company.'</p>
								<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Industry Coverage (Category Name)</strong>:&nbsp;'.$cat.'</p>
				<p><strong>Source: &nbsp;</strong>Request for customization;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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
<p><br />Thank you for contacting Global Market Insights, Inc.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a style="padding:0 10px;" href="https://www.facebook.com/globalmarketinsights/">Facebook</a> <a style="padding:0 10px;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding:0 10px;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding:0 10px;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>';

 	 

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
                
                 
            
                
                if ($this->email->send())
            {
           $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
              redirect('thanks-roc/'.$id);
          }

            exit;
            }
            else
            {
              
                redirect('thanks-roc/'.$id);
           
            exit;
            }

       
		}
		
		
		//requset for custom
		
		
		function inquirybuy()
      		{
      
        	//this is %%%% request sample for date get information
        	$id = $this->input->post('id');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Request Sample';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $cat = $this->input->post('rcatt');
             $ridd = $this->input->post('ridd');
             $report = $this->input->post('report');
              $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             $subject2 = 'Thank you for contacting us';	   
        $to_email = 'sales@gminsights.com';
		
		$msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);

	$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`,`cat`,`rid`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Request for Sample', '$name1', '$ip', '$dates', '$time', '$cat', '$ridd')";

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

				<p><strong>Request for Sample:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Company Name</strong>:&nbsp;'.$company.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
								<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Industry Coverage (Category Name)</strong>:&nbsp;'.$cat.'</p>
				<p><strong>Source: &nbsp;</strong>Request for Sample &nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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
<p><br />Thank you for contacting Global Market Insights, Inc.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a style="padding:0 10px;" href="https://www.facebook.com/globalmarketinsights/">Facebook</a> <a style="padding:0 10px;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding:0 10px;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding:0 10px;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>';	 

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
             
                
                if ($this->email->send())
            {
             $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
             redirect('thanks-request-sample/'.$id);
          }
              
          

            exit;
            }
            else
            {
              
                redirect('thanks-request-sample/'.$id);
           
            exit;
            }

       
		}
		
		
		function toc()
      		{
      
        	$id = $this->input->post('ridd');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Request for TOC.';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $cat = $this->input->post('rcatt');
             $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             $subject2 = 'Thank you for contacting us';
	  
          $to_email = 'sales@gminsights.com';
		
	$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 



		$msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);


 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`, `cat`, `time`,`rid`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Request for TOC', '$name1', '$ip', '$dates', '$cat', '$time', '$id')";

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
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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
<p><br />Thank you for contacting Global Market Insights, Inc.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a style="padding:0 10px;" href="https://www.facebook.com/globalmarketinsights/">Facebook</a> <a style="padding:0 10px;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding:0 10px;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding:0 10px;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>'; 	   

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
            
                
                if ($this->email->send())
            {
               
       
             $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
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
		
		
		 /* payment form*/
		
		function payment()
      		{
      
        
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Request for TOC.';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             
	  
          $to_email = 'sales@gminsights.com';
		
	

	
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
				<p><strong>Designation</strong>:&nbsp;'.$designation.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Source: &nbsp;</strong>Request for TOC &nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
</body>
</html>';

 	   

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
            
                
                if ($this->email->send())
            {
               
       
              redirect('thanks-inquiry-before-buying/'.$id);
             

            exit;
            }
            else
            {
               
     
                redirect('thanks-inquiry-before-buying/'.$id);
            

            exit;
            }
		}
		
		
		 function searchquery()
      		{
      
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Search Query';
            $searchfor = $this->input->post('searchquery');
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
              $company = $this->input->post('company');
             $phone = $this->input->post('phone');
             $subject2 = 'Thank you for contacting us';	   
        $to_email = 'sales@gminsights.com';
		
	$timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`date`,`time`,`cat`,`rid`) VALUES ('$from_email', '$phone', '$company', '', '$message', '', 'Request from Search Query', '$name', '$ip', '$dates', '$time', '', '')";

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

				<p><strong>Request from Search Box:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Company Name</strong>:&nbsp;'.$company.'</p>
				<p><strong>Search for</strong>:&nbsp;'.$searchfor.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
								<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Request from Search Query &nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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
<p><br />Thank you for contacting us!<br /><br />Our representatives will get in touch with you shortly to assist you with your research needs.<br /><br />If the nature of your inquiry is urgent, please feel free to call us on the numbers mentioned below.</p>
<p><br />Best Regards,&nbsp;</p>
<p>Arun Hegde, <br /> Corporate Sales, <br /> Global Market Insights, Inc.<br /> <br /> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br /> Email: <a href="mailto:sales@gminsights.com">sales@gminsights.com</a><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/">Facebook </a> <a style="padding-left: 1em;" href="https://twitter.com/gmi_us">Twitter</a> <a style="padding-left: 1em;" href="https://www.linkedin.com/company/global-market-insights-inc">LinkedIn</a> <a style="padding-left: 1em;" href="https://plus.google.com/+Gminsightsusa">Google+</a> &nbsp;</p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Global Market Insights Inc.</strong></p>
<p>&nbsp;</p>
</body>
</html>';	 

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
             
                
                if ($this->email->send())
            {
             $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
             redirect('thanks');
          }
              
          

            exit;
            }
            else
            {
              
                redirect('thanks/');
           
            exit;
            }

       
		}
		
		
		
		public function destroy()
		{
			$this->session->sess_destroy();
		}
      
            }
     