<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" dir="ltr" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="US" name="geo.country"/>
    <title><?php echo isset($title)? "$title" : NULL; ?></title>
    <meta name="description" content="<?php echo isset($description)? "$description": NULL; ?>">
    <meta name="keywords" content="<?php echo isset($keywords)? "$keywords": NULL; ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.png');?>">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<?php if(!empty($meta_index)){ ?>

<meta name="robots" content="index, follow">

<?php } else { ?>

<meta name="robots" content="noindex, nofollow">

<?php } ?>

      <!--Twitter Card Metadata-->
<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo base_url(uri_string());?>" />
<meta name="twitter:title" content="<?php echo isset($title)? "$title" : NULL; ?>"/>
<meta name="twitter:description" content="<?php echo isset($description)? "$description": NULL; ?>" />
<meta name="twitter:image:src" content="<?php echo base_url(); ?>assets/img/gm-logo.png" />
<meta name="twitter:site" content="" />
<meta property="og:title" content="<?php echo isset($title)? "$title" : NULL; ?>" />
<meta property="og:type" content="video.movie" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="og:image" content="http://ia.media-imdb.com/images/rock.jpg" /> 
<meta property="og:description"  content="<?php echo isset($description)? "$description": NULL; ?>" />
<meta property="og:determiner" content="Graphical Market Research" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="es_US" />
<meta property="og:site_name" content="GMR" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">


      <style>
      /* 
          
          <script src="//foundation.zurb.com/sites/docs/assets/js/plugins/foundation.sticky.js"></script>
          Home banner 
          
.hero-search-filter {
  background: url("http://dkdandco.com/wp-content/uploads/2015/01/Researchanddev.jpg?w=940&h=650&auto=compress&cs=tinysrgb") center center no-repeat;
  height: 300px;
  background-size: cover;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}*/

.hero-search-filter-logo {
  margin-bottom: 2rem;
}

