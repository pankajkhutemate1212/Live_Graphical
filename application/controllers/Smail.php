<?php defined('BASEPATH') OR exit('No direct script access allowed');
class smail extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
      
        $this->load->library('email');
        $this->load->model('report_model');
        $this->load->model('category_model');
	    $this->load->model('sample_model');
        
    }
	public function contact_us()
      		{
      		    
      	
        	//get the form data
           $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request from contact form- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $country = $this->input->post('country');
             $company = $this->input->post('company');
             $phone = $this->input->post('phone');
	         $subject2 = 'Thank you for contacting us';

          $to_email = 'sales@graphicalresearch.com';

          $country="";

           $country_user= $this->input->post('country_user');
		  $country_user = $this->db->escape_str($country_user);


         if(!empty($ip)){



                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;

                 }
          }

           $timezone  = +04.50; //(GMT -545 EST (U.S. & Canada)
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I")));
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I")));
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`,`date`,`time`,`country_by_user`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip','$country', '$dates', '$time','$country_user')";

$this->db->query($sql);
            $body =
'<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
        <title>
          Request from website
        </title>
        <!--[if !mso]><!-- -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
          #outlook a { padding:0; }
          .ReadMsgBody { width:100%; }
          .ExternalClass { width:100%; }
          .ExternalClass * { line-height:100%; }
          body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
          table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
          img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
          p { display:block;margin:13px 0;font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:20px;text-align:left;color:#616161;}
        </style>
        <!--[if !mso]><!-->
        <style type="text/css">
          @media only screen and (max-width:480px) {
            @-ms-viewport { width:320px; }
            @viewport { width:320px; }
          }
        </style>
        <!--<![endif]-->
        <!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <!--[if lte mso 11]>
        <style type="text/css">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->

      <!--[if !mso]><!-->
      <!--<![endif]-->



    <style type="text/css">
      @media only screen and (min-width:480px) {
        .mj-column-per-60 { width:60% !important; }
.mj-column-per-40 { width:40% !important; }
.mj-column-per-100 { width:100% !important; }
.mj-column-per-45 { width:45% !important; }
.mj-column-per-11 { width:11% !important; }
.mj-column-per-89 { width:89% !important; }
.mj-column-per-75 { width:75% !important; }
.mj-column-per-25 { width:25% !important; }
.mj-column-per-65 { width:65% !important; }
.mj-column-per-35 { width:35% !important; }
      }
    </style>


        <style type="text/css">


        </style>

      </head>
      <body>


      <div>


      <!--[if mso | IE]>
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>

            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->

      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>

            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->

      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>

            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:270px;"
            >
          <![endif]-->

      <div class="mj-column-per-45 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="center" style="font-size:0px;padding:0px;word-break:break-word;">



              </td>
            </tr>

            <tr>

            </tr>

            <tr>

            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;padding-top:30px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->

      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:600;line-height:24px;text-align:left;color:#616161;">
			<center><p> Customer Details :- </p></center>
			<p>Dear Admin,</p>

                      <p>You have one contact request. Please find the details below</p>

		  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td style="font-size:0px;padding:10px 25px;word-break:break-word;">

      <p style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:100%;">
      </p>

      <!--[if mso | IE]>
        <table
           align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px"
        >
          <tr>
            <td style="height:0;line-height:0;">
              &nbsp;
            </td>
          </tr>
        </table>
      <![endif]-->


              </td>
            </tr>

      </tbody></table>

          <p>Name: '.$name.'</p>
		  <p>Email: '.$from_email.'</p>
		  <p>Company: '.$company.' </P>
		  <p>Phone: '.$phone.' </P>
		  <p>Country: '.$country_user.' </p>
		  <p>Message: '.$message.'</P>
		  <p>Source : Contact Us</p>
		  <p>IP : '.$ip.' </p>
          
          
			<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td style="font-size:0px;padding:10px 25px;word-break:break-word;">

      <p style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:100%;">
      </p>

      <!--[if mso | IE]>
        <table
           align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px"
        >
          <tr>
            <td style="height:0;line-height:0;">
              &nbsp;
            </td>
          </tr>
        </table>
      <![endif]-->


              </td>
            </tr>

      </tbody></table>
      </div>

              </td>
            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:66px;"
            >
          <![endif]-->



          <!--[if mso | IE]>
            </td>

            <td
               style="vertical-align:top;width:534px;"
            >
          <![endif]-->

      <div class="mj-column-per-89 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="left" style="font-size:0px;padding:0 25px;word-break:break-word;">

      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:600;line-height:24px;text-align:left;color:#616161;">

          <p style=" color:#BDBDBD; line-height: 17px">This mail came from official website of Graphical Research.</p>
      </div>

              </td>
            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->

      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
<!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]-->


      </div>



  </body></html>';

 $body2 =
'<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
        <title>
          Thanks for contacting us
        </title>
        <!--[if !mso]><!-- -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
          #outlook a { padding:0; }
          .ReadMsgBody { width:100%; }
          .ExternalClass { width:100%; }
          .ExternalClass * { line-height:100%; }
          body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
          table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
          img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
          p { display:block;margin:13px 0; }
        </style>
        <!--[if !mso]><!-->
        <style type="text/css">
          @media only screen and (max-width:480px) {
            @-ms-viewport { width:320px; }
            @viewport { width:320px; }
          }
        </style>
        <!--<![endif]-->
        <!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <!--[if lte mso 11]>
        <style type="text/css">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->

      <!--[if !mso]><!-->

      <!--<![endif]-->



    <style type="text/css">
      @media only screen and (min-width:480px) {
        .mj-column-per-60 { width:60% !important; }
.mj-column-per-40 { width:40% !important; }
.mj-column-per-100 { width:100% !important; }
.mj-column-per-45 { width:45% !important; }
.mj-column-per-11 { width:11% !important; }
.mj-column-per-89 { width:89% !important; }
.mj-column-per-75 { width:75% !important; }
.mj-column-per-25 { width:25% !important; }
.mj-column-per-65 { width:65% !important; }
.mj-column-per-35 { width:35% !important; }
      }
    </style>


        <style type="text/css">


        </style>

      </head>
      <body>


      <div>


      <!--[if mso | IE]>
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>

            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->

      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>

            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->

      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>

            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:270px;"
            >
          <![endif]-->

      <div class="mj-column-per-45 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="center" style="font-size:0px;padding:0px;word-break:break-word;">



              </td>
            </tr>

            <tr>

            </tr>

            <tr>

            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;padding-top:30px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->

      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:20px;text-align:left;color:#616161;">

          <p> Thank you for contacting Graphical Research.! </p>
          <p>The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>
      </div>

              </td>
            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:66px;"
            >
          <![endif]-->



          <!--[if mso | IE]>
            </td>

            <td
               style="vertical-align:top;width:534px;"
            >
          <![endif]-->

      <div class="mj-column-per-89 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="left" style="font-size:0px;padding:0 25px;word-break:break-word;">

      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:left;color:#616161;">


      </div>

              </td>
            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->

      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td style="font-size:0px;padding:10px 25px;word-break:break-word;">

      <p style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:100%;">
      </p>

      <!--[if mso | IE]>
        <table
           align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px"
        >
          <tr>
            <td style="height:0;line-height:0;">
              &nbsp;
            </td>
          </tr>
        </table>
      <![endif]-->


              </td>
            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->

      <!--[if mso | IE]>
          </td>
        </tr>
      </table>

      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->


      <div style="Margin:0px auto;max-width:600px;">

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

        <tr>

            <td
               style="vertical-align:top;width:390px;"
            >
          <![endif]-->

      <div class="mj-column-per-65 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">



              </td>
            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

            <td
               style="vertical-align:top;width:210px;"
            >
          <![endif]-->

      <div class="mj-column-per-35 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">

      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">

            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">

      <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" style="cellspacing:0;color:#000;font-family:Roboto, Helvetica, sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;">
        <tbody><tr style="list-style: none;line-height:1">
            <td> <a href="https://twitter.com/RecastAI">
                  <img width="25" src="https://cdn.recast.ai/newsletter/twitter.png">
                </a> </td>
            <td> <a href="https://www.facebook.com/recastAI">
                  <img width="25" src="https://cdn.recast.ai/newsletter/facebook.png">
                </a> </td>
            <td> <a href="https://medium.com/@RecastAI">
                  <img width="25" src="https://cdn.recast.ai/newsletter/medium.png">
                </a> </td>
            <td> <a href="https://www.youtube.com/channel/UCA0UZlR8crpgwFiVaSTbVWw">
                  <img width="25" src="https://cdn.recast.ai/newsletter/youtube.png">
                </a> </td>
            <td> <a href="https://plus.google.com/u/0/+RecastAi">
                  <img width="25" src="https://cdn.recast.ai/newsletter/google%2B.png">
                </a> </td>
          </tr>
      </tbody></table>

              </td>
            </tr>

      </tbody></table>

      </div>

          <!--[if mso | IE]>
            </td>

        </tr>

                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>

      </div>


      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]-->


      </div>



  </body></html>';

if(isset($name) && !empty($name) && isset($from_email) && !empty($from_email)){
	$result = $this->email
                ->from($from_email)
                ->reply_to($from_email)
                ->to($to_email)
                ->subject($subject)
                ->message($body);

                 if ($this->email->send())
            {
                $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);

                if ($this->email->send())
            {
             redirect('thanks');
          }
   
}

            exit;
            }
            else
            {

              var_dump("testing");
               redirect('thanks');


            exit;
            }





		}
		public function about_us_form()
      		{
      
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request from about us form- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $country = $this->input->post('country');
             $company = $this->input->post('company');
             $phone = $this->input->post('phone');
             $source = $this->input->post('source');
	     $subject2 = 'Thank you for contacting us';
          $to_email = 'sales@graphicalresearch.com';	  
          
          $country="";
          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
          
           $timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`,`date`,`time`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip','$country', '$dates', '$time')";

