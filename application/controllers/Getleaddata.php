<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getleaddata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		

		$this->load->library('grocery_CRUD');
		
		
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('accesslead');
	}

	public function _example_output($output = null)
	{
		$this->load->view('leaddata.php',$output);
	}


	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function maildb_management()
	{		
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('accesslead/login', 'refresh');
		}
		else // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			$crud = new grocery_CRUD();

			$crud->set_table('maildb');
			$crud->where('email !=""',null,TRUE);
			$crud->columns('email','phone','company','designation','message','reportname','source','name','date','time','ip','country_by_ip','cat','rid');
			$crud->set_subject('maildb');
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_read();
			$crud->unset_print();
			$crud->unset_edit();
			$output = $crud->render();
			$this->_example_output($output);
		}
			
	}
}