<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Livesearch extends CI_Controller {

    function __Construct() {
        parent::__Construct();

        $this->load->model('Items');
        $this->load->model('Report_model');
    }


    public function search() {

        $search_data = $_POST['search_data'];

        $query = $this->Items->get_live_items($search_data);
        echo "<li>";
		echo "<div style='background: #0274b3;height: 26px;padding: 3px;margin-top: -27px;'>";
        echo "<b style='color:#ffffff;font-size: 14px;'>PRESS RELEASE</b>";
		echo "</div>";
        echo"<br/><br/>";
        foreach ($query as $row):
       
//            echo "<li><a href='/industry-insights/$row->url'>" . $row->name . "</a></li>";
        
//        $url_fi=base_url('/industry-insights/'.$row->id.('$row->pname').$row->url);
        $url_fi=base_url('/industry-insights/' .$row->id. '/'.$row->url);
        $url_press=base_url('/press-release/'.$row->url);
//                echo $row->pname;
            if($query){
//                echo"<b style='font-size:25px;color:#0274B3';>&#46</b>";
                echo"&#32";
				  echo "<div style='margin-top: -31px !important'>";
                echo "<a  href='".$url_press."'>" . $row-> pname. "</a>";
				echo "<hr style='max-width:100%;margin-top:18px;background:#0274b369;'>";
				echo "</div>";
                echo"<br/></br>";
// echo "<li><a href='".$url_fi."'>" . $row->rname . "</a></li>";  
           }
        
//             
            endforeach;
        echo "</li>";
         echo "<li>";
		 
		echo"<div style='background: #0274b3;height: 26px;padding: 3px;margin-top: -41px;'>";
		echo "<b style='color:#ffffff;font-size: 14px;'>REPORTS</b>";
		echo "</div>";
        echo"</br></br>";
        foreach ($query as $row):
      
//                echo "<li><a href='".$url_press."'>" . $row-> pname. "</a>(Press Release)</li>";
        $url_fil=base_url('/industry-insights/' .$row->id. '/'.$row->url);
       echo "<div style='margin-top: -21px !important'>"; 
       echo "<a  href='".$url_fil."'>" . $row->rname . "</a>";
	
	   echo "<div>" ;
	   
	      echo "<hr style='max-width:100%;margin-top:12px;margin-bottom:10px;>";
        echo "</br></br>";
        endforeach;
        echo "</li>";  
        
    }
    
    public function search_url() {

        $search_data = $_POST['url_search'];

        $query = $this->Items->get_live_url_search($search_data);
        
        if($query!=null)
        {
			echo "<p>Allready exist.</p>";
		}
    }

}
