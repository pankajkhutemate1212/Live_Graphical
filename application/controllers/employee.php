<?php
class Employee extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		// load the employee model
		$this->load->model('EmployeeModel');
	}

	function index(){
		// create data
         //$now = new DateTime ( NULL, new DateTimeZone('UTC'));
         //$format = 'DATE_RFC822';
         $timestamp = strtotime("now");
         
        // $system_timezone = new DateTimeZone('America/Los_Angeles'); // your timezone
          //  $user_timezone = new DateTimeZone('America/Chicago'); // your user's timezone
       //  $now = new DateTime(date('Y-m-d'));
        //$now->setTimezone($user_timezone);
		$employee = array(
								'EMP_NAME' =>"Sunil",
                'EMP_SALARY' =>18000,
                "date" => 	$timestamp	
		);
		// table column name should be same as data object key name
		$this->EmployeeModel->insertEmployee($employee); // call the employee model
		$data['EMPLOYEE_DETAILS'] = $employee;
		$this->load->view('employeeresult', $data);
	}

}
?>