$this->db->query($sql); 
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>


<p><strong>Contact Sales:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>'.$source.'</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';

 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

<p><br />Thank you for contacting Graphical Market Research.!<br /><br />Our representatives will get in touch with you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Graphical Market Research.</strong></p>
<p>&nbsp;</p> -->
</body>
</html>';		  

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
               
                 if ($this->email->send())
            {
                $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
             redirect('thanks');
          }
              
            

            exit;
            }
            else
            {
              
               redirect('thanks');
          

            exit;
            }
                

           

          
		}
		////company brosoure request
		public function contact_us_bro()
      		{
      
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Request from company presentation- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $country = $this->input->post('country');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
	             $to_email = 'sales@graphicalresearch.com';
	             
	              $country="";
          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
          
		 $subject2 = 'Thank you for contacting us';
	$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`, `date`,`time`) VALUES ('$from_email', '$phone', 'n/a', 'n/a', '$message', 'n/a', 'Corporate Presentation', '$name', '$ip', '$country', '$dates',  '$time')";

$this->db->query($sql);

	              $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>


<p><strong>Contact Sales:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Company Presentation&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';

$body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
<p><br />Thank you for contacting Graphical Market Research.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Graphical Market Research.</strong></p>
<p>&nbsp;</p> -->
</body>
</html>';	
 	    
            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
               
                 if ($this->email->send())
            {
                 $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
              redirect('thanks-corporate-presentation');
          }
              
            

            exit;
            }
            else
            {
                
               redirect('thanks-corporate-presentation');
          

            exit;
            }
                

                  
		}
		////end comp. bro. request
		function inquiry()
      		{
      		    
      		   
      
      //ini_set("allow_url_fopen", "On");
      
        	//get the form data
        	$id = $this->input->post('id');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Inquiry Before Buying- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $cat = $this->input->post('rcatt');
             $report = $this->input->post('report');
             $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
            $subject2 = 'Thank you for contacting us';
         $to_email = 'sales@graphicalresearch.com';
         
          $country="";
          
          $country_user= $this->input->post('country_user');
		  $country_user = $this->db->escape_str($country_user);
		  $selectyes = $this->input->post('SelectAll');
              $selectnone = $this->input->post('none1');
               $seletcomman='';
              if(empty($selectyes)){   
                  
                  if(empty($selectnone)){
                      $seletcomman='';   
                  }else{
                      $seletcomman = $this->input->post('none1');
                      
                  }  
                  }else{                      
                      $seletcomman = $this->input->post('SelectAll');  
                      $seletcomman = $this->db->escape_str($seletcomman);
                  }

          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 } 
                 
                 
          }
         
		$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 

$msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);

	
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`,`date`, `time`,`cat`,`rid`, `preference`,`country_by_user`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Inquiry Before Buying', '$name1', '$ip','$country' ,'$dates', '$time', '$cat', '$id','$seletcomman','$country_user')";

$this->db->query($sql);

	
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><strong>Inquiry before buying:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one inquiry before buying request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
					<p><strong>Name:&nbsp;</strong>'.$name.'</p>
						<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
						<p><strong>Company: &nbsp;</strong>'.$company.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Industry Coverage (Category Name)</strong>:&nbsp;'.$cat.'</p>
				<p><strong>Source: &nbsp;</strong>Inquiry Before Buying&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';

$body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

			<p><br />Thank you for contacting Graphical Market Research.!<br /><br />Our representatives will get in touch with you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Graphical Market Research.</strong></p>
<p>&nbsp;</p> -->
</body>
</html>';	
 	 

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)   
                ->to($to_email)
                ->subject($subject)
                ->message($body);
              
                
                if ($this->email->send())
            {
                 $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
                
              redirect('thanks-inquiry-before-buying/'.$id);
          }
              
        
            exit;
            }
            else
            {
                
               redirect('thanks-inquiry-before-buying/'.$id);
              
            exit;
            }
            
      		
       
		}
		
		//reuquest for custom
		function inquirycustom()
      		{
      
        	//get the form data
        	$id = $this->input->post('id');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Request for customization- graphicalresearch.com';
            $message = $this->input->post('message');
            $cat = $this->input->post('rcatt');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             $to_email = 'sales@graphicalresearch.com';
             $subject2 = 'Thank you for contacting us';
             
              $country="";
              
               $country_user= $this->input->post('country_user');
		  $country_user = $this->db->escape_str($country_user);
		  $selectyes = $this->input->post('SelectAll');
              $selectnone = $this->input->post('none1');
               $seletcomman='';
              if(empty($selectyes)){   
                  
                  if(empty($selectnone)){
                      $seletcomman='';   
                  }else{
                      $seletcomman = $this->input->post('none1');
                      
                  }  
                  }else{                      
                      $seletcomman = $this->input->post('SelectAll');  
                      $seletcomman = $this->db->escape_str($seletcomman);
                  }

          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }


             $msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);
		
	$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
    $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`, `date`,`time`,`cat`,`rid`, `preference`,`country_by_user`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Request for customization', '$name1', '$ip','$country', '$dates', '$time', '$cat', '$id','$seletcomman','$country_user')";

    $this->db->query($sql);

	

          
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><strong>Request for customization:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
			
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
					<p><strong>Company</strong>:&nbsp;'.$company.'</p>
								<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Industry Coverage (Category Name)</strong>:&nbsp;'.$cat.'</p>
				<p><strong>Source: &nbsp;</strong>Request for customization;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';


 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
<p><br />Thank you for contacting Graphical Market Research.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Graphical Market Research.</strong></p> -->
<p>&nbsp;</p>
</body>
</html>';

 	 

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
                
                 
            
                
                if ($this->email->send())
            {
           $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
                
                
                
              redirect('thanks-roc/'.$id);
          }

            exit;
            }
            else
            {
              
                redirect('thanks-roc/'.$id);
           
            exit;
            }

       
		}
		
		
		//requset for custom
		
		
		function inquirybuy()
      		{
      		    
      	
        	//this is %%%% request sample for date get information
        	$id = $this->input->post('id');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Request Sample- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $cat = $this->input->post('rcatt');
             $ridd = $this->input->post('ridd');
             $report = $this->input->post('report');
              $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             $subject2 = 'Thank you for contacting us';	   
        $to_email = 'sales@graphicalresearch.com';
		
		 $country="";
		 
		 $country_user= $this->input->post('country_user');
		 
		  $selectyes = $this->input->post('SelectAll');
              $selectnone = $this->input->post('none1');
               $seletcomman='';
              if(empty($selectyes)){   
                  
                  if(empty($selectnone)){
                      $seletcomman='';   
                  }else{
                      $seletcomman = $this->input->post('none1');
                      
                  }  
                  }else{                      
                      $seletcomman = $this->input->post('SelectAll');  
                      $seletcomman = $this->db->escape_str($seletcomman);
                  }
                  
          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
		
		 $country_user = $this->db->escape_str($country_user);
		$msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);

	$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`, `date`,`time`,`cat`,`rid`, `preference`,`country_by_user`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', 'Request for Sample', '$name1', '$ip','$country', '$dates', '$time', '$cat', '$ridd','$seletcomman','$country_user')";

