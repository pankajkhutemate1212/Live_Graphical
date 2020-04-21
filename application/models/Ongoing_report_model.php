<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ongoing_report_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_report()

  {

    $this->db->select('*');

    $strwhere = array( 'status' => 'N');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }

  public function get_search_result($match)

  {

    $this->db->select('*');

    $this->db->like('name', $match);

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->where($strwhere);

    $this->db->order_by("creation_date", "desc");

    $query = $this->db->get('reports');

    return $query->result();            

  }

  public function get_cat_report($cat_id)

  {

    $this->db->select('*');

    $this->db->from('reports');

    $this->db->where("reports.category_id", $cat_id);

    $this->db->order_by("reports.creation_date", "desc");

    $query = $this->db->get();

    return $query->result(); 

  }

  public function get_rep_detail($url)

  {

    $this->db->select('*');

    $this->db->from('reports');

    $this->db->where("reports.url", $url);

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

