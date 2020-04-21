<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Toc extends MY_Controller 
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
	  $data['title'] = 'Industry Practices ';
	  $data['description'] = 'Industry Practices ';
	  $data['keywords'] = 'Industry Practices ';
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
    public function Pub_Toc_Detail()
	{
          $id = $this->uri->segment(2);
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail($id);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].'Table of Content ';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['isactive']='Active';
	 //$data = array('active' => 'a1');
	   
	  //$data['content'] = 'samples/noindex_toc';
	  $data['content'] = 'layout_files/reportdetail_view';
	  $this->load->view('master_files/master_layout', $data);
	}
	
	 public function detail_id()
	{
	  $id = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail_id($id);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].' ';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['content'] = 'samples/noindex_toc';
	  $this->load->view('layouts/master_noindex', $data);
	}
     
  }
