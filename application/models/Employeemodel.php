<?php
class EmployeeModel extends CI_model{

	function __contruct()
    {
		parent:: __contruct();	
	}
		
	function insertEmployee($employee){	
		$this->db->insert('trn_employee', $employee);	// insert data into `trn_employee` 
		//table	
	}
}
?>