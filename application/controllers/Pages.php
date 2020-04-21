<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Pages extends MY_Controller
  {
    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('report_model');
	  $this->load->model('page_model');
      $this->load->model('blog_model');
	}
    public function index()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
      $data['content'] = 'pages/brochure';
      $this->load->view('layouts/static', $data);
    }
    public function about()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = 'About Us | Graphical Research';
      $data['description'] = 'Graphical Research is a business research firm that provides industry insights, market forecast and strategic inputs through granular research reports and advisory services. ';
      $data['keywords'] = 'About Graphical Research';
      $data['content'] = 'layout_files/dynamic_page';
	  $this->load->view('master_files/master_layout', $data);
	}
	public function amp_about()
    {
    $url = $this->uri->segment($this->uri->total_segments()-1);
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = 'About Us | Graphical Research';
      $data['description'] = 'Graphical Research is a business research firm that provides industry insights, market forecast and strategic inputs through granular research reports and advisory services. ';
      $data['keywords'] = 'About Graphical Research';
      // $data['content'] = 'layout_files/dynamic_page';
    $this->load->view('layout_files/amp/amp_about', $data);
  }
	
    public function service()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = 'Our Services | Graphical Research';
      $data['description'] = 'Industry scope & segmentation, business ecosystem, regional industry impact forces, technological landscape, regulatory environment, product market estimates, application market estimates, regional market estimates, competitive landscape analysis, company profiles';
      $data['keywords'] = 'Services, Market Research, Business consulting';
      $data['content'] = 'layout_files/dynamic_page';
	  $this->load->view('master_files/master_layout', $data);
    }
	
	public function amp_service()
    {

       $url = $this->uri->segment($this->uri->total_segments()-1);
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = 'Our Services | Graphical Research';
      $data['description'] = 'Industry scope & segmentation, business ecosystem, regional industry impact forces, technological landscape, regulatory environment, product market estimates, application market estimates, regional market estimates, competitive landscape analysis, company profiles';
      $data['keywords'] = 'Services, Market Research, Business consulting';
      // $data['content'] = 'layout_files/amp/amp_services';
        $this->load->view('layout_files/amp/amp_services', $data);
    } 
	
    public function methodology()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
     $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
      $data['content'] = 'pages/methodology';
      $this->load->view('layouts/static', $data);
    }
    public function term()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
      $data['content'] = 'layout_files/static';
      $this->load->view('master_files/master_layout', $data);
    }
	 public function term_amp()
    {
      $url = $this->uri->segment($this->uri->total_segments()-1);
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
      // $data['content'] = 'layout_files/static';
      $this->load->view('layout_files/amp/term_amp', $data);
    }
	
	
      public function faq()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
     $data['content'] = 'layout_files/static';
      $this->load->view('master_files/master_layout', $data);
    }
      
    
     public function brochure()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
      $data['content'] = 'samples/brochure';
      $this->load->view('layouts/static', $data);
    }
    
    public function careers()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
      
      $data['content'] = 'layout_files/career';
      $this->load->view('master_files/master_layout', $data);
    }
    public function events()
    {
    	$url = $this->uri->segment($this->uri->total_segments());
      $data['title'] = "Conferences and Events – Graphical Research";
      $data['description'] =  "Graphical Research is media partner and/or blog partner with following conferences and events on multiple industries across the globe.";
      $data['keywords'] =  "Graphical Research, conferences, events";
      
    	$this->load->view('layouts/events', $data);
  }
  
  }