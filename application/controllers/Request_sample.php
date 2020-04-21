<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Request_sample extends MY_Controller 
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
    public function index()
    {
	  $data['reports'] = $this->report_model->get_report();
	  $data['title'] = 'Industry Practices';
	  $data['description'] = 'Industry Practices';
	  $data['keywords'] = 'Industry Practices';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
	}
      
      
       public function dynamic_form()
	{
           
    
	
   
	  $id = $this->uri->segment(2);
	  $data['reports'] = $this->report_model->get_rep_detail_id($id);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['country_data'] = $this->country_model->get_all_country();
	  
      //$data['title'] = $data['reports']['meta_title'].' ';
           
           
            if ($this->uri->segment(3) == "sample")
            {
                $data['title'] = 'Request a Sample | '.$data['reports']['meta_title'].' ';
                $data['breadcumbtitle'] = 'Request a Sample';
                $data['sentence'] = 'To request a sample copy for this report, please complete the form below';
            } 
            elseif ($this->uri->segment(3) == "table-of-content")
            {
                $data['title'] = 'Request Table of Content | '.$data['reports']['meta_title'].' ';
                $data['breadcumbtitle'] = 'Request Table of Content';
                $data['sentence'] = 'To request a copy of the table of contents for this report, please complete the form below';
            } 
            elseif ($this->uri->segment(3) == "inquiry-before-buying")
            {
                $data['title'] = 'Inquiry Before Buying | '.$data['reports']['meta_title'].' ';
                $data['breadcumbtitle'] = 'Inquiry Before Buying';
                $data['sentence'] = 'To inquire before purchase, please complete the form below.';
            } 
           elseif ($this->uri->segment(3) == "customize-this-report")
            {
                $data['title'] = 'Request Customization | '.$data['reports']['meta_title'].' ';
                $data['breadcumbtitle'] = 'Request Customization';
               $data['sentence'] = 'To get customized report, please complete the form below.';
            }
            else 
            {
                $data['title'] = $data['reports']['meta_title'].' ';
                $data['sentence'] = 'To request, please complete the form below.';
            }
	  
           
      $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  
	  $data['content'] = 'layout_files/dynamic_form';
	  $this->load->view('master_files/master_layout', $data);

	}
      
      
    public function main_cat()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['reports'] = $this->report_model->get_cat_report($cat_id);
	  $data['title'] = $data['category']['name'].'';
	  $data['description'] = $data['category']['name'].'';
	  $data['keywords'] = $data['category']['name'].'';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
	}
    public function detail()
	{
		$id = $this->uri->segment($this->uri->total_segments());
	  //$url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail_id($id);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	    $data['country_data'] = $this->country_model->get_all_country();
	  $data['title'] = 'Request Sample-'.$data['reports']['meta_title'].'';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['content'] = 'layout_files/noindex_request_sample_view';
	  $this->load->view('master_files/master_layout', $data);
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
    
     public function upcoming_detail()
	{
		
	  $id = $this->uri->segment(1);
	  $data['reports'] = $this->report_model->get_rep_detail_id($id);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['country_data'] = $this->country_model->get_all_country();
	  $data['title'] = $data['reports']['meta_title'].' ';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  
	  $data['content'] = 'layout_files/table_of_content ';
	  $this->load->view('master_files/master_layout', $data);
	 // $data['content'] = 'samples/noindex_request_up';
	  //$this->load->view('layouts/master_noindex', $data); 
	}
          public function toc()
	{
		
	  $id = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail_id($id);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].' ';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['content'] = 'samples/noindex_request_up';
	  $this->load->view('layouts/master_noindex', $data);
	}
	
	   public function check_country()
    {
        $country_name = $_POST['search_data'];
        //$country_name ="Aland Islands";
        $data['country_data'] = $this->country_model->get_validated_country($country_name);
        
        if($data['country_data']==1)
        {
            echo '1';
        }
    }
  }
