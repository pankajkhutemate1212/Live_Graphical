<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Allblogs extends MY_Controller 
  {
    public function __construct(){
      parent::__construct();
     $this->load->model('blog_model');
      $this->load->model('category_model');
     // $this->load-model('blog_model');
    }

    //public function index()
    //{   
     // $data['reports'] = $this->report_model->get_report();
    //  $data['title'] = 'GM Insights';
    //  $data['description'] = 'GM Insights';
    //  $data['keywords'] = 'GM Insights';
     // $this->load->view('admin/_layout_allblogs', $data);
    //}    
     public function index()

    {

	  $data['blogs'] = $this->blog_model->get_report();

	  $data['title'] = 'Admin All Blogs | GM Insights';

	  $data['description'] = 'Admin| GM Insights';

	  $data['keywords'] = 'Admin | GM Insights';

	



                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                    $data['content'] = 'admin/call_blog';

	  $this->load->view('admin/_layout_allblogs', $data);

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }
	}

    public function blogsedit()
	{
     $url = $this->uri->segment($this->uri->total_segments());

	  $data['blogs'] = $this->blog_model->get_rep_detail($url);

	  //$data['title'] = $data['blogs']['meta_title'].' | GM Insights';

	  //$data['description'] = $data['blogs']['meta_description'].'| GM Insights';

	 // $data['keywords'] = $data['blogs']['meta_keywords'].'| GM Insights';

	 





                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                    $data['content'] = 'admin/_layout_edit_blog';

                                     $this->load->view('admin/_layout_allblogs', $data);

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }
	}
    public function blogsedited()

	{

	   $this->load->library('form_validation');

        $this->form_validation->set_rules('blog_id', 'BlogID', 'required');

		$this->form_validation->set_rules('title', 'Title', 'required');

        $this->form_validation->set_rules('keyword', 'Keyword', 'required');

        $this->form_validation->set_rules('desc', 'Description', 'required');

        $this->form_validation->set_rules('date', 'Date', 'required');

        $this->form_validation->set_rules('maintitle', 'Maintitle', 'required');

        



                            if ($this->form_validation->run() == FALSE)

                            {



                                        if(($this->session->userdata('user_id')!=""))

                                    {

                                   

                                    $this->load->view('admin/_layout_edit_blog');

                                    }

                                    else

                                    {

                                    $this->load->view("register_view");

                                    }



                             }

                                    else

                                        {

                                                     $this->load->model('admin/model_blog');

                                                     $result = $this->model_blog->edit_blog();

                                                     if($result)

                                                {

                                                    $this->load->view('admin/db_updated');



                                                }

                                                else

                                                {

                                                   

                                                }

                                         }

	}
  }