$this->db->query($sql);

	

          
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><strong>Request for Sample:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Company Name</strong>:&nbsp;'.$company.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
								<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Industry Coverage (Category Name)</strong>:&nbsp;'.$cat.'</p>
				<p><strong>Source: &nbsp;</strong>Request for Sample &nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';

 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
<p><br />Thank you for contacting Graphical Research.!<br /><br />The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Graphical Research.</strong></p>
<p>&nbsp;</p> -->
</body>
</html>';	 
if(isset($name) && !empty($name) && isset($from_email) && !empty($from_email)){
            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
             
                
                if ($this->email->send())
            {
             $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
                
                
                
                 


// $xml ="<Leads><row no='1'><FL val='Company'>gmi</FL><FL val='Last Name'>".$name."</FL><FL val='Email'>".$from_email."</FL><FL val='Phone'>9403280590</FL></row></Leads>";

          

                
                
                
             redirect('thanks-request-sample/'.$id);
          }
              
          

            exit;
} }
            else
            {
              
                redirect('thanks-request-sample/'.$id);
           
            exit;
            }
            
       
		}
		
		
		function toc()
      		{
      
            $id = $this->input->post('ridd');
			 $interested = $this->input->post('interested');
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
		
			
                 $segment = $this->input->post('segment');
             
              if ($segment == "sample"){ $subject =  'Request sample- Graphicalresearch.com';}
              else if  ($segment == "table-of-content"){ $subject =  'Request TOC- Graphicalresearch.com';}
              else if ($segment == "inquiry-before-buying"){ $subject =  'Request IBB- Graphicalresearch.com';}
              else if ($segment == "customize-this-report"){ $subject =  'Request Customization- Graphicalresearch.com';}
              else{ $subject =  'Contact us- Graphicalresearch.com';}
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $cat = $this->input->post('rcatt');
             $company = $this->input->post('company');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             $subject2 = 'Thank you for contacting us';
	  
          $to_email = 'sales@graphicalresearch.com';
		  $sales_email = 'sales@graphicalresearch.com';
		
		$country="";
		
		 $country_user= $this->input->post('country_user');
		  $country_user = $this->db->escape_str($country_user);
		  $selectyes = $this->input->post('SelectAll');
              $selectnone = $this->input->post('none1');
               $seletcomman='';
              if(empty($selectyes)){   
                  
                  if(empty($selectnone)){
                      $seletcomman='';   
                  }else{
                      $seletcomman = $this->input->post('none1');
                      
                  }  
                  }else{                      
                      $seletcomman = $this->input->post('SelectAll');  
                      $seletcomman = $this->db->escape_str($seletcomman);
                  }

          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
          
	$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 



$msg = $this->db->escape_str($message);
$name1 = $this->db->escape_str($name);
$from_email1 = $this->db->escape_str($from_email);
$company1 = $this->db->escape_str($company);
$phone1 = $this->db->escape_str($phone);

 if ($segment == "sample"){ $sourceform =  'Request sample- Graphicalresearch.com';}
              else if  ($segment == "table-of-content"){ $sourceform =  'Request TOC- Graphicalresearch.com';}
              else if ($segment == "inquiry-before-buying"){ $sourceform =  'Request IBB- Graphicalresearch.com';}
              else if ($segment == "customize-this-report"){ $sourceform =  'Request Customization- Graphicalresearch.com';}
              else{ $sourceform =  'Contact us- Graphicalresearch.com';}
			  
			   if($interested==null || empty($interested)){
                $interested='no';
            }

 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`, `date`, `cat`, `time`,`rid`, `preference`,`country_by_user`) VALUES ('$from_email1', '$phone1', '$company1', '$designation', '$msg', '$report', '$sourceform', '$name1', '$ip','$country', '$dates', '$cat', '$time', '$id','$interested','$country_user')";

$this->db->query($sql);

	
            $body =
'<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
        <title>
          Request from website
        </title>
        <!--[if !mso]><!-- -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
          #outlook a { padding:0; }
          .ReadMsgBody { width:100%; }
          .ExternalClass { width:100%; }
          .ExternalClass * { line-height:100%; }
          body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
          table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
          img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
          p { display:block;margin:13px 0;font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:20px;text-align:left;color:#616161;}
        </style>
        <!--[if !mso]><!-->
        <style type="text/css">
          @media only screen and (max-width:480px) {
            @-ms-viewport { width:320px; }
            @viewport { width:320px; }
          }
        </style>
        <!--<![endif]-->
        <!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <!--[if lte mso 11]>
        <style type="text/css">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
        
      <!--[if !mso]><!-->
      <!--<![endif]-->

    
        
    <style type="text/css">
      @media only screen and (min-width:480px) {
        .mj-column-per-60 { width:60% !important; }
.mj-column-per-40 { width:40% !important; }
.mj-column-per-100 { width:100% !important; }
.mj-column-per-45 { width:45% !important; }
.mj-column-per-11 { width:11% !important; }
.mj-column-per-89 { width:89% !important; }
.mj-column-per-75 { width:75% !important; }
.mj-column-per-25 { width:25% !important; }
.mj-column-per-65 { width:65% !important; }
.mj-column-per-35 { width:35% !important; }
      }
    </style>
    
  
        <style type="text/css">
        
        
        </style>
        
      </head>
      <body>
        
        
      <div>
        
      
      <!--[if mso | IE]>
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:270px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-45 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="center" style="font-size:0px;padding:0px;word-break:break-word;">
                
      
    
              </td>
            </tr>
          
            <tr>
              
            </tr>
          
            <tr>
              
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;padding-top:30px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                
      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:600;line-height:24px;text-align:left;color:#616161;">
        
          
		  <div style="font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:24px;text-align:center;color:#616161;">
        Source: '.$sourceform.'
      </div>
		  <p>Dear Admin,</p>

                      <p>You have one request. Please find the details below.</p>
		 
		  <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td style="font-size:0px;padding:10px 25px;word-break:break-word;">
                
      <p style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:100%;">
      </p>
      
      <!--[if mso | IE]>
        <table
           align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px"
        >
          <tr>
            <td style="height:0;line-height:0;">
              &nbsp;
            </td>
          </tr>
        </table>
      <![endif]-->
    
    
              </td>
            </tr>
          
      </tbody></table>
	  
          <p>Name: '.$name.'</p>
		  <p>Email: '.$from_email.'</p>
			<p>Company: '.$company.' </P>
			<p>Phone: '.$phone.' </P>
			<p>Country: '.$country_user.' </p>
			<p>Any specific research requirements?: '.$message.'</P>
			 <p>Report Name: '.$report.'</p>
			 <p>Industry: '.$cat.'</p>
			<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td style="font-size:0px;padding:10px 25px;word-break:break-word;">
                
      <p style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:100%;">
      </p>
      
      <!--[if mso | IE]>
        <table
           align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px"
        >
          <tr>
            <td style="height:0;line-height:0;">
              &nbsp;
            </td>
          </tr>
        </table>
      <![endif]-->
    
    
              </td>
            </tr>
          
      </tbody></table>
      </div>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:66px;"
            >
          <![endif]-->
            
      
    
          <!--[if mso | IE]>
            </td>
          
            <td
               style="vertical-align:top;width:534px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-89 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:0 25px;word-break:break-word;">
                
      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:600;line-height:24px;text-align:left;color:#616161;">
       
          <p style=" color:#BDBDBD; line-height: 17px">This mail came from official website of Graphical Research.</p>
      </div>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
     
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
<!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]-->
    
    
      </div>
    
      
    
  </body></html>';

$body2 =
'<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
        <title>
          Thanks for contacting us
        </title>
        <!--[if !mso]><!-- -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
          #outlook a { padding:0; }
          .ReadMsgBody { width:100%; }
          .ExternalClass { width:100%; }
          .ExternalClass * { line-height:100%; }
          body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
          table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
          img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
          p { display:block;margin:13px 0; }
        </style>
        <!--[if !mso]><!-->
        <style type="text/css">
          @media only screen and (max-width:480px) {
            @-ms-viewport { width:320px; }
            @viewport { width:320px; }
          }
        </style>
        <!--<![endif]-->
        <!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <!--[if lte mso 11]>
        <style type="text/css">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
        
      <!--[if !mso]><!-->
     
      <!--<![endif]-->

    
        
    <style type="text/css">
      @media only screen and (min-width:480px) {
        .mj-column-per-60 { width:60% !important; }
.mj-column-per-40 { width:40% !important; }
.mj-column-per-100 { width:100% !important; }
.mj-column-per-45 { width:45% !important; }
.mj-column-per-11 { width:11% !important; }
.mj-column-per-89 { width:89% !important; }
.mj-column-per-75 { width:75% !important; }
.mj-column-per-25 { width:25% !important; }
.mj-column-per-65 { width:65% !important; }
.mj-column-per-35 { width:35% !important; }
      }
    </style>
    
  
        <style type="text/css">
        
        
        </style>
        
      </head>
      <body>
        
        
      <div>
        
      
      <!--[if mso | IE]>
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:270px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-45 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="center" style="font-size:0px;padding:0px;word-break:break-word;">
                
      
    
              </td>
            </tr>
          
            <tr>
              
            </tr>
          
            <tr>
              
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;padding-top:30px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                
      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:20px;text-align:left;color:#616161;">
        
          <p> Thank you for contacting Graphical Research.! </p>
          <p>The requested document will be delivered to you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>
      </div>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:66px;"
            >
          <![endif]-->
            
      
    
          <!--[if mso | IE]>
            </td>
          
            <td
               style="vertical-align:top;width:534px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-89 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:0 25px;word-break:break-word;">
                
      <div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:left;color:#616161;">
       
         
      </div>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:600px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td style="font-size:0px;padding:10px 25px;word-break:break-word;">
                
      <p style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:100%;">
      </p>
      
      <!--[if mso | IE]>
        <table
           align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #E0E0E0;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px"
        >
          <tr>
            <td style="height:0;line-height:0;">
              &nbsp;
            </td>
          </tr>
        </table>
      <![endif]-->
    
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
     
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->
    
      
      <div style="Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                
        <tr>
      
            <td
               style="vertical-align:top;width:390px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-65 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                

    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
            <td
               style="vertical-align:top;width:210px;"
            >
          <![endif]-->
            
      <div class="mj-column-per-35 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                
      <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" style="cellspacing:0;color:#000;font-family:Roboto, Helvetica, sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;">
        <tbody><tr style="list-style: none;line-height:1">
            <td> <a href="https://twitter.com/RecastAI">
                  <img width="25" src="https://cdn.recast.ai/newsletter/twitter.png">
                </a> </td>
            <td> <a href="https://www.facebook.com/recastAI">
                  <img width="25" src="https://cdn.recast.ai/newsletter/facebook.png">
                </a> </td>
            <td> <a href="https://medium.com/@RecastAI">
                  <img width="25" src="https://cdn.recast.ai/newsletter/medium.png">
                </a> </td>
            <td> <a href="https://www.youtube.com/channel/UCA0UZlR8crpgwFiVaSTbVWw">
                  <img width="25" src="https://cdn.recast.ai/newsletter/youtube.png">
                </a> </td>
            <td> <a href="https://plus.google.com/u/0/+RecastAi">
                  <img width="25" src="https://cdn.recast.ai/newsletter/google%2B.png">
                </a> </td>
          </tr>
      </tbody></table>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]-->
    
    
      </div>
    
      
    
  </body></html>'; 	
					if(isset($name) && !empty($name) && isset($from_email) && !empty($from_email)){

            $result = $this->email
                ->from($sales_email, $name)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
            
                
                if ($this->email->send())
            {
               
       
             $result = $this->email
                ->from($sales_email, 'Sales Team: Graphical Research')
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
                
               

// $xml ="<Leads><row no='1'><FL val='Company'>gmi</FL><FL val='Last Name'>".$name."</FL><FL val='Email'>".$from_email."</FL><FL val='Phone'>9403280590</FL></row></Leads>";

           

                 if ($segment == "sample"){redirect('thanks/sample/'.$id);}
              else if  ($segment == "table-of-content"){redirect('thanks/toc/'.$id);}
              else if ($segment == "inquiry-before-buying"){redirect('thanks/ibb/'.$id);}
              else if ($segment == "customize-this-report"){redirect('thanks/customize/'.$id);}
              else{ redirect('thanks/contactus/'.$id);}
                
        
          }
             

            exit;
					}}
            else
            {
               
     
               if ($segment == "sample"){redirect('thanks/sample/'.$id);}
              else if  ($segment == "table-of-content"){redirect('thanks/toc/'.$id);}
              else if ($segment == "inquiry-before-buying"){redirect('thanks/ibb/'.$id);}
              else if ($segment == "customize-this-report"){redirect('thanks/customize/'.$id);}
              else{ redirect('thanks/contactus/'.$id);}
            

            exit;
            }
                     
	
         
		}
		
		
		 /* payment form*/
		
		function payment()
      		{
      
        
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Request for TOC- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $report = $this->input->post('report');
             $designation = $this->input->post('designation');
             $phone = $this->input->post('phone');
             
	  
          $to_email = 'sales@graphicalresearch.com';
		
	

	
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><strong>Request for TOC:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Designation</strong>:&nbsp;'.$designation.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Report Name</strong>:&nbsp;'.$report.'</p>
				<p><strong>Source: &nbsp;</strong>Request for TOC &nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';

 	   

            $result = $this->email
                ->from($sales_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
            
                
                if ($this->email->send())
            {
               
       
              redirect('thanks-inquiry-before-buying/'.$id);
             

            exit;
            }
            else
            {
               
     
                redirect('thanks-inquiry-before-buying/'.$id);
            

            exit;
            }
		}
		
		
		 function searchquery()
      		{
      
        	//get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = 'Search Query- graphicalresearch.com';
            $searchfor = $this->input->post('searchquery');
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
              $company = $this->input->post('company');
             $phone = $this->input->post('phone');
             $subject2 = 'Thank you for contacting us';	   
        $to_email = 'sales@graphicalresearch.com';
        
         $country="";
          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
		
	$timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`, `date`,`time`,`cat`,`rid`) VALUES ('$from_email', '$phone', '$company', '', '$message', 'Search for- $searchfor', 'Request from Search Query', '$name', '$ip', '$country','$dates', '$time', '', '')";

