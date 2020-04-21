<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Model {

    /*function get_live_items($search_data) {

        $this->db->select("name,url,id");

        $this->db->from('reports');
        $this->db->group_start();
        $this->db->like('name', $search_data);
        $this->db->where_not_in('status', 'D');
        /*$this->db->or_like('brief_desc', $search_data);*/
        /*$this->db->group_end();

        $this->db->limit(10);
        $this->db->order_by("id", 'desc');
        $query = $this->db->get();

        return $query->result();
    }*/
	
	function get_all_repo($date_from,$date_to,$filterlist) {

        $this->db->select("reports.id,reports.name,reports.meta_title,reports.meta_keywords,reports.meta_description,reports.body, date_format(FROM_UNIXTIME(publish_date), '%d %b %Y') as published_date,date_format(str_to_date(reports.modification_date, '%Y-%m-%d'),'%d-%b-%y') as latest_update_date, categories.name as category_name");

        $this->db->from('reports');
        $this->db->join('categories', 'reports.category_id = categories.id');
        
        if($filterlist=='Published')
        {
            $b='body1';
            $this->db->where('body',$b);
        }
        if($filterlist=='Upcoming')
        {
            $b='body2';
            $this->db->where('body',$b);
        }
        if($date_from!='' && $date_to=='')
        {
            $strwhere1="FROM_UNIXTIME(publish_date) >='".$date_from."' or reports.modification_date>='".$date_from."'";
            $this->db->where($strwhere1);
        }
        if($date_from!='' && $date_to!='')
        {
            $strwhere2="FROM_UNIXTIME(publish_date) >='".$date_from."' and FROM_UNIXTIME(publish_date) <='".$date_to."' or reports.modification_date>='".$date_from."' and reports.modification_date <= '".$date_to."'";
            $this->db->where($strwhere2);
        }
       
        $this->db->order_by("reports.id", 'desc');
        
        $query = $this->db->get();

        return $query->result();
    }
	
	
	
	function get_live_items($search_data) {

        $this->db->select("p.name as pname,r.name as rname, r.url,r.id");
        $this->db->from('reports r');
        //$this->db->join('press','press.url=reports.url','inner');
        $this->db->join('press p','p.url=r.url');
        $this->db->group_start();
        $this->db->like('r.name',$search_data);
        $this->db->like('p.name',$search_data);
        $this->db->where_not_in('r.status', 'D');
        $this->db->or_like('r.brief_desc', $search_data);
        $this->db->group_end();
        $this->db->limit(4);
        $this->db->order_by("r.id", 'desc');
        $query = $this->db->get();
		return $query->result();
        var_dump('return $query->result()');
    }
	
function get_live_url_search($dat)
{
	$this->db->select("name,url,brief_desc");

        $this->db->from('reports');
        $this->db->group_start();
        $this->db->where('url', $dat);
        //$this->db->where_not_in('status', 'D');
        /*$this->db->or_like('brief_desc', $search_data);*/
        $this->db->group_end();

        //$this->db->limit(10);
        $this->db->order_by("id", 'desc');
        $query = $this->db->get();

        return $query->result();
}
}
