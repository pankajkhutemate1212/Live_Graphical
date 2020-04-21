<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_category($url)

  {

    $this->db->select('*');

    $strwhere = array( 'status' => 'Y');

    $this->db->from('categories');

    $this->db->where("categories.url", $url);
$this->db->order_by("id", "desc");
    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }

  public function get_rep_category($cat_id)

  {

    $this->db->select('*');

    $strwhere = array( 'status' => 'Y');

    $this->db->from('categories');

    $this->db->where("categories.id", $cat_id);
$this->db->order_by("id", "desc");
    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      return NULL;

    }   

  }
  
  public function get_all_category(){
      
       $this->db->select('*');

       $this->db->from('categories');

       $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->result();     

    }

    else {

      return NULL;

    }   
      
  }

}