.hero-search-filter-content {
        background-color: rgba(27, 51, 75, 0.82);
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  height: 300px;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.hero-search-filter-menu {
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
}

@media screen and (max-width: 39.9375em) {
  .hero-search-filter-menu li {
    -webkit-flex-basis: 50%;
        -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
  }
  .hero-search-filter-menu li a {
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}

.hero-search-filter-menu a {
  color: #1b334b;
  font-weight: bold;
}

.hero-search-filter-menu a .fa {
  font-size: 1.125rem;
  font-weight: normal;
  text-decoration: none;
}

.hero-search-filter-menu a:hover {
  text-decoration: underline;
}

.hero-search-filter-form {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 90%;
  background: #fefefe;
  padding: 0.25rem;
  border-radius: 5px;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}

.hero-search-filter-form .divider {
  background-color: #cacaca;
  width: 1px;
}

.hero-search-filter-form label {
  margin-right: 0.75rem;
  margin-left: 0.75rem;
  color: #8a8a8a;
  font-weight: bold;
}

.hero-search-filter-form input,
.hero-search-filter-form .button {
  margin-bottom: 0;
}

@media screen and (max-width: 39.9375em) {
  .hero-search-filter-form {
    width: 95%;
  }
}

.hero-search-filter-form-find,
.hero-search-filter-form-near {
  border: 0;
  box-shadow: none;
}

.hero-search-filter-form-find:focus,
.hero-search-filter-form-near:focus {
  border: 0;
  box-shadow: none;
}


      
/* Footer */

.ecommerce-footer {
  background-color: #1b334b;
  padding: 70px 20px 40px 20px;
}

.ecommerce-footer-links h5 {
      color: #ffffff;
    border-bottom: 1px solid;
  font-size: 14px;
  font-weight: 600;
}

.ecommerce-footer-links .fmenu > li > a {
  line-height: 1.5em;
  padding: 0.5rem 0rem;
}
          
.ecommerce-footer-links a {
  color: #fff;
  font-size: 13px;
  transition: all 0.5s ease;
}
.ecommerce-other-links{
  color: #fff;}

.ecommerce-footer-links a:hover {
  color: #2196F3;
  transition: all 0.5s ease;
}

.ecommerce-footer-links .more-categories {
  margin-top: 2rem;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-links .more-categories {
    margin-top: 2rem;
  }
}

@media screen and (max-width: 63.9375em) {
  .ecommerce-footer-links .ecommerce-footer-links-block {
    margin-bottom: 3rem;
  }
}



.ecommerce-footer-bottom-bar .menu > li > a {
  line-height: 1.2em;
  padding: 10px 0;
}

.ecommerce-footer-bottom-bar a {
  color: #8a8a8a;
  font-size: 0.9rem;
  transition: all 0.5s ease;
}

.ecommerce-footer-bottom-bar a:hover {
  color: #0a0a0a;
  transition: all 0.5s ease;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar ul {
    text-align: center;
  }
}

.ecommerce-footer-bottom-bar li {
  display: inline;
}

.ecommerce-footer-bottom-bar .bottom-links {
  margin-top: 0.65rem;
  margin-left: 0;
}

.ecommerce-footer-bottom-bar .bottom-links li {
  padding-right: 2rem;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar .bottom-links li {
    text-align: center;
  }
}

.ecommerce-footer-bottom-bar .ecommerce-footer-logomark {
  text-align: center;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar .ecommerce-footer-logomark {
    padding-top: 1rem;
    margin-bottom: 1rem;
  }
}



@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar .bottom-copyright {
    text-align: center;
  }
}
/* Branding content */
          
.marketing-site-content-section {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
}

.marketing-site-content-section .button.round {
  border-radius: 5000px;
  text-transform: uppercase;
  margin-bottom: 0;
}

.marketing-site-content-section .marketing-site-content-section-img {
  -webkit-align-self: center;
      -ms-flex-item-align: center;
              -ms-grid-row-align: center;
          align-self: center;
  -webkit-flex: 1 0 100%;
      -ms-flex: 1 0 100%;
          flex: 1 0 100%;
}

.marketing-site-content-section .marketing-site-content-section-img img {
  width: 100%;
}

@media screen and (min-width: 40em) {
  .marketing-site-content-section .marketing-site-content-section-img {
    -webkit-flex: 1 0 50%;
        -ms-flex: 1 0 50%;
            flex: 1 0 50%;
  }
}

.marketing-site-content-section .marketing-site-content-section-block {
  padding: 1rem;
  -webkit-flex: 1 0 100%;
      -ms-flex: 1 0 100%;
          flex: 1 0 100%;
  -webkit-align-self: stretch;
      -ms-flex-item-align: stretch;
          align-self: stretch;
  background: #e6e6e6;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}

@media screen and (min-width: 40em) {
  .marketing-site-content-section .marketing-site-content-section-block {
    -webkit-flex: 1 0 50%;
        -ms-flex: 1 0 50%;
            flex: 1 0 50%;
    padding: 2rem;
  }
}

.marketing-site-content-section-block-header {
  font-size: 24px;
}

.marketing-site-content-section-block-subheader {
  font-size: 13px;
}

          /* Brand 2 */
          
          
.marketing-site-hero1 {
     background: url(<?php echo base_url(); ?>assets/images/gm-home.jpg) top right no-repeat;
    height: 30rem;
  background-size: cover;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}

          .marketing-site-hero2 {
     background: url(<?php echo base_url(); ?>assets/images/banner_2.jpg) top right no-repeat;
    height: 30rem;
  background-size: cover;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
          .marketing-site-hero3 {
     background: url(<?php echo base_url(); ?>assets/images/banner_3.jpg) top right no-repeat;
    height: 30rem;
  background-size: cover;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
          .marketing-site-hero4 {
     background: url(<?php echo base_url(); ?>assets/images/banner_1.jpg) top right no-repeat;
    height: 30rem;
  background-size: cover;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
@media screen and (min-width: 40em) {
  .marketing-site-hero {
    background-position: center center;
  }
}

.marketing-site-hero-content {
  max-width: 75rem;
  margin: 0 auto;
  padding-left: 5%;
  padding-right: 5%;
}

.marketing-site-hero-content h1 {
  font-size: 32px;
    color: #fff;
}
          .marketing-site-hero-content .subheader {

    color: #fff;
}
          

.marketing-site-hero-content .button.round {
  border-radius: 5000px;
  text-transform: uppercase;
  font-size: 12px;
  margin-bottom: 0;
}

@media screen and (min-width: 40em) {
  .marketing-site-hero-content {
    padding-left: 50%;
  }
}

          @media screen and (min-width: 40em) {
  .marketing-site-hero-content2  {
    padding-right: 50%!important;
  }
}
          
       .marketing-site-hero-content2 .subheader{
              color: #fff;
          }
          .marketing-site-hero-content2{
              max-width: 75rem;
    margin: 0 auto;
    padding-left: 5%;
    padding-right: 5%
          }
          
          @media screen and (min-width: 40em)
.marketing-site-hero-content2 h1 {
    padding-left: 50%;
}

          .marketing-site-hero-content2 h1 {
   font-size: 37px !important;
    font-weight: 300;
    color: #fff !important;
    line-height: 38px !important;
}

      </style>
      <style>
      
      .fullscreen-image-slider .orbit-image {
  width: 100%;
  height: 100vh;
}

.fullscreen-image-slider .orbit-caption {
  bottom: 50%;
  -webkit-transform: translateY(50%);
      -ms-transform: translateY(50%);
          transform: translateY(50%);
  background: none;
  text-align: center;
  color: #fefefe;
  font-weight: bold;
}
          /* part 2 */
          
          
.marketing-site-features {
  text-align: center;
  padding: 2rem 0;
}

.marketing-site-features .fa {
      font-size: 1.2rem;
    margin-bottom: 1rem;
    color: #929292;
}

.marketing-site-features .marketing-site-features-title {
  font-size: 1.125rem;
  margin-bottom: 1rem;
}

@media screen and (min-width: 40em) {
  .marketing-site-features {
    text-align: left;
  }
}

.marketing-site-features-headline {

  font-size: 24px !important;
}

.marketing-site-features-subheadline {
  margin-bottom: 2rem;
  text-align: center;
}
/* Footer */





.ecommerce-footer-links .menu > li > a {
  
  padding: 0.5rem 0rem;
}

.ecommerce-footer-links a {
  color: #ffffff;
  font-size: 13px;
  transition: all 0.5s ease;
}



.ecommerce-footer-links .more-categories {
  margin-top: 2rem;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-links .more-categories {
    margin-top: 2rem;
  }
}

@media screen and (max-width: 63.9375em) {
  .ecommerce-footer-links .ecommerce-footer-links-block {
    margin-bottom: 3rem;
  }
}



.ecommerce-footer-bottom-bar .menu > li > a {
  line-height: 1.2em;
  padding: 10px 0;
}

.ecommerce-footer-bottom-bar a {
  color: #8a8a8a;
  font-size: 0.9rem;
  transition: all 0.5s ease;
}

.ecommerce-footer-bottom-bar a:hover {
  color: #0a0a0a;
  transition: all 0.5s ease;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar ul {
    text-align: center;
  }
}

.ecommerce-footer-bottom-bar li {
  display: inline;
}

.ecommerce-footer-bottom-bar .bottom-links {
  margin-top: 0.65rem;
  margin-left: 0;
}

.ecommerce-footer-bottom-bar .bottom-links li {
  padding-right: 2rem;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar .bottom-links li {
    text-align: center;
  }
}

.ecommerce-footer-bottom-bar .ecommerce-footer-logomark {
  text-align: center;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar .ecommerce-footer-logomark {
    padding-top: 1rem;
    margin-bottom: 1rem;
  }
}

.ecommerce-footer-bottom-bar .bottom-copyright {
  color: #fff;
  font-size: 0.7rem;
  line-height: 1.2em;
  padding-top: 1rem;
  text-align: right;
}

@media screen and (max-width: 39.9375em) {
  .ecommerce-footer-bottom-bar .bottom-copyright {
    text-align: center;
  }
}
/* part 3 */
          
          .people-you-might-know {
  background-color: #fefefe;
  padding: 1rem 1rem 1rem 1rem;
  
  box-shadow: 0 0 3.125rem rgba(0, 0, 0, 0.18);
}

.people-you-might-know .add-people-header {
  padding: 0 0.9375rem;
  border-bottom: 0.0625rem solid #cacaca;
}

.people-you-might-know .add-people-header .header-title {
  font-weight: bold;
}

.people-you-might-know .add-people-section {
  margin: 1rem 0 0;
  padding-bottom: 1rem;
  border-bottom: 0.0625rem solid #cacaca;
}

.people-you-might-know .add-people-section .about-people {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.people-you-might-know .add-people-section .about-people .about-people-avatar {
  padding-right: 0.5rem;
  padding-left: 0;
}

.people-you-might-know .add-people-section .about-people .about-people-avatar .avatar-image {
  width: 5rem;
  height: 5rem;
  border-radius: 50%;
  border: 0.0625rem solid #cacaca;
}

.people-you-might-know .add-people-section .about-people .about-people-author {
  -webkit-flex: 1 0 0;
      -ms-flex: 1 0 0px;
          flex: 1 0 0;
}

.people-you-might-know .add-people-section .about-people .about-people-author .report-title-name {
  color: #00695c;
  margin: 0.375rem 0 0;
    text-align: justify;
}

.people-you-might-know .add-people-section .about-people .about-people-author .author-location,
.people-you-might-know .add-people-section .about-people .about-people-author .author-mutual {
  color: #8a8a8a;
  margin-bottom: 0;
  font-size: 0.85em;
}

.people-you-might-know .add-people-section .add-friend {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-justify-content: center;
   -ms-flex-pack: center;
   justify-content: center;
}

@media screen and (max-width: 39.9375em) {
  .people-you-might-know .add-people-section .add-friend {
  -webkit-justify-content: flex-start;
  -ms-flex-pack: start;
            justify-content: flex-start;
  }
}

.people-you-might-know .add-people-section .add-friend .add-friend-action {
  margin-top: 0.7rem;
}

.people-you-might-know .view-more-people {
  margin: .7rem 0;
}

.people-you-might-know .view-more-people .view-more-text {
  margin-bottom: 0;
  text-align: center;
}

.people-you-might-know .view-more-people .view-more-text .view-more-link {
  color: #1779ba;
}

.people-you-might-know .view-more-people .view-more-text .view-more-link:hover, .people-you-might-know .view-more-people .view-more-text .view-more-link:focus {
  text-decoration: underline;
}

                /* Part 4 forms */
          
form .form-icons {
  text-align: center;
}

form .form-icons h4 {
  margin-bottom: 1rem;
}

form .form-icons .input-group-label {
  background-color: #00695c;
  border-color: #00695c;
}

form .form-icons .input-group-field {

}

form .form-icons .fa {
  color: white;
  width: 1rem;
}
          .industry-covered{
              margin-top: 0.2rem;
    margin-bottom: 0.5rem;
    font-weight: 300;
    line-height: 1.4;
    color: #1b334b;
              font-size: 16px;
          }
          body{

            background: #fff;
          }
           select{
        margin: 0;
        border: 1px solid #e0e0e0 !important;
    border-radius: 0;
    background-color: #fff;
    }
    .text-body-1{
        text-shadow: none;
      text-align: justify;
    }
    /*NIKHIL STYLES*/
    @media only screen and (min-width:1031px){
    .report-home{
        max-height: 300px;
    min-height: 300px;
    }
    .news-home{    max-height: 265px;
    min-height: 265px;}
    }
    @media only screen and (max-width: 1030px) and (min-width:781px){
.report-home {
    max-height: 380px;
    min-height: 380px;
}
.news-home{    max-height: 300px;
    min-height: 300px}
}
@media only screen and (max-width: 780px) and (min-width:640px){
.report-home {
        max-height: 492px;
    min-height: 492px;
}
    .news-home{    max-height: 370px;
    min-height: 370px;}
}
    
    .pos-rel{position:relative;}

    @media only screen and (max-width: 639px){
  .top-bar-right.no-collapse{
    display:none
  }
.mobileviewui {
display: block!important;
}}
.sidenav{
  height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #00695c;
    overflow-x: hidden;
    transition: .5s;
    padding-top: 20px;
}
.sidenav .closebtn{
      position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.sidenav a{
      padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #fff;
}
.sidenav a, .sidenav li, ul#css3menu1 a
{
      display: block;
}
@media only screen and (max-width: 639px){
.mobilenav {
    color: #4176bd;
}}



        .cust-tab-details-div{background:#1b334b;display:flex;}
        .cust-tab-details
        {
          padding: 11px 44px 11px 21px;
       box-shadow: none !important;
    border-radius: 0px !important;
    margin: 0px !important;
    font-size: 12px !important;
        }
        .cust-tab-details.is-active{
        background:#0067ce;
        }
        @media only screen and (max-width:639px){
          .cust-tab-details-div{background:#fff;display:block;text-align:center}
          .cust-tab-details{
            padding: 20px 0;
              width: 49%;
        margin-bottom: 3px;
        font-size: 10px;
          }
        }
        .sky-head{
          background: #1b334b;
          color: #fff;
        }
        .sky-head-a{
padding: 1px 18px 2px  0px !important;
color: #fff;
        }
        .search-btn-back{
          margin-left: -16px;
        }
        #findtext{
              height: 43px;
        }
          .form-border{
              border: 1px solid #dcdcdc;
    border-radius: 1rem;
    padding: 2rem;
              margin-right: 1rem;
          }
          .button-subtitle{
                 margin-top: 3px;
    float: left !important;
          }
          .home-title{
              color: #fff !important; 
              font-weight: 300 !important;
              
          }
          .home-t-s{
              text-shadow: 0 1px 1px rgba(0,0,0,.6);
          }
          
          .sidebar-form{
           background: #f1f1f1;
              padding: 1rem;
          }
          
          /* demo.css */
          
          @charset "UTF-8";
/**
 * Foundation for Sites by ZURB
 * Version 6.2.0
 * foundation.zurb.com
 * Licensed under MIT Open Source
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
/**
 * 1. Set default font family to sans-serif.
 * 2. Prevent iOS and IE text size adjust after device orientation change,
 *    without disabling user zoom.
 *
 //font-family: 'Share Tech Mono', monospace;
/
html {

    
    font-family: 'Roboto', 'Helvetica', sans-serif;
  /* 1 */
  -ms-text-size-adjust: 100%;
  /* 2 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
}

/**
 * Remove default margin.
 */
body {
  margin: 0;
}

/* HTML5 display definitions
   ========================================================================== */
/**
 * Correct `block` display not defined for any HTML5 element in IE 8/9.
 * Correct `block` display not defined for `details` or `summary` in IE 10/11
 * and Firefox.
 * Correct `block` display not defined for `main` in IE 11.
 */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}

/**
 * 1. Correct `inline-block` display not defined in IE 8/9.
 * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
 */
audio,
canvas,
progress,
video {
  display: inline-block;
  /* 1 */
  vertical-align: baseline;
  /* 2 */
}

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */
audio:not([controls]) {
  display: none;
  height: 0;
}

/**
 * Address `[hidden]` styling not present in IE 8/9/10.
 * Hide the `template` element in IE 8/9/10/11, Safari, and Firefox < 22.
 */
[hidden],
template {
  display: none;
}

/* Links
   ========================================================================== */
/**
 * Remove the gray background color from active links in IE 10.
 */
a {
  background-color: transparent;
}

/**
 * Improve readability of focused elements when they are also in an
 * active/hover state.
 */
a:active,
a:hover {
  outline: 0;
}

/* Text-level semantics
   ========================================================================== */
/**
 * Address styling not present in IE 8/9/10/11, Safari, and Chrome.
 */
abbr[title] {
  border-bottom: 1px dotted;
}

/**
 * Address style set to `bolder` in Firefox 4+, Safari, and Chrome.
 */
b,
strong {
  font-weight: bold;
}

/**
 * Address styling not present in Safari and Chrome.
 */
dfn {
  font-style: italic;
}

/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari, and Chrome.
 */
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/**
 * Address styling not present in IE 8/9.
 */
mark {
  background: #ff0;
  color: #000;
}

/**
 * Address inconsistent and variable font size in all browsers.
 */
small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

/* Embedded content
   ========================================================================== */
/**
 * Remove border when inside `a` element in IE 8/9/10.
 */
img {
  border: 0;
}

/**
 * Correct overflow not hidden in IE 9/10/11.
 */
svg:not(:root) {
  overflow: hidden;
}

/* Grouping content
   ========================================================================== */
/**
 * Address margin not present in IE 8/9 and Safari.
 */
figure {
  margin: 1em 40px;
}

/**
 * Address differences between Firefox and other browsers.
 */
hr {
  box-sizing: content-box;
  height: 0;
}

/**
 * Contain overflow in all browsers.
 */
pre {
  overflow: auto;
}

/**
 * Address odd `em`-unit font size rendering in all browsers.
 */
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

/* Forms
   ========================================================================== */
/**
 * Known limitation: by default, Chrome and Safari on OS X allow very limited
 * styling of `select`, unless a `border` property is set.
 */
/**
 * 1. Correct color not being inherited.
 *    Known issue: affects color of disabled elements.
 * 2. Correct font properties not being inherited.
 * 3. Address margins set differently in Firefox 4+, Safari, and Chrome.
 */
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  /* 1 */
  font: inherit;
  /* 2 */
  margin: 0;
  /* 3 */
}

/**
 * Address `overflow` set to `hidden` in IE 8/9/10/11.
 */
button {
  overflow: visible;
}

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Firefox, IE 8/9/10/11, and Opera.
 * Correct `select` style inheritance in Firefox.
 */
button,
select {
  text-transform: none;
}

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  /* 2 */
  cursor: pointer;
  /* 3 */
}

/**
 * Re-set default cursor for disabled elements.
 */
button[disabled],
html input[disabled] {
  cursor: default;
}

/**
 * Remove inner padding and border in Firefox 4+.
 */
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */
input {
  line-height: normal;
}

/**
 * It's recommended that you don't attempt to style these elements.
 * Firefox's implementation doesn't respect box-sizing, padding, or width.
 *
 * 1. Address box sizing set to `content-box` in IE 8/9/10.
 * 2. Remove excess padding in IE 8/9/10.
 */
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  /* 1 */
  padding: 0;
  /* 2 */
}

/**
 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
 * `font-size` values of the `input`, it causes the cursor style of the
 * decrement button to change from `default` to `text`.
 */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Address `appearance` set to `searchfield` in Safari and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari and Chrome.
 */
input[type="search"] {
  -webkit-appearance: textfield;
  /* 1 */
  box-sizing: content-box;
  /* 2 */
}

/**
 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
 * Safari (but not Chrome) clips the cancel button when the search input has
 * padding (and `textfield` appearance).
 */
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * Define consistent border, margin, and padding.
 * [NOTE] We don't enable this ruleset in Foundation, because we want the <fieldset> element to have plain styling.
 */
/* fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
} */
/**
 * 1. Correct `color` not being inherited in IE 8/9/10/11.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */
legend {
  border: 0;
  /* 1 */
  padding: 0;
  /* 2 */
}

/**
 * Remove default vertical scrollbar in IE 8/9/10/11.
 */
textarea {
  overflow: auto;
}

/**
 * Don't inherit the `font-weight` (applied by a rule above).
 * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
 */
optgroup {
  font-weight: bold;
}

/* Tables
   ========================================================================== */
/**
 * Remove most spacing between table cells.
 */
table {
    box-shadow: none;
  border-collapse: collapse;
  border-spacing: 0;
}

td,
th {
  padding: 0;
}

.foundation-mq {
  font-family: "small=0em&medium=40em&large=64em&xlarge=75em&xxlarge=90em";
}

html {
  font-size: 100%;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  padding: 0;
  margin: 0;
  font-family: Roboto, Noto, sans-serif;
  font-weight: 400;
  line-height: 1.5;
  color: #1b334b !important;
  background: #eeeeee;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

img {
  max-width: 100%;
  height: auto;
  -ms-interpolation-mode: bicubic;
  display: inline-block;
  vertical-align: middle;
}

textarea {
  height: auto;
  min-height: 50px;
  border-radius: 2px;
}

select {
  width: 100%;
  border-radius: 2px;
}

#map_canvas img,
#map_canvas embed,
#map_canvas object,
.map_canvas img,
.map_canvas embed,
.map_canvas object,
.mqa-display img,
.mqa-display embed,
.mqa-display object {
  max-width: none !important;
}

button {
  -webkit-appearance: none;
  -moz-appearance: none;
  background: transparent;
  padding: 0;
  border: 0;
  border-radius: 2px;
  line-height: 1;
}

.is-visible {
  display: block !important;
}

.is-hidden {
  display: none !important;
}

.row {
  max-width: 76rem;
  margin-left: auto;
  margin-right: auto;
}
.row::before, .row::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.row::after {
  clear: both;
}
.row.collapse > .column, .row.collapse > .columns {
  padding-left: 0;
  padding-right: 0;
}
.row .row {
  margin-left: -0.625rem;
  margin-right: -0.625rem;
}
@media screen and (min-width: 40em) {
  .row .row {
    margin-left: -0.9375rem;
    margin-right: -0.9375rem;
  }
}
.row .row.collapse {
  margin-left: 0;
  margin-right: 0;
}
.row.expanded {
  max-width: none;
}
.row.expanded .row {
  margin-left: auto;
  margin-right: auto;
}

.column, .columns {
  width: 100%;
  float: left;
  padding-left: 0.625rem;
  padding-right: 0.625rem;
}
@media screen and (min-width: 40em) {
  .column, .columns {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
.column:last-child:not(:first-child), .columns:last-child:not(:first-child) {
  float: right;
}
.column.end:last-child:last-child, .end.columns:last-child:last-child {
  float: left;
}

.column.row.row, .row.row.columns {
  float: none;
}
.row .column.row.row, .row .row.row.columns {
  padding-left: 0;
  padding-right: 0;
  margin-left: 0;
  margin-right: 0;
}

.small-1 {
  width: 8.33333%;
}

.small-push-1 {
  position: relative;
  left: 8.33333%;
}

.small-pull-1 {
  position: relative;
  left: -8.33333%;
}

.small-offset-0 {
  margin-left: 0%;
}

.small-2 {
  width: 16.66667%;
}

.small-push-2 {
  position: relative;
  left: 16.66667%;
}

.small-pull-2 {
  position: relative;
  left: -16.66667%;
}

.small-offset-1 {
  margin-left: 8.33333%;
}

.small-3 {
  width: 25%;
}

.small-push-3 {
  position: relative;
  left: 25%;
}

.small-pull-3 {
  position: relative;
  left: -25%;
}

.small-offset-2 {
  margin-left: 16.66667%;
}

.small-4 {
  width: 33.33333%;
}

.small-push-4 {
  position: relative;
  left: 33.33333%;
}

.small-pull-4 {
  position: relative;
  left: -33.33333%;
}

.small-offset-3 {
  margin-left: 25%;
}

.small-5 {
  width: 41.66667%;
}

.small-push-5 {
  position: relative;
  left: 41.66667%;
}

.small-pull-5 {
  position: relative;
  left: -41.66667%;
}

.small-offset-4 {
  margin-left: 33.33333%;
}

.small-6 {
  width: 50%;
}

.small-push-6 {
  position: relative;
  left: 50%;
}

.small-pull-6 {
  position: relative;
  left: -50%;
}

.small-offset-5 {
  margin-left: 41.66667%;
}

.small-7 {
  width: 58.33333%;
}

.small-push-7 {
  position: relative;
  left: 58.33333%;
}

.small-pull-7 {
  position: relative;
  left: -58.33333%;
}

.small-offset-6 {
  margin-left: 50%;
}

.small-8 {
  width: 66.66667%;
}

.small-push-8 {
  position: relative;
  left: 66.66667%;
}

.small-pull-8 {
  position: relative;
  left: -66.66667%;
}

.small-offset-7 {
  margin-left: 58.33333%;
}

.small-9 {
  width: 75%;
}

.small-push-9 {
  position: relative;
  left: 75%;
}

.small-pull-9 {
  position: relative;
  left: -75%;
}

.small-offset-8 {
  margin-left: 66.66667%;
}

.small-10 {
  width: 83.33333%;
}

.small-push-10 {
  position: relative;
  left: 83.33333%;
}

.small-pull-10 {
  position: relative;
  left: -83.33333%;
}

.small-offset-9 {
  margin-left: 75%;
}

.small-11 {
  width: 91.66667%;
}

.small-push-11 {
  position: relative;
  left: 91.66667%;
}

.small-pull-11 {
  position: relative;
  left: -91.66667%;
}

.small-offset-10 {
  margin-left: 83.33333%;
}

.small-12 {
  width: 100%;
}

.small-offset-11 {
  margin-left: 91.66667%;
}

.small-up-1 > .column, .small-up-1 > .columns {
  width: 100%;
  float: left;
}
.small-up-1 > .column:nth-of-type(1n), .small-up-1 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-1 > .column:nth-of-type(1n+1), .small-up-1 > .columns:nth-of-type(1n+1) {
  clear: both;
}
.small-up-1 > .column:last-child, .small-up-1 > .columns:last-child {
  float: left;
}

.small-up-2 > .column, .small-up-2 > .columns {
  width: 50%;
  float: left;
}
.small-up-2 > .column:nth-of-type(1n), .small-up-2 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-2 > .column:nth-of-type(2n+1), .small-up-2 > .columns:nth-of-type(2n+1) {
  clear: both;
}
.small-up-2 > .column:last-child, .small-up-2 > .columns:last-child {
  float: left;
}

.small-up-3 > .column, .small-up-3 > .columns {
  width: 33.33333%;
  float: left;
}
.small-up-3 > .column:nth-of-type(1n), .small-up-3 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-3 > .column:nth-of-type(3n+1), .small-up-3 > .columns:nth-of-type(3n+1) {
  clear: both;
}
.small-up-3 > .column:last-child, .small-up-3 > .columns:last-child {
  float: left;
}

.small-up-4 > .column, .small-up-4 > .columns {
  width: 25%;
  float: left;
}
.small-up-4 > .column:nth-of-type(1n), .small-up-4 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-4 > .column:nth-of-type(4n+1), .small-up-4 > .columns:nth-of-type(4n+1) {
  clear: both;
}
.small-up-4 > .column:last-child, .small-up-4 > .columns:last-child {
  float: left;
}

.small-up-5 > .column, .small-up-5 > .columns {
  width: 20%;
  float: left;
}
.small-up-5 > .column:nth-of-type(1n), .small-up-5 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-5 > .column:nth-of-type(5n+1), .small-up-5 > .columns:nth-of-type(5n+1) {
  clear: both;
}
.small-up-5 > .column:last-child, .small-up-5 > .columns:last-child {
  float: left;
}

.small-up-6 > .column, .small-up-6 > .columns {
  width: 16.66667%;
  float: left;
}
.small-up-6 > .column:nth-of-type(1n), .small-up-6 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-6 > .column:nth-of-type(6n+1), .small-up-6 > .columns:nth-of-type(6n+1) {
  clear: both;
}
.small-up-6 > .column:last-child, .small-up-6 > .columns:last-child {
  float: left;
}

.small-up-7 > .column, .small-up-7 > .columns {
  width: 14.28571%;
  float: left;
}
.small-up-7 > .column:nth-of-type(1n), .small-up-7 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-7 > .column:nth-of-type(7n+1), .small-up-7 > .columns:nth-of-type(7n+1) {
  clear: both;
}
.small-up-7 > .column:last-child, .small-up-7 > .columns:last-child {
  float: left;
}

.small-up-8 > .column, .small-up-8 > .columns {
  width: 12.5%;
  float: left;
}
.small-up-8 > .column:nth-of-type(1n), .small-up-8 > .columns:nth-of-type(1n) {
  clear: none;
}
.small-up-8 > .column:nth-of-type(8n+1), .small-up-8 > .columns:nth-of-type(8n+1) {
  clear: both;
}
.small-up-8 > .column:last-child, .small-up-8 > .columns:last-child {
  float: left;
}

.small-collapse > .column, .small-collapse > .columns {
  padding-left: 0;
  padding-right: 0;
}
.small-collapse .row {
  margin-left: 0;
  margin-right: 0;
}

.small-uncollapse > .column, .small-uncollapse > .columns {
  padding-left: 0.625rem;
  padding-right: 0.625rem;
}

.small-centered {
  float: none;
  margin-left: auto;
  margin-right: auto;
}

.small-uncentered,
.small-push-0,
.small-pull-0 {
  position: static;
  margin-left: 0;
  margin-right: 0;
  float: left;
}

@media screen and (min-width: 40em) {
  .medium-1 {
    width: 8.33333%;
  }

  .medium-push-1 {
    position: relative;
    left: 8.33333%;
  }

  .medium-pull-1 {
    position: relative;
    left: -8.33333%;
  }

  .medium-offset-0 {
    margin-left: 0%;
  }

  .medium-2 {
    width: 16.66667%;
  }

  .medium-push-2 {
    position: relative;
    left: 16.66667%;
  }

  .medium-pull-2 {
    position: relative;
    left: -16.66667%;
  }

  .medium-offset-1 {
    margin-left: 8.33333%;
  }

  .medium-3 {
    width: 25%;
  }

  .medium-push-3 {
    position: relative;
    left: 25%;
  }

  .medium-pull-3 {
    position: relative;
    left: -25%;
  }

  .medium-offset-2 {
    margin-left: 16.66667%;
  }

  .medium-4 {
    width: 33.33333%;
  }

  .medium-push-4 {
    position: relative;
    left: 33.33333%;
  }

  .medium-pull-4 {
    position: relative;
    left: -33.33333%;
  }

  .medium-offset-3 {
    margin-left: 25%;
  }

  .medium-5 {
    width: 41.66667%;
  }

  .medium-push-5 {
    position: relative;
    left: 41.66667%;
  }

  .medium-pull-5 {
    position: relative;
    left: -41.66667%;
  }

  .medium-offset-4 {
    margin-left: 33.33333%;
  }

  .medium-6 {
    width: 50%;
  }

  .medium-push-6 {
    position: relative;
    left: 50%;
  }

  .medium-pull-6 {
    position: relative;
    left: -50%;
  }

  .medium-offset-5 {
    margin-left: 41.66667%;
  }

  .medium-7 {
    width: 58.33333%;
  }

  .medium-push-7 {
    position: relative;
    left: 58.33333%;
  }

  .medium-pull-7 {
    position: relative;
    left: -58.33333%;
  }

  .medium-offset-6 {
    margin-left: 50%;
  }

  .medium-8 {
    width: 66.66667%;
  }

  .medium-push-8 {
    position: relative;
    left: 66.66667%;
  }

  .medium-pull-8 {
    position: relative;
    left: -66.66667%;
  }

  .medium-offset-7 {
    margin-left: 58.33333%;
  }

  .medium-9 {
    width: 75%;
  }

  .medium-push-9 {
    position: relative;
    left: 75%;
  }

  .medium-pull-9 {
    position: relative;
    left: -75%;
  }

  .medium-offset-8 {
    margin-left: 66.66667%;
  }

  .medium-10 {
    width: 83.33333%;
  }

  .medium-push-10 {
    position: relative;
    left: 83.33333%;
  }

  .medium-pull-10 {
    position: relative;
    left: -83.33333%;
  }

  .medium-offset-9 {
    margin-left: 75%;
  }

  .medium-11 {
    width: 91.66667%;
  }

  .medium-push-11 {
    position: relative;
    left: 91.66667%;
  }

  .medium-pull-11 {
    position: relative;
    left: -91.66667%;
  }

  .medium-offset-10 {
    margin-left: 83.33333%;
  }

  .medium-12 {
    width: 100%;
  }

  .medium-offset-11 {
    margin-left: 91.66667%;
  }

  .medium-up-1 > .column, .medium-up-1 > .columns {
    width: 100%;
    float: left;
  }
  .medium-up-1 > .column:nth-of-type(1n), .medium-up-1 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-1 > .column:nth-of-type(1n+1), .medium-up-1 > .columns:nth-of-type(1n+1) {
    clear: both;
  }
  .medium-up-1 > .column:last-child, .medium-up-1 > .columns:last-child {
    float: left;
  }

  .medium-up-2 > .column, .medium-up-2 > .columns {
    width: 50%;
    float: left;
  }
  .medium-up-2 > .column:nth-of-type(1n), .medium-up-2 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-2 > .column:nth-of-type(2n+1), .medium-up-2 > .columns:nth-of-type(2n+1) {
    clear: both;
  }
  .medium-up-2 > .column:last-child, .medium-up-2 > .columns:last-child {
    float: left;
  }

  .medium-up-3 > .column, .medium-up-3 > .columns {
    width: 33.33333%;
    float: left;
  }
  .medium-up-3 > .column:nth-of-type(1n), .medium-up-3 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-3 > .column:nth-of-type(3n+1), .medium-up-3 > .columns:nth-of-type(3n+1) {
    clear: both;
  }
  .medium-up-3 > .column:last-child, .medium-up-3 > .columns:last-child {
    float: left;
  }

  .medium-up-4 > .column, .medium-up-4 > .columns {
    width: 25%;
    float: left;
  }
  .medium-up-4 > .column:nth-of-type(1n), .medium-up-4 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-4 > .column:nth-of-type(4n+1), .medium-up-4 > .columns:nth-of-type(4n+1) {
    clear: both;
  }
  .medium-up-4 > .column:last-child, .medium-up-4 > .columns:last-child {
    float: left;
  }

  .medium-up-5 > .column, .medium-up-5 > .columns {
    width: 20%;
    float: left;
  }
  .medium-up-5 > .column:nth-of-type(1n), .medium-up-5 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-5 > .column:nth-of-type(5n+1), .medium-up-5 > .columns:nth-of-type(5n+1) {
    clear: both;
  }
  .medium-up-5 > .column:last-child, .medium-up-5 > .columns:last-child {
    float: left;
  }

  .medium-up-6 > .column, .medium-up-6 > .columns {
    width: 16.66667%;
    float: left;
  }
  .medium-up-6 > .column:nth-of-type(1n), .medium-up-6 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-6 > .column:nth-of-type(6n+1), .medium-up-6 > .columns:nth-of-type(6n+1) {
    clear: both;
  }
  .medium-up-6 > .column:last-child, .medium-up-6 > .columns:last-child {
    float: left;
  }

  .medium-up-7 > .column, .medium-up-7 > .columns {
    width: 14.28571%;
    float: left;
  }
  .medium-up-7 > .column:nth-of-type(1n), .medium-up-7 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-7 > .column:nth-of-type(7n+1), .medium-up-7 > .columns:nth-of-type(7n+1) {
    clear: both;
  }
  .medium-up-7 > .column:last-child, .medium-up-7 > .columns:last-child {
    float: left;
  }

  .medium-up-8 > .column, .medium-up-8 > .columns {
    width: 12.5%;
    float: left;
  }
  .medium-up-8 > .column:nth-of-type(1n), .medium-up-8 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .medium-up-8 > .column:nth-of-type(8n+1), .medium-up-8 > .columns:nth-of-type(8n+1) {
    clear: both;
  }
  .medium-up-8 > .column:last-child, .medium-up-8 > .columns:last-child {
    float: left;
  }

  .medium-collapse > .column, .medium-collapse > .columns {
    padding-left: 0;
    padding-right: 0;
  }
  .medium-collapse .row {
    margin-left: 0;
    margin-right: 0;
  }

  .medium-uncollapse > .column, .medium-uncollapse > .columns {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }

  .medium-centered {
    float: none;
    margin-left: auto;
    margin-right: auto;
  }

  .medium-uncentered,
  .medium-push-0,
  .medium-pull-0 {
    position: static;
    margin-left: 0;
    margin-right: 0;
    float: left;
  }
}
@media screen and (min-width: 64em) {
  .large-1 {
    width: 8.33333%;
  }

  .large-push-1 {
    position: relative;
    left: 8.33333%;
  }

  .large-pull-1 {
    position: relative;
    left: -8.33333%;
  }

  .large-offset-0 {
    margin-left: 0%;
  }

  .large-2 {
    width: 16.66667%;
  }

  .large-push-2 {
    position: relative;
    left: 16.66667%;
  }

  .large-pull-2 {
    position: relative;
    left: -16.66667%;
  }

  .large-offset-1 {
    margin-left: 8.33333%;
  }

  .large-3 {
    width: 25%;
  }

  .large-push-3 {
    position: relative;
    left: 25%;
  }

  .large-pull-3 {
    position: relative;
    left: -25%;
  }

  .large-offset-2 {
    margin-left: 16.66667%;
  }

  .large-4 {
    width: 33.33333%;
  }

  .large-push-4 {
    position: relative;
    left: 33.33333%;
  }

  .large-pull-4 {
    position: relative;
    left: -33.33333%;
  }

  .large-offset-3 {
    margin-left: 25%;
  }

  .large-5 {
    width: 41.66667%;
  }

  .large-push-5 {
    position: relative;
    left: 41.66667%;
  }

  .large-pull-5 {
    position: relative;
    left: -41.66667%;
  }

  .large-offset-4 {
    margin-left: 33.33333%;
  }

  .large-6 {
    width: 50%;
  }

  .large-push-6 {
    position: relative;
    left: 50%;
  }

  .large-pull-6 {
    position: relative;
    left: -50%;
  }

  .large-offset-5 {
    margin-left: 41.66667%;
  }

  .large-7 {
    width: 58.33333%;
  }

  .large-push-7 {
    position: relative;
    left: 58.33333%;
  }

  .large-pull-7 {
    position: relative;
    left: -58.33333%;
  }

  .large-offset-6 {
    margin-left: 50%;
  }

  .large-8 {
    width: 66.66667%;
  }

  .large-push-8 {
    position: relative;
    left: 66.66667%;
  }

  .large-pull-8 {
    position: relative;
    left: -66.66667%;
  }

  .large-offset-7 {
    margin-left: 58.33333%;
  }

  .large-9 {
    width: 75%;
  }

  .large-push-9 {
    position: relative;
    left: 75%;
  }

  .large-pull-9 {
    position: relative;
    left: -75%;
  }

  .large-offset-8 {
    margin-left: 66.66667%;
  }

  .large-10 {
    width: 83.33333%;
  }

  .large-push-10 {
    position: relative;
    left: 83.33333%;
  }

  .large-pull-10 {
    position: relative;
    left: -83.33333%;
  }

  .large-offset-9 {
    margin-left: 75%;
  }

  .large-11 {
    width: 91.66667%;
  }

  .large-push-11 {
    position: relative;
    left: 91.66667%;
  }

  .large-pull-11 {
    position: relative;
    left: -91.66667%;
  }

  .large-offset-10 {
    margin-left: 83.33333%;
  }

  .large-12 {
    width: 100%;
  }

  .large-offset-11 {
    margin-left: 91.66667%;
  }

  .large-up-1 > .column, .large-up-1 > .columns {
    width: 100%;
    float: left;
  }
  .large-up-1 > .column:nth-of-type(1n), .large-up-1 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-1 > .column:nth-of-type(1n+1), .large-up-1 > .columns:nth-of-type(1n+1) {
    clear: both;
  }
  .large-up-1 > .column:last-child, .large-up-1 > .columns:last-child {
    float: left;
  }

  .large-up-2 > .column, .large-up-2 > .columns {
    width: 50%;
    float: left;
  }
  .large-up-2 > .column:nth-of-type(1n), .large-up-2 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-2 > .column:nth-of-type(2n+1), .large-up-2 > .columns:nth-of-type(2n+1) {
    clear: both;
  }
  .large-up-2 > .column:last-child, .large-up-2 > .columns:last-child {
    float: left;
  }

  .large-up-3 > .column, .large-up-3 > .columns {
    width: 33.33333%;
    float: left;
  }
  .large-up-3 > .column:nth-of-type(1n), .large-up-3 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-3 > .column:nth-of-type(3n+1), .large-up-3 > .columns:nth-of-type(3n+1) {
    clear: both;
  }
  .large-up-3 > .column:last-child, .large-up-3 > .columns:last-child {
    float: left;
  }

  .large-up-4 > .column, .large-up-4 > .columns {
    width: 25%;
    float: left;
  }
  .large-up-4 > .column:nth-of-type(1n), .large-up-4 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-4 > .column:nth-of-type(4n+1), .large-up-4 > .columns:nth-of-type(4n+1) {
    clear: both;
  }
  .large-up-4 > .column:last-child, .large-up-4 > .columns:last-child {
    float: left;
  }

  .large-up-5 > .column, .large-up-5 > .columns {
    width: 20%;
    float: left;
  }
  .large-up-5 > .column:nth-of-type(1n), .large-up-5 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-5 > .column:nth-of-type(5n+1), .large-up-5 > .columns:nth-of-type(5n+1) {
    clear: both;
  }
  .large-up-5 > .column:last-child, .large-up-5 > .columns:last-child {
    float: left;
  }

  .large-up-6 > .column, .large-up-6 > .columns {
    width: 16.66667%;
    float: left;
  }
  .large-up-6 > .column:nth-of-type(1n), .large-up-6 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-6 > .column:nth-of-type(6n+1), .large-up-6 > .columns:nth-of-type(6n+1) {
    clear: both;
  }
  .large-up-6 > .column:last-child, .large-up-6 > .columns:last-child {
    float: left;
  }

  .large-up-7 > .column, .large-up-7 > .columns {
    width: 14.28571%;
    float: left;
  }
  .large-up-7 > .column:nth-of-type(1n), .large-up-7 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-7 > .column:nth-of-type(7n+1), .large-up-7 > .columns:nth-of-type(7n+1) {
    clear: both;
  }
  .large-up-7 > .column:last-child, .large-up-7 > .columns:last-child {
    float: left;
  }

  .large-up-8 > .column, .large-up-8 > .columns {
    width: 12.5%;
    float: left;
  }
  .large-up-8 > .column:nth-of-type(1n), .large-up-8 > .columns:nth-of-type(1n) {
    clear: none;
  }
  .large-up-8 > .column:nth-of-type(8n+1), .large-up-8 > .columns:nth-of-type(8n+1) {
    clear: both;
  }
  .large-up-8 > .column:last-child, .large-up-8 > .columns:last-child {
    float: left;
  }

  .large-collapse > .column, .large-collapse > .columns {
    padding-left: 0;
    padding-right: 0;
  }
  .large-collapse .row {
    margin-left: 0;
    margin-right: 0;
  }

  .large-uncollapse > .column, .large-uncollapse > .columns {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }

  .large-centered {
    float: none;
    margin-left: auto;
    margin-right: auto;
  }

  .large-uncentered,
  .large-push-0,
  .large-pull-0 {
    position: static;
    margin-left: 0;
    margin-right: 0;
    float: left;
  }
}
.accordion {
  list-style-type: none;
  background: white;
  border: 1px solid #fafafa;
  border-bottom: 0;
  border-radius: 2px;
  margin-left: 0;
}

.accordion-title {
  display: block;
  padding: 1.25rem 1rem;
  line-height: 1;
  font-size: 0.75rem;
  color: #00bcd4;
  position: relative;
  border-bottom: 1px solid #fafafa;
}
.accordion-title:hover, .accordion-title:focus {
  background-color: #fafafa;
}
.accordion-title::before {
  content: '+';
  position: absolute;
  right: 1rem;
  top: 50%;
  margin-top: -0.5rem;
}
.is-active > .accordion-title::before {
  content: '–';
}

.accordion-content {
  padding: 1rem;
  display: none;
  border-bottom: 1px solid #fafafa;
  background-color: white;
}

.is-accordion-submenu-parent > a {
  position: relative;
}
.is-accordion-submenu-parent > a::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 6px;
  border-color: #00bcd4 transparent transparent;
  border-top-style: solid;
  border-bottom-width: 0;
  position: absolute;
  top: 50%;
  margin-top: -4px;
  right: 1rem;
}

.is-accordion-submenu-parent[aria-expanded='true'] > a::after {
  transform-origin: 50% 50%;
  transform: scaleY(-1);
}

.breadcrumbs {
  list-style: none;
  margin: 0.5rem 0 1rem 0rem;
}
.breadcrumbs::before, .breadcrumbs::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.breadcrumbs::after {
  clear: both;
}
.breadcrumbs li {
  float: left;
    list-style-type: none;
  color: #a5a5a5;
  font-size: 0.6875rem;
  cursor: default;
  text-transform: uppercase;
}
.breadcrumbs li:not(:last-child)::after {
  color: #eeeeee;
  content: "/";
  margin: 0 0.75rem;
  position: relative;
  top: 1px;
  opacity: 1;
}
.breadcrumbs a {
  color: #1b334b;
}
.breadcrumbs a:hover {
  text-decoration: underline;
}
.breadcrumbs .disabled {
  color: #eeeeee;
}

.callout {
  margin: 0 0 1rem 0;
  padding: 1rem;
  border: 1px solid rgba(0, 0, 0, 0.25);
  border-radius: 2px;
  position: relative;
  color: rgba(0, 0, 0, 0.87);
  background-color: white;
}
.callout > :first-child {
  margin-top: 0;
}
.callout > :last-child {
  margin-bottom: 0;
}
.callout.primary {
  background-color: #d2faff;
}
.callout.secondary {
  background-color: #fffce2;
}
.callout.success {
  background-color: #d8f6d8;
}
.callout.warning {
  background-color: #fff6da;
}
.callout.alert {
  background-color: #fbddde;
}
.callout.small {
  padding-top: 0.5rem;
  padding-right: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 0.5rem;
}
.callout.large {
  padding-top: 3rem;
  padding-right: 3rem;
  padding-bottom: 3rem;
  padding-left: 3rem;
}

.close-button {
  position: absolute;
  color: #9e9e9e;
  right: 1rem;
  top: 0.5rem;
  font-size: 2em;
  line-height: 1;
  cursor: pointer;
}
[data-whatinput='mouse'] .close-button {
  outline: 0;
}
.close-button:hover, .close-button:focus {
  color: rgba(0, 0, 0, 0.87);
}

.menu-icon {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  cursor: pointer;
  width: 20px;
  height: 16px;
}
.menu-icon::after {
  content: '';
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  background: white;
  top: 0;
  left: 0;
  box-shadow: 0 7px 0 white, 0 14px 0 white;
}
.menu-icon:hover::after {
  background: #eeeeee;
  box-shadow: 0 7px 0 #eeeeee, 0 14px 0 #eeeeee;
}

.menu-icon.dark {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  cursor: pointer;
  width: 20px;
  height: 16px;
}
.menu-icon.dark::after {
  content: '';
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  background: rgba(0, 0, 0, 0.87);
  top: 0;
  left: 0;
  box-shadow: 0 7px 0 rgba(0, 0, 0, 0.87), 0 14px 0 rgba(0, 0, 0, 0.87);
}
.menu-icon.dark:hover::after {
  background: #9e9e9e;
  box-shadow: 0 7px 0 #9e9e9e, 0 14px 0 #9e9e9e;
}

.is-drilldown {
  position: relative;
  overflow: hidden;
}
.is-drilldown li {
  display: block !important;
}

.is-drilldown-submenu {
  position: absolute;
  top: 0;
  left: 100%;
  z-index: -1;
  height: 100%;
  width: 100%;
  background: white;
  transition: transform 0.15s linear;
}
.is-drilldown-submenu.is-active {
  z-index: 1;
  display: block;
  transform: translateX(-100%);
}
.is-drilldown-submenu.is-closing {
  transform: translateX(100%);
}

.is-drilldown-submenu-parent > a {
  position: relative;
}
.is-drilldown-submenu-parent > a::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 6px;
  border-color: transparent transparent transparent #00bcd4;
  border-left-style: solid;
  border-right-width: 0;
  position: absolute;
  top: 50%;
  margin-top: -6px;
  right: 1rem;
}

.js-drilldown-back > a::before {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 6px;
  border-color: transparent #00bcd4 transparent transparent;
  border-right-style: solid;
  border-left-width: 0;
  border-left-width: 0;
  display: inline-block;
  vertical-align: middle;
  margin-right: 0.75rem;
}

.dropdown.menu > li.opens-left > .is-dropdown-submenu {
  left: auto;
  right: 0;
  top: 100%;
}
.dropdown.menu > li.opens-right > .is-dropdown-submenu {
  right: auto;
  left: 0;
  top: 100%;
}
.dropdown.menu > li.is-dropdown-submenu-parent > a {
  padding-right: 1.5rem;
  position: relative;
}
.dropdown.menu > li.is-dropdown-submenu-parent > a::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 5px;
  border-color: #00bcd4 transparent transparent;
  border-top-style: solid;
  border-bottom-width: 0;
  right: 5px;
  margin-top: -2px;
}
[data-whatinput='mouse'] .dropdown.menu a {
  outline: 0;
}
.no-js .dropdown.menu ul {
  display: none;
}
.dropdown.menu.vertical > li .is-dropdown-submenu {
  top: 0;
}
.dropdown.menu.vertical > li.opens-left .is-dropdown-submenu {
  left: auto;
  right: 100%;
}
.dropdown.menu.vertical > li.opens-right .is-dropdown-submenu {
  right: auto;
  left: 100%;
}
.dropdown.menu.vertical > li > a::after {
  right: 14px;
  margin-top: -3px;
}
.dropdown.menu.vertical > li.opens-left > a::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 5px;
  border-color: transparent #00bcd4 transparent transparent;
  border-right-style: solid;
  border-left-width: 0;
}
.dropdown.menu.vertical > li.opens-right > a::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 5px;
  border-color: transparent transparent transparent #00bcd4;
  border-left-style: solid;
  border-right-width: 0;
}
@media screen and (min-width: 40em) {
  .dropdown.menu.medium-horizontal > li.opens-left > .is-dropdown-submenu {
    left: auto;
    right: 0;
    top: 100%;
  }
  .dropdown.menu.medium-horizontal > li.opens-right > .is-dropdown-submenu {
    right: auto;
    left: 0;
    top: 100%;
  }
  .dropdown.menu.medium-horizontal > li.is-dropdown-submenu-parent > a {
    padding-right: 1.5rem;
    position: relative;
  }
  .dropdown.menu.medium-horizontal > li.is-dropdown-submenu-parent > a::after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border: inset 5px;
    border-color: #00bcd4 transparent transparent;
    border-top-style: solid;
    border-bottom-width: 0;
    right: 5px;
    margin-top: -2px;
  }
  .dropdown.menu.medium-vertical > li .is-dropdown-submenu {
    top: 0;
  }
  .dropdown.menu.medium-vertical > li.opens-left .is-dropdown-submenu {
    left: auto;
    right: 100%;
  }
  .dropdown.menu.medium-vertical > li.opens-right .is-dropdown-submenu {
    right: auto;
    left: 100%;
  }
  .dropdown.menu.medium-vertical > li > a::after {
    right: 14px;
    margin-top: -3px;
  }
  .dropdown.menu.medium-vertical > li.opens-left > a::after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border: inset 5px;
    border-color: transparent #00bcd4 transparent transparent;
    border-right-style: solid;
    border-left-width: 0;
  }
  .dropdown.menu.medium-vertical > li.opens-right > a::after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border: inset 5px;
    border-color: transparent transparent transparent #00bcd4;
    border-left-style: solid;
    border-right-width: 0;
  }
}
@media screen and (min-width: 64em) {
  .dropdown.menu.large-horizontal > li.opens-left > .is-dropdown-submenu {
    left: auto;
    right: 0;
    top: 100%;
  }
  .dropdown.menu.large-horizontal > li.opens-right > .is-dropdown-submenu {
    right: auto;
    left: 0;
    top: 100%;
  }
  .dropdown.menu.large-horizontal > li.is-dropdown-submenu-parent > a {
    padding-right: 1.5rem;
    position: relative;
  }
  .dropdown.menu.large-horizontal > li.is-dropdown-submenu-parent > a::after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border: inset 5px;
    border-color: #00bcd4 transparent transparent;
    border-top-style: solid;
    border-bottom-width: 0;
    right: 5px;
    margin-top: -2px;
  }
  .dropdown.menu.large-vertical > li .is-dropdown-submenu {
    top: 0;
  }
  .dropdown.menu.large-vertical > li.opens-left .is-dropdown-submenu {
    left: auto;
    right: 100%;
  }
  .dropdown.menu.large-vertical > li.opens-right .is-dropdown-submenu {
    right: auto;
    left: 100%;
  }
  .dropdown.menu.large-vertical > li > a::after {
    right: 14px;
    margin-top: -3px;
  }
  .dropdown.menu.large-vertical > li.opens-left > a::after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border: inset 5px;
    border-color: transparent #00bcd4 transparent transparent;
    border-right-style: solid;
    border-left-width: 0;
  }
  .dropdown.menu.large-vertical > li.opens-right > a::after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border: inset 5px;
    border-color: transparent transparent transparent #00bcd4;
    border-left-style: solid;
    border-right-width: 0;
  }
}
.dropdown.menu.align-right .is-dropdown-submenu.first-sub {
  top: 100%;
  left: auto;
  right: 0;
}

