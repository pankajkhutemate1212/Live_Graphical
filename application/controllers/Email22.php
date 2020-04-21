<?php
class email22 extends MY_Controller
{
    public function __construct()
    {
       parent::__construct();
      
       //$this->load->library('email');
      //  $this->load->model('report_model');
      //  $this->load->model('category_model');
	  //  $this->load->model('sample_model');
	    
	    
	    $this->load->library('My_PHPMailer');

		$this->admin_email="vikas@graphicalresearch.com";
        
    }
	public function index()
      		{
      		   // echo "Index";
      		   
      		   $this->from_admin_name = 'vikasmantute@gmail.com';
      		   $subject ='Request Sample';
	$message = "Received - Request Sample
        <table>
        <tr><td>Request Report Name: </td><td>Received - Request Sample</td></tr></table>";
	    $mail = new PHPMailer;             //$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		    $mail->SMTPAuth = true;
			$mail->Username = 'vikasmantute@gmail.com';
			    $mail->Password = 'Nfscarbon@1945';
			$mail->SMTPSecure = 'ssl';
		    $mail->Port = 465;
		//$mail->setFrom($insert_data['email'], $insert_data['full_name']);
	    $mail->addAddress($mail->Username, $this->from_admin_name);
	$mail->isHTML(true);
    $mail->Subject = $subject;
$mail->Body    = $message;			
if(!$mail->send()) 
    {
    } else {	    //echo 'Message has been sent';
	    }
      		}
      		
      		
}