<?php

class Page extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }

    public function index() {
    	$pages = $this->page_m->get(1);
    	var_dump($pages);
    }
    public function save() {
    	$data = array(
    			'region' => 'v1',
    			'name' => 'vvv',
    			'capital' => 'vsasd',
    			'code' => 'vas',
    			'isa_code' => 'vda',
    			'status' => 'vdfadad'
    			  );
    }
}