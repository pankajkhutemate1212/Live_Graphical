<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller
{
	function  __construct() {
		parent::__construct();
		$this->load->library('paypal_lib');
		$this->load->model('product');
		 $this->load->model('report_model');
	  $this->load->model('category_model');
	}
	
	function index(){
		$data = array();
		//get products data from database
        $data['products'] = $this->product->getRows();
		//pass the products data to view
		$this->load->view('products/index', $data);
	}
	
	function buy(){
		$procost = $this->input->post('procost');
		$rname = $this->input->post('rname');
		$rid = $this->input->post('rid');
		
		//Set variables for paypal form
		$paypalURL = 'https://www.paypal.com/cgi-bin/webscr'; //test PayPal api url
		$paypalID = 'paymentgmi@gmail.com'; //business email
		$returnURL = base_url().'securecheckout/confirm_transaction'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		//get particular product data
		//$product = $this->product->getRows($id);
		$userID = 1; //current user id
		$logo = base_url().'assets/images/codexworld-logo.png';
		
		$this->paypal_lib->add_field('business', $paypalID);
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $rname);
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number',  $rid);
		$this->paypal_lib->add_field('amount',  $procost);		
		$this->paypal_lib->image($logo);
		
		$this->paypal_lib->paypal_auto_form();
	}
}