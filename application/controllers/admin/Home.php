<?php
class Home extends Frontend_controller{
	public function __contsruct()
    {
		parent :: __construct();
	}
	public function index(){
		$this->load->model('user_model');
        $this->load->view('home');
	}
	

}