.is-dropdown-menu.vertical {
  width: 100px;
}
.is-dropdown-menu.vertical.align-right {
  float: right;
}

.is-dropdown-submenu-parent {
  position: relative;
}
.is-dropdown-submenu-parent a::after {
  position: absolute;
  top: 50%;
  right: 5px;
  margin-top: -2px;
}
.is-dropdown-submenu-parent.opens-inner .is-dropdown-submenu {
  top: 100%;
}
.is-dropdown-submenu-parent.opens-left .is-dropdown-submenu {
  left: auto;
  right: 0;
  top: 100%;
}

.is-dropdown-submenu {
  display: none;
  position: absolute;
  top: 0;
  left: 100%;
  min-width: 200px;
  z-index: 1;
  background: white;
  border: 1px solid #eeeeee;
}
.is-dropdown-submenu .is-dropdown-submenu-parent > a::after {
  right: 14px;
  margin-top: -3px;
}
.is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 5px;
  border-color: transparent #00bcd4 transparent transparent;
  border-right-style: solid;
  border-left-width: 0;
}
.is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 5px;
  border-color: transparent transparent transparent #00bcd4;
  border-left-style: solid;
  border-right-width: 0;
}
.is-dropdown-submenu .is-dropdown-submenu {
  margin-top: -1px;
}
.is-dropdown-submenu > li {
  width: 100%;
}
.is-dropdown-submenu:not(.js-dropdown-nohover) > .is-dropdown-submenu-parent:hover > .is-dropdown-submenu, .is-dropdown-submenu.js-dropdown-active {
  display: block;
}

