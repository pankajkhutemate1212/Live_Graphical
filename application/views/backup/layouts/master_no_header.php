<?php $this->load->view('elements/meta_header_pay'); ?>

    <?php $this->load->view('elements/header'); ?>

        <?php $this->load->view($content); ?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <script src="<?php echo base_url('assets/js/vendor/jquery.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendor/what-input.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.0/foundation.min.js"></script>
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
	<script>
$(document).ready(function(){

  // hide #back-top first
  $("#back-top").hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top .fi-arrow-up').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

});
</script></body>
		</html> 