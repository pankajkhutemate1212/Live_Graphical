<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Categories extends MY_Controller 
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('report_model');
      $this->load->model('category_model');
    }
    public function index()
    {
      $data['reports'] = $this->report_model->get_reports();
      $data['title'] = 'Industry Practices | GM Insights';
      $data['description'] = 'Industry Practices | GM Insights';
      $data['keywords'] = 'Industry Practices | GM Insights';
      $data['content'] = 'Categories/index';
      $this->load->view('layouts/master', $data);
    }
    public function main_cat()
    {
      $url = $this->uri->segment($this->uri->total_segments());
      $data['category'] = $this->category_model->get_category($url);
      $cat_id = $data['category']['id'];
      $data['reports'] = $this->report_model->get_cat_reports($cat_id);
      $data['title'] = $data['category']['name'].' | GM Insights';
      $data['description'] = $data['category']['name'].'| GM Insights';
      $data['keywords'] = $data['category']['name'].'| GM Insights';
      $data['content'] = 'Categories/index';
      $this->load->view('layouts/master', $data);
    }
}