.flex-video {
  position: relative;
  height: 0;
  padding-bottom: 75%;
  margin-bottom: 1rem;
  overflow: hidden;
}
.flex-video iframe,
.flex-video object,
.flex-video embed,
.flex-video video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.flex-video.widescreen {
  padding-bottom: 56.25%;
}
.flex-video.vimeo {
  padding-top: 0;
}

.media-object {
  margin-bottom: 1rem;
  display: block;
}
.media-object img {
  max-width: none;
}
@media screen and (max-width: 39.9375em) {
  .media-object.stack-for-small .media-object-section {
    padding: 0;
    padding-bottom: 1rem;
    display: block;
  }
  .media-object.stack-for-small .media-object-section img {
    width: 100%;
  }
}

.media-object-section {
  display: table-cell;
  vertical-align: top;
}
.media-object-section:first-child {
  padding-right: 1rem;
}
.media-object-section:last-child:not(:nth-child(2)) {
  padding-left: 1rem;
}
.media-object-section.middle {
  vertical-align: middle;
}
.media-object-section.bottom {
  vertical-align: bottom;
}

html,
body {
  height: 100%;
}

.off-canvas-wrapper {
  width: 100%;
  overflow-x: hidden;
  position: relative;
  backface-visibility: hidden;
  -webkit-overflow-scrolling: auto;
}

.off-canvas-wrapper-inner {
  position: relative;
  width: 100%;
  transition: transform 0.5s ease;
}
.off-canvas-wrapper-inner::before, .off-canvas-wrapper-inner::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.off-canvas-wrapper-inner::after {
  clear: both;
}

.off-canvas-content,
.off-canvas-content {
  min-height: 100%;
  background: #eeeeee;
  transition: transform 0.5s ease;
  backface-visibility: hidden;
  z-index: 1;
  padding-bottom: 0.1px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.js-off-canvas-exit {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.25);
  cursor: pointer;
  transition: background 0.5s ease;
}

.off-canvas {
  position: absolute;
  background: #fafafa;
  z-index: -1;
  max-height: 100%;
  overflow-y: auto;
  transform: translateX(0);
}
[data-whatinput='mouse'] .off-canvas {
  outline: 0;
}
.off-canvas.position-left {
  left: -250px;
  top: 0;
  width: 250px;
}
.is-open-left {
  transform: translateX(250px);
}
.off-canvas.position-right {
  right: -250px;
  top: 0;
  width: 250px;
}
.is-open-right {
  transform: translateX(-250px);
}

@media screen and (min-width: 40em) {
  .position-left.reveal-for-medium {
    left: 0;
    z-index: auto;
    position: fixed;
  }
  .position-left.reveal-for-medium ~ .off-canvas-content {
    margin-left: 250px;
  }

  .position-right.reveal-for-medium {
    right: 0;
    z-index: auto;
    position: fixed;
  }
  .position-right.reveal-for-medium ~ .off-canvas-content {
    margin-right: 250px;
  }
}
@media screen and (min-width: 64em) {
  .position-left.reveal-for-large {
    left: 0;
    z-index: auto;
    position: fixed;
  }
  .position-left.reveal-for-large ~ .off-canvas-content {
    margin-left: 250px;
  }

  .position-right.reveal-for-large {
    right: 0;
    z-index: auto;
    position: fixed;
  }
  .position-right.reveal-for-large ~ .off-canvas-content {
    margin-right: 250px;
  }
}
.orbit {
  position: relative;
}

.orbit-container {
  position: relative;
  margin: 0;
  overflow: hidden;
  list-style: none;
}

.orbit-slide {
  width: 100%;
  max-height: 100%;
}
.orbit-slide.no-motionui.is-active {
  top: 0;
  left: 0;
}

.orbit-figure {
  margin: 0;
}

.orbit-image {
  margin: 0;
  width: 100%;
  max-width: 100%;
}

.orbit-caption {
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 1rem;
  margin-bottom: 0;
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
}

.orbit-previous, .orbit-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  padding: 1rem;
  color: white;
}
[data-whatinput='mouse'] .orbit-previous, [data-whatinput='mouse'] .orbit-next {
  outline: 0;
}
.orbit-previous:hover, .orbit-next:hover, .orbit-previous:active, .orbit-next:active, .orbit-previous:focus, .orbit-next:focus {
  background-color: rgba(0, 0, 0, 0.5);
}

.orbit-previous {
  left: 0;
}

.orbit-next {
  left: auto;
  right: 0;
}

.orbit-bullets {
  position: relative;
  margin-top: 0.8rem;
  margin-bottom: 0.8rem;
  text-align: center;
}
[data-whatinput='mouse'] .orbit-bullets {
  outline: 0;
}
.orbit-bullets button {
  width: 1.2rem;
  height: 1.2rem;
  margin: 0.1rem;
  background-color: #eeeeee;
  border-radius: 50%;
}
.orbit-bullets button:hover {
  background-color: #9e9e9e;
}
.orbit-bullets button.is-active {
  background-color: #9e9e9e;
}

.pagination {
  margin-left: 0;
  margin-bottom: 1rem;
}
.pagination::before, .pagination::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.pagination::after {
  clear: both;
}
.pagination li {
  font-size: 0.875rem;
  margin-right: 0.0625rem;
  border-radius: 2px;
  display: none;
}
.pagination li:last-child, .pagination li:first-child {
  display: inline-block;
}
@media screen and (min-width: 40em) {
  .pagination li {
    display: inline-block;
  }
}
.pagination a,
.pagination button {
  color: rgba(0, 0, 0, 0.87);
  display: block;
  padding: 0.1875rem 0.625rem;
  border-radius: 2px;
}
.pagination a:hover,
.pagination button:hover {
  background: #fafafa;
}
.pagination .current {
  padding: 0.1875rem 0.625rem;
  background: #00bcd4;
  color: white;
  cursor: default;
}
.pagination .disabled {
  padding: 0.1875rem 0.625rem;
  color: #eeeeee;
  cursor: default;
}
.pagination .disabled:hover {
  background: transparent;
}
.pagination .ellipsis::after {
  content: '\2026';
  padding: 0.1875rem 0.625rem;
  color: rgba(0, 0, 0, 0.87);
}

.pagination-previous a::before,
.pagination-previous.disabled::before {
  content: '\00ab';
  display: inline-block;
  margin-right: 0.5rem;
}

.pagination-next a::after,
.pagination-next.disabled::after {
  content: '\00bb';
  display: inline-block;
  margin-left: 0.5rem;
}
.icon-button{
    
        height: 1rem;
}
.sticky-container {
  position: relative;
}

.sticky {
  position: absolute;
  z-index: 0;
  transform: translate3d(0, 0, 0);
}

.sticky.is-stuck {
  position: fixed;
  z-index: 5;
    right: -webkit-calc(50% - 42rem);
right: 14px;
right: 14px;
}
.sticky.is-stuck.is-at-top {
  top: 0;
}
.sticky.is-stuck.is-at-bottom {
  bottom: 0;
}

.sticky.is-anchored {
  position: absolute;
  left: auto;
  right: auto;
}
.sticky.is-anchored.is-at-bottom {
  bottom: 0;
}

body.is-reveal-open {
  overflow: hidden;
}

.reveal-overlay {
  display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1005;
  background-color: rgba(0, 0, 0, 0.45);
  overflow-y: scroll;
}

.reveal {
  display: none;
  z-index: 1006;
  padding: 1rem;
  border: 1px solid #eeeeee;
  background-color: white;
  border-radius: 2px;
  position: relative;
  top: 100px;
  margin-left: auto;
  margin-right: auto;
  overflow-y: auto;
}
[data-whatinput='mouse'] .reveal {
  outline: 0;
}
@media screen and (min-width: 40em) {
  .reveal {
    min-height: 0;
  }
}
.reveal .column, .reveal .columns,
.reveal .columns {
  min-width: 0;
}
.reveal > :last-child {
  margin-bottom: 0;
}
@media screen and (min-width: 40em) {
  .reveal {
    width: 600px;
    max-width: 60rem;
  }
}
@media screen and (min-width: 40em) {
  .reveal .reveal {
    left: auto;
    right: auto;
    margin: 0 auto;
  }
}
.reveal.collapse {
  padding: 0;
}
@media screen and (min-width: 40em) {
  .reveal.tiny {
    width: 30%;
    max-width: 60rem;
  }
}
@media screen and (min-width: 40em) {
  .reveal.small {
    width: 50%;
    max-width: 60rem;
  }
}
@media screen and (min-width: 40em) {
  .reveal.large {
    width: 90%;
    max-width: 60rem;
  }
}
.reveal.full {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  height: 100vh;
  min-height: 100vh;
  max-width: none;
  margin-left: 0;
  border: 0;
}
@media screen and (max-width: 39.9375em) {
  .reveal {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    height: 100vh;
    min-height: 100vh;
    max-width: none;
    margin-left: 0;
    border: 0;
  }
}
.reveal.without-overlay {
  position: fixed;
}

