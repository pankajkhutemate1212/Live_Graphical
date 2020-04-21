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
      $data['title'] = 'About Us, Global Market Insights Delaware';
      $data['description'] = 'About Us, Global Market Insights Delaware';
      $data['keywords'] = 'About Us, Global Market Insights Delaware';
       $data['meta_index']='index';
      $data['content'] = 'layout_files/dynamic_page';
	  $this->load->view('master_files/master_layout', $data);
	}
    public function service()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = 'About Global Market Insights, Delaware, U.S.';
      $data['description'] = 'Market Research Reports, Industry Analysis, Custom Research Reports, Consulting Services: Global Market Insights, Inc.';
      $data['keywords'] = 'services ';
      $data['content'] = 'pages/service';
	  $this->load->view('layouts/static', $data);
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
      $data['content'] = 'pages/static';
      $this->load->view('master_files/master_layout', $data);
    }
      public function faq()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['pages'] = $this->page_model->get_page($url);
      $data['title'] = $data['pages']['meta_title'];
      $data['description'] = $data['pages']['meta_description'];
      $data['keywords'] = $data['pages']['meta_keywords'];
      $data['content'] = 'pages/static';
      $this->load->view('layouts/static', $data);
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
      $data['content'] = 'pages/static';
      $this->load->view('layouts/static', $data);
    }
    public function events()
    {
    	$url = $this->uri->segment($this->uri->total_segments());
      $data['title'] = "Conferences and Events – Global Market Insights, Inc.";
      $data['description'] =  "Global Market Insights, Inc. is media partner and/or blog partner with following conferences and events on multiple industries across the globe.";
      $data['keywords'] =  "Global Market Insights, Inc., conferences, events";
      
    	$this->load->view('layouts/events', $data);
  }
  
  }