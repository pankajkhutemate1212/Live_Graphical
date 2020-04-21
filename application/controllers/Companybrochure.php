
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class companybrochure  extends MY_Controller
  {
    public function __construct()
    {
	  parent::__construct();
	  
	}
    public function index()
    {
     // $url = $this->uri->segment($this->uri->total_segments());
    //  $data['pages'] = $this->page_model->get_page($url);
     // $data['title'] = $data['pages']['meta_title'];
      //$data['description'] = $data['pages']['meta_description'];
    //  $data['keywords'] = $data['pages']['meta_keywords'];
     // $data['content'] = 'pages/brochure';
      $this->load->view('pages/brochure');
    }

  }