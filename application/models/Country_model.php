<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Country_model extends CI_Model

{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_all_country()
  {
    $this->db->select('*');

    $this->db->from('form_country');
    
    $this->db->order_by("country_name", "asc");
    
    $query = $this->db->get();

    if ($query->num_rows() > 0)
    { 
      return $query->result();
    }
    else 
    {
      return NULL;
    }   
  }
  public function get_validated_country($country_name)
  {
    $this->db->select('*');

    $this->db->from('form_country');
    
    $this->db->where("rule_status", 1);
    
    $this->db->where("country_name", $country_name);
    
    $this->db->order_by("country_name", "asc");
    
    $query = $this->db->get();

    if ($query->num_rows() > 0)
    { 
      return 1;
    }
    else 
    {
      return NULL;
    }   
  }
}