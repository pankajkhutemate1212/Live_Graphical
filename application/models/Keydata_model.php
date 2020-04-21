<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keydata_model extends CI_Model

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_rep_keydatadetail($report_keyid)

  {

    $this->db->select('keydata');

    $strwhere = array( 'status' => 'Y');

    $this->db->from('keyreports');

    $this->db->where("keyreports.keyid", $report_keyid);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }

}