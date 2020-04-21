<?php
class User_M extends MY_Model
{
	protected $_table_name = 'users';
	protected $_order_by = 'email';
	public $rules = array(
		'email' => array(
			'field' => 'email', 
			'label' => 'Email', 
			'rules' => 'trim|required|valid_email|xss_clean'
		), 
		'password' => array(
			'field' => 'passa', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);

	function __construct ()
	{
		parent::__construct();
	}
	public function login(){
		$user = $this->get_by(array(
			'email' => $this->input->post('email'),
			'password' =>$this->input->post('passa'),

			), TRUE);
			if (count($user)) {
				//log in user
			$data = array(
				'name'=> $user->name,
				'email'=> $user->email,
				'id'=> $user->id,
				'loggedin'=> TRUE,
				);
	$this->session->set_userdata($data);
	}

}
	public function logout(){
		$this->session->session_destroy($data);
	}
	public function loggedin(){
		return (bool) $this->session->userdata('loggedin');
	}
	//public function hash ($string){
	
	//	return hash ('sha512' , $string . config_item('encryption_key'));
	//}

}