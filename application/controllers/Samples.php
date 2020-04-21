<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Samples extends MY_Controller 
  {
    public function __construct()
    {
      parent::__construct();
	  $this->load->model('report_model');
	  $this->load->model('category_model');
	  $this->load->model('sample_model');
	  $this->load->library('form_validation');
	  $this->load->model('country_model');
	}
    public function index(){}

    public function inquiry(){
      $repId = $this->uri->segment($this->uri->total_segments());
      if(!$repId)
      {
      	show_404(); 
      }
	  $data['reports'] = $this->sample_model->getreportname($repId);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = 'Inquiry before buying  | Graphical Market Research';
	  $data['description'] = 'Market Research, Industry Analysis Reports';
	  $data['keywords'] = '';
	  $data['country_data'] = $this->country_model->get_all_country();
	  $data['content'] = 'layout_files/inquiry_form_view';
      
	  $this->load->view('master_files/master_layout', $data);
	  
     /* if($this->form_validation->run('inquiry') == FALSE) 
      {
        $data['content'] = 'layout_files/inquiry_form_view';
      
		$this->load->view('master_files/master_layout', $data);
	  }else
	  {
		$this->sample_model->request($repId, 'E');
		$leadId = $this->sample_model->leadId();
		if($leadId){
		$send = $this->sample_model->sendEmail($leadId['id'], 'E');
		if($send){
		
		
		$data['content'] = 'elements/message';
		$this->load->view('layouts/master', $data);
	  }
    }
    } */
    }
    
  
    public function requestsample(){
      $repId = $this->uri->segment($this->uri->total_segments());
      if(!$repId)
      {
      	show_404();
      }
	  $data['reports'] = $this->sample_model->getreportname($repId);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
      if($this->form_validation->run('inquiry') == FALSE) 
      {
        $data['content'] = 'samples/noindex_request';
	  $this->load->view('layouts/master_noindex', $data);
	  }else
	  {
		$this->sample_model->request($repId, 'E');
		$leadId = $this->sample_model->leadId();
		if($leadId){
		$send = $this->sample_model->sendEmail($leadId['id'], 'E');
		if($send){
		
		
		$data['content'] = 'elements/message';
		$this->load->view('layouts/master', $data);
	  }
    }
    }
    }
    
    public function roc(){
      $repId = $this->uri->segment($this->uri->total_segments());
      if(!$repId)
      {
      	show_404();
      }
	  $data['reports'] = $this->sample_model->getreportname($repId);
	  $cat_id = $data['reports']['category_id'];
	   $data['title'] = 'Request for customization  | Graphical Market Research';
	   $data['country_data'] = $this->country_model->get_all_country();
	  $data['description'] = '';
	  $data['keywords'] = '';
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
      if($this->form_validation->run('inquiry') == FALSE) 
      {
                $data['content'] = 'layout_files/customization_form_view';
		$this->load->view('master_files/master_layout', $data);
	  }else
	  {
		$this->sample_model->request($repId, 'E');
		$leadId = $this->sample_model->leadId();
		if($leadId){
		$send = $this->sample_model->sendEmail($leadId['id'], 'E');
		if($send){
		
	
		//$data['content'] = 'elements/message';
		//$this->load->view('layouts/master', $data);
		
		$data['content'] = 'layout_files/reportdetail_view';
	        $this->load->view('master_files/master_layout', $data);
	  }
    }
    }
    }


    public function noindex_method(){
      $repId = $this->uri->segment($this->uri->total_segments());
      if(!$repId)
      {
      	show_404();
      }
	  $data['reports'] = $this->sample_model->getreportname($repId);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
      if($this->form_validation->run('inquiry') == FALSE) 
      {
        //$data['content'] = 'samples/inquiry';
        $data['content'] = 'samples/noindex_method';
		//$this->load->view('layouts/master', $data);
	  }else
	  {
		$this->sample_model->request($repId, 'E');
		$leadId = $this->sample_model->leadId();
		if($leadId){
		$send = $this->sample_model->sendEmail($leadId['id'], 'E');
		if($send){
		
	
		$data['content'] = 'elements/message';
		$this->load->view('layouts/master', $data);
	  }
    }
    }
    }
    public function sample()
    {
      $repId = $this->uri->segment($this->uri->total_segments());
      if(!$repId)
      {
      	show_404();
      }
      $data['reports'] = $this->sample_model->getreportname($repId);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
      if($this->form_validation->run('sample') == FALSE) 
      {
       
	    $data['content'] = 'elements/message';
	    $this->load->view('layouts/master', $data);
	  }else
	  {
	    $val = $this->sample_model->request($repId, 'S');
		if($val == 1)
		{
          $leadId = $this->sample_model->leadId();
		  if($leadId)
		  {
			redirect('thanks');
		  }
		}
	  }
    }
    
    public function contact()
    {
	  /*$data['title'] = 'Contact Us  | Graphical Market Research';
	  $data['description'] = '';
	  $data['keywords'] = '';
	  $data['meta_index']='index';
	  $data['content'] = 'layout_files/contact_us';
      $this->load->view('master_files/master_layout', $data); */
          
      if($this->form_validation->run('contact') == FALSE) 
      {
        $data['err_msg'] = '<div class="errors">'.validation_errors().'</div>';
      
      $data['title'] = "Contact Us | Graphical Market Research";
      $data['description'] = "Stay in touch with Graphical Research to get UpToDate and accurate market data by industry experts. ";
      $data['country_data'] = $this->country_model->get_all_country();
      $data['keywords'] = "Contact Us, Stay in touch with Graphical Research";
       $data['content'] = 'layout_files/contact_us';
      $this->load->view('master_files/master_layout', $data); 
	  }else{
		$val = $this->sample_model->request('', 'C');
		if($val == 1)
		{
          $leadId = $this->sample_model->leadId();
		  if($leadId)
		  {
		    redirect('thanks');
		  }
		}
	  }
    }
  }