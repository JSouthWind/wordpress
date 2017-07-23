<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

	

<footer id="colophon" class="site-footer">
  <div class="wrapper">
    <p class="site-footer__social-links">
      <a href="https://www.facebook.com/newrepublique/?fref=ts" target="_blank"><i class="fa fa-facebook"></i><span></span></a>
      <a target="_blank" href="https://www.linkedin.com/company/new-republique"><i class="fa fa-linkedin"></i><span></span></a>
      <a href="https://www.youtube.com/channel/UCHb09lOf2KIdpmCXSsQoEvA" target="_blank"><i class="fa fa-youtube"></i><span></span></a>
      <a target="_blank" href="http://www.slideshare.net/nyassini"><i class="fa fa-slideshare"></i><span></span></a>
      <a target="_blank" href="https://www.instagram.com/newrepublique/"><i class="fa fa-instagram"></i><span></span></a>
    </p>

    <div class="large-8 column large-offset-2">
      <p class="site-footer__badges">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MaxymiserAccreditation.png" data-pin-nopin="true">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oracle_gold_partner_bigger.png" class="large-offset-1" data-pin-nopin="true">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Optimizely.png" class="large-offset-1" data-pin-nopin="true">

      </p>
    </div>

    <hr>
    <p class="site-footer__copyright">@ copyright New Republique 2017</p>
  </div>

</footer><!-- #colophon -->
</div><!-- #content -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