.thumbnail {
  border: solid 4px white;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
  display: inline-block;
  line-height: 0;
  max-width: 100%;
  transition: box-shadow 200ms ease-out;
  border-radius: 2px;
  margin-bottom: 1rem;
}
.thumbnail:hover, .thumbnail:focus {
  box-shadow: 0 0 6px 1px rgba(0, 188, 212, 0.5);
}

.title-bar {
  background: rgba(0, 0, 0, 0.87);
  color: white;
  padding: 0.5rem;
}
.title-bar::before, .title-bar::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.title-bar::after {
  clear: both;
}
.title-bar .menu-icon {
  margin-left: 0.25rem;
  margin-right: 0.5rem;
}

.title-bar-left {
  float: left;
}

.title-bar-right {
  float: right;
  text-align: right;
}

.title-bar-title {
  font-weight: bold;
  vertical-align: middle;
  display: inline-block;
}

.menu-icon.dark {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  cursor: pointer;
  width: 20px;
  height: 16px;
}
.menu-icon.dark::after {
  content: '';
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  background: rgba(0, 0, 0, 0.87);
  top: 0;
  left: 0;
  box-shadow: 0 7px 0 rgba(0, 0, 0, 0.87), 0 14px 0 rgba(0, 0, 0, 0.87);
}
.menu-icon.dark:hover::after {
  background: #9e9e9e;
  box-shadow: 0 7px 0 #9e9e9e, 0 14px 0 #9e9e9e;
}

.hide {
  display: none !important;
}

.invisible {
  visibility: hidden;
}

@media screen and (max-width: 39.9375em) {
  .hide-for-small-only {
    display: none !important;
  }
}

@media screen and (max-width: 0em), screen and (min-width: 40em) {
  .show-for-small-only {
    display: none !important;
  }
}

@media screen and (min-width: 40em) {
  .hide-for-medium {
    display: none !important;
  }
}

@media screen and (max-width: 39.9375em) {
  .show-for-medium {
    display: none !important;
  }
}

@media screen and (min-width: 40em) and (max-width: 63.9375em) {
  .hide-for-medium-only {
    display: none !important;
  }
}

@media screen and (max-width: 39.9375em), screen and (min-width: 64em) {
  .show-for-medium-only {
    display: none !important;
  }
}

@media screen and (min-width: 64em) {
  .hide-for-large {
    display: none !important;
  }
}

@media screen and (max-width: 63.9375em) {
  .show-for-large {
    display: none !important;
  }
}

@media screen and (min-width: 64em) and (max-width: 74.9375em) {
  .hide-for-large-only {
    display: none !important;
  }
}

@media screen and (max-width: 63.9375em), screen and (min-width: 75em) {
  .show-for-large-only {
    display: none !important;
  }
}

.show-for-sr,
.show-on-focus {
  position: absolute !important;
  width: 1px;
  height: 1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
}

.show-on-focus:active, .show-on-focus:focus {
  position: static !important;
  height: auto;
  width: auto;
  overflow: visible;
  clip: auto;
}

.show-for-landscape,
.hide-for-portrait {
  display: block !important;
}
@media screen and (orientation: landscape) {
  .show-for-landscape,
  .hide-for-portrait {
    display: block !important;
  }
}
@media screen and (orientation: portrait) {
  .show-for-landscape,
  .hide-for-portrait {
    display: none !important;
  }
}

.hide-for-landscape,
.show-for-portrait {
  display: none !important;
}
@media screen and (orientation: landscape) {
  .hide-for-landscape,
  .show-for-portrait {
    display: none !important;
  }
}
@media screen and (orientation: portrait) {
  .hide-for-landscape,
  .show-for-portrait {
    display: block !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.clearfix::before, .clearfix::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.clearfix::after {
  clear: both;
}

.theme-light {
  background: #eeeeee;
}
.theme-light .text-display-4, .theme-light .text-display-3, .theme-light header h1, header .theme-light h1, .theme-light .text-display-2, .theme-light .text-display-1, .theme-light header h2, header .theme-light h2, .theme-light .text-caption {
  color: rgba(0, 0, 0, 0.54);
}
.theme-light .text-headline, .theme-light h2.demo-headline, .theme-light .text-title, .theme-light .text-subhead, .theme-light .summary h1, .summary .theme-light h1, .theme-light .text-body-2, .theme-light thead tr, thead .theme-light tr, .theme-light .text-body-1, .theme-light .chip, .theme-light tr, .theme-light .text-menu, .theme-light .text-button, .theme-light .tabs .tabs-title a, .tabs .tabs-title .theme-light a, .theme-light .raised-button, .theme-light .raised-accent-button, .theme-light .flat-button, .theme-light .disabled-button, .theme-light i {
  color: rgba(0, 0, 0, 0.87);
}

.theme-dark {
  background: #212121;
}
.theme-dark .text-display-4, .theme-dark .text-display-3, .theme-dark header h1, header .theme-dark h1, .theme-dark .text-display-2, .theme-dark .text-display-1, .theme-dark header h2, header .theme-dark h2, .theme-dark .text-caption {
  color: rgba(255, 255, 255, 0.54);
}
.theme-dark .text-headline, .theme-dark h2.demo-headline, .theme-dark .text-title, .theme-dark .text-subhead, .theme-dark .summary h1, .summary .theme-dark h1, .theme-dark .text-body-2, .theme-dark thead tr, thead .theme-dark tr, .theme-dark .text-body-1, .theme-dark .chip, .theme-dark tr, .theme-dark .text-menu, .theme-dark .text-button, .theme-dark .tabs .tabs-title a, .tabs .tabs-title .theme-dark a, .theme-dark .raised-button, .theme-dark .raised-accent-button, .theme-dark .flat-button, .theme-dark .disabled-button, .theme-dark i {
  color: rgba(255, 255, 255, 0.87);
}

.z-depth-1, .raised-button, .floating-action-button, .raised-accent-button, .floating-action-accent-button, .card, .top-bar {      
    box-shadow: 0 1px 0px 0 rgb(250, 250, 250), 0 1px 5px 0 rgba(0, 0, 0, 0.19);
}

.z-depth-1-hard, .switch input + label:after {
  box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.32), 0 1px 5px 0 rgba(0, 0, 0, 0.24);
}

.z-depth-2, .raised-button:active, .floating-action-button:active, .raised-accent-button:active, .floating-action-accent-button:active, .dropdown-pane {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.09);
}

.z-depth-3 {
  box-shadow: 0 6px 7px 0 rgba(0, 0, 0, 0.12), 0 17px 50px 0 rgba(0, 0, 0, 0.08);
}

.z-depth-4 {
  box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.11), 0 12px 27px 0 rgba(0, 0, 0, 0.1);
}

.z-depth-5 {
  box-shadow: 0 13px 12px 0 rgba(0, 0, 0, 0.1), 0 20px 36px 0 rgba(0, 0, 0, 0.11);
}

.ink {
  position: relative;
  cursor: pointer;
  overflow: hidden;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.ripple, .ripple-color {
  position: absolute;
  border-radius: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

.ripple {
  background: rgba(0, 0, 0, 0.12);
}

.ripple-color {
  background: #ffeb3b;
}

.ripple.show, .ripple-color.show {
  -webkit-animation: ripple .75s ease-out;
  animation: ripple .75s ease-out;
}

@-webkit-keyframes ripple {
  to {
    -webkit-transform: scale(2);
    transform: scale(2);
    opacity: 0;
  }
}
@keyframes ripple {
  to {
    -webkit-transform: scale(2);
    transform: scale(2);
    opacity: 0;
  }
}
/*!
 *  Material Design Iconic Font by Sergey Kupletsky ($zavoloklom) - http://zavoloklom.github.io/material-design-iconic-font/
 *  License - http://zavoloklom.github.io/material-design-iconic-font/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
@font-face {
  font-family: "Material-Design-Iconic-Font";
  src: url("../bower_components/material-design-iconic-font/dist/fonts/Material-Design-Iconic-Font.woff2?v=2.2.0") format("woff2"), url("../bower_components/material-design-iconic-font/dist/fonts/Material-Design-Iconic-Font.woff?v=2.2.0") format("woff"), url("../bower_components/material-design-iconic-font/dist/fonts/Material-Design-Iconic-Font.ttf?v=2.2.0") format("truetype");
  font-weight: normal;
  font-style: normal;
}
.icon {
  display: inline-block;
  font: normal normal normal 14px/1 "Material-Design-Iconic-Font";
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-hc-lg {
  font-size: 1.33333em;
  line-height: 0.75em;
  vertical-align: -15%;
}

.icon-hc-2x {
  font-size: 2em;
}

.icon-hc-3x {
  font-size: 3em;
}

.icon-hc-4x {
  font-size: 4em;
}

.icon-hc-5x {
  font-size: 5em;
}

.icon-hc-fw {
  width: 1.28571em;
  text-align: center;
}

.icon-hc-ul {
  padding-left: 0;
  margin-left: 2.14286em;
  list-style-type: none;
}
.icon-hc-ul > li {
  position: relative;
}

.icon-hc-li {
  position: absolute;
  left: -2.14286em;
  width: 2.14286em;
  top: 0.14286em;
  text-align: center;
}
.icon-hc-li.icon-hc-lg {
  left: -1.85714em;
}

.icon-hc-border {
  padding: .1em .25em;
  border: solid 0.1em #9E9E9E;
  border-radius: 2px;
}

.icon-hc-border-circle {
  padding: .1em .25em;
  border: solid 0.1em #9E9E9E;
  border-radius: 50%;
}

.icon.pull-left {
  float: left;
  margin-right: .15em;
}
.icon.pull-right {
  float: right;
  margin-left: .15em;
}

.icon-hc-spin {
  animation: zmdi-spin 1.5s infinite linear;
}

.icon-hc-spin-reverse {
  animation: zmdi-spin-reverse 1.5s infinite linear;
}

@keyframes zmdi-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}
@keyframes zmdi-spin-reverse {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-359deg);
  }
}
.icon-hc-rotate-90 {
  transform: rotate(90deg);
}

.icon-hc-rotate-180 {
  transform: rotate(180deg);
}

.icon-hc-rotate-270 {
  transform: rotate(270deg);
}

.icon-hc-flip-horizontal {
  transform: scale(-1, 1);
}

.icon-hc-flip-vertical {
  transform: scale(1, -1);
}

.icon-hc-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}

.icon-hc-stack-1x, .icon-hc-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}

.icon-hc-stack-1x {
  line-height: inherit;
}

.icon-hc-stack-2x {
  font-size: 2em;
}

.icon-hc-inverse {
  color: #FFFFFF;
}



div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
form,
p,
blockquote,
th,
td {
  margin: 0;
  padding: 0;
}

p {
  font-size: 14px;
  line-height: 1.6;
  margin-bottom: 1rem;
  text-rendering: optimizeLegibility;
}

em,
i {
  font-style: italic;
  line-height: inherit;
}

strong,
b {
  font-weight: 500;
  line-height: inherit;
}

small {
  font-size: 80%;
  line-height: inherit;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: Roboto, Noto, sans-serif;
  font-weight: 400;
  font-style: normal;
  color: inherit;
  text-rendering: optimizeLegibility;
  margin-top: 0;
  margin-bottom: 0.5rem;
  line-height: 1.4;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
  color: #eeeeee;
  line-height: 0;
}

h1 {
  font-size: 1.5rem;
}

h2 {
  font-size: 1.25rem;
}

h3 {
  font-size: 1.1875rem;
}

h4 {
  font-size: 1.125rem;
}

h5 {
  font-size: 1.0625rem;
}

h6 {
  font-size: 1rem;
}

@media screen and (min-width: 40em) {
  h1 {
    font-size: 3rem;
  }

  h2 {
    font-size: 2.5rem;
  }

  h3 {
    font-size: 1.9375rem;
  }

  h4 {
    font-size: 1.5625rem;
  }

  h5 {
    font-size: 1.25rem;
  }

  h6 {
    font-size: 1rem;
  }
}
a {
  color: #1b334b;
  text-decoration: none;
  line-height: inherit;
  cursor: pointer;
}
a:hover, a:focus {
  color: #00a2b6;
}
a img {
  border: 0;
}

hr {
  max-width: 60rem;
  height: 0;
  border-right: 0;
  border-top: 0;
  border-bottom: 1px solid #eeeeee;
  border-left: 0;
  margin: 1.25rem auto;
  clear: both;
}

ul,
ol,
dl {
  line-height: 1.6;
  margin-bottom: 1rem;
  list-style-position: outside;
}

li {
  font-size: inherit;
}

ul {
  list-style-type: disc;
  margin-left: 1.25rem;
}

ol {
  margin-left: 1.25rem;
}

ul ul, ol ul, ul ol, ol ol {
  margin-left: 1.25rem;
  margin-bottom: 0;
}

dl {
  margin-bottom: 1rem;
}
dl dt {
  margin-bottom: 0.3rem;
  font-weight: 500;
}

blockquote {
  margin: 0 0 1rem;
  padding: 0.5625rem 1.25rem 0 1.1875rem;
  border-left: 1px solid #eeeeee;
}
blockquote, blockquote p {
  line-height: 1.6;
  color: #9e9e9e;
}

cite {
  display: block;
  font-size: 0.8125rem;
  color: #9e9e9e;
}
cite:before {
  content: '\2014 \0020';
}

abbr {
  color: rgba(0, 0, 0, 0.87);
  cursor: help;
  border-bottom: 1px dotted rgba(0, 0, 0, 0.87);
}

code {
  font-family: Consolas, "Liberation Mono", Courier, monospace;
  font-weight: 400;
  color: rgba(0, 0, 0, 0.87);
  background-color: #fafafa;
  border: 1px solid #eeeeee;
  padding: 0.125rem 0.3125rem 0.0625rem;
}

kbd {
  padding: 0.125rem 0.25rem 0;
  margin: 0;
  background-color: #fafafa;
  color: rgba(0, 0, 0, 0.87);
  font-family: Consolas, "Liberation Mono", Courier, monospace;
  border-radius: 2px;
}

.subheader {
  margin-top: 0.2rem;
  margin-bottom: 0.5rem;
  font-weight: 400;
  line-height: 1.4;
  color: #9e9e9e;
}

.lead {
  font-size: 125%;
  line-height: 1.6;
}

.stat {
  font-size: 2.5rem;
  line-height: 1;
}
p + .stat {
  margin-top: -1rem;
}

.no-bullet {
  margin-left: 0;
  list-style: none;
}

.text-left {
  text-align: left;
}

.text-right {
  text-align: right;
}

.text-center {
  text-align: center;
}

.text-justify {
  text-align: justify;
}

@media screen and (min-width: 40em) {
  .medium-text-left {
    text-align: left;
  }

  .medium-text-right {
    text-align: right;
  }

  .medium-text-center {
    text-align: center;
  }

  .medium-text-justify {
    text-align: justify;
  }
}
@media screen and (min-width: 64em) {
  .large-text-left {
    text-align: left;
  }

  .large-text-right {
    text-align: right;
  }

  .large-text-center {
    text-align: center;
  }

  .large-text-justify {
    text-align: justify;
  }
}
.show-for-print {
  display: none !important;
}

@media print {
  * {
    background: transparent !important;
    color: black !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }

  .show-for-print {
    display: block !important;
  }

  .hide-for-print {
    display: none !important;
  }

  table.show-for-print {
    display: table !important;
  }

  thead.show-for-print {
    display: table-header-group !important;
  }

  tbody.show-for-print {
    display: table-row-group !important;
  }

  tr.show-for-print {
    display: table-row !important;
  }

  td.show-for-print {
    display: table-cell !important;
  }

  th.show-for-print {
    display: table-cell !important;
  }

  a,
  a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: " (" attr(href) ")";
  }

  .ir a:after,
  a[href^='javascript:']:after,
  a[href^='#']:after {
    content: '';
  }

  abbr[title]:after {
    content: " (" attr(title) ")";
  }

  pre,
  blockquote {
    border: 1px solid #9e9e9e;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group;
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }

  @page {
    margin: 0.5cm;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }
}
.text-display-4 {
  font-size: 112px;
  line-height: 128px;
  letter-spacing: -7px;
  padding-top: 17px;
  margin-bottom: 15px;
  font-weight: 300;
}

.text-display-3, header h1 {
  font-size: 56px;
  line-height: 64px;
  letter-spacing: -2px;
  padding-top: 8px;
  margin-bottom: 28px;
  font-weight: 400;
}

.text-display-2 {
  font-size: 45px;
  line-height: 48px;
  margin-bottom: 11px;
  letter-spacing: -1px;
  font-weight: 400;
}

.text-display-1, header h2 {
  font-size: 34px;
  line-height: 40px;
  padding-top: 8px;
  margin-bottom: 12px;
  letter-spacing: -1px;
  font-weight: 400;
}

.text-headline, h2.demo-headline {
        color: #1b334b;
      font-size: 12px;
    line-height: 20px;
    padding-top: 16px;
    text-align: justify;
    margin-bottom: 12px;
    letter-spacing: 0;
    font-weight: 600;
}
.market-research-report-title{
    
     color: #1b334b;
      font-size: 15px;
    line-height: 20px;
    padding-top: 16px;
    text-align: justify;
    margin-bottom: 12px;
    letter-spacing: 0;
    font-weight: 600;
}

.text-title {
  font-size: 20px;
  line-height: 28px;
  padding-top: 19px;
  margin-bottom: 13px;
  letter-spacing: 0;
  font-weight: 500;
}

.text-subhead, .summary h1 {
  font-size: 15px;
  line-height: 28px;
  padding-top: 2px;
  margin-bottom: 10px;
  letter-spacing: 0;
  font-weight: 400;
}

.text-body-2, thead tr {
  font-size: 13px;
  line-height: 24px;
  padding-top: 4px;
  margin-bottom: 12px;
  letter-spacing: 0;
  font-weight: 500;
}

.text-body-1, .chip, tr {
  font-size: 13px;
  line-height: 20px;
  padding-top: 6px;
  margin-bottom: 14px;
  letter-spacing: 0;
  font-weight: 400;
       
}

.text-caption {
  font-size: 13px;
  line-height: 20px;
  padding-top: 6px;
  margin-bottom: 14px;
  letter-spacing: 0;
  font-weight: 400;
}

.text-menu {
  font-size: 13px;
  line-height: 20px;
  padding-top: 6px;
  margin-bottom: 14px;
  letter-spacing: 0;
  font-weight: 500;
}

.text-button, .tabs .tabs-title a, .raised-button, .raised-accent-button, .flat-button, .disabled-button {
  font-size: 12px;
  line-height: 20px;
  padding-top: 5px;
  margin-bottom: 15px;
  font-weight: 500 !important;
}

.tabs {
  margin: 0;
  list-style-type: none;
  background: #1b334b;
  border: 1px solid #fafafa;
}
.tabs::before, .tabs::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.tabs::after {
  clear: both;
}

.tabs.vertical > li {
  width: auto;
  float: none;
  display: block;
}

.tabs.simple > li > a {
  padding: 0;
}
.tabs.simple > li > a:hover {
  background: transparent;
}

.tabs.primary {
  background: #00bcd4;
}
.tabs.primary > li > a {
  color: white;
}
.tabs.primary > li > a:hover, .tabs.primary > li > a:focus {
  background: #00b3c9;
}

.tabs-title {
  float: left;
}
.tabs-title > a {
  display: block;
  padding: 1.25rem 1.5rem;
  line-height: 1;
  font-size: 0.75rem;
}
.tabs-title > a:hover {
  background: white;
}
.tabs-title > a:focus, .tabs-title > a[aria-selected='true'] {
  background: #00c108;
}

.tabs-content {
  background: white;
  transition: all 0.5s ease;
  border: 1px solid #fafafa;
  border-top: 0;
}

.tabs-content.vertical {
  border: 1px solid #fafafa;
  border-left: 0;
}

.tabs-panel {
  display: none;
  padding: 1rem;
}
.tabs-panel.is-active {
  display: block;
}

.tabs {
  border: 0;
}
.tabs .tabs-title a {
  color: white;
  padding-top: 1rem;
  margin-bottom: 0;
}
.tabs .tabs-title.is-active a {
  /* box-shadow: 0 4rem 0 0 #ffeb3b inset; */
}
.tabs .tabs-title > a:hover {
  background: #1b334b;
}

.button {
  display: inline-block;
  text-align: center;
  line-height: 1;
  cursor: pointer;
  -webkit-appearance: none;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  vertical-align: middle;
  border: 1px solid transparent;
  border-radius: 2px;
  padding: 0.85em 1em 0.7em 1em;
  margin: 0 0 1rem 0;
  font-size: 0.9rem;
  background-color: #1b334b;
  color: white;
}
[data-whatinput='mouse'] .button {
  outline: 0;
}
.button:hover, .button:focus {
  background-color: #00b3c9;
  color: white;
}
.button.tiny {
  font-size: 0.6rem;
}
.button.small {
  font-size: 0.75rem;
}
.button.large {
  font-size: 1.25rem;
}
.button.expanded {
  display: block;
  width: 100%;
  margin-left: 0;
  margin-right: 0;
}
.button.primary {
  background-color: #00bcd4;
  color: white;
}
.button.primary:hover, .button.primary:focus {
  background-color: #0096aa;
  color: white;
}
.button.secondary {
  background-color: #01bf09;
  color: white;
        box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.35), inset 0 -3px 10px rgba(255,255,255,0.3);
    text-shadow: 0 1px 0 rgba(0,0,0,0.3);
}
.button.secondary:hover, .button.secondary:focus {
  background-color: #08ec12;
  color: white;
}
.button.success {
  background-color: #259b24;
  color: white;
}
.button.success:hover, .button.success:focus {
  background-color: #1e7c1d;
  color: white;
}
.button.warning {
  background-color: #ffc107;
  color: white;
}
.button.warning:hover, .button.warning:focus {
  background-color: #d29d00;
  color: white;
}
.button.alert {
  background-color: #e51c23;
  color: white;
}
.button.alert:hover, .button.alert:focus {
  background-color: #b8151b;
  color: white;
}
.button.hollow {
  background: #bb2d00;
  color: #fff;
}
.button.hollow, .button.hollow:hover, .button.hollow:focus {
  background-color: #ff5b28;
}
.button.hollow:hover, .button.hollow:focus {

  color: #fff;
        background-color: #d23201;
}
.button.hollow.primary {
  border: 1px solid #00bcd4;
  color: #00bcd4;
}
.button.hollow.primary:hover, .button.hollow.primary:focus {
  border-color: #005e6a;
  color: #005e6a;
}
.button.hollow.secondary {
  border: 1px solid #ffeb3b;
  color: #ffeb3b;
}
.button.hollow.secondary:hover, .button.hollow.secondary:focus {
  border-color: #9d8d00;
  color: #9d8d00;
}
.button.hollow.success {
  border: 1px solid #259b24;
  color: #259b24;
}
.button.hollow.success:hover, .button.hollow.success:focus {
  border-color: #134e12;
  color: #134e12;
}
.button.hollow.warning {
  border: 1px solid #ffc107;
  color: #ffc107;
}
.button.hollow.warning:hover, .button.hollow.warning:focus {
  border-color: #836200;
  color: #836200;
}
.button.hollow.alert {
  border: 1px solid #e51c23;
  color: #e51c23;
}
.button.hollow.alert:hover, .button.hollow.alert:focus {
  border-color: #730d11;
  color: #730d11;
}
.button.disabled, .button[disabled] {
  opacity: 0.25;
  cursor: not-allowed;
  pointer-events: none;
}
.button.dropdown::after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 0.4em;
  border-color: white transparent transparent;
  border-top-style: solid;
  border-bottom-width: 0;
  position: relative;
  top: 0.4em;
  float: right;
  margin-left: 1em;
  display: inline-block;
}
.button.arrow-only::after {
  margin-left: 0;
  float: none;
  top: -0.1em;
}

