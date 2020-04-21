<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class pressrelease extends MY_Controller  
  {
    public function __construct(){
      parent::__construct();
     $this->load->model('press_model');
      $this->load->model('category_model');
	 // $this->load->model('page_model');
    }

    public function index()
    {   
      $data['press'] = $this->press_model->get_report();
      $data['title'] = 'Press Releases, Industry Forecast News - Graphical Research';
      $data['description'] = 'Read All latest news announcement by Graphical Research with detailed analysis and accurate growth forecast.';
      $data['keywords'] = 'Latest Market Research Reports, Market Size, Growth Trends, Forecast, Global Market Insights';
        //$data['content'] = 'elements/home';
     // $this->load->view('admin/_layout_allpress', $data);
     $data['meta_index']='index';
      $data['content'] = 'layout_files/list_index';
	//  $this->load->view('layouts/press_master', $data);
  //$data['content'] = 'layout_files/list_index';
	  $this->load->view('master_files/master_layout', $data);
    }
    
	public function press_list_amp()
    {   
        

    /*pagination*/
    $config = array();
    $config["base_url"] = base_url() . "press-release";
    $config["total_rows"] = $this->press_model->get_count();
    $config['use_page_numbers'] = TRUE;
    $config["per_page"] = '';
    $config["uri_segment"] = 2;
    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';

    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';

    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
     $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['press'] = $this->press_model->get_reports($config["per_page"], $page);    
            
    /*end pagination*/
        
      //$data['press'] = $this->press_model->get_report();
      $data['title'] = 'Press Releases, Industry Forecast News - Graphical Research';
      $data['description'] = 'Read All latest news announcement by Graphical Research with detailed analysis and accurate growth forecast.';
      $data['keywords'] = 'Latest Market Research Reports, Market Size, Growth Trends, Forecast, Global Market Insights';
        //$data['content'] = 'elements/home';
     // $this->load->view('admin/_layout_allpress', $data);
     $data['meta_index']='index';
      // $data['content'] = 'layout_files/amp_press_list';
  //  $this->load->view('layouts/press_master', $data);
  // $data['content'] = 'layout_files/amp/list_index';
    $this->load->view('layout_files/amp/amp_press_list', $data);
    }
	
     public function main_cat()
    {
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['press'] = $this->press_model->get_cat_report($cat_id);
	  $data['title'] = $data['category']['name'].' ';
	  $data['description'] = $data['category']['name'].'';
	  $data['keywords'] = $data['category']['name'].'';
	  $data['content'] = 'reports/press_index';
	  $this->load->view('layouts/ongoing_master', $data);
	}
      public function press_detail()
	{
	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['press'] = $this->press_model->get_rep_detail($url);
	//  $cat_id = $data['press']['category_id'];
	//  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['press']['meta_title'].' ';
	  $data['description'] = $data['press']['meta_description'].'';
	  $data['keywords'] = $data['press']['meta_keywords'].'';
          $data['canonical']=  base_url('/press-release/'.$data['press']['url'].'');
          $data['amphtml']=  'yes';
	   $data['meta_index']='index';
	  $data['content'] = 'layout_files/press_detail';
	  $this->load->view('master_files/master_layout', $data);
	}  
        public function press_amp_detail()
	{
	  $url = $this->uri->segment(2);
	  $data['press'] = $this->press_model->get_rep_detail($url);
	//  $cat_id = $data['press']['category_id'];
	//  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['press']['meta_title'].' ';
	  $data['description'] = $data['press']['meta_description'].'';
	  $data['keywords'] = $data['press']['meta_keywords'].'';
          $data['canonical']=  base_url('/press-release/'.$data['press']['url'].'');
	   $data['meta_index']='index';
	
	  $this->load->view('layout_files/amp/press_amp', $data);
	}  
       
	
        
  }