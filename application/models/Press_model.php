<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class press_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_report()

  {

    $this->db->select('*');

    $strwhere = array('status' => 'Y');

    $this->db->where($strwhere);

    $this->db->order_by("date", "desc");

    $query = $this->db->get('press'); 

    return $query->result();            

  }
  
   /*for pagination*/
    
   public function get_count() {
        return $this->db->count_all("press");
    }

    public function get_reports($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("press");

        return $query->result();
    }
    
    /*end pagination*/
  
  
  
  public function home_get_report()

  {

    $this->db->select('*');

    $strwhere = array('status' => 'Y');

    $this->db->where($strwhere);

    $this->db->order_by("date", "desc");

    $query = $this->db->get('press', 8); 

    return $query->result();            

  }

  public function get_search_result($match)

  {

    $this->db->select('*');

    $this->db->like('name', $match);

    $strwhere = array(

                      'status' => 'Y');

    $this->db->where($strwhere);

  //  $this->db->order_by("creation_date", "desc");

    $query = $this->db->get('press');

    return $query->result();            

  }

  public function get_cat_report($cat_id)

  {

    $this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.category_id", $cat_id);

  //  $this->db->order_by("press.creation_date", "desc");

    $query = $this->db->get();

    return $query->result(); 

  }

  public function get_rep_detail($url)

  {
      
      
    $this->db->select('u.name as report_name, u.url as report_url,c.*');
   $this->db->from('reports u');
   $this->db->join('press c','c.roportid=u.id');
   $this->db->where('c.url =', $url);
   $query = $this->db->get();
  //  return $query->row_array();
     

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }else{
        
         $this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.url", $url);

    $query = $this->db->get();
        
        
    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    } else {
        
        show_404();

        
    }
        
        
    }

      
      

   /* $this->db->select('*');

    $this->db->from('press');

    $this->db->where("press.url", $url);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

      show_404();

    }  */ 

  }

}