.button-group {
  margin-bottom: 1rem;
  font-size: 0;
}
.button-group::before, .button-group::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.button-group::after {
  clear: both;
}
.button-group .button {
  margin: 0;
  font-size: 0.9rem;
  float: left;
}
.button-group .button:not(:last-child) {
  border-right: 1px solid #eeeeee;
}
.button-group.tiny .button {
  font-size: 0.6rem;
}
.button-group.small .button {
  font-size: 0.75rem;
}
.button-group.large .button {
  font-size: 1.25rem;
}
.button-group.expanded {
  margin-right: -1px;
}
.button-group.expanded::before, .button-group.expanded::after {
  display: none;
}
.button-group.expanded .button:first-child:nth-last-child(2), .button-group.expanded .button:first-child:nth-last-child(2):first-child:nth-last-child(2) ~ .button {
  display: inline-block;
  width: calc(50% - 1px);
  margin-right: 1px;
}
.button-group.expanded .button:first-child:nth-last-child(3), .button-group.expanded .button:first-child:nth-last-child(3):first-child:nth-last-child(3) ~ .button {
  display: inline-block;
  width: calc(33.33333% - 1px);
  margin-right: 1px;
}
.button-group.expanded .button:first-child:nth-last-child(4), .button-group.expanded .button:first-child:nth-last-child(4):first-child:nth-last-child(4) ~ .button {
  display: inline-block;
  width: calc(25% - 1px);
  margin-right: 1px;
}
.button-group.expanded .button:first-child:nth-last-child(5), .button-group.expanded .button:first-child:nth-last-child(5):first-child:nth-last-child(5) ~ .button {
  display: inline-block;
  width: calc(20% - 1px);
  margin-right: 1px;
}
.button-group.expanded .button:first-child:nth-last-child(6), .button-group.expanded .button:first-child:nth-last-child(6):first-child:nth-last-child(6) ~ .button {
  display: inline-block;
  width: calc(16.66667% - 1px);
  margin-right: 1px;
}
.button-group.primary .button {
  background-color: #00bcd4;
  color: white;
}
.button-group.primary .button:hover, .button-group.primary .button:focus {
  background-color: #0096aa;
  color: white;
}
.button-group.secondary .button {
  background-color: #ffeb3b;
  color: rgba(0, 0, 0, 0.87);
}
.button-group.secondary .button:hover, .button-group.secondary .button:focus {
  background-color: #fbe200;
  color: rgba(0, 0, 0, 0.87);
}
.button-group.success .button {
  background-color: #259b24;
  color: white;
}
.button-group.success .button:hover, .button-group.success .button:focus {
  background-color: #1e7c1d;
  color: white;
}
.button-group.warning .button {
  background-color: #ffc107;
  color: white;
}
.button-group.warning .button:hover, .button-group.warning .button:focus {
  background-color: #d29d00;
  color: white;
}
.button-group.alert .button {
  background-color: #e51c23;
  color: white;
}
.button-group.alert .button:hover, .button-group.alert .button:focus {
  background-color: #b8151b;
  color: white;
}
.button-group.stacked .button, .button-group.stacked-for-small .button, .button-group.stacked-for-medium .button {
  width: 100%;
}
.button-group.stacked .button:not(:last-child), .button-group.stacked-for-small .button:not(:last-child), .button-group.stacked-for-medium .button:not(:last-child) {
  margin-right: 0;
}
@media screen and (min-width: 40em) {
  .button-group.stacked-for-small .button {
    width: auto;
  }
  .button-group.stacked-for-small .button:not(:last-child) {
    margin-right: 1px;
  }
}
@media screen and (min-width: 64em) {
  .button-group.stacked-for-medium .button {
    width: auto;
  }
  .button-group.stacked-for-medium .button:not(:last-child) {
    margin-right: 1px;
  }
}
@media screen and (max-width: 39.9375em) {
  .button-group.stacked-for-small.expanded {
    display: block;
  }
  .button-group.stacked-for-small.expanded .button {
    display: block;
    margin-right: 0;
  }
}

.dropdown-pane {
  background-color: #eeeeee;
  border: 1px solid #eeeeee;
  border-radius: 2px;
  display: block;
  font-size: 1rem;
  padding: 1rem;
  position: absolute;
  visibility: hidden;
  width: 300px;
  z-index: 10;
}
.dropdown-pane.is-open {
  visibility: visible;
}

.dropdown-pane.tiny {
  width: 100px;
}

.dropdown-pane.small {
  width: 200px;
}

.dropdown-pane.large {
  width: 400px;
}

.raised-button, .raised-accent-button, .flat-button, .disabled-button {
  min-width: 64px;
  overflow: hidden;
}

.raised-button, .floating-action-button {
  display: inline-block;
  text-align: center;
  line-height: 1;
  cursor: pointer;
  -webkit-appearance: none;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  vertical-align: middle;
  border: 1px solid transparent;
  border-radius: 2px;
  padding: 0.85em 1em 0.7em 1em;
  margin: 0 0 1rem 0;
  font-size: 0.9rem;
  background-color: #1b334b;
  color: white;
        box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.35), inset 0 -3px 10px rgba(255,255,255,0.3);
    text-shadow: 0 1px 0 rgba(0,0,0,0.3);
}
[data-whatinput='mouse'] .raised-button, [data-whatinput='mouse'] .floating-action-button {
  outline: 0;
}
.raised-button:hover, .raised-button:focus, .floating-action-button:hover, .floating-action-button:focus {
  background-color: #0067ce;
  color: white;
}

.raised-accent-button, .floating-action-accent-button {
  display: inline-block;
  text-align: center;
  line-height: 1;
  cursor: pointer;
  -webkit-appearance: none;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  vertical-align: middle;
  border: 1px solid transparent;
  border-radius: 2px;
  padding: 0.85em 1em 0.7em 1em;
  margin: 0 0 1rem 0;
  font-size: 0.9rem;
  background-color: #F05323;
  color: #fff;
    box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.35), inset 0 -3px 10px rgba(255,255,255,0.3);
    text-shadow: 0 1px 0 rgba(0,0,0,0.3);
}
[data-whatinput='mouse'] .raised-accent-button, [data-whatinput='mouse'] .floating-action-accent-button {
  outline: 0;
}
.raised-accent-button:hover, .raised-accent-button:focus, .floating-action-accent-button:hover, .floating-action-accent-button:focus {
  background-color: #d53b0d;
  color: rgba(0, 0, 0, 0.87);
}
.raised-accent-button, .raised-accent-button:hover, .floating-action-accent-button, .floating-action-accent-button:hover {
  color: #fff;
}

.floating-action-button, .floating-action-accent-button {
  overflow: hidden;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  padding: 1rem;
  margin: 0;
}
.floating-action-button i, .floating-action-accent-button i {
  font-size: 24px;
  text-align: center;
}

.floating-action-button i {
  color: white;
}

.floating-action-accent-button i {
  color: rgba(0, 0, 0, 0.87);
}

.flat-button {
  display: inline-block;
  text-align: center;
  line-height: 1;
  cursor: pointer;
  -webkit-appearance: none;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  vertical-align: middle;
  border: 1px solid transparent;
  border-radius: 2px;
  padding: 0.85em 1em 0.7em 1em;
  margin: 0 0 1rem 0;
  font-size: 0.9rem;
  background-color: transparent;
  color: #00bcd4;
}
[data-whatinput='mouse'] .flat-button {
  outline: 0;
}
.flat-button:hover, .flat-button:focus {
      border: 1px solid;
  color: #00bcd4;
}
.flat-button, .flat-button:hover {
  color: #00bcd4;
}

.disabled-button {
  display: inline-block;
  text-align: center;
  line-height: 1;
  cursor: pointer;
  -webkit-appearance: none;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  vertical-align: middle;
  border: 1px solid transparent;
  border-radius: 2px;
  padding: 0.85em 1em 0.7em 1em;
  margin: 0 0 1rem 0;
  font-size: 0.9rem;
  background-color: transparent;
  color: rgba(0, 0, 0, 0.26);
  cursor: not-allowed !important;
}
[data-whatinput='mouse'] .disabled-button {
  outline: 0;
}
.disabled-button:hover, .disabled-button:focus {
  background-color: transparent;
  color: rgba(0, 0, 0, 0.26);
}
.disabled-button, .disabled-button:hover {
  color: rgba(0, 0, 0, 0.26);
}

.dropdown-pane {
  border-radius: 2px;
  background: white;
  border: 0;
  padding: .5rem 0;
  overflow: hidden;
  width: auto;
  transition: opacity .4s ease-in-out, max-height .4s ease-in-out;
}
.dropdown-pane ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.dropdown-pane li a {
  padding: .75rem 1.5rem;
  font-size: 0.8125rem;
  color: rgba(0, 0, 0, 0.87);
  display: block;
}
.dropdown-pane li a:hover {
  background: #eeeeee;
}

.dropdown-pane[aria-hidden="true"] {
  max-height: 0;
  opacity: 0;
}

.dropdown-pane[aria-hidden="false"] {
  max-height: 200px;
  opacity: 1;
}

.card {
  border-radius: 2px;
  background: white;
  padding: 15px;
   
}
.card .link-icon i {
  margin-top: 13px;
}
.card .bottom-button {
  margin-left: -1em;
  margin-bottom: -0.85em;
}
.card .text-caption {
  color: rgba(0, 0, 0, 0.26);
}

