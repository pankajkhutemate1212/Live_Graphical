<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//$route['default_controller'] = 'user';
$route['default_controller'] = 'lands/home2';
$route['amp'] = 'lands/home2_amp';
//$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['about-us'] = 'pages/about';
$route['about-us/amp'] = 'pages/amp_about';
$route['our-services'] = 'pages/service';
$route['our-services/amp'] = 'pages/amp_service';
//$route['methodology'] = 'pages/methodology';
$route['detail'] = 'reports/detail';

//$route['industry-practices'] = 'reports/index'; methodology/detail

//admin auth

//custom_toc

$route['custom_toc'] = '';


//$route['contact-us'] = 'samples/Contact_US';
$route['contact-us'] = 'samples/contact';


//Report URL Names
$route['industry-insights'] = 'reports/index';  // showing all reports here
$route['industry-insights/amp'] = 'reports/index_amp';
$route['industry-insights/(:any)'] = 'reports/main_cat/$1';
$route['industry-insights/(:any)/amp'] = 'reports/main_cat_amp/$1';
$route['industry-insights/(:num)/(:any)'] = 'reports/detail/$1'; // report detail page
$route['industry-insights/(:num)/(:any)/amp'] = 'reports/ampdetail/$1'; // report detail page
$route['table-of-content/(:num)/(:any)'] = 'toc/Pub_Toc_Detail';
   // $route['industry-report'] = 'Segmentation/All_Category';
    //$route['get-customized-report/(:any)'] = 'samples/roc/$1';

// Dynamic Form

    //Dead Form
    $route['(:num)/request'] = 'request_sample/dynamic_form';

    //other forms
    $route['request/(:num)/sample'] = 'request_sample/dynamic_form';
    $route['request/(:num)/table-of-content'] = 'request_sample/dynamic_form';
    $route['request/(:num)/inquiry-before-buying'] = 'request_sample/dynamic_form';
    $route['request/(:num)/customize-this-report'] = 'request_sample/dynamic_form';
    $route['request/(:num)/table-of-content'] = 'request_sample/dynamic_form';



//$route['get-request-sample/(:any)'] = 'request_sample/detail/$1';
$route['validate-form'] = 'request_sample/check_country';
//$route['(:num)/request-table-of-content'] = 'request_sample/upcoming_detail/$1';


$route['reportsedit'] = 'reports/index';
$route['reportsedit/(:any)'] = 'reports/main_cat/$1';
$route['reportsedit/(:any)'] = 'reports/detail/$1';


$route['search'] = 'Filters/index';
//$route['inquiry-before-buying/(:any)'] = 'samples/inquiry/$1';
//$route['noindex_method/(:any)'] = 'samples/noindex_method/$1';

$route['thanks/(:any)/(:num)'] = 'thanks/index';
$route['thanks/(:any)'] = 'thanks/index';
$route['request/(:any)'] = 'samples/sample/$1';

//$route['search/(:any)'] = 'reports/detail/$1';
//$route['get-customized-report/(:any)'] = 'samples/roc/$1';
//$route['request-sample/upcoming-detail/(:any)'] = 'request_sample/upcoming_detail/$1';
//$route['thanks-newsletter-subscription'] = 'thanks';

//$route['request/thanks'] = 'thanks/index';
//$route['corporate-presentation'] = 'pages/brochure';
//$route['brochure'] = 'samples/brochure';
//$route['terms-of-use'] = 'pages/term';
$route['customer-faq'] = 'pages/faq';
//$route['privacy-policy'] = 'pages/term';
//$route['how-to-order'] = 'pages/term';
//$route['careers'] = 'pages/careers';
//$route['conference-and-events'] = 'pages/events';
$route['terms-of-use-and-privacy-policy'] = 'pages/term';
$route['terms-of-use-and-privacy-policy/amp'] = 'pages/term_amp';


//$route['contact-us'] = 'samples/contact';
//$route['filters'] = 'filters/index';

$route['research-methodology'] = 'pages/methodology';
$route['press-release'] = 'pressrelease/index';
$route['press-release/amp'] = 'pressrelease/press_list_amp';
$route['press-release/(:any)'] = 'pressrelease/press_detail/$1';
$route['press-release/(:any)/amp'] = 'pressrelease/press_amp_detail/$1';

// Blog
$route['blogs'] = 'blogs/index';
$route['blogs/(:any)'] = 'blogs/blog_detail/$1';
$route['blogs/(:any)/amp'] = 'blogs/blog_detail_amp/$1';

// Upcoming
$route['upcomingreports'] = 'upcomingreports/index';
$route['upcomingreports/(:any)'] = 'upcomingreports/ongoing_detail/$1';

//custom toc
$route['customtoc'] = 'customtoc/index';

//Payment Process

//$route['payment-cancel/(:any)'] = '';


//$route['404_override'] = 'my404'; //my404 is class name. 
//sitemap generator
$route['sitemap\.xml'] = "seo/sitemap";
$route['feed\.xml'] = "feed";
$route['secure-report-purchase/(:num)/(:num)'] = "securecheckout/Secure_cHeckout_pay/$1/$2";

