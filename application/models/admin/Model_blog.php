<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_blog extends CI_model

{

    function __contruct()

    {

        parent:: __contruct();

    }

    public function insert_blog()

    {

        $url = $this->input->post('url');

        $title = $this->input->post('title');

        $keyword= $this->input->post('keyword');

        $desc = $this->input->post('desc');

        $date = $this->input->post('date');

        $maintitle = $this->input->post('maintitle');

        $timestamp=  strtotime("$date");

        $summary = $this->input->post('editor');
        $author= $this->input->post('author');


        $sql = "INSERT INTO `blogs` (`name`, `url`, `full_desc`, `meta_title`, `meta_keywords`, `meta_description`,  `auther`, `monitor`, `status`, `date`) VALUES('$maintitle', '$url', '$summary', '$title', '$keyword', '$desc', '$author', 'Y', 'Y', '$timestamp') ";



         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {

            $this->load->view('admin/db_updated');

            

         }

         else

         {

             echo "errror in databse code";

         }

    }



    public function edit_blog()

    

    {

        $id= $this->input->post('id');

        $blogid = $this->input->post('blogid');

        $url = $this->input->post('url');

        $title = $this->input->post('title');

        $date = $this->input->post('date');

        $keyword= $this->input->post('keyword');

        $desc = $this->input->post('desc');

        $maintitle = $this->input->post('maintitle');

        $author=$this->input->post('author');
    
        $timestamp=  strtotime("$date");

        $summary = $this->input->post('editor');

        

       

        

      $sql = "  UPDATE `blogs` SET `name`='$maintitle', `url`='$url', `full_desc`='$summary', `meta_title`='$title', `meta_keywords`='$keyword', `meta_description`='$desc',  `auther`='$author', `monitor`='Y', `status`='Y', `date`='$timestamp'  WHERE (`id`='$id')";



       

         $result = $this->db->query($sql);

         if($this->db->affected_rows() == 1)

         {

            $this->load->view('admin/db_updated');

            

         }

         else

         {

             echo "error in databse code";

         }

    }

    }