.badge {
  display: inline-block;
  padding: 0.3em;
  min-width: 2.1em;
  font-size: 0.6rem;
  text-align: center;
  border-radius: 50%;
  background: #00bcd4;
  color: white;
}
.badge.secondary {
  background: #ffeb3b;
  color: rgba(0, 0, 0, 0.87);
}
.badge.success {
  background: #259b24;
  color: white;
}
.badge.warning {
  background: #ffc107;
  color: white;
}
.badge.alert {
  background: #e51c23;
  color: white;
}

.label {
  display: inline-block;
  padding: 0.33333rem 0.5rem;
  font-size: 0.8rem;
  line-height: 1;
  white-space: nowrap;
  cursor: default;
  border-radius: 2px;
  background: #00bcd4;
  color: white;
}
.label.secondary {
  background: #ffeb3b;
  color: rgba(0, 0, 0, 0.87);
}
.label.success {
  background: #259b24;
  color: white;
}
.label.warning {
  background: #ffc107;
  color: white;
}
.label.alert {
  background: #e51c23;
  color: white;
}

.chip {
  display: inline-block;
  padding: 0.33333rem 0.5rem;
  font-size: 0.8rem;
  line-height: 1;
  white-space: nowrap;
  cursor: default;
  border-radius: 2px;
  height: 3em;
  line-height: 3em;
  border-radius: 2em;
  background: rgba(0, 0, 0, 0.12);
  padding: 0 0.7rem;
  vertical-align: top;
}
.chip i {
  color: rgba(0, 0, 0, 0.26);
  font-size: 150%;
  vertical-align: middle;
  margin-left: 10px;
  cursor: pointer;
}
.chip .badge {
  width: 2em;
  height: 2em;
  line-height: 1.5em;
  margin: 0 10px 0 -0.7rem;
  font-size: 19px;
}
.chip .badge + span {
  display: inline-block;
  margin-top: -8px;
  vertical-align: middle;
}

table {
  width: 100%;
  margin-bottom: 1rem;
  border-radius: 2px;
}
thead,
tbody,
tfoot {
  border: 0;
  background-color: white;
}

caption {
  font-weight: 500;
  padding: 0.9375rem;
}

thead,
tfoot {
  background: white;
  color: rgba(0, 0, 0, 0.87);
}
thead tr,
tfoot tr {
  background: transparent;
}
thead th,
thead td,
tfoot th,
tfoot td {
  padding: 0.9375rem;
  font-weight: 500;
  text-align: left;
}

tbody th,
tbody td {
  padding: 5px;
}

@media screen and (max-width: 63.9375em) {
  table.stack thead {
    display: none;
  }
  table.stack tfoot {
    display: none;
  }
  table.stack tr,
  table.stack th,
  table.stack td {
    display: block;
  }
  table.stack td {
    border-top: 0;
  }
}

table.scroll {
  display: block;
  width: 100%;
  overflow-x: auto;
}

table.hover tr:hover {
  background-color: #fafafa;
}

.table-scroll {
  overflow-x: auto;
}
.table-scroll table {
  width: auto;
}

table {
  border-radius: 2px;
  overflow: hidden;
}
table input[type="checkbox"] + label {
  position: relative;
  top: -11px;
}

thead, tr {
  border-bottom: 1px solid #e0e0e0;
}

thead tr {
  color: rgba(0, 0, 0, 0.54);
}

tr {
  color: rgba(0, 0, 0, 0.87);
}
tr:last-child {
  border-bottom: 0;
}

.top-bar {
  padding: 0;
    box-shadow: none;
}
.top-bar::before, .top-bar::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.top-bar::after {
  clear: both;
}
.top-bar,
.top-bar ul {
  background-color: #fff;
}
.top-bar ul ul {
  background-color: #fafafa;
}
.top-bar input {
  width: 200px;

}
.top-bar .input-group-field {
  width: 100%;
  margin-right: 0;
}
.top-bar input.button {
  width: auto;
}

@media screen and (max-width: 39.9375em) {
  .stacked-for-small .top-bar-left,
  .stacked-for-small .top-bar-right {
    width: 100%;
  }
}

@media screen and (max-width: 63.9375em) {
  .stacked-for-medium .top-bar-left,
  .stacked-for-medium .top-bar-right {
    width: 100%;
  }
}

@media screen and (max-width: 74.9375em) {
  .stacked-for-large .top-bar-left,
  .stacked-for-large .top-bar-right {
    width: 100%;
  }
}

.top-bar-left,
.top-bar-right {
  width: 100%;
}

@media screen and (min-width: 40em) {
  .top-bar-left,
  .top-bar-right {
    width: auto;
  }
}
.top-bar-title {
  float: left;
  margin-right: 1rem;
}

.top-bar-left {
  float: left;
}

.top-bar-right {
  float: right;
}

.menu {
  margin: 0;
  list-style-type: none;

}
.menu-menubar{
  margin-top: 11px !important;
}
.menu > li {
  display: table-cell;
  vertical-align: middle;
}
[data-whatinput='mouse'] .menu > li {
  outline: 0;
}
.menu > li > a {
  display: block;
  padding: 0.7rem 1rem;
  line-height: 1;
}
.menu input,
.menu a,
.menu button {
  margin-bottom: 0;
}
.menu > li > a img,
.menu > li > a i {
  vertical-align: middle;
}
.menu > li > a i + span,
.menu > li > a img + span {
  vertical-align: middle;
}
.menu > li > a img,
.menu > li > a i {
  margin-right: 0.25rem;
  display: inline-block;
}
.top-bar a:hover, .top-bar a:focus{
    color: #0482ff;
    border-bottom: 1px solid #0482ff;
}
.menu > li {
  display: table-cell;
}
.menu.vertical > li {
  display: block;
}
@media screen and (min-width: 40em) {
  .menu.medium-horizontal > li {
    display: table-cell;
  }
  .menu.medium-vertical > li {
    display: block;
  }
}
@media screen and (min-width: 64em) {
  .menu.large-horizontal > li {
    display: table-cell;
  }
  .menu.large-vertical > li {
    display: block;
  }
}
.menu.simple li {
  line-height: 1;
  display: inline-block;
  margin-right: 1rem;
}
.menu.simple a {
  padding: 0;
}
.menu.align-right::before, .menu.align-right::after {
  content: ' ';
  display: table;
  flex-basis: 0;
  order: 1;
}
.menu.align-right::after {
  clear: both;
}
.menu.align-right > li {
  float: right;
}
.menu.expanded {
  width: 100%;
  display: table;
  table-layout: fixed;
}
.menu.expanded > li:first-child:last-child {
  width: 100%;
}
.menu.icon-top > li > a {
  text-align: center;
}
.menu.icon-top > li > a img,
.menu.icon-top > li > a i {
  display: block;
  margin: 0 auto 0.25rem;
}
.menu.nested {
  margin-left: 1rem;
}
.menu .active > a {
  color: white;
  background: #00bcd4;
}

.menu-text {
  font-weight: bold;
  color: inherit;
  line-height: 1;
  padding-top: 0;
  padding-bottom: 0;
  padding: 0.7rem 1rem;
}

.menu-centered {
  text-align: center;
}
.menu-centered > .menu {
  display: inline-block;
}

.no-js [data-responsive-menu] ul {
  display: none;
}

.top-bar {
  height: 3.5rem;
}
.top-bar a {
  color: #222a35;
    font-weight: 600;
}
.top-bar i {
  margin-top: -3px;
}
.top-bar .dark {
  color: rgba(0, 0, 0, 0.54);
}
.top-bar .text-title {
  color: white;
  font-weight: 500;
}
.top-bar .top-bar-left.no-collapse, .top-bar .top-bar-right.no-collapse {
  width: auto;
}
.top-bar .top-bar-left.no-collapse {
  float: left;
}
.top-bar .top-bar-right.no-collapse {
  float: right;
}

.menu > li > a {
  padding: 1rem;
  line-height: inherit;
}

[type='text'], [type='password'], [type='date'], [type='datetime'], [type='datetime-local'], [type='month'], [type='week'], [type='email'], [type='number'], [type='search'], [type='tel'], [type='time'], [type='url'], [type='color'],
textarea {
  display: block;
  box-sizing: border-box;
  width: 100%;
  height: 2.4375rem;
  padding: 0.5rem;
  border: 0;
  margin: 0 0 1rem;
  font-family: inherit;
  font-size: 1rem;
  color: rgba(0, 0, 0, 0.87);
  background-color: white;
  box-shadow: none;
  border-radius: 2px;
  transition: box-shadow 0.5s, border-color 0.25s ease-in-out;
  -webkit-appearance: none;
  -moz-appearance: none;
}
[type='text']:focus, [type='password']:focus, [type='date']:focus, [type='datetime']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='week']:focus, [type='email']:focus, [type='number']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='url']:focus, [type='color']:focus,
textarea:focus {
  border: 0;
  background-color: white;
  outline: none;
  box-shadow: none;
  transition: box-shadow 0.5s, border-color 0.25s ease-in-out;
}

textarea {
  max-width: 100%;
}
textarea[rows] {
  height: auto;
}

input::placeholder,
textarea::placeholder {
  color: #eeeeee;
}
input:disabled, input[readonly],
textarea:disabled,
textarea[readonly] {
  background-color: #fafafa;
  cursor: default;
}

[type='submit'],
[type='button'] {
  border-radius: 2px;
  -webkit-appearance: none;
  -moz-appearance: none;
}

input[type='search'] {
  box-sizing: border-box;
}

[type='file'],
[type='checkbox'],
[type='radio'] {
  margin: 0 0 1rem;
}

[type='checkbox'] + label,
[type='radio'] + label {
  display: inline-block;
  margin-left: 0.5rem;
  margin-right: 1rem;
  margin-bottom: 0;
  vertical-align: baseline;
}

label > [type='checkbox'],
label > [type='radio'] {
  margin-right: 0.5rem;
}

[type='file'] {
  width: 100%;
}

label {
  display: block;
  margin: 0;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.8;
  color: rgba(0, 0, 0, 0.87);
}
label.middle {
  margin: 0 0 1rem;
  padding: 0.5rem 0;
}

.help-text {
  margin-top: -0.5rem;
  font-size: 0.8125rem;
  font-style: italic;
  color: rgba(0, 0, 0, 0.87);
}

.input-group {
  display: table;
  width: 100%;
  margin-bottom: 1rem;
}
.input-group > :first-child {
  border-radius: 2px 0 0 2px;
}
.input-group > :last-child > * {
  border-radius: 0 2px 2px 0;
}

.input-group-label, .input-group-field, .input-group-button {
  margin: 0;
  display: table-cell;
  vertical-align: middle;
}

.input-group-label {
  text-align: center;
  padding: 0 1rem;
  background: #fafafa;
  color: rgba(0, 0, 0, 0.87);
  border: 1px solid #eeeeee;
  white-space: nowrap;
  width: 6%;
  height: 100%;
}
.input-group-label:first-child {
  border-right: 0;
}
.input-group-label:last-child {
  border-left: 0;
}

.input-group-field {
  border-radius: 0;
  height: 2.5rem;
}

.input-group-button {
  padding-top: 0;
  padding-bottom: 0;
  text-align: center;
  height: 100%;
  width: 1%;
}
.input-group-button a,
.input-group-button input,
.input-group-button button {
  margin: 0;
}

.input-group .input-group-button {
  display: table-cell;
}

fieldset {
  border: 0;
  padding: 0;
  margin: 0;
}

legend {
  margin-bottom: 0.5rem;
  max-width: 100%;
}

.fieldset {
  border: 1px solid #eeeeee;
  padding: 1.25rem;
  margin: 1.125rem 0;
}
.fieldset legend {
  background: #eeeeee;
  padding: 0 0.1875rem;
  margin: 0;
  margin-left: -0.1875rem;
}

select {
  height: 2.4375rem;
  padding: 0.5rem;
  border: 1px;
  margin: 0 0 1rem;
  font-size: 1rem;
  font-family: inherit;
  line-height: normal;
  color: rgba(0, 0, 0, 0.87);
  background-color: #e6e6e6;
  border-radius: 2px;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="32" height="24" viewBox="0 0 32 24"><polygon points="0,0 32,0 16,24" style="fill: rgb%28158, 158, 158%29"></polygon></svg>');
  background-size: 9px 6px;
  background-position: right center;
  background-origin: content-box;
  background-repeat: no-repeat;
}
@media screen and (min-width: 0\0) {
  select {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAYAAACbU/80AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMBJREFUeNrEllsOhCAMRVszC9IlzU7KCmVHTJsoMWYMUtpyv9BgbuXQB5ZSdgBYYY4ycgBivk8KYFsQMfMiTTBP4o3nUzCKzOabLJbLy2/g31evGkAginR4/ZegKH5qX3bJCscA3t0x3kgO5tQFyhhFf50xRqFLbyMUNJQzgyjGS/wgCpvKqkRBpuWrE4V9d+1E4dPUXqIg107SQOE/2DRQxMwTDygIInVDET9T3lCoj/6j/VCmGjZOl2lKpZ8AAwDQP7zIimDGFQAAAABJRU5ErkJggg==");
  }
}
select:disabled {
  background-color: #fafafa;
  cursor: default;
}
select::-ms-expand {
  display: none;
}
select[multiple] {
  height: auto;
}

.is-invalid-input:not(:focus) {
  background-color: rgba(229, 28, 35, 0.1);
  border-color: #e51c23;
}

.is-invalid-label {
  color: #e51c23;
}

.form-error {
  display: none;
  margin-top: -0.5rem;
  margin-bottom: 1rem;
  font-size: 0.75rem;
  font-weight: 500;
  color: #e51c23;
}
.form-error.is-visible {
  display: block;
}

input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], input[type="color"], textarea {

  //margin: 1.75rem 0 0.5rem;
  border: 1px solid #e0e0e0;
  border-radius: 0;
  background: transparent;
    box-shadow: inset 1px 1px 7px 0px #d9d9d996;
}
input[type="text"]::-webkit-input-placeholder, input[type="text"]::-webkit-input-placeholder, input[type="password"]::-webkit-input-placeholder, input[type="password"]::-webkit-input-placeholder, input[type="date"]::-webkit-input-placeholder, input[type="date"]::-webkit-input-placeholder, input[type="datetime"]::-webkit-input-placeholder, input[type="datetime"]::-webkit-input-placeholder, input[type="datetime-local"]::-webkit-input-placeholder, input[type="datetime-local"]::-webkit-input-placeholder, input[type="month"]::-webkit-input-placeholder, input[type="month"]::-webkit-input-placeholder, input[type="week"]::-webkit-input-placeholder, input[type="week"]::-webkit-input-placeholder, input[type="email"]::-webkit-input-placeholder, input[type="email"]::-webkit-input-placeholder, input[type="number"]::-webkit-input-placeholder, input[type="number"]::-webkit-input-placeholder, input[type="search"]::-webkit-input-placeholder, input[type="search"]::-webkit-input-placeholder, input[type="tel"]::-webkit-input-placeholder, input[type="tel"]::-webkit-input-placeholder, input[type="time"]::-webkit-input-placeholder, input[type="time"]::-webkit-input-placeholder, input[type="url"]::-webkit-input-placeholder, input[type="url"]::-webkit-input-placeholder, input[type="color"]::-webkit-input-placeholder, input[type="color"]::-webkit-input-placeholder, textarea::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.26);
}
input[type="text"]:-moz-placeholder, input[type="text"]::-moz-placeholder, input[type="password"]:-moz-placeholder, input[type="password"]::-moz-placeholder, input[type="date"]:-moz-placeholder, input[type="date"]::-moz-placeholder, input[type="datetime"]:-moz-placeholder, input[type="datetime"]::-moz-placeholder, input[type="datetime-local"]:-moz-placeholder, input[type="datetime-local"]::-moz-placeholder, input[type="month"]:-moz-placeholder, input[type="month"]::-moz-placeholder, input[type="week"]:-moz-placeholder, input[type="week"]::-moz-placeholder, input[type="email"]:-moz-placeholder, input[type="email"]::-moz-placeholder, input[type="number"]:-moz-placeholder, input[type="number"]::-moz-placeholder, input[type="search"]:-moz-placeholder, input[type="search"]::-moz-placeholder, input[type="tel"]:-moz-placeholder, input[type="tel"]::-moz-placeholder, input[type="time"]:-moz-placeholder, input[type="time"]::-moz-placeholder, input[type="url"]:-moz-placeholder, input[type="url"]::-moz-placeholder, input[type="color"]:-moz-placeholder, input[type="color"]::-moz-placeholder, textarea:-moz-placeholder, textarea::-moz-placeholder {
  color: rgba(0, 0, 0, 0.26);
}
input[type="text"]:focus, input[type="password"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="email"]:focus, input[type="number"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="color"]:focus, textarea:focus {
  border: 1px solid #00695c;
  position: relative;
  
  background: transparent;
}
input[type="text"].with-floating-label + label.floating-label, input[type="password"].with-floating-label + label.floating-label, input[type="date"].with-floating-label + label.floating-label, input[type="datetime"].with-floating-label + label.floating-label, input[type="datetime-local"].with-floating-label + label.floating-label, input[type="month"].with-floating-label + label.floating-label, input[type="week"].with-floating-label + label.floating-label, input[type="email"].with-floating-label + label.floating-label, input[type="number"].with-floating-label + label.floating-label, input[type="search"].with-floating-label + label.floating-label, input[type="tel"].with-floating-label + label.floating-label, input[type="time"].with-floating-label + label.floating-label, input[type="url"].with-floating-label + label.floating-label, input[type="color"].with-floating-label + label.floating-label, textarea.with-floating-label + label.floating-label {
  font-size: 1rem;
  color: rgba(0, 0, 0, 0.26);
  position: relative;
  top: -35px;
  transition: top .45s ease-in-out, color .45s ease-in-out, font-size .45s ease-in-out;
  height: 0;
  cursor: text;
}
input[type="text"].with-floating-label:focus + label.floating-label, input[type="text"].with-floating-label:valid + label.floating-label, input[type="password"].with-floating-label:focus + label.floating-label, input[type="password"].with-floating-label:valid + label.floating-label, input[type="date"].with-floating-label:focus + label.floating-label, input[type="date"].with-floating-label:valid + label.floating-label, input[type="datetime"].with-floating-label:focus + label.floating-label, input[type="datetime"].with-floating-label:valid + label.floating-label, input[type="datetime-local"].with-floating-label:focus + label.floating-label, input[type="datetime-local"].with-floating-label:valid + label.floating-label, input[type="month"].with-floating-label:focus + label.floating-label, input[type="month"].with-floating-label:valid + label.floating-label, input[type="week"].with-floating-label:focus + label.floating-label, input[type="week"].with-floating-label:valid + label.floating-label, input[type="email"].with-floating-label:focus + label.floating-label, input[type="email"].with-floating-label:valid + label.floating-label, input[type="number"].with-floating-label:focus + label.floating-label, input[type="number"].with-floating-label:valid + label.floating-label, input[type="search"].with-floating-label:focus + label.floating-label, input[type="search"].with-floating-label:valid + label.floating-label, input[type="tel"].with-floating-label:focus + label.floating-label, input[type="tel"].with-floating-label:valid + label.floating-label, input[type="time"].with-floating-label:focus + label.floating-label, input[type="time"].with-floating-label:valid + label.floating-label, input[type="url"].with-floating-label:focus + label.floating-label, input[type="url"].with-floating-label:valid + label.floating-label, input[type="color"].with-floating-label:focus + label.floating-label, input[type="color"].with-floating-label:valid + label.floating-label, textarea.with-floating-label:focus + label.floating-label, textarea.with-floating-label:valid + label.floating-label {
  color: #00bcd4;
  font-size: 0.75rem;
  top: -56px;
}

