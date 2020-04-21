<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Segmentation extends MY_Controller 
  {
    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('report_model');
	  $this->load->model('category_model');
	}
    public function index()
    {
	  $data['reports'] = $this->report_model->get_report();
	  $data['title'] = 'Industry Practices';
	  $data['description'] = 'Industry Practices ';
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
	  $data['title'] = $data['category']['name'].'';
	  $data['description'] = $data['category']['name'].'';
	  $data['keywords'] = $data['category']['name'].'';
	  $data['content'] = 'reports/index';
	  $this->load->view('layouts/master', $data);
	}
    public function Industry_Coverage_Detail()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail($url);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].'';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['ICD']='Active';
	  
	 // $data['content'] = 'samples/noindex_segment';
	 //$this->load->view('layouts/master_noindex', $data);
	   $data['content'] = 'layout_files/reportdetail_view';
	  $this->load->view('master_files/master_layout', $data);
	}
	
	   public function All_Category(){
	
	
	  $data['category'] = $this->category_model->get_all_category();
	  //$data['title'] = $data['category']['meta_title'].'';
	  //$data['description'] = $data['category']['meta_description'].'';
	  //$data['keywords'] = $data['category']['meta_keywords'].'';
	  
	  $data['content'] = 'layout_files/all_main_category';
	  $this->load->view('master_files/master_layout', $data);
	
	
    }
     
  }
