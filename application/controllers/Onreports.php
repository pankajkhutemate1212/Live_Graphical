<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Onreports extends MY_Controller 
  {
    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('ongoing_report_model');
	  $this->load->model('category_model');
	}
    public function index()
    {
	  $data['reports'] = $this->ongoing_report_model->get_report();
	  $data['title'] = 'Upcoming Publish Practices | GM Insights';
	  $data['description'] = 'Industry Practices | GM Insights';
	  $data['keywords'] = 'Industry Practices | GM Insights';
	  $data['content'] = 'reports/ongoing_index';
	  $this->load->view('layouts/ongoing_master', $data);
	}
    public function main_cat()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['reports'] = $this->ongoing_report_model->get_cat_report($cat_id);
	  $data['title'] = $data['category']['name'].' | GM Insights';
	  $data['description'] = $data['category']['name'].'| GM Insights';
	  $data['keywords'] = $data['category']['name'].'| GM Insights';
	  $data['content'] = 'reports/ongoing_index';
	  $this->load->view('layouts/ongoing_master', $data);
	}
    public function ongoing_detail()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->ongoing_report_model->get_rep_detail($url);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].' | GM Insights';
	  $data['description'] = $data['reports']['meta_description'].'| GM Insights';
	  $data['keywords'] = $data['reports']['meta_keywords'].'| GM Insights';
	  $data['content'] = 'reports/ongoing_detail';
	  $this->load->view('layouts/ongoing_master', $data);
	}
      
  }
