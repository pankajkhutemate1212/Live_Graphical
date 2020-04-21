<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class feed extends MY_Controller {
       
     public function __construct()
      {
      parent::__construct();
           $this->load->helper('xml');
        $this->load->helper('text');
      //  $this->load->model('posts_model', 'posts');
        $this->load->model('report_model');
      }

 public function index()
{
    ini_set('memory_limit', '1123131512M');
    $data['feed_name'] = 'gminsights.com'; // your website
    $data['encoding'] = 'utf-8'; // the encoding
    $data['feed_url'] = 'http://www.gminsights.com/feed'; // the url to your feed
    $data['page_description'] = 'Market research reports, consulting'; // some description
    $data['page_language'] = 'en-en'; // the language
    $data['creator_email'] = 'admin@gminsights.com'; // your email
   //$data['posts'] = $this->posts->getPosts(10);  
    $data['reports'] = $this->report_model->get_rss_report();
    header("Content-Type: application/rss+xml"); // important!
    
    $this->load->view('rss', $data);
}

}