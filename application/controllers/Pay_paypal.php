<?php defined('BASEPATH') OR exit('No direct script access allowed');

class pay_paypal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		/*---------------------------------------*/
		$this->load->library('session');
		/*---------------------------------------*/

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation'); 
	
	$this->load->library('email');

	}
    public function payment_yes()
{
	$this->load->view('element_view/head');
    $this->load->view('layout_view/pay_sucess');
	$this->load->view('element_view/foot');
}
  public function payment_no()
{
	$this->load->view('element_view/head');
    $this->load->view('layout_view/pay_cancel');
    $this->load->view('element_view/foot');

}
public function payment()
	{
		
		/* Payment form email data*/
		
    
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



					//$procost = $this->input->post('report_cost');
					//$rname = $this->input->post('rname');
					//$rid = $this->input->post('rid');

		$from_email = $this->input->post('email');
		$ip = $this->input->post('ip');
                   
                $subject = 'Buy Now - graphicalresearch.com';
           
                $subject2 = 'Thank you for contacting us';	   
                $to_email = 'payments@graphicalresearch.com';
         
                $procost = $this->input->post('lesYgOwsaqbjlsf');
                $rname = $this->input->post('ehjHGfsrilbfhihd');
                $rid = $this->input->post('ytrgKLIVchfihhjd');

                $procost=$this->decryptIt($procost);
                $rname =$this->decryptIt($rname );
                $rid =$this->decryptIt($rid);
				
        
        
        	$fname1 = $this->db->escape_str($fname);
		$lname1 = $this->db->escape_str($lname);
                $zip1 = $this->db->escape_str($zip);
                $from_email1 = $this->db->escape_str($from_email);
                $company1 = $this->db->escape_str($company);
                $phone1 = $this->db->escape_str($phone);
                $address1 = $this->db->escape_str($address);
                $city1 = $this->db->escape_str($city);
                $state1 = $this->db->escape_str($state);
                $country = $this->db->escape_str($country);
          
 if(!empty($fname1) && !empty($lname1) && !empty($from_email1) && !empty($phone1) && !empty($company1) && !empty($country) && !empty($city1) && !empty($address1) && !empty($zip1) && !empty($state1))
{                 
		
		 $timezone  = +05.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 



 					
$sql = "INSERT INTO `payments` (`first_name`, `last_name`, `payer_email`, `company`, `phone`, `payer_address`, `city`, `state`, `country`, `zip_code`, `report_id`, `report_name`, `payment_amount`, `ip`) VALUES

        

        ('$fname1', '$lname1', '$from_email1', '$company1', '$phone1', '$address1', '$city1', '$state1', '$country', '$zip1', '$rid', '$rname', '$procost', '$ip') ";



         $result = $this->db->query($sql);


	
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
Note: This mail came from official website of graphicalresearch.com.</b><p/>
</body>
</html>';

 	  

              $result = $this->email
                ->from($to_email, 'Payment Form: Graphical Research' )
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
               $this->email->send();
               

       

		
		$insert_data['name']=$_POST['fname'];
		$insert_data['email']=$_POST['email'];
		$insert_data['phone_number']=$_POST['phone'];
	//	$insert_data['address']=$_POST['address'];

//		$insert_data['report_id']=$_POST['report_id'];
$insert_data['report_prize']=$procost;
//$insert_data['license_type']=$_POST['report_lic'];

//$insert_data['company_name']=$_POST['company_name'];
//$insert_data['job_title']=$_POST['job_title'];

$paypal_email = 'payments@graphicalresearch.com';
$base = base_url('');

$idd = $rid;

		$return_url =  $base.'payment-successful/'.$idd;
		$cancel_url = $base.'payment-cancel/'.$idd;
		$notify_url = $base.'payment';

		$item_name = $rname;
		$item_amount = $procost;

		
		 
		
		
		// Check if paypal request or response
		if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){
		    $querystring = '';
		 
		    // Firstly Append paypal account to querystring
		    $querystring .= "?business=".urlencode($paypal_email)."&";
		 
		    // Append amount&amp;amp;amp;amp;amp;amp; currency (£) to quersytring so it cannot be edited in html
		 
		    //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
		    $querystring .= "item_name=".urlencode($item_name)."&";
		    $querystring .= "amount=".urlencode($item_amount)."&";
		 
		    //loop for posted values and append to querystring
		    foreach($_POST as $key => $value) {
		        $value = urlencode(stripslashes($value));
		        $querystring .= "$key=$value&";
		    }
		 
		    // Append paypal return addresses
		    $querystring .= "return=".urlencode(stripslashes($return_url))."&";
		    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
		    $querystring .= "notify_url=".urlencode($notify_url);
		 
		    // Append querystring with custom field
		    //$querystring .= "&amp;amp;amp;amp;amp;amp;custom=".USERID;
		 
		 ///var_dump('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
		    // Redirect to paypal IPN
		    //header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
//redirect('http://www.yahoo.com');
		    ///redirect('https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring ,'refresh');

		    redirect('https://www.paypal.com/cgi-bin/webscr'.$querystring ,'refresh');

		    exit();
		} else {
		   // Response from PayPal start

    // read the post from PayPal system and add 'cmd'
    $req = 'cmd=_notify-validate';
    foreach ($_POST as $key => $value) {
        $value = urlencode(stripslashes($value));
        $value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
        $req .= "&$key=$value";
    }
    
    // assign posted variables to local variables
    $data['item_name']          = $_POST['item_name'];
    $data['item_number']  = $_POST['item_number'];
 $data['payment_status']= $_POST['payment_status'];
    $data['payment_amount']     = $_POST['mc_gross'];
$data['payment_currency']   = $_POST['mc_currency'];
    $data['txn_id']             = $_POST['txn_id'];
 $data['receiver_email']= $_POST['receiver_email'];
$data['payer_email']   = $_POST['payer_email'];
    $data['custom']             = $_POST['custom'];
        
    // post back to PayPal system to validate
    $header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
    
    ///$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

    $fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
    
    if (!$fp) {
        // HTTP ERROR
        echo '<br><br>http error';
        echo '<pre>';var_dump($fp);echo '</pre>';
        
    } else {
        fputs($fp, $header . $req);
        while (!feof($fp)) {
            $res = fgets ($fp, 1024);
            if (strcmp($res, "VERIFIED") == 0) {
                

                echo '<br><br>verified';
        echo '<pre>';
        var_dump($res);
        var_dump('------------------');
        var_dump($fp);
        echo '</pre>';

       
            
            } else if (strcmp ($res, "INVALID") == 0) {
            
            echo '<br><br>payment invalid ';
        echo '<pre>';var_dump($res);echo '</pre>';
                
            }
        }
    fclose ($fp);
    }
			// response frm paypal end
		}
                
                
        }//end of validation here
        else{
            
              switch($procost){
		case 4500:
		$a=0;
		break;
		
		case 6500:
		$a=1;
		break;
		
		case 8500:
		$a=2;
		break;
		default:
		$a=0;
		break;
	      }
            
              redirect(base_url('secure-report-purchase/'.$a.'/'.$rid)); 
             
        }
     
	}
        
        
        function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return ( $qDecoded );
}
}