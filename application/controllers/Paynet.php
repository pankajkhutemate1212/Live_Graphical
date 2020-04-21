<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
  class paynet extends MY_Controller 
  {
    public function __construct()
    {
	  parent::__construct();
	  
	}
public function index()
	{
$this->load->library('merchant_authorize_net_sim');

$settings = array(
    'api_login_id' => '74QeAnW8FW7',
    'transaction_key' => '6avVSk7wM3Y39f8H',
    'developer_mode' => true,
);
$this->merchant->initialize($settings);

$params = array(
    'amount' => 10.00,
    'currency' => 'USD',
    'return_url' => 'http://www.gminsights.com',
    'cancel_url' => 'http://www.gminsights.com',
);
$response = $this->merchant->purchase($params);

}
}