<?php
/**
 * Footer
 *
 * Contans footer assets.
 *
 * @link STORY RUGS
 *
 * @package STORY RUGS
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?>


</body><!-- end -->
</html>

<!-- ==== SECTION: FOOTER ==== -->
<footer>
  <div class="social-links">
  	<div class="insta">
  		<?php echo file_get_contents($GLOBALS['url'].'/assets/social-inst.svg'); ?>
  	</div>
  	<div class="insta">
  		<?php echo file_get_contents($GLOBALS['url'].'/assets/social-pint.svg'); ?>
  	</div>
  	<div class="insta">
  		<?php echo file_get_contents($GLOBALS['url'].'/assets/social-face.svg'); ?>
  	</div>
  </div>
  <div class="directory">
  	<div class="logo">
  	  <?php echo file_get_contents($GLOBALS['url'].'/assets/logo-footer.svg'); ?>
  	</div>
  	<div class="dir-links">
  	  <a href="/">Shipping</a>
  	  <a href="/">Returns</a>
  	  <a href="/">Policies</a>
  	</div>
  	<div class="tagline">
	  	<?php echo file_get_contents($GLOBALS['url'].'/assets/footer-tagline.svg'); ?>
  	</div>
  	<div class="copyright">
  		Copyright 2016 Story Rugs | Site By <a href="http://sdcopartners.com">SDCO Partners</a>
  	</div>
  </div>
</footer>

<?php wp_footer(); ?>