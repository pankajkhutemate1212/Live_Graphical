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
	  $data['title'] = 'Buy Now | Secure Payment Process';
	  $data['description'] = 'Industry Practices';
	  $data['keywords'] = 'Industry Practices';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
	}
      
 public function Secure_cHeckout_pay($lic, $rep_id)
    {
	  
	  
      $paylinkcheck=$this->input->get('d');
	   
	  $data['paylinkd']=$paylinkcheck;
	  if($paylinkcheck=="y"){
		  
	 $data['reports']= $this->report_model->get_rep_detail_id_from_pay_links_table($rep_id);
	 
	 
		 
	  }	else{
		  
		$data['reports'] = $this->report_model->purchase_get_report($rep_id);  
		$data['rep_lic']=0;
     	if($lic == 1)
	 	{
	 		$data['rep_lic']=1;
	 	}  
	  }
		
	  $data['title'] = 'Buy Now | Secure Payment Process';
	  $data['description'] = 'Buy Now | Secure Payment Process';
	  $data['keywords'] = 'Buy Now | Secure Payment Process';
	  $data['content'] = 'layout_files/payment_form';
	  $this->load->view('master_files/master_layout', $data);
	}
      
  }