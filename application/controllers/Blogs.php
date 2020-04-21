<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class blogs extends MY_Controller  
  {
    public function __construct(){
      parent::__construct();
     $this->load->model('blog_model');
      $this->load->model('category_model');

    }

    public function index()
    {   
      $data['blogs'] = $this->blog_model->get_report();
      $data['title'] = 'Market Research Blogs - Global Market Insights Inc.
';
      $data['description'] = 'Market Research Blog, Industry Trends - Global Market Insights
';
      $data['keywords'] = 'Market Research Blog, Industry Trends - Global Market Insights
';
    
	  $this->load->view('layouts/blog_master', $data);
    }
    
    
      public function blog_detail()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['press'] = $this->blog_model->get_rep_detail($url);
	  $data['title'] = $data['press']['meta_title'].'';
	  $data['description'] = $data['press']['meta_description'].'';
	  $data['keywords'] = $data['press']['meta_keywords'].'';
	  $data['content'] = 'reports/blog_detail';
	  $this->load->view('layouts/blog_detail_master', $data);
	}  
       
	public function blog_detail_amp()
    {
        $url = $this->uri->segment(2);
        $data['blog'] = $this->blog_model->get_rep_detail($url);
        $data['title'] = $data['blog']['meta_title'].'';
	    $data['description'] = $data['blog']['meta_description'].'';
	    $data['keywords'] = $data['blog']['meta_keywords'].'';
        $this->load->view('amp/blog_detail_view', $data);
    }
        
  }