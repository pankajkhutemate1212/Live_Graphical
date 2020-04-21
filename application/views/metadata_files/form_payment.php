<?php include('header_view.php'); ?>
<style>
.progress-indicator {
  list-style: none;
  width: 100%;
  margin: 0 auto;
  padding: 0;
  display: table;
  table-layout: fixed;
}

.progress-indicator > li {
  position: relative;
  display: table-cell;
  text-align: center;
  font-size: 1.5em;
}

.progress-indicator > li span {
  position: absolute;
  color: #e6e6e6;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  font-weight: 600;
  font-size: 0.875rem;
  letter-spacing: 0.05px;
  text-transform: uppercase;
}

.progress-indicator > li::before {
  content: attr(data-step);
  display: block;
  margin: 0 auto;
  background: #e6e6e6;
  width: 1.5em;
  height: 1.5em;
  text-align: center;
  margin-bottom: 0.25em;
  line-height: 1.5em;
  border-radius: 100%;
  position: relative;
  z-index: 1000;
}

.progress-indicator > li::after {
  content: '';
  position: absolute;
  display: block;
  background: #e6e6e6;
  width: 100%;
  height: 0.15em;
  top: 50%;
  -webkit-transform: translateY(-100%);
      -ms-transform: translateY(-100%);
          transform: translateY(-100%);
  left: 50%;
  margin-left: 1.5em\9;
  z-index: 0;
}

.progress-indicator > li:last-child:after {
  display: none;
}

.progress-indicator > li.is-complete {
  color: #1779ba;
}

.progress-indicator > li.is-complete::before, .progress-indicator > li.is-complete::after {
  color: #fefefe;
  background: #1779ba;
}

.progress-indicator > li.is-complete span {
  color: #1779ba;
}

.progress-indicator > li.is-current {
  color: #4eabe9;
}

.progress-indicator > li.is-current::before {
  color: #fefefe;
  background: #4eabe9;
}

.progress-indicator > li.is-current span {
  color: #4eabe9;
}

/* part 2*/
    
    .login-box {
  box-shadow: 0 2px 4px rgba(10, 10, 10, 0.4);
  background: #fefefe;
  border-radius: 0;
  overflow: hidden;
}

.login-box .or {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  display: inline-block;
  min-width: 2.1em;
  padding: 0.3em;
  border-radius: 50%;
  font-size: 0.6rem;
  text-align: center;
  font-size: 1.275rem;
  background: #cacaca;
  box-shadow: 0 2px 4px rgba(10, 10, 10, 0.4);
}

@media screen and (max-width: 39.9375em) {
  .login-box .or {
    top: 85%;
  }
}

.login-box-title {
  font-weight: 300;
  font-size: 1.2rem;
  margin-bottom: 1.25rem;
}

.login-box-form-section,
.login-box-social-section-inner {
  padding: 2.5rem;
}

.login-box-social-section {
     background: #efefef;
}

.login-box-input {
  margin-bottom: 1.25rem;
  height: 2rem;
  border: 0;
  padding-left: 0;
  box-shadow: none;
  border-bottom: 1px solid #1779ba;
  font-weight: 400;
}

.login-box-input:focus {
  color: #1779ba;
  transition: 0.2s ease-in-out;
  box-shadow: none;
  border: 0;
  border-bottom: 2px solid #1779ba;
}

.login-box-submit-button {
  display: inline-block;
  vertical-align: middle;
  margin: 0 0 1rem 0;
  padding: 0.85em 1em;
  -webkit-appearance: none;
  border: 1px solid transparent;
  border-radius: 0;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  font-size: 0.9rem;
  line-height: 1;
  text-align: center;
  cursor: pointer;
  background-color: #1779ba;
  color: #fefefe;
  display: block;
  width: 100%;
  margin-right: 0;
  margin-left: 0;
  border-radius: 0;
  text-transform: uppercase;
  margin-bottom: 0;
}

[data-whatinput='mouse'] .login-box-submit-button {
  outline: 0;
}

.login-box-submit-button:hover, .login-box-submit-button:focus {
  background-color: #126195;
  color: #fefefe;
}

.login-box-submit-button:hover,
.login-box-submit-button:focus {
  box-shadow: 0 2px 4px rgba(10, 10, 10, 0.4);
}

.login-box-submit-button:active {
  box-shadow: 0 1px 2px rgba(10, 10, 10, 0.4);
}

.login-box-social-button-facebook {
  display: inline-block;
  vertical-align: middle;
  margin: 0 0 1rem 0;
  padding: 0.85em 1em;
  -webkit-appearance: none;
  border: 1px solid transparent;
  border-radius: 0;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  font-size: 0.9rem;
  line-height: 1;
  text-align: center;
  cursor: pointer;
  background-color: #3b5998;
  color: #fefefe;
  display: block;
  width: 100%;
  margin-right: 0;
  margin-left: 0;
  font-weight: 500;
  margin-bottom: 1.25rem;
  text-transform: uppercase;
}

