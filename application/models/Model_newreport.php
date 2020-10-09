

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
        $a=array($toc);

        
        $new=implode("</p>", $a);
        $test=explode("</p>",$new);
        $fisrt_key=$test[0];
        $second_key=$test[1];
        $third_key=$test[2];
        $fourth_key=$test[3];
        $fifth_key=$test[4];
         $six_key=$test[5];
         $second_title=$test[9];     

        $fisrt_key_trim=strip_tags($fisrt_key,'</p> </u> </strong>');
        $second_key_trim=strip_tags($second_key,'</p> </u> </strong>');
        $third_key_trim=strip_tags($third_key,'</p> </u> </strong>');
        $fourth_key_trim=strip_tags($fourth_key,'</p> </u> </strong>');
        $fifth_key_trim=strip_tags($fifth_key,'</p> </u>  </strong>');
        $six_key_trim=strip_tags($six_key,'</p> </u>  </strong>');
        $second_title=strip_tags($second_title,'</p> </u>  </strong>');

        //spacing
        

        //echo trim($fisrt_key,'<p>'); exit();
        echo "<p style='font-weight:bold;'><u>" . $fisrt_key_trim . "</u></p>";
        //echo("<p style="margin-left:15px;">$fisrt_key_trim</p>");echo "<br/>";
         //echo("$second_key_trim");echo "<br/>";
         echo "<p style='margin-left:30.0pt;font-weight:bold;'>" . $second_key_trim . "</p>";
          echo "<p style='margin-left:57.0pt'>" . $third_key_trim . "</p>";
          echo "<p style='margin-left:57.0pt'>" . $fourth_key_trim . "</p>";
          echo "<p style='margin-left:90.0pt'>" . $fifth_key_trim . "</p>";
           echo "<p style='margin-left:90.0pt'>" . $six_key_trim . "</p>";
             echo "<p style='margin-left:57.0pt'>" . $third_key_trim . "</p>";
          echo "<p style='margin-left:57.0pt'>" . $fourth_key_trim . "</p>";
          echo "<p style='margin-left:90.0pt'>" . $fifth_key_trim . "</p>";
           echo "<p style='margin-left:90.0pt'>" . $six_key_trim . "</p>";

           //second row
             echo "<p style='margin-left:30.0pt;font-weight:bold;'>" . $second_title . "</p>";
            echo "<p style='margin-left:57.0pt'>" . $third_key_trim . "</p>";
          echo "<p style='margin-left:57.0pt'>" . $fourth_key_trim . "</p>";
          echo "<p style='margin-left:90.0pt'>" . $fifth_key_trim . "</p>";
           echo "<p style='margin-left:90.0pt'>" . $six_key_trim . "</p>";
             echo "<p style='margin-left:57.0pt'>" . $third_key_trim . "</p>";
          echo "<p style='margin-left:57.0pt'>" . $fourth_key_trim . "</p>";
          echo "<p style='margin-left:90.0pt'>" . $fifth_key_trim . "</p>";
           echo "<p style='margin-left:90.0pt'>" . $six_key_trim . "</p>";


          //echo("$third_key_trim");echo "<br/>";
           //echo("$fourth_key_trim");echo "<br/>";
            //echo("$fifth_key_trim");echo "<br/>";
        
        exit;
        //$test= explode("</p>", $toc[0]);

        


//var_dump($toc); exit;





       // $explode_toc = explode("  ", $toc);

        //$temp=implode($explode_toc);

        //echo $temp; exit();

        //echo $temp;exit();    
        

        

        //echo  $toc;exit();

        //$toc_explode = explode('<p>', $toc);


        $toc = $this ->input ->post('toc_editor');

        
        //"$expl_data";exit;

        //var_dump($toc);exit;

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