.progress {
  background-color: rgba(0, 188, 212, 0.25);
  height: 4px;
  margin-bottom: 1rem;
  border-radius: 0;
}
.progress.primary .progress-meter {
  background-color: #00bcd4;
}
.progress.secondary .progress-meter {
  background-color: #ffeb3b;
}
.progress.success .progress-meter {
  background-color: #259b24;
}
.progress.warning .progress-meter {
  background-color: #ffc107;
}
.progress.alert .progress-meter {
  background-color: #e51c23;
}

.progress-meter {
  position: relative;
  display: block;
  width: 0%;
  height: 100%;
  background-color: #00bcd4;
}

.progress-meter-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  position: absolute;
  margin: 0;
  font-size: 0.75rem;
  font-weight: bold;
  color: white;
  white-space: nowrap;
}

.slider {
  position: relative;
  height: 4px;
  margin-top: 1.25rem;
  margin-bottom: 2.25rem;
  background-color: rgba(0, 0, 0, 0.12);
  cursor: pointer;
  user-select: none;
  touch-action: none;
}

.slider-fill {
  position: absolute;
  top: 0;
  left: 0;
  display: inline-block;
  max-width: 100%;
  height: 4px;
  background-color: #00bcd4;
  transition: all 0.2s ease-in-out;
}
.slider-fill.is-dragging {
  transition: all 0s linear;
}

.slider-handle {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  position: absolute;
  left: 0;
  z-index: 1;
  display: inline-block;
  width: 12px;
  height: 12px;
  background-color: #00bcd4;
  transition: all 0.2s ease-in-out;
  touch-action: manipulation;
  border-radius: 50%;
}
[data-whatinput='mouse'] .slider-handle {
  outline: 0;
}
.slider-handle:hover {
  background-color: #00a0b4;
}
.slider-handle.is-dragging {
  transition: all 0s linear;
}

.slider.disabled,
.slider[disabled] {
  opacity: 0.25;
  cursor: not-allowed;
}

.slider.vertical {
  display: inline-block;
  width: 0.5rem;
  height: 12.5rem;
  margin: 0 1.25rem;
  transform: scale(1, -1);
}
.slider.vertical .slider-fill {
  top: 0;
  width: 0.5rem;
  max-height: 100%;
}
.slider.vertical .slider-handle {
  position: absolute;
  top: 0;
  left: 50%;
  width: 12px;
  height: 12px;
  transform: translateX(-50%);
}

.slider-handle.is-dragging {
  box-shadow: 0 0 0 6px #00bcd4;
}
.slider-handle:hover {
  background-color: #00bcd4;
}

.switch {
  margin-bottom: 1rem;
  outline: 0;
  position: relative;
  user-select: none;
  color: white;
  font-weight: bold;
  font-size: 0.875rem;
}

.switch-input {
  opacity: 0;
  position: absolute;
}

.switch-paddle {
  background: #eeeeee;
  cursor: pointer;
  display: block;
  position: relative;
  width: 4rem;
  height: 2rem;
  transition: all 0.25s ease-out;
  border-radius: 2px;
  color: inherit;
  font-weight: inherit;
}
input + .switch-paddle {
  margin: 0;
}
.switch-paddle::after {
  background: white;
  content: '';
  display: block;
  position: absolute;
  height: 1.5rem;
  left: 0.25rem;
  top: 0.25rem;
  width: 1.5rem;
  transition: all 0.25s ease-out;
  transform: translate3d(0, 0, 0);
  border-radius: 2px;
}
input:checked ~ .switch-paddle {
  background: #00bcd4;
}
input:checked ~ .switch-paddle::after {
  left: 2.25rem;
}
[data-whatinput='mouse'] input:focus ~ .switch-paddle {
  outline: 0;
}

.switch-active, .switch-inactive {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.switch-active {
  left: 8%;
  display: none;
}
input:checked + label > .switch-active {
  display: block;
}

.switch-inactive {
  right: 15%;
}
input:checked + label > .switch-inactive {
  display: none;
}

.switch.tiny .switch-paddle {
  width: 3rem;
  height: 1.5rem;
  font-size: 0.625rem;
}
.switch.tiny .switch-paddle::after {
  width: 1rem;
  height: 1rem;
}
.switch.tiny input:checked ~ .switch-paddle:after {
  left: 1.75rem;
}

.switch.small .switch-paddle {
  width: 3.5rem;
  height: 1.75rem;
  font-size: 0.75rem;
}
.switch.small .switch-paddle::after {
  width: 1.25rem;
  height: 1.25rem;
}
.switch.small input:checked ~ .switch-paddle:after {
  left: 2rem;
}

.switch.large .switch-paddle {
  width: 5rem;
  height: 2.5rem;
  font-size: 1rem;
}
.switch.large .switch-paddle::after {
  width: 2rem;
  height: 2rem;
}
.switch.large input:checked ~ .switch-paddle:after {
  left: 2.75rem;
}

input[type="checkbox"], input[type="radio"] {
 
  cursor: pointer;
  transition: all .4s ease-in-out;
}

label.radio, label.checkbox {
  display: inline-block;
  line-height: 18px;
  position: relative;
  padding-left: 30px;
  text-align: center;
  cursor: pointer;
}
label.radio:before, label.checkbox:before {
  content: "";
  display: inline-block;
  height: 18px;
  width: 18px;
  position: absolute;
  left: 0;
  top: -1px;
}

label.checkbox:before, label.radio:before {
  transition: all .2s ease-in-out;
}

label.checkbox:before {
  border: 2px solid rgba(0, 0, 0, 0.54);
  border-radius: 2px;
  background-color: rgba(0, 150, 136, 0);
}

label.checkbox.checked:before {
  content: '\f26b';
  line-height: 18px;
  font-size: 14px;
  color: #eeeeee;
  background-color: #009688;
  border: 0;
  font-family: 'Material-Design-Iconic-Font';
}

label.radio:before {
  width: 10px;
  height: 10px;
  background: #009688;
  border-radius: 50%;
  position: absolute;
  top: 4px;
  left: 4px;
  transform: scale(0.1);
  opacity: 0;
}

label.radio.checked:before {
  opacity: 1;
  transform: scale(1);
}

label.radio:before, label.radio:after {
  border-radius: 10px;
}

label.radio:after {
  content: "";
  display: inline-block;
  width: 20px;
  height: 20px;
  position: absolute;
  left: -1px;
  top: -1px;
  border: 2px solid rgba(0, 0, 0, 0.54);
}

label.radio.checked:after {
  border-color: #009688;
}

.switch {
  width: auto;
  margin-top: 3px;
}
.switch input + label {
  height: 0.875rem;
  border-radius: 0.4375rem;
  width: 2rem;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.26) inset;
}
.switch input + label:after {
  border-radius: 0.625rem;
  top: -0.1875rem;
  left: -0.3125rem;
  height: 1.25rem;
  width: 1.25rem;
}
.switch input:checked + label:after {
  background: #009688;
  left: 1.1rem;
}

.has-tip {
  border-bottom: dotted 1px #9e9e9e;
  font-weight: 500;
  position: relative;
  display: inline-block;
  cursor: help;
}

.tooltip {
  background-color: rgba(0, 0, 0, 0.87);
  color: white;
  font-size: 80%;
  padding: 0.75rem;
  position: absolute;
  z-index: 10;
  top: calc(100% + 0.6495rem);
  max-width: 10rem !important;
  border-radius: 2px;
}
.tooltip::before {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 0;
  border-color: transparent transparent rgba(0, 0, 0, 0.87);
  border-bottom-style: solid;
  border-top-width: 0;
  bottom: 100%;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
.tooltip.top::before {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 0;
  border-color: rgba(0, 0, 0, 0.87) transparent transparent;
  border-top-style: solid;
  border-bottom-width: 0;
  top: 100%;
  bottom: auto;
}
.tooltip.left::before {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 0;
  border-color: transparent transparent transparent rgba(0, 0, 0, 0.87);
  border-left-style: solid;
  border-right-width: 0;
  bottom: auto;
  left: 100%;
  top: 50%;
  transform: translateY(-50%);
}
.tooltip.right::before {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border: inset 0;
  border-color: transparent rgba(0, 0, 0, 0.87) transparent transparent;
  border-right-style: solid;
  border-left-width: 0;
  bottom: auto;
  left: auto;
  right: 100%;
  top: 50%;
  transform: translateY(-50%);
}

.tooltip {
  background: rgba(97, 97, 97, 0.9);
  border-radius: 3px;
}
.tooltip:before, .tooltip:after {
  display: none;
}

.summary {
  border-left: 5px solid #00bcd4;
  padding-left: 20px;
}
.summary h1 {
  color: rgba(0, 0, 0, 0.54);
  line-height: 16px;
  margin-top: 0;
}
.summary ul {
  margin: 0;
}
.summary ul li {
  list-style: none;
  margin: 0;
  padding: 0;
  font-size: 20px;
}

body {
  background: #fafafa;
}

header {
 background: #fff;
    overflow: hidden;
    border-bottom: 1px solid #f5f5f5;
    box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.12), 0px 2px 2px 0px rgba(0,0,0,0.24);


}
header h1 {
  margin-top: 90px;
}
header h2 {
  margin-bottom: 30px;
}
header h1, header h2, header .text-button, header .tabs .tabs-title a, .tabs .tabs-title header a, header .raised-button, header .raised-accent-button, header .flat-button, header .disabled-button {
  color: white;
}
header img {
  margin-bottom: -2px;
}
@media screen and (max-width: 63.9375em) {
  /*header img {
    display: none !important;
  }*/
}
header .icon-link {
  margin-right: 5px;
  margin-bottom: 50px;
}

.download .floating-action-accent-button {
  float: right;
  margin-top: -30px;
}

.summary {
  margin-top: 50px;
}

hr {
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
  margin: 50px auto 0;
}

h2.demo-headline {
  color: #00bcd4;
  margin-top: 50px;
}

.tabs-content {
  background: white;
  padding: 20px;
}

.icons {
  text-align: center;
}

.icons i {
  font-size: 48px;
  display: inline-block;
  height: 48px;
  width: 48px;
  overflow: hidden;
  margin: 10px;
  color: #9e9e9e;
}

.floating-action-button {
  margin-right: 15px;
}

.payment-image{
    
        height: 35px;
   
    border-radius: 3px;
    border: 1px solid #d4d4d4;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
}

.switch {
  float: left;
  margin-left: 10px;
  margin-right: 30px;
}

.switches .columns {
  margin-bottom: 20px;
}

.tooltips {
  padding-bottom: 50px;
}

#footer {
  background: white;
  text-align: center;
  margin-top: 15px;
  padding-top: 15px;
}
.row-bottom{
        margin-bottom: 2rem;
}

.iti-flag {
  background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/img/flags.png");
}
          
          /* demo.css end */
          
        </style>
   
  </head>
  <body>


    <header class="sky-head">
        
      <div class="row">
      
        <div class="top-bar-right no-collapse">
          <ul class="menu">
          
           <li><a class="sky-head-a" href="<?php echo base_url(); ?>contact-us"><svg fill="#FFFFFF" height="17" viewBox="0 0 24 15" width="17" xmlns="http://www.w3.org/2000/svg">
    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>&nbsp;sales@graphicalresearch.com</a></li>
            <li><a class="sky-head-a" href="tel:+91 020 65228555 " ><svg fill="#fff" height="16" viewBox="0 0 24 15" width="16" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM12 3v10l3-3h6V3h-9z"></path>
</svg>&nbsp;+91 020 65228555 </a></li>
              
                
          </ul>
        </div>
        </div>
 
    </header>
      <header style="height: 5rem;">
          <div class="row">

	<div class="top-bar">
        <div class="top-bar-left no-collapse">
          <ul class="dropdown menu" data-dropdown-menu="oecalf-dropdown-menu" role="menubar">
        
             <li class="menu-text text-title" role="menuitem" style="font-size: 1.9rem;
    text-shadow: 1px 3px 1px #000;">
                
                <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>assets/images/gm-logo.svg" style="height:51px; margin-top: -11px;"></a>
                
                     </li>  

                     <li>
                      <form class="hero-search-filter-form"  action="<?php echo base_url() ?>search" method="get">
      
      <input id="findtext" name="findtext" class="hero-search-filter-form-find" type="text" placeholder="Report Title"/>   
    <button class="button search-btn-back"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="19" viewBox="0 0 24 24" width="24">
    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg></button>
    </form> </li>
          <!--  <li class="menu-text text-title" role="menuitem" style="font-size: 1.9rem;
    text-shadow: 1px 3px 1px #000;">GRAPHICAL ANALYTICS</li> -->
          </ul>
            
        </div>
        <div class="top-bar-right no-collapse">
          <ul class="menu menu-menubar">
          <!--  <li><a href="<?php echo base_url(); ?>industry-reports"><img src="<?php echo base_url(); ?>assets/images/report.png">&nbsp;Industry Reports</a></li>
              
                <li><a href="<?php echo base_url(); ?>industry-report"><img src="<?php echo base_url(); ?>assets/images/industry-coverage.png">&nbsp;Industry Coverage</a></li>
                 <li><a href="<?php echo base_url(); ?>press-release"><img src="<?php echo base_url(); ?>assets/images/press-release.png">&nbsp;Press Release</a></li>
                   <li><a href="<?php echo base_url(); ?>contact-us"><img src="<?php echo base_url(); ?>assets/images/contact-us.png">&nbsp;Contact us</a></li>              
                    <li><a href="<?php echo base_url(); ?>about-us"><img src="<?php echo base_url(); ?>assets/images/about.png">&nbsp;About us</a></li> -->
              <li><a href="<?php echo base_url(); ?>industry-reports">Industry Reports</a></li>
              
                <li><a href="<?php echo base_url(); ?>our-services">Services</a></li>
                 <li><a href="<?php echo base_url(); ?>press-release">Press Release</a></li>
                   <li><a href="<?php echo base_url(); ?>contact-us">Contact us</a></li>              
                    <li><a href="<?php echo base_url(); ?>about-us">About us</a></li>
          </ul>
        </div>
      </div>
    </div>
      </header>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "<?php echo base_url(); ?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "<?php echo base_url(); ?>filters?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>