[data-whatinput='mouse'] .login-box-social-button-facebook {
  outline: 0;
}

.login-box-social-button-facebook:hover, .login-box-social-button-facebook:focus {
  background-color: #2f477a;
  color: #fefefe;
}

.login-box-social-button-twitter {
  display: inline-block;
  vertical-align: middle;
  margin: 0 0 1rem 0;
  padding: 0.85em 1em;
  -webkit-appearance: none;
  border: 1px solid transparent;
  border-radius: 0;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  font-size: 0.9rem;
  line-height: 1;
  text-align: center;
  cursor: pointer;
  background-color: #55acee;
  color: #fefefe;
  display: block;
  width: 100%;
  margin-right: 0;
  margin-left: 0;
  font-weight: 500;
  margin-bottom: 1.25rem;
  text-transform: uppercase;
}

[data-whatinput='mouse'] .login-box-social-button-twitter {
  outline: 0;
}

.login-box-social-button-twitter:hover, .login-box-social-button-twitter:focus {
  background-color: #1a8fe8;
  color: #fefefe;
}

.login-box-social-button-google {
  display: inline-block;
  vertical-align: middle;
  margin: 0 0 1rem 0;
  padding: 0.85em 1em;
  -webkit-appearance: none;
  border: 1px solid transparent;
  border-radius: 0;
  transition: background-color 0.25s ease-out, color 0.25s ease-out;
  font-size: 0.9rem;
  line-height: 1;
  text-align: center;
  cursor: pointer;
  background-color: #dd4b39;
  color: #fefefe;
  display: block;
  width: 100%;
  margin-right: 0;
  margin-left: 0;
  font-weight: 500;
  margin-bottom: 1.25rem;
  text-transform: uppercase;
}

[data-whatinput='mouse'] .login-box-social-button-google {
  outline: 0;
}

.login-box-social-button-google:hover, .login-box-social-button-google:focus {
  background-color: #be3221;
  color: #fefefe;
}

[class*="login-box-social-button-"]:hover,
[class*="login-box-social-button-"]:focus {
  box-shadow: 0 2px 4px rgba(10, 10, 10, 0.4);
}

.login-box-social-headline {
  display: block;
  
  font-size: 1.2rem;
  color: #000;
 
}


</style>


<div class="row">
<div class="container">
<br><br>
<ol class="progress-indicator">
  <li class="is-current" data-step="I">
  <span>Complete Form</span>
  </li>
  <li class="" data-step="II">
  <span>Payment</span>
  </li>
  <li class="" data-step="III">
  <span>Report Delivery / Dispatch</span>
  </li>
</ol>
    
<br>
    
    <div class="login-box">
  <div class="collapse expanded">
    <div class="small-12 medium-6 column small-order-2 medium-order-1">
      <div class="login-box-form-section">
        <h1 class="login-box-title">Please complete the form</h1>
        <input class="login-box-input" type="text" name="username" placeholder="Username" />
        <input class="login-box-input" type="email" name="email" placeholder="E-mail" />
        <input class="login-box-input" type="password" name="password" placeholder="Password" />
        <input class="login-box-input" type="password" name="password2" placeholder="Retype password" />
         <a class="login-box-submit-button" type="submit" name="signup_submit">Proceed for payment <img src="images/next.png"> </a>
      </div>
      
    </div>
    <div class="small-12 medium-6 column small-order-1 medium-order-2 login-box-social-section">
      <div class="login-box-social-section-inner">
        <span class="login-box-social-headline"><img src="images/buy-report.png">  Order Summary</span>
        <p><img src="images/report.png"> Automotive Wheel Market Size By Material (Aluminum, Steel, Magnesium, Carbon Fiber), By Product (Regular, High Performance), By End-Use (OEM, Aftermarket), By Vehicle (Passenger Cars, Lightweight Commercial Vehicles, Heavy Trucks, Buses & Coaches, Trailers), Industry Analysis Report, Regional Outlook (U.S., Canada, Germany, UK, France, Spain, Italy, Russia, Czech Republic, Poland, Slovakia, Turkey, China, India, Japan, South Korea, Malaysia, Thailand, Indonesia, Australia, Philippines, Vietnam, Brazil, Argentina, Mexico, Colombia, Iran, South Africa, Morocco, Egypt, Algeria), Application Potential, Price Trend, Competitive Market Share & Forecast, 2017 – 2024</p>
          <p><img src="images/report.png"> Order Price: $4500</p>
          <p><img src="images/reportname.png"> Licence: Signle User Licence</p>
    
      </div>
    </div>
  </div>
</div>
    <br>
    <p><img src="images/privacy.png"> Privacy Policy</p>
</div></div>

