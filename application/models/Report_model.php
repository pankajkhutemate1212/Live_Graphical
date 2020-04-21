<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class report_model extends CI_Model 

{

  public function __construct()

  {

    parent::__construct();

  }

  public function get_report()

  {

    $this->db->select('*');

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports', 10);

    return $query->result();            

  }
  
  public function get_faq($id)

  {

    $this->db->select('*');
    $this->db->from('faq');
    $this->db->where("report_id", $id);
    $query = $this->db->get();
     
      return $query->result();
     
       

  }
    
     public function purchase_get_report($rep_id)

  {

    $this->db->select('*');
    $this->db->from('reports');
    $this->db->where("reports.id", $rep_id);
    $query = $this->db->get();   
    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

   show_404();

    } 

    

         
         
  }
  
  public function get_all_catcustom()

  {
      $this->db->select('*');
      $this->db->from('categories');
      $this->db->order_by("id");

    $query = $this->db->get(); 

    return $query->result();
  }
  
  public function get_report_home()

 {


   
   //$query = $this->db->query('SELECT * FROM `home_report` join `reports` on `home_report`.`report_id`=`reports`.`id` order by `home_report`.`id` A limit 9');
$query = $this->db->query('SELECT * FROM `reports` order by `publish_date` DESC limit 10');
   return $query->result();            

 }
  public function get_rss_report()
  {
    $this->db->select('*');
    $strwhere = array();
    $this->db->where($strwhere);
    $this->db->order_by("publish_date", "desc");
    $query = $this->db->get('reports'); 
    return $query->result();            
  }

  public function get_all_report()

  {

    $this->db->select('*');

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }

   public function get_all_up_report()

  {

    $this->db->select('*');
    //$strwhere = array('status' => 'N');
    //$this->db->where($strwhere);
    $this->db->order_by("id", "desc");
    $query = $this->db->get('reports'); 
    return $query->result();            

  }
  public function get_all_up_adm_report()

  {

    $this->db->select('*');

    $strwhere = array('status' => 'N');

    $this->db->where($strwhere);

    $this->db->order_by("id", "desc");

    $query = $this->db->get('reports'); 

    return $query->result();            

  }


public function get_search_result($match, $industry_type)

  {
      
      $industry_type="Biomass, Bioenergy and Renewable Chemistry";
 
   if($match !='')
    	{
            $arr=explode(" ",$match);    
	    $this->db->like('name', $match);
            $query = $this->db->get('reports');


        return $query->result();
        }        

  }

  /* Get Related four reports*/
  
  public function get_related_reports($id, $cat_id){
	  
	  
	  $this->db->select('*');
    $this->db->from('reports');
    $this->db->where("reports.id !=", $id);
	$this->db->where("reports.category_id", $cat_id);
     $this->db->order_by("id", "desc");
	 $this->db->limit(4);
    $query = $this->db->get();
    if ($query->num_rows() > 0)
    { 
      return $query->result();
    } 
    else 
    {
return null;
    } 
	  
	  
  }
  
  /* Get Related four reports End Here*/
  

 /* public function get_search_result($match, $industry_type)

  {

    $this->db->select('*');

    $this->db->like('name', $match);

   /* $strwhere = array('monitor' => 'N');

    $this->db->where($strwhere);
        $this->db->where_not_in('status', 'D');

    $this->db->order_by("creation_date", "desc");

    $query = $this->db->get('reports');

    return $query->result();            

  } */

  public function get_cat_report($cat_id)

  {
    $this->db->select('*');
    $strwhere = array('status' => 'Y');
    $this->db->from('reports');
    $this->db->where("reports.category_id", $cat_id, $strwhere);
    $this->db->where($strwhere);
    $this->db->order_by("id", "desc");
    $query = $this->db->get();
    return $query->result(); 

  }
  public function get_cat_up_report($cat_id)

  {

    $this->db->select('*');
    $strwhere = array('status' => 'N');
    $this->db->from('reports');
    $this->db->where("reports.category_id", $cat_id, $strwhere);
    $this->db->where($strwhere);
    $this->db->order_by("id", "desc");
    $query = $this->db->get();
    return $query->result(); 

  }

  public function get_rep_detail($id)

  {

    $this->db->select('*');
    $this->db->from('reports');
    $this->db->where("reports.id", $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0)
    { 
      return $query->row_array();
    } 
    else 
    {
   show_404();
    }   

  }
 public function get_rep_detail_id($id)

  {

    $this->db->select('*');

    $strwhere = array('monitor' => 'N',

                      'type' => 'P',

                      'status' => 'Y');

    $this->db->from('reports');

    $this->db->where("reports.id", $id);

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

    //  show_404();

    }   

  }
  
  
  public function get_rep_detail_id_from_pay_links_table($id)

  {

    $this->db->select('*');

    $this->db->from('pay_links');

    $this->db->where("pay_links.id", $id);
    
    $this->db->where("pay_links.status", 'A');

    $query = $this->db->get();

    if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

    redirect(base_url('paylinklogin/link_deactivated'));

    }   

  }
}

