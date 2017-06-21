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

<!-- ==== SECTION: BACK TO TOP ==== -->
<section class="back-to-top">
  <p id="btt">
    <span>^</span>Top
  </p>
</section>

<!-- ==== SECTION: FOOTER ==== -->
<footer>
  <?php get_template_part('/components/footer/foot'); ?>
</footer>

<!-- ==== SECTION: BORDERS ==== -->
<section class="borders">
  <div class="top"></div>
  <div class="right"></div>
  <div class="bottom"></div>
  <div class="left"></div>
</section>

<?php wp_footer();