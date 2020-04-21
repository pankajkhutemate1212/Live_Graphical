<?php defined('BASEPATH') or exit('No direct script access allowed');

class newsletter extends MY_Controller
{
    public function subscribe()
    {
	

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
                $data['title'] = 'Newsletter Subscription | Global Market Insights, Inc.';
	  $data['description'] = 'Newsletter Subscription | Global Market Insights, Inc.';
	  $data['keywords'] = 'Newsletter Subscription | Global Market Insights, Inc.';
        $this->load->view('recaptcha', $data);
    }
    public function unsubscribe()
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
    public function newsact()
        {
        $this->load->library('email');
            //get the form data
            $industry = $this->input->post('newsletter');
            $from_email = $this->input->post('email');
      $subject = 'Subscribe newsletter from website';
             $ip = $this->input->post('ip');
        
        
           $to_email = 'newsletter@gminsights.com';
        
    

       
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
                <p><strong>Subscribed Industry:&nbsp;</strong>'.$industry.'</p>
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
                
              redirect('thanks-newsletter-subscription');
            

            exit;
            }
            else
            {
              
               redirect('thanks-newsletter-subscription');
          

            exit;
            }
        }
         public function newsdeact()
        {
        $this->load->library('email');
            //get the form data
            $industry = $this->input->post('newsletter');
            $from_email = $this->input->post('email');
      $subject = 'Unsubscribe newsletter from website';
             $ip = $this->input->post('ip');
        
        
           $to_email = 'newsletter@gminsights.com';
        
    

       
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
        }
}
