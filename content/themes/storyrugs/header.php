<?php
/**
 * Header
 *
 * Contains header assets.
 *
 * @link STORY RUGS
 *
 * @package STORY RUGS
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<script type="text/javascript">
		document.documentElement.setAttribute("data-browser", navigator.userAgent);
	</script>

	<script src="//localhost:35729/livereload.js"></script>


  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <title>
    <?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name'), 1 ); ?>
  </title>
</head>

<body <?php body_class(); ?>>
<!-- ==== SECTION: NAV ==== -->
<nav>
  <?php get_template_part('/components/nav/nav'); ?>
</nav>
