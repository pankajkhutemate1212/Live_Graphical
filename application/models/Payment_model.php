<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function save_payment()

  {          
      $fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
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
                    $email = $this->input->post('email');
					$ip = $this->input->post('ip');
					
					
					$fname1 = $this->db->escape_str($fname);
		 $lname1 = $this->db->escape_str($lname);
$zip1 = $this->db->escape_str($zip);
$from_email1 = $this->db->escape_str($email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);
$address1 = $this->db->escape_str($address);
$city1 = $this->db->escape_str($city);
$state1 = $this->db->escape_str($state);
					
$sql = "INSERT INTO `payments` (`first_name`, `last_name`, `payer_email`, `company`, `phone`, `payer_address`, `city`, `state`, `country`, `zip_code`, `report_id`, `report_name`, `payment_amount`, `ip`) VALUES

        

        ('$fname1', '$lname1', '$from_email1', '$company1', '$phone1', '$address1', '$city1', '$state1', '$country', '$zip1', '$rid', '$rname', '$procost', '$ip') ";



         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {
                     return 1; 

         }

  }
}

