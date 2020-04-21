<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Filters extends MY_Controller 
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('report_model');
      $this->load->model('category_model');
      $this->load->model('country_model');
    }
    public function index()
    {  
         
      ini_set('memory_limit', '51222M');
      $findtext = $this->input->get('findtext');
      $industry_type = $this->input->get('industry_type');
      
      $data['records'] = $this->report_model->get_search_result($findtext, $industry_type);
      $data['catcustom']=$this->report_model->get_all_catcustom();
      $data['country_data'] = $this->country_model->get_all_country();
      $data['title'] = 'Search Result Page';
      $data['description'] = 'Search Result Page';
      $data['keywords'] = 'Search Result Page';
      
      $data['content'] = 'layout_files/search_result_view';
	  $this->load->view('master_files/master_layout', $data);
      
     
      //$data['content'] = 'filters/index';
     // $this->load->view('layouts/article', $data);
    }
  }