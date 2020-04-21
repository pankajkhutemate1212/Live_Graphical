<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Allpress extends MY_Controller 
  {
    public function __construct(){
      parent::__construct();
     $this->load->model('press_model');
     // $this->load->model('category_model');
	 // $this->load->model('page_model');
    }

    public function index()
    {   
      $data['press'] = $this->press_model->get_report();
      $data['title'] = 'GM Insights';
      $data['description'] = 'GM Insights';
      $data['keywords'] = 'GM Insights';
    //  $data['content'] = 'elements/home';
     // $this->load->view('admin/_layout_allpress', $data);

       if(($this->session->userdata('user_id')!=""))
                                    {
                                    $data['content'] = 'admin/press_master';
    $this->load->view('admin/_layout_allpress', $data);
                                    }
                                    else
                                    {
                                    $this->load->view("register_view");
                                    }
            
      
    }
    
      public function editpress()
	{
		$url = $this->uri->segment($this->uri->total_segments());
	  $data['press'] = $this->press_model->get_rep_detail($url);
      $data['title'] = 'GM Insights';
      $data['description'] = 'GM Insights';
      $data['keywords'] = 'GM Insights';
    //  $data['content'] = 'elements/home';
     // $this->load->view('admin/_layout_allpress', $data);

       if(($this->session->userdata('user_id')!=""))
                                    {
                                    $data['content'] = 'admin/edit_press';
   				 $this->load->view('admin/_layout_allpress', $data);
                                    }
                                    else
                                    {
                                    $this->load->view("register_view");
                                    }
	}  
       
	
        
  }