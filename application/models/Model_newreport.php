<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_newreport extends CI_model

{

    function __contruct()

    {

        parent:: __contruct();

    }

    public function insert_report()

    {

        $rid = $this->input->post('rid');

        $isbn = $this->input->post('isbn');

        $url = $this->input->post('url');

        $pages = $this->input->post('pages');

        $cat = $this->input->post('cat');

        $title = $this->input->post('title');

        $keyword= $this->input->post('keyword');

        $desc = $this->input->post('desc');

        $date = $this->input->post('date');

        $maintitle = $this->input->post('maintitle');



       // $timestamp = strtotime("today");



        $timestamp=  strtotime("$date");

        $summary = $this->input->post('editor');

        $toc = $this->input->post('toc_editor');

        $seg_editor = $this->input->post('seg_editor');     

        $mix_editor = $this->input->post('mix_editor');
	$year=$this->input->post('yearrb');


        $s_price = $this->input->post('s_price');

        $m_price = $this->input->post('m_price');

        $e_price = $this->input->post('e_price');

        

        //$domain_id = $this->post->



        $sql = "INSERT INTO `reports` (`domain_id`, `name`, `url`, `isbn_code`, `brief_desc`, `bot_desc`, `full_desc`, `table_of_content`, `list_of_tables`, `list_of_chart`, `free_analysis`, `market_overview`, `meta_title`, `meta_keywords`, `meta_description`, `publish_date`, `price_sul`, `price_el`, `price_cul`, `no_of_pages`, `delivery_format`, `is_follow`, `country_id`, `category_id`, `hit`, `creation_date`, `modification_date`, `status`, `report_keyid`) VALUES 

        

        ('1', '$maintitle', '$url', '$isbn', '', '', '$summary', '$toc', '', '', '$seg_editor', '$mix_editor', '$title', '$keyword', '$desc', '$timestamp', '$s_price', '$m_price', '$e_price', '$pages', 'PDF', 'Y', '', '$cat', '0', '$timestamp', '$timestamp', 'Y','$yaer') ";



         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {

            echo "databes added successfully";

         }

         else

         {

             echo "errror in databse code";

         }

    }

}

