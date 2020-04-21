
      <?php $this->load->view('elements/meta_header_noindex'); ?>

        
<div class="row medium-4 large-5 columns">
<div class="blog-post" style="margin-top: 2em;">
<div class="collout" style="background: #ebebeb; padding: 2em;"> 
<form action="/newsletter/newsdeact" method="post">

<h4>Unsubscribe For Latest News</h4>



 <div class="large-8 columns">
      <input type="radio" name="newsletter" value="Unsubscribe Me Confirmed" id="pokemonRed" checked="">
      <label for="pokemonRed">Unsubscribe Me</label>
<br />

     

 <input class=""  type="hidden" name="ip" value="<?php echo $ip = $_SERVER['REMOTE_ADDR'];   ?>" >
<input type="text" id="middle-label" name="email" placeholder="Unsubscription Email ID *">





<?php echo $widget;?>
<?php echo $script;?></div>
<br />
<p style="11px;">This website is secure and your personal details are safe.<a target="_blank" href="http://www.gminsights.com/privacy-policy"> Privacy policy</a></p>
<input  class="button" type="submit" value="Subscribe" />
</form>

</div>
</div>
</div>
</body>
</html>
