<?php
/**
 * Template Name: Contact Page Template
 **/
?>

<?php get_header(); ?>
<div class="wrapper" id="contact-wrapper">
  <div class="container">
    <div div class="container-title page-title">
      <h2 class="title "> Contact Me </h2>
    </div>
    <div class="container-desc">
      <p>Contact me by filling up the form below or send an email to 
      <a href="mailto:luis.gudmalin@gmail.com">luis.gudmalin&commat;gmail.com</a>
       and let's talk.</p>
    </div>
    <div class="contact-form-container">
      <?php echo do_shortcode('[contact-form-7 id="54" title="Contact Me Form"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>