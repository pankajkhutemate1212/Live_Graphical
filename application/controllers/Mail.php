<?php
class Mail extends Controller 
{
    function Mail()
    {
        parent::Controller();

      
      //require_once(APPPATH.'applications/myclasses/Swift/Transport/SmtpAgent.php');
  
    }
    
    function index()
    {
        //Load in the files we'll need
       
         require_once(APPPATH.'my_classes/swift_required.php');
        //Start Swift
        $swift =& new Swift(new Swift_Connection_SMTP("smtp.gmail.com"));
         
        //Create the message
        $message =& new Swift_Message("My subject", "My body");
         
        //Now check if Swift actually sends it
        if ($swift->send($message, "vikas@gminsights.com", "vikas@gminsights.com")) echo "Sent";
        else echo "Failed";
    }
}