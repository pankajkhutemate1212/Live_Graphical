<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'error_404'; // View name 
        $this->load->view('gmiuser');//loading in my template 
    } 
} 