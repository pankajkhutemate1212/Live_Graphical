<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Upcomingreports extends MY_Controller 
  {
    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('ongoing_report_model');
	  $this->load->model('report_model');
	  $this->load->model('category_model');
	}
    public function index()
    {
	   $data['reports'] = $this->ongoing_report_model->get_report();
	   
	   $data['catcustom']=$this->report_model->get_all_catcustom();
	   
	  $data['title'] = 'Upcoming Market Research Reports - Global Market Insights
';
	  $data['description'] = 'Upcoming Market Research Reports, Industry Analysis, Custom Research - Global Market Insights
';
	  $data['keywords'] = 'Upcoming Market Research Reports, Industry Analysis, Custom Research - Global Market Insights
';
	  $data['content'] = 'reports/ongoing_index';
	  $this->load->view('layouts/ongoing_master', $data);
	}
    public function main_cat()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['reports'] = $this->ongoing_report_model->get_cat_report($cat_id);
	  $data['title'] = $data['category']['name'].'';
	  $data['description'] = $data['category']['name'].'';
	  $data['keywords'] = $data['category']['name'].'';
	  $data['content'] = 'reports/ongoing_index';
	  $this->load->view('layouts/ongoing_master', $data);
	}
    public function ongoing_detail()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->ongoing_report_model->get_rep_detail($url);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].' ';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['content'] = 'reports/ongoing_detail';
	  $this->load->view('layouts/ongoing_master', $data);
	}
      
  }