$this->db->query($sql);

	

          
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

				<p><strong>Request from Search Box:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Company Name</strong>:&nbsp;'.$company.'</p>
				<p><strong>Search for</strong>:&nbsp;'.$searchfor.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
								<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Request from Search Query &nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>

<p style="font-size:12px;"><b>
Note: This mail came from official website of Graphical Market Research.</b><p/>
</body>
</html>';

 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
<p><br />Thank you for contacting Graphical Market Research.!<br /><br />Our representatives will get in touch with you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/globalmarketinsights/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of Graphical Market Research.</strong></p>
<p>&nbsp;</p> -->
</body>
</html>';	 
if(isset($name) && !empty($name) && isset($from_email) && !empty($from_email)){
            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    // Optional, an account where a human being reads.
                ->to($to_email)
                ->subject($subject)
                ->message($body);
             
                
                if ($this->email->send())
            {
             $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
             redirect('thanks');
          }
              
          

            exit;
}}
            else
            {
              
                redirect('thanks/');
           
            exit;
            }

       
		}
		
		
		
		public function destroy()
		{
			$this->session->sess_destroy();
		}
		
		public function fomValidation(){
		    
		         $this->load->helper(array('form', 'url'));

                 $this->load->library('form_validation');
                 
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('company', 'Company', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            
             if ($this->form_validation->run() == FALSE)
                {
                  
                  
                     return false; 
                }else{
                    
                    
                    return true;
                }
                 
                
		    
		}
		
		
		public function search_result_form(){
		    
		    
        	//get the form data 
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject =  'Search Result Contact Form- graphicalresearch.com';
            $message = $this->input->post('message');
             $ip = $this->input->post('ip');
             $country = $this->input->post('country');
             $company = $this->input->post('company');
             $phone = $this->input->post('phone');
	     $subject2 = 'Thank you for contacting us';
          $to_email = 'sales@graphicalresearch.com';	  
          
           $country_user= $this->input->post('country_user');
		  $country_user = $this->db->escape_str($country_user);

           
          $country="";
          
         if(!empty($ip)){
              
               
                
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
                if($ip_data && $ip_data->geoplugin_countryName != null)
                 {
                        $country = $ip_data->geoplugin_countryName;
                        
                 }
          }
           
           $timezone  = +04.50; //(GMT -545 EST (U.S. & Canada) 
$dates= gmdate("Y/m/j", time() + 3600*($timezone+date("I"))); 
$time =  gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
 $sql= " INSERT INTO `maildb` (`email`, `phone`, `company`, `designation`, `message`, `reportname`, `source`, `name`, `ip`,`country_by_ip`,`date`,`time`,`country_by_user`) VALUES ('$from_email', '$phone', '$company', 'n/a', '$message', 'n/a', 'contact us', '$name', '$ip','$country', '$dates', '$time','$country_user')";

$this->db->query($sql); 
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>


<p><strong>Search Result Contact Form:</strong></p>
				<p>Dear Admin,</p>
				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;You have one contact request. Please find the details below.</p>
				<p><strong>Customer Details :-</strong>&nbsp;</p>
				<p><strong>Name:&nbsp;</strong>'.$name.'</p>
				<p><strong>Email: &nbsp;</strong>'.$from_email.'</p>
				<p><strong>Phone Number</strong>:&nbsp;'.$phone.'</p>
				<p><strong>Company Name</strong>:&nbsp;'.$company.'</p>
				<p><strong>Message</strong>:&nbsp;'.$message.'</p>
				<p><strong>Source: &nbsp;</strong>Contact Us&nbsp;</p>
				<p><strong>IP Address: </strong>'.$ip.'</p>
<p style="font-size:12px;"><b>
Note: This mail came from official website of graphicalresearch.com</b><p/>
</body>
</html>';

 $body2 =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

<p><br />Thank you for contacting Graphical Market Research!<br /><br />Our representatives will get in touch with you within 24 business hours. If the nature of your inquiry is urgent, you can reply to this email with your requirements or call us on the numbers mentioned below.</p>

<!-- <p> Phone: <a style="font-size: 1em;" href="tel:13028467766">1 302-846-7766</a><br /> Toll Free: <a style="font-size: 1em;" href="tel:18886890688">1 888-689-0688</a><br/><br /> <br /> <a href="https://www.facebook.com/graphicalmarketresearch/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1025" src="https://i.imgur.com/wPQMoKX.png"></span></a>&nbsp; &nbsp;<a href="https://www.linkedin.com/company-beta/7792783/" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1026" src="http://i.imgur.com/P3npMYr.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://twitter.com/gmi_us" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1027" src="http://i.imgur.com/Nb1OTyF.png"></span></a>&nbsp; &nbsp;&nbsp;<a href="https://plus.google.com/+Gminsightsusa" target="_blank"><span style="text-decoration:none"><img border=0 id="_x0000_i1028" src="http://i.imgur.com/ffuwmrF.png"></span></a><o:p></o:p></span></p><p><span style="font-size:10.0pt;font-family:"Verdana",sans-serif"><img border=0 id="_x0000_i1029" src="http://i.imgur.com/9SQOhKW.png"><o:p></o:p></span></p>
<p style="font-size: 12px;"><strong> Note: This mail came from official website of graphicalresearch.com</strong></p>
<p>&nbsp;</p> -->
</body>
</html>';		  

            $result = $this->email
                ->from($from_email)
                ->reply_to($from_email)    
                ->to($to_email)
                ->subject($subject)
                ->message($body);
               
                 if ($this->email->send())
            {
                $result = $this->email
                ->from($to_email)
                ->reply_to($to_email)    // Optional, an account where a human being reads.
                ->to($from_email)
                ->subject($subject2)
                ->message($body2);
               
                if ($this->email->send())
            {
             redirect('thanks');
          }
              
            
            exit;
            }
            else
            {
              
              
               redirect('thanks');
          

            exit;
            }
                

      	
		    
		}
		
		
      
            }
     