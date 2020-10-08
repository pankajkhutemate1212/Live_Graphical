<?php
class CustomeTOC extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         $this->load->library('csvimport');
             $this->load->helper('url');
        $this->load->helper(array('form','url'));
        $this->load->library(array( 'form_validation', 'email'));
           
    }
    
 
    /*
 function awss3(){
        
          $this->load->view('awsimageupload');
    }*/
    
    
function importcsv() 
    {
        $i=0;
        $j=0;
        $k=0;
        $date_in=0;
        $not_inserted= array();
        $date_issue=array();
       // $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] ='./uploads/';
        
    
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '9999999999';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) 
        {
            $data['error'] = $this->upload->display_errors();
            
            var_dump($data['error'] );

          //  $this->load->view('admin/csvindex', $data);
        } 
        else 
        {
            $file_data = $this->upload->data();
            $file_path =  $config['upload_path'].$file_data['file_name'];            
            if ($this->csvimport->get_array($file_path)) 
    {
                $csv_array = $this->csvimport->get_array($file_path);
                
                var_dump($csv_array);exit;
    }
        }
}
    
    function str2int($string) {
  $length = strlen($string);   
  $cntdot=0;
  for ($i = 0, $int = ''; $i < $length; $i++) {
    if (is_numeric($string[$i]))
        $int .= $string[$i];
     else if($string[$i]=="."){
         $cntdot++;
         $int .= $string[$i];
     }else break;
  }

  return $int;
}
function  str2int_fromchapertstr($string){
    
   
  $length = strlen($string);   
  $int=0;
  for ($i = 0, $int = ''; $i < $length; $i++) {
    if (is_numeric($string[$i])){
    
        }else if($string[$i]=="."){
        
          $int++;
         
     }else{ break;}
  }

  return (int)   $int;
 
}
        function importtoc(){
        
        $str_dotstring="";$str_cntdot="";
     $file_data = $this->csvimport->get_array($_FILES["file_name"]["tmp_name"]);
     //$csv_array = $this->csvimport->get_array($file_path);
     
     $flag=0;
     $data_sub=0;
     $data_sub2=0;
     $data_sub3=0;
     $dumi="";
       $str_cp_array = array();
           
      foreach ($file_data as $row) 
                {
      $section=$row["﻿Section"];
      $chapter_content=$row["TOC"];
      $price= $row["Price"];
      if($section=="" && $chapter_content=="" && $price==""){
          
          
      }else{
          $ulcolosestr="";
         
      if($flag==0){
          
      // $toc_string='<p><input type="checkbox" class="checkAll mr10"  name="checkAll" value="'.$price.'"><strong><u>'.$chapter_content.'</u></strong><span class="fr">$'.$price.'</span></p>';
       
       $toc_string='<ul><li><input type="checkbox" name="checkAll" value="'.$price.'"><label><strong><u>'.$chapter_content.'</u></strong></label><span class="fr">$'.$price.'</span>';   
       
      }else{
          
          //check stringcontent chapter keyword
          if(stripos($chapter_content, "Chapt") !== false){
            
              if($section==1){
                  $toc_string .='<ul><li><input type="checkbox" name="chapter[]">
    <label><strong>'.$chapter_content.'</strong></label><span class="fr">$'.$price.'</span>';
              }else{
                 
                   
                   if(!empty($dumi)){
                     $ulcol="";
                       for($i=0;$i<$dumi;$i++){
                               $ulcol.="</li></ul>";
                           }
                         $toc_string .=$ulcol;  
              }
                  
                  $toc_string .='<li><input type="checkbox" name="chapter[]">
    <label><strong>'.$chapter_content.'</strong></label><span class="fr">$'.$price.'</span>
';
              }
            
            $flag_old_value=0;
            $second_level=0;
            $flag_old_value1="";
            $thitd_level=0;
            
            $dumi="";
            
          }else{ 
              //get fisrt numbsr string from chaper start
              $str_dotstring=$this->str2int($chapter_content);
              $str_cntdot=$this->str2int_fromchapertstr($chapter_content);
               $strtemp="";
                if($str_cntdot==1){
                  
                     if($dumi > $str_cntdot ){
                       
                      $strtemp= $dumi-$str_cntdot;
                      $ulcol="";
                      
                       for($i=0;$i<$strtemp;$i++){
                               $ulcol.="</li></ul>";
                           }
                           $toc_string .=$ulcol;  
                       
                   }
                   
                        if($flag_old_value1==0){
                            $toc_string .='<ul><li> <input type="checkbox" name="cart['.$str_dotstring.'][]" value="$'.$price.'"><label>'.$chapter_content.'</label><span class="fr">$'.$price.'</span>';
                        }else{

                            $toc_string .='<li><input type="checkbox" name="cart['.$str_dotstring.'][]" value="$'.$price.'"><label>'.$chapter_content.'</label><span class="fr">$'.$price.'</span>';
                        }
                       
                        
                   $flag_old_value=$str_cntdot;
                   //$second_level=0;
                   $flag_old_value1++;
                   $str_cp_array=array();
                    $flg=0;
               
              }else{
                  
                   if($dumi > $str_cntdot ){
                       
                      $strtemp= $dumi-$str_cntdot;
                      $ulcol="";
                      
                       for($i=0;$i<$strtemp;$i++){
                               $ulcol.="</li></ul>";
                           }
                           $toc_string .=$ulcol;  
                       
                   }
              
                    if (in_array($str_cntdot, $str_cp_array)) 
                      { 
                          $toc_string .='<li> <input type="checkbox" name="cart['.$str_dotstring.'][]" value="$'.$price.'"><label>'.$chapter_content.'</label><span class="fr">$'.$price.'</span>';     
                          
                      } 
                    else
                      { 
                           
                           $toc_string .='<ul><li> <input type="checkbox" name="cart['.$str_dotstring.'][]" value="$'.$price.'"><label>'.$chapter_content.'</label><span class="fr">$'.$price.'</span>';
                         $str_cp_array[$flg]=$str_cntdot;
                      } 
                        
                       
                  
              $flg++;
             }
              $dumi=   $str_cntdot; 
              
           
              
          }
         
      }
     
      
                }
     
     
     
      $flag++;
 
  }
  $data['toc_string']=$toc_string;
  
   $this->load->view('Toc_custome_view_1',$data);
    }
    
    
    function index()
    {
        
        
        $toc = explode('<p>', $toc);
                
        $data['toc']=$toc;
        
         $this->load->view('Toc_custome_view',$data);
        
    }
    
} ?>




