<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_page_report_add extends CI_model

{

    function __contruct()

    {

        parent:: __contruct();

    }

    public function checkId($id)
    {
      $query = $this->db->query("select * from reports where id='".$id."'");
            if ($query->num_rows() == 0) {
            return 1;
        } 
    }
    public function checkpublished($id)
    {
      $query = $this->db->query("select * from reports where id='".$id."' and body='body1'");
            if ($query->num_rows() == 0) {
            return 1;
        } 
    }
    public function addreport($id)
    {
        $this->db->query("insert into home_report (report_id) values (".$id.")");
    }
    function check_home_available($id)
    {
 	 $query = $this->db->query("select * from home_report where report_id='".$id."' order by id  desc limit 10");
 	  if ($query->num_rows() == 0) {
            return 1;
        } 
        else{
   	 return 0;
   }
 }
    function confirm_title($id)
    {
 	 $query = $this->db->query("select * from reports where id='".$id."' and body='body1'");
           //return $query->result();  
             if ($query->num_rows() > 0)

    { 

      return $query->row_array();

    }

    else {

    //  show_404();
   
 }
}
public function all_disc_links($u)
{
	$this->db->select('*');

    $this->db->where('status','A');
    
    $this->db->where('user_name',$u);
    
    $query = $this->db->get('pay_links'); 

    return $query->result();
}
public function deactivate_model($id)
{
	$sql = "  UPDATE `pay_links` SET `status`='D'  WHERE (`id`='$id')";
	$result = $this->db->query($sql);

         
}
}
