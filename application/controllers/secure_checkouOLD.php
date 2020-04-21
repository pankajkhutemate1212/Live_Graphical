<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
  class securecheckout extends MY_Controller 
  {
    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('report_model');
	  $this->load->model('category_model');
	  $this->load->model('payment_model');
	  $this->load->library('email');
	
	}
    public function index()
    {
	  $data['reports'] = $this->report_model->get_report();
	  $data['title'] = 'Industry Practices';
	  $data['description'] = 'Industry Practices';
	  $data['keywords'] = 'Industry Practices';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
	}
      
 public function Secure_cHeckout_pay($lic, $rep_id)
    {
	  $data['reports'] = $this->report_model->get_report();
	  $data['title'] = 'Industry Practices';
	  $data['description'] = 'Industry Practices';
	  $data['keywords'] = 'Industry Practices';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
	}
    public function main_cat()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['reports'] = $this->report_model->get_cat_report($cat_id);
	  $data['title'] = 'Checkout process- Register';
	  $data['description'] = $data['category']['name'].'';
	  $data['keywords'] = $data['category']['name'].'';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
	}
	/*public function paymenta()
	{
		$id = $this->uri->segment($this->uri->total_segments());
	    $data['reports'] = $this->report_model->get_rep_detail_id($id);


		$procost = $this->input->post('procost');
		$rname = $this->input->post('rname');
		$rid = $this->input->post('rid');
		
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
			
		
		
		  $data['title'] = 'Checkout process- Register';
		  $data['description'] = $data['reports']['meta_description'].'';
		  $data['keywords'] = $data['reports']['meta_keywords'].'';
		
          $data['content'] = 'secureauthpay';
		  $this->load->view('layouts/master_pay', $data);
	}
    public function payment()
	{	$id = $this->uri->segment($this->uri->total_segments());
	    $data['reports'] = $this->report_model->get_rep_detail_id($id);
		
		$procost = $this->input->post('procost');
		$rname = $this->input->post('rname');
		$rid = $this->input->post('rid');
		
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
			
		//  $url = $this->uri->segment($this->uri->total_segments());
		 // $data['reports'] = $this->report_model->get_rep_detail($url);
		 
		 
		  //$cat_id = $data['reports']['category_id'];
		  //$data['category'] = $this->category_model->get_rep_category($cat_id);
		  $data['title'] = 'Checkout process - Register';
		  $data['description'] = $data['reports']['meta_description'].'';
		  $data['keywords'] = $data['reports']['meta_keywords'].'';
		  $data['content'] = 'transaction';
		  $this->load->view('layouts/master_pay', $data);
	}*/
	public function paymenta()
	{
		//var_dump($rid);
		// Report runtime errors
		
error_reporting(E_ALL & ~E_NOTICE);
		$id = $this->uri->segment($this->uri->total_segments());
		
		
		
		$test=$this->input->get('d', TRUE);
		
		if($test=="y"){

			 
			 $data['reports'] = $this->report_model->get_rep_detail_id_from_pay_links_table($id);
		}else{
			
			 $data['reports'] = $this->report_model->get_rep_detail_id($id);
		}
	       
	    

		$procost = $this->input->post('procost');
		$rname = $this->input->post('rname');
		$rid = $this->input->post('rid');
		
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
			
		
		
		  $data['title'] = 'Checkout process- Register';
		  $data['description'] = $data['reports']['meta_description'].'';
		  $data['keywords'] = $data['reports']['meta_keywords'].'';
		  
		  
		 
          $data['content'] = 'secureauthpay';
		  $this->load->view('layouts/master_pay', $data);
	}
    public function payment()
	{	$id = $this->uri->segment($this->uri->total_segments());
	    $data['reports'] = $this->report_model->get_rep_detail_id($id);
		
		$procost = $this->input->post('procost');
		$rname = $this->input->post('rname');
		$rid = $this->input->post('rid');
		
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
			
		//  $url = $this->uri->segment($this->uri->total_segments());
		 // $data['reports'] = $this->report_model->get_rep_detail($url);
		 
		 
		  //$cat_id = $data['reports']['category_id'];
		  //$data['category'] = $this->category_model->get_rep_category($cat_id);
		  $data['title'] = 'Checkout process - Register';
		  $data['description'] = $data['reports']['meta_description'].'';
		  $data['keywords'] = $data['reports']['meta_keywords'].'';
		// $data['content'] = 'transaction';
		  //$this->load->view('layouts/master_pay', $data);
		
		redirect('securecheckout/paymenta/'.$id);
	}
	
	/* authorize payment start */
	public function paya()
{
	$this->load->view("sim");
}
/* authorize net payment */
	 public function authpay_secure()
	{

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		//$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
		
				$country = $this->input->post('country');
				$zip = $this->input->post('zip');
				$company = $this->input->post('company');



					$procost = $this->input->post('procost');
					$rname = $this->input->post('rname');
					$rid = $this->input->post('rid');
					
		
					           $from_email = $this->input->post('email');
					            $subject =  'Payment form.';
					           // $message = $this->input->post('message');
					             $ip = $this->input->post('ip');
		
		
$to_email = 'payments@gminsights.com';
		
	

	   
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


<p><strong>Payment form:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one payment form request. Please find the details below.</p>
				<p style="text-align: center;"><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>First Name:&nbsp;</strong>'.$fname.'</p>
				<p><strong>Last Name:&nbsp;</strong>'.$lname.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Address</strong>:&nbsp;'.$address.'</p>
				<p><strong>City</strong>:&nbsp;'.$city.'</p>
				<p><strong>Country</strong>:&nbsp;'.$country.'</p>
				<p><strong>Company</strong>:&nbsp;'.$company.'</p>
				
				<p style="text-align: center;"><strong>Order purchase detail :-</strong>&nbsp;</p>
					<p><strong>Report Name</strong>:&nbsp;'.$rname.'</p>
						<p><strong>Report id</strong>:&nbsp;'.$rid.'</p>
							<p style="color: #dd0000;"><strong>Selected License price</strong>:&nbsp;$'.$procost.'</p>
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
               $this->email->send();
               
                //------data----------------------
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
		
		$data['fname']= $fname;
		$data['lname']= $lname;
		$data['email']= $from_email;
		$data['phone']= $phone;
		
		$data['address']= $address;
		$data['city']= $city;
		$data['state']= $state;
		
		$data['country']= $country;
		$data['zip']= $zip;
		$data['company']= $company;
                
              $url = $this->uri->segment($this->uri->total_segments());
		  $data['reports'] = $this->report_model->get_rep_detail($url);
		  $cat_id = $data['reports']['category_id'];
		  $data['category'] = $this->category_model->get_rep_category($cat_id);
		  $data['title'] = $data['reports']['meta_title'].'';
		  $data['description'] = $data['reports']['meta_description'].'';
		  $data['keywords'] = $data['reports']['meta_keywords'].'';
		  $data['content'] = 'paypal_secure';
		  $this->load->view('layouts/master_pay', $data);
               
             //auto responder mail
             $to_email = 'payments@gminsights.com';
		
	

	
		 
	}
	
	 public function paypal_secure()
	{

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		//$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
		
				$country = $this->input->post('country');
				$zip = $this->input->post('zip');
				$company = $this->input->post('company');



					$procost = $this->input->post('procost');
					$rname = $this->input->post('rname');
					$rid = $this->input->post('rid');
					
		
					           $from_email = $this->input->post('email');
					            $subject =  'Payment form.';
					           // $message = $this->input->post('message');
					             $ip = $this->input->post('ip');
		
		
$to_email = 'payments@gminsights.com';
		
	

	   
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


<p><strong>Payment form:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one payment form request. Please find the details below.</p>
				<p style="text-align: center;"><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>First Name:&nbsp;</strong>'.$fname.'</p>
				<p><strong>Last Name:&nbsp;</strong>'.$lname.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Address</strong>:&nbsp;'.$address.'</p>
				<p><strong>City</strong>:&nbsp;'.$city.'</p>
				<p><strong>Country</strong>:&nbsp;'.$country.'</p>
				<p><strong>Company</strong>:&nbsp;'.$company.'</p>
				
				<p style="text-align: center;"><strong>Order purchase detail :-</strong>&nbsp;</p>
					<p><strong>Report Name</strong>:&nbsp;'.$rname.'</p>
						<p><strong>Report id</strong>:&nbsp;'.$rid.'</p>
							<p style="color: #dd0000;"><strong>Selected License price</strong>:&nbsp;$'.$procost.'</p>
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
               $this->email->send();
               
                //------data----------------------
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
		
		$data['fname']= $fname;
		$data['lname']= $lname;
		$data['email']= $from_email;
		$data['phone']= $phone;
		
		$data['address']= $address;
		$data['city']= $city;
		$data['state']= $state;
		
		$data['country']= $country;
		$data['zip']= $zip;
		$data['company']= $company;
                
           //   $url = $this->uri->segment($this->uri->total_segments());
		 // $data['reports'] = $this->report_model->get_rep_detail($url);
		  //$cat_id = $data['reports']['category_id'];
		  //$data['category'] = $this->category_model->get_rep_category($cat_id);
		  //$data['title'] = $data['reports']['meta_title'].'';
		  //$data['description'] = $data['reports']['meta_description'].'';
		  //$data['keywords'] = $data['reports']['meta_keywords'].'';
		  $data['content'] = 'paypal_secure';
		  $this->load->view('layouts/master_pay', $data);
               
             //auto responder mail
             $to_email = 'payments@gminsights.com';
		
	

	
		 
	}


 public function authorizenet_secure()
	{

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		//$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
		
				$country = $this->input->post('country');
				$zip = $this->input->post('zip');
				$company = $this->input->post('company');



					$procost = $this->input->post('procost');
					$rname = $this->input->post('rname');
					$rid = $this->input->post('rid');
					
		
					           $from_email = $this->input->post('email');
					            $subject =  'Payment form.';
					           // $message = $this->input->post('message');
					             $ip = $this->input->post('ip');
		
		 $fname_trim=trim($fname);
		 $lname_trim=trim($lname);
		 $from_email_trim=trim($from_email);
		 $phone_trim=trim($phone);
		 $company_trim=trim($company);
		 $country_trim=trim($country);
		 $city_trim=trim($city);
		 $address_trim=trim($address);
		 $zip_trim=trim($zip);
		 $state_trim=trim($state);
		
		if(!empty($fname_trim) && !empty($lname_trim) && !empty($from_email) && !empty($phone_trim) && !empty($company_trim) && !empty($country_trim) && !empty($city_trim) && !empty($address_trim) && !empty($zip_trim) && !empty($state_trim) && $fname_trim!='<script>alert("xssvuln")</script>')
{
		$this->payment_model->save_payment();
$to_email = 'payments@gminsights.com';
		
	

	   
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


<p><strong>Payment form:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one payment form request. Please find the details below.</p>
				<p style="text-align: center;"><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>First Name:&nbsp;</strong>'.$fname.'</p>
				<p><strong>Last Name:&nbsp;</strong>'.$lname.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Address</strong>:&nbsp;'.$address.'</p>
				<p><strong>City</strong>:&nbsp;'.$city.'</p>
				<p><strong>Country</strong>:&nbsp;'.$country.'</p>
				<p><strong>Company</strong>:&nbsp;'.$company.'</p>
				
				<p style="text-align: center;"><strong>Order purchase detail :-</strong>&nbsp;</p>
					<p><strong>Report Name</strong>:&nbsp;'.$rname.'</p>
						<p><strong>Report id</strong>:&nbsp;'.$rid.'</p>
							<p style="color: #dd0000;"><strong>Selected License price</strong>:&nbsp;$'.$procost.'</p>
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
               $this->email->send();
               
                //------data----------------------
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
		
		$data['fname']= $fname;
		$data['lname']= $lname;
		$data['email']= $from_email;
		$data['phone']= $phone;
		
		$data['address']= $address;
		$data['city']= $city;
		$data['state']= $state;
		
		$data['country']= $country;
		$data['zip']= $zip;
		$data['company']= $company;
                
           //   $url = $this->uri->segment($this->uri->total_segments());
		 // $data['reports'] = $this->report_model->get_rep_detail($url);
		  //$cat_id = $data['reports']['category_id'];
		  //$data['category'] = $this->category_model->get_rep_category($cat_id);
		  //$data['title'] = $data['reports']['meta_title'].'';
		  //$data['description'] = $data['reports']['meta_description'].'';
		  //$data['keywords'] = $data['reports']['meta_keywords'].'';
		  $data['content'] = 'paypal_secure';
		  $this->load->view('layouts/master_pay', $data);
               
             //auto responder mail
             $to_email = 'payments@gminsights.com';
		
	
}
else{
	switch($procost){
		case 4500:
		$a='sugmp';
		break;
		
		case 6500:
		$a='mugmp';
		break;
		
		case 8500:
		$a='eugmp';
		break;
		default:
		$a='sugmp';
		break;
	}
	//var_dump(!empty(trim($fname)));
	redirect(base_url('securecheckout/paymenta/'.str_replace('GMI','',$rid).'?gmpaycod='.$a));
}
	
		 
	}

 public function authsecure()
	{

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		//$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
		
				$country = $this->input->post('country');
				$zip = $this->input->post('zip');
				$company = $this->input->post('company');



					$procost = $this->input->post('procost');
					$rname = $this->input->post('rname');
					$rid = $this->input->post('rid');
					
		
					           $from_email = $this->input->post('email');
					            $subject =  'Payment form.';
					           // $message = $this->input->post('message');
					             $ip = $this->input->post('ip');
		
		
$to_email = 'payments@gminsights.com';
		
	

	   
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


<p><strong>Payment form:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one payment form request. Please find the details below.</p>
				<p style="text-align: center;"><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>First Name:&nbsp;</strong>'.$fname.'</p>
				<p><strong>Last Name:&nbsp;</strong>'.$lname.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Address</strong>:&nbsp;'.$address.'</p>
				<p><strong>City</strong>:&nbsp;'.$city.'</p>
				<p><strong>Country</strong>:&nbsp;'.$country.'</p>
				<p><strong>Company</strong>:&nbsp;'.$company.'</p>
				
				<p style="text-align: center;"><strong>Order purchase detail :-</strong>&nbsp;</p>
					<p><strong>Report Name</strong>:&nbsp;'.$rname.'</p>
						<p><strong>Report id</strong>:&nbsp;'.$rid.'</p>
							<p style="color: #dd0000;"><strong>Selected License price</strong>:&nbsp;$'.$procost.'</p>
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
               $this->email->send();
               
                //------data----------------------
		$data['rname']= $rname;
		$data['procost']= $procost;
		$data['rid']= $rid;
		
		$data['fname']= $fname;
		$data['lname']= $lname;
		$data['email']= $from_email;
		$data['phone']= $phone;
		
		$data['address']= $address;
		$data['city']= $city;
		$data['state']= $state;
		
		$data['country']= $country;
		$data['zip']= $zip;
		$data['company']= $company;
                
              $url = $this->uri->segment($this->uri->total_segments());
		  $data['reports'] = $this->report_model->get_rep_detail($url);
		  $cat_id = $data['reports']['category_id'];
		  $data['category'] = $this->category_model->get_rep_category($cat_id);
		  $data['title'] = $data['reports']['meta_title'].'';
		  $data['description'] = $data['reports']['meta_description'].'';
		  $data['keywords'] = $data['reports']['meta_keywords'].'';
		  $data['content'] = 'paypal_secure';
		  $this->load->view('layouts/master_pay', $data);
               
             //auto responder mail
             $to_email = 'payments@gminsights.com';
		
	

	
		 
	}
	public function confirm_transaction()
	{
		
		
		 
		  $data['content'] = 'paypal_success';
		  $this->load->view('layouts/master_pay', $data);
	}
	
     public function upcoming_detail()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail($url);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].' | GM Insights';
	  $data['description'] = $data['reports']['meta_description'].'| GM Insights';
	  $data['keywords'] = $data['reports']['meta_keywords'].'| GM Insights';
	  $data['content'] = 'samples/noindex_request_up';
	  $this->load->view('layouts/master_noindex', $data);
	}
     
  }
