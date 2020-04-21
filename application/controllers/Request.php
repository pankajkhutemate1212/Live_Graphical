<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Request extends MY_Controller 
{
  public function __construct()
  {
    parent::__construct();
	$this->load->model('report_model');
	$this->load->model('category_model');
	$this->load->model('sample_model');
	$this->load->library('form_validation');
  }
  public function index()
  {
    redirect('request/thanks');  
  }
  public function thanks()
  {
  //  $data['message'] = $this->session->set_flashdata('success', 'Thank you for your interest in Global Market Insights. One of our company representatives will contact you shortly.');
	$data['content'] = 'elements/message';
	$this->load->view('layouts/master', $data);
  }
}