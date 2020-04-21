
      <?php $this->load->view('elements/meta_header_noindex'); ?>

        
<div class="row medium-4 large-5 columns">
<div class="blog-post" style="margin-top: 2em;">
<div class="collout" style="background: #ebebeb; padding: 2em;"> 
<form action="/newsletter/newsact" method="post">

<h4>Subscribe For Latest News</h4>


 <div class="large-8 columns">
      <input type="radio" name="newsletter" value="All Industry" id="pokemonRed" checked="">
      <label for="pokemonRed">All Industry</label>
<br />

      <input type="radio" name="newsletter" value="Biomass, Bioenergy & Renewable..." id="pokemonRed">
      <label for="pokemonRed">Biomass, Bioenergy</label> <br />
      <input type="radio" name="newsletter" value="Electronics & Media" id="pokemonBlue">

      <label for="pokemonBlue">Electronics & Media</label>
     <br /> <input type="radio" name="newsletter" value="Energy, Mining, Oil & Gas" id="pokemonRed">
      <label for="pokemonRed">Energy, Mining, Oil & Gas</label>
        <br /> 
        <input type="radio" name="newsletter" value="Food, Nutrition & Animal Feed" id="pokemonBlue">
      <label for="pokemonBlue">Food, Nutrition & Animal Feed</label>
<br /> 
   <input type="radio" name="newsletter" value="Healthcare & Medical Devices" id="pokemonRed">

       <label for="pokemonRed">Healthcare & Medical Devices</label>
   <br />    <input type="radio" name="newsletter" value="HVAC & Construction" id="pokemonBlue">

      <label for="pokemonBlue">HVAC & Construction</label>
  
<br />    <input type="radio" name="newsletter" value="Polymers & Advanced Materials" id="pokemonRed">
  <label for="pokemonRed">Polymers & Advanced Materials</label>
    <br />   <input type="radio" name="newsletter" value="Sustainable & Smart Technologies" id="pokemonBlue">
      <label for="pokemonBlue">Sustainable & Smart Technologies</label>
    </div>








 <input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
<input type="text" id="middle-label" name="email" placeholder="Subscription Email ID *" required="">




<?php echo $widget;?>
<?php echo $script;?>

<p style="font-size: 11px;">This website is secure and your personal details are safe.<a target="_blank" href="http://www.gminsights.com/privacy-policy"> Privacy Policy</a></p>
<input  class="button" type="submit" value="Subscribe"  style="width: 40%;"/>
</form>
</div>
</div>
</div>
</body>
</html>
