<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Seo extends CI_Controller {

    public function __construct()
    {
	  parent::__construct();
	  $this->load->model('sitemap_model');
	  $this->load->model('category_model');
	  $this->load->model('press_model');
	  $this->load->model('blog_model');
	}
    function sitemap()
    {
    	  ini_set('memory_limit', '51222M');
         $data['reports'] = $this->sitemap_model->get_all_report();
	 // $data['reports2'] = $this->sitemap_model->get_all_u_report();
	    $data['press'] = $this->press_model->get_report();
	    //$data['blogs'] = $this->blog_model->get_report();
        header("Content-Type: text/xml;charset=iso-8859-1");
       // $this->load->view("sitemap");
        $this->load->view("sitemap",$data);
        // $this->load->view('sitemap', $data);
    }
}