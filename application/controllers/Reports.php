<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Reports extends MY_Controller 

  {

    public function __construct()

    {

	  parent::__construct();
	  $this->load->model('report_model');
	  $this->load->model('category_model');
	  $this->load->model('keydata_model');
    }

    public function index()

    {
       ini_set('memory_limit', '51222222M');
      $qry_string=$this->input->get('val', TRUE);
      
      if($qry_string=="latest"){
          
           $data['reportsup'] = $this->report_model->get_all_up_report();
	  $data['reports'] = $this->report_model->get_all_report();	  
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Browse all research reports spread-across different industry verticals like chemical, automotive, healthcare, technology, food and beverages, energy, advance materials. ';
	  $data['keywords'] = 'Industry Insights Reports | Graphical Research';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-analysis');
	  $data['active_class1']='button active small';
	  $data['content'] = 'layout_files/reportlist_view';
	  $this->load->view('master_files/master_layout', $data);
      } else if($qry_string=="latest-published"){
           
          $data['reports'] = $this->report_model->get_all_report();	  
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Browse all research reports spread-across different industry verticals like chemical, automotive, healthcare, technology, food and beverages, energy, advance materials. ';
	  $data['keywords'] = 'Industry Insights Reports | Graphical Research';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-insights');
	  $data['active_class2']='button active small';
	  $data['content'] = 'layout_files/reportlist_view';
	  $this->load->view('master_files/master_layout', $data);
           
          
      } else if($qry_string=="latest-upcoming"){
          
          $data['reportsup'] = $this->report_model->get_all_up_report();
          $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Industry Insights Reports | Graphical Research';
	  $data['keywords'] = 'Industry Insights Reports | Graphical Research';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-insights');
	  $data['content'] = 'layout_files/reportlist_view';
	  $data['active_class3']='button active small';
	  $this->load->view('master_files/master_layout', $data);
          
      }else {
          
          $data['reportsup'] = $this->report_model->get_all_up_report();
	  $data['reports'] = $this->report_model->get_all_report();	  
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Browse all research reports spread-across different industry verticals like chemical, automotive, healthcare, technology, food and beverages, energy, advance materials. ';
	  $data['keywords'] = 'Industry Insights Reports, Research Report, Market Research Reports ';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-insights');
	  $data['content'] = 'layout_files/reportlist_view';
	  $data['active_class1']='button active small';
	  $this->load->view('master_files/master_layout', $data);
          
      }

     

	}
		
	public function index_amp()

    {
       ini_set('memory_limit', '51222222M');
      $qry_string=$this->input->get('val', TRUE);
      
      if($qry_string=="latest"){
          
           $data['reportsup'] = $this->report_model->get_all_up_report();
	  $data['reports'] = $this->report_model->get_all_report();	  
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Browse all research reports spread-across different industry verticals like chemical, automotive, healthcare, technology, food and beverages, energy, advance materials. ';
	  $data['keywords'] = 'Industry Insights Reports | Graphical Research';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-analysis');
	  $data['active_class1']='button active small';
	  /*$data['content'] = 'layout_files/amp/all_report_list_amp';*/
	  $this->load->view('layout_files/amp/all_report_list_amp', $data);
      } else if($qry_string=="latest-published"){
           
          $data['reports'] = $this->report_model->get_all_report();	  
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Browse all research reports spread-across different industry verticals like chemical, automotive, healthcare, technology, food and beverages, energy, advance materials. ';
	  $data['keywords'] = 'Industry Insights Reports | Graphical Research';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-insights');
	  $data['active_class2']='button active small';
	  /*$data['content'] = 'layout_files/amp/all_report_list_amp';*/
	  $this->load->view('layout_files/amp/all_report_list_amp', $data);
           
          
      } else if($qry_string=="latest-upcoming"){
          
          $data['reportsup'] = $this->report_model->get_all_up_report();
          $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Industry Insights Reports | Graphical Research';
	  $data['keywords'] = 'Industry Insights Reports | Graphical Research';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-insights');
	  /*$data['content'] = 'layout_files/amp/all_report_list_amp';*/
	  $data['active_class3']='button active small';
	  $this->load->view('layout_files/amp/all_report_list_amp', $data);
          
      }else {
          
          $data['reportsup'] = $this->report_model->get_all_up_report();
	  $data['reports'] = $this->report_model->get_all_report();	  
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['title'] = 'Industry Insights Reports | Graphical Research';
	  $data['description'] = 'Browse all research reports spread-across different industry verticals like chemical, automotive, healthcare, technology, food and beverages, energy, advance materials. ';
	  $data['keywords'] = 'Industry Insights Reports, Research Report, Market Research Reports ';
	  $data['meta_index']='index';
          $data['canonical']=  base_url('/industry-insights');
	  /*$data['content'] = 'layout_files/amp/all_report_list_amp';*/
	  $data['active_class1']='button active small';
	  $this->load->view('layout_files/amp/all_report_list_amp', $data);
          
      }

     

	}		
    public function main_cat()

    {

	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['reports'] = $this->report_model->get_cat_report($cat_id);
	  $data['upreports'] = $this->report_model->get_cat_up_report($cat_id);
	  $data['catname'] = $data['category']['name'].' ';
	  $data['title'] = $data['category']['meta_title'].' ';
	  $data['description'] = $data['category']['meta_description'].'';
	  $data['keywords'] = $data['category']['meta_keywords'].'';
	  $data['content'] = 'layout_files/category_wise_reportlist_view';
	  $this->load->view('master_files/master_layout', $data);

	}
	public function main_cat_amp()

    {
		
	  $url = $this->uri->segment($this->uri->total_segments()-1);
	  $data['category'] = $this->category_model->get_category($url);
	  $cat_id = $data['category']['id'];
	  $data['catcustom']=$this->report_model->get_all_catcustom();
	  $data['reports'] = $this->report_model->get_cat_report($cat_id);
	  $data['upreports'] = $this->report_model->get_cat_up_report($cat_id);
	  $data['catname'] = $data['category']['name'].' ';
	  $data['title'] = $data['category']['meta_title'].' ';
	  $data['description'] = $data['category']['meta_description'].'';
	  $data['keywords'] = $data['category']['meta_keywords'].'';
	  /*$data['content'] = 'layout_files/amp/main_category_amp';*/
	  $this->load->view('layout_files/amp/main_category_amp', $data);

	}

    public function detail()

	{
             $id = $this->uri->segment(2);
	 // $url = $this->uri->segment($this->uri->total_segments(1));
            $data['reports'] = $this->report_model->get_rep_detail($id);
			$data['faq'] = $this->report_model->get_faq($id);
                $cat_id = $data['reports']['category_id'];
                    $data['category'] = $this->category_model->get_rep_category($cat_id);
                        $report_keyid= $data['reports']['report_keyid'];
                    $data['keydatadetail'] = $this->keydata_model->get_rep_keydatadetail($report_keyid);
                    /*Get Latest Four Reports*/
					$data['relatedreports'] = $this->report_model->get_related_reports($id, $cat_id);
					/*Get Latest Report End here */
                $data['title'] = $data['reports']['meta_title'].'';
            $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
            $data['meta_index']='index';
	  $data['RD']='Active';
            $data['canonical']=  base_url('/industry-insights/'.$data['reports']['id'].'/'.$data['reports']['url'].'');
         //   <link rel="amphtml" href="../amp">
            $data['amphtml']=  'yes';
			$check_body=$data['reports']['body'];
	  
	  if($check_body=="body2"){
     
	      $data['content'] = 'layout_files/upcoming_reportdetail_view';
	      
	  }else{
	      
	      $data['content'] = 'layout_files/reportdetail_view';
	  }

	  //$data['content'] = 'layout_files/reportdetail_view';
	  
	 
	  $this->load->view('master_files/master_layout', $data);

	}
        
        
         public function ampdetail()

	{
             $id = $this->uri->segment(2);
	            $data['reports'] = $this->report_model->get_rep_detail($id);
					$data['faq'] = $this->report_model->get_faq($id);
                    $cat_id = $data['reports']['category_id'];
                    $data['category'] = $this->category_model->get_rep_category($cat_id);
                    $report_keyid= $data['reports']['report_keyid'];
                    $data['keydatadetail'] = $this->keydata_model->get_rep_keydatadetail($report_keyid);
                   $data['relatedreports'] = $this->report_model->get_related_reports($id, $cat_id);
		$data['title'] = $data['reports']['meta_title'].'';
            $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
            $data['meta_index']='index';
	  $data['RD']='Active';
            $data['canonical']=  base_url('/industry-insights/'.$data['reports']['id'].'/'.$data['reports']['url'].'');
	 
	 
	  
	 
	  $this->load->view('layout_files/amp/report', $data);

	}

     public function detail2()

	{

	  $url = $this->uri->segment($this->uri->total_segments());
	  $data['reports'] = $this->report_model->get_rep_detail($url);
	  $cat_id = $data['reports']['category_id'];
	  $data['category'] = $this->category_model->get_rep_category($cat_id);
	  $data['title'] = $data['reports']['meta_title'].'';
	  $data['description'] = $data['reports']['meta_description'].'';
	  $data['keywords'] = $data['reports']['meta_keywords'].'';
	  $data['content'] = 'reports/detail';
	  $this->load->view('layouts/master', $data);

	}

     

  }

