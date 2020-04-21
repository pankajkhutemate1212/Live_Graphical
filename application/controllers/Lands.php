<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Lands extends Frontend_Controller 
  {
    public function __construct(){
      parent::__construct();
     $this->load->model('report_model');
	  $this->load->model('page_model');
       $this->load->model('press_model');
    }
    public function index()
    {   
      $data['press11'] = $this->press_model->home_get_report();
      $data['reports'] = $this->report_model->get_report_home();
      $data['title'] = 'Market research reports, consulting: Graphical Market Research';
      $data['description'] = '';
      $data['keywords'] = '';
       $data['meta_index']='index';
      $data['content'] = 'layout_files/homepage_view';
      $this->load->view('master_files/master_layout', $data);
    }
        public function home2()
    {   
      $data['press11'] = $this->press_model->home_get_report();
      $data['reports'] = $this->report_model->get_report_home();
      $data['title'] = 'Graphical Research | Market Research Reports and Consulting Services';
      $data['description'] = 'The professional consulting and market research firm Graphical Research is a leading provider of regional & global syndicated research reports, custom research, consulting services with exhaustive market data and breakdown by industry specialists.';
      $data['keywords'] = 'Syndicated Market Research Reports, Custom Research, Industry Analysis, Market Size and Forecast, Growth Strategy & Planning, Innovation, Consulting';
       $data['meta_index']='index';
      $data['content'] = 'layout_files/homepage_view2';
      $this->load->view('master_files/master_layout', $data);
    }
	
	public function home2_amp()
    {  
      

      $data['press11'] = $this->press_model->home_get_report();
      $data['reports'] = $this->report_model->get_report_home();
      $data['title'] = 'Graphical Research | Market Research Reports and Consulting Services';
      $data['description'] = 'The professional consulting and market research firm Graphical Research is a leading provider of regional & global syndicated research reports, custom research, consulting services with exhaustive market data and breakdown by industry specialists.';
      $data['keywords'] = 'Syndicated Market Research Reports, Custom Research, Industry Analysis, Market Size and Forecast, Growth Strategy & Planning, Innovation, Consulting';
      $data['meta_index']='index';
      // $data['content'] = 'layout_files/amp/home_amp';
      $this->load->view('layout_files/amp/home_amp', $data);
    }
	
	
  }