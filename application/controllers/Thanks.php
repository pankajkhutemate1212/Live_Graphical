<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Thanks extends MY_Controller
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
    	  $data['title'] = 'Thank You | Graphical Market Research';
	  $data['description'] = 'Thank You  | Graphical Market Research';
	  $data['keywords'] = 'Thank You  | Graphical Market Research';
	  
	  $data['content'] = 'layout_files/message';
	  $this->load->view('master_files/master_layout', $data);
    }
	
  }