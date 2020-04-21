<?php
class contactform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array( 'form_validation', 'email'));
    }

    function index()
    {
        //set validation rules
        $this->load->helper('security');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            $this->load->view('contact_form_view');
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
	    //$message = $this->input->post('designation');
	     //$message = $this->input->post('phone');
            //set to_email id to which you want to receive mails
            $to_email = 'vikas@orbitmediaservices.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.gminsights.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'admin@gminsights.com';
            $config['smtp_pass'] = 'GMinsights@12900';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            $this->load->library('email', $config);
           // $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
           
            $this->email->message($from_email);
           // $this->email->message($name);
            //$this->email->message($subject);
            //$this->email->message($message);
            if ($this->email->send())
            {
                // mail sent
              //  $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('contactform/index');
            }
            else
            {
                //error
             //   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('contactform/index');
            }
        }
    }
    
    
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
?>