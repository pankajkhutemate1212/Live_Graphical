<?php defined('BASEPATH') or exit('No direct script access allowed');

class Newsletter extends MY_Controller
{
    public function subscribe()
    {
    	$this->load->library('form_validation');
  
$this->form_validation->set_rules('newsletter[]', 'newsletter', 'required');
			if ($this->form_validation->run() == FALSE)
                {
                	$data['title'] = 'Newsletter Subscription | Global Market Insights, Inc.';
	  $data['description'] = 'Newsletter Subscription | Global Market Insights, Inc.';
	  $data['keywords'] = 'Newsletter Subscription | Global Market Insights, Inc.';
                      
                         $data['content'] = 'layout_files/subscribe';
      $this->load->view('master_files/master_layout', $data);
                }
 else{
 			$this->load->library('email');
 			$data = substr(implode(', ', $this->input->post('newsletter')), 0);
            $from_email = $this->input->post('email');
            var_dump($from_email);
      		$subject = 'Subscribe newsletter from website';
            $ip = $this->input->post('ip');
			$to_email = 'sales@gminsights.com';
			$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
			$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
			$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
			 $subject2 = 'Thank you for subscribing to our newsletters';
			
			if(!empty($from_email) && !empty($data)){
					$sql= " INSERT INTO `newslettersub` (`email`, `cat`, `ip`,`date`,`time`) VALUES ('$from_email', '$data', '$ip', '$dates', '$time')";

					$this->db->query($sql); 
			}

       
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


<p><strong>Newsletter subscription:</strong></p>
                <p>Dear Admin,</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Following Person subscribed newsletter from website.</p>
                <p><strong>Subscription Details :-</strong>&nbsp;</p>
                <p><strong>Subscribed Industry:&nbsp;</strong>'.$data.'</p>
                <p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
            
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
<p><br />Thank you for subscribing to our newsletters. You will receive periodic updates from us based on your selection.</p>

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
                
              redirect('thanks-newsletter-subscription');
            }

            exit;
            }
            else
            {
              
              redirect('thanks-newsletter-subscription');
          

            exit;
            }
 }
               
    }
   /* public function unsubscribe()
    {
    
        // load from spark tool
       // $this->load->spark('recaptcha-library/1.0.1');
        // load from CI library
        $this->load->library('recaptcha');

        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                echo "You got it!";
            }
        }

        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );
        $this->load->view('unsubnews', $data);
    }
    
    
         public function newsdeact()
        {
        $this->load->library('email');
            //get the form data
            $industry = $this->input->post('newsletter');
            $from_email = $this->input->post('email');
      $subject = 'Unsubscribe newsletter from website';
             $ip = $this->input->post('ip');
        
        
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


<p><strong>Newsletter Unsubscription:</strong></p>
                <p>Dear Admin,</p>
                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Following Person Unsubscribed newsletter from website.</p>
                <p><strong>Unsubscription Details :-</strong>&nbsp;</p>
                <p><strong>Unsubscribed Industry:&nbsp;</strong>'.$industry.'</p>
                <p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
            
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
                
              redirect('thanks-newsletter');
            

            exit;
            }
            else
            {
              
               redirect('thanks-newsletter');
          

            exit;
            }
        }*/
}
