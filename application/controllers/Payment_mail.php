<?php class smail extends MY_Controller
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


<p><strong>Contact Sales:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Contact Us&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This mail came from official website of Global Market Insights Inc.</b><p/>
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
                
              redirect('thanks');
            

            exit;
            }
            else
            {
              
               redirect('thanks');
          

            exit;
            }
        }
    }