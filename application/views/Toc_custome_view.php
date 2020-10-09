<?php

if(!empty($toc_string)){
    
    echo $toc_string;
    
}
/*
 //$toc="";
 for($i=1; $i<count($toc);$i++){
     if(!empty($toc[$i])){
    //  $toc1.='<p><input type="checkbox" class="check checkThree mr10" data-chapter="yes" data-chapterName="chapterThree" name="chapter['.$i.'][]" id="'.$i.'" value=""><input  onkeyup="myFunction(this)" type="text" id="'.$i.'"  name="chaptertxt['.$i.'][]">'.str_replace("</p>","<span id=trs$i class='fr'></span></p>",$toc[$i]);
      
        $innerchapter_content = explode('<p style="margin-left:30.0pt">', $toc[$i]);
        
       // var_dump($innerchapter_content);exit;
        
        $flag=0;
        
         for($j=0; $j<count($innerchapter_content);$j++){
             
             if($flag==0){
                 
                 $toc1.='<p><input type="checkbox" class="check checkThree mr10" data-chapter="yes" data-chapterName="chapterThree" name="chapter['.$i.'][]" id="'.$i.'" value=""><input  onkeyup="myFunction(this)" type="text" id="'.$i.'"  name="chaptertxt['.$i.'][]">'.str_replace("</p>","<span id=trs$i class='fr'></span></p>",$toc[$i]);
                 
             } else {
                 $toc1.='<p><input type="checkbox" class="check checkThree mr10" data-chapter="yes" data-chapterName="chapterThree" name="chapter['.$i.'][]" id="'.$i.'" value=""><input  onkeyup="myFunction(this)" type="text" id="'.$i.'"  name="chaptertxt['.$i.'][]">'.str_replace("</p>","<span id=trs$i class='fr'></span></p>",$innerchapter_content[$j]);
                 
             }
             $flag++;
         }
     }
 }
echo $toc1;

 
*/

?>

<script>
/*function myFunction(fname) {

 
document.getElementById(fname.id).value =fname.value;
document.getElementById('trs'+fname.id).innerHTML=fname.value;
        
  
}*/
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
 
   /* 
    function myFunction(fname) {

alert(fname.value);

     }
 $(document).ready(function() {
         
   $(document).on("keyup paste",
   $("input[type='text']").each(function () {  
  
                  // alert($this.attr('id'))
                   // alert($(this).val());  
                });, 
   function(event) {
      clearTimeout(typingTimer);
      var self = this;
      typingTimer = setTimeout(function(){
        var num = parseFloat($(self).val());
        if ( num < 100) {
          alert("you cannot enter an amount less than 100");
        } 
      }, 3000);
  });
        
        
         $this.donetyping(function(){
                   // $('#example-output').text('Event last fired @ ' + (new Date().toUTCString()));
                   
                   alert('test');
                });
        
        $("input[type='text']").each(function () {  
  
                  // alert($this.attr('id'))
                   // alert($(this).val());  
                });
         
            var favorite = [];
            $.each($("input[name='text']"), function(){
                
               
                favorite.push($(this).val());
            });
            alert("My favourite sports are: " + favorite.join(", "));
       
    });*/
</script>
  <form method="post" action="<?php echo base_url() ?>Customtoc/importtoc" enctype="multipart/form-data">

                    <input type="file" name="file_name" ><br><br>

                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">

     </form>

