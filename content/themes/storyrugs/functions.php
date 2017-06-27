<?php
/** 
 * Functions
 *
 * Smart functions
 *
 * @link STORY RUGS
 *
 * @package STORY RUGS
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  include 'config.php';

  /* Define Variables  */
  $GLOBALS['url'] = get_template_directory_uri();
  $GLOBALS['root'] = '10.1.10.96/story-rugs';
  $GLOBALS['docpath'] = $_SERVER['DOCUMENT_ROOT'].'/story-rugs';

  /* Add Styles, Fonts, and Javascript */
  function my_enqueue_style() {
    wp_enqueue_style('typography', 'https://cloud.typography.com/778678/7536372/css/fonts.css');
    wp_enqueue_style('typenetwork', 'http://cloud.typenetwork.com/projects/1475/fontface.css/');
    wp_enqueue_style('styles', $GLOBALS['url'].'/prod/styles.css');
    wp_enqueue_script('underscore', $GLOBALS['url'].'/prod/underscore.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts-min', $GLOBALS['url'].'/prod/scripts.js', array('jquery'), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );
  // add_theme_support( 'post-thumbnails' );


  /* Remove Admin Login */
  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');


  /* remove auto paragraph tag from the-content */
  remove_filter('the_content', 'wpautop');

  
  /**
  * isMobile
  *
  * returns true/false if there is a match for browser. 
  */
  function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
  }

  
  /**
  *
  * test
  *
  * shortcut to test function
  */
  function test($var, $mes){
    echo "<script>console.log('".$var.", outputs ".$mes."');</script>";
  }


  /**
  *
  * Adds option tab
  *
  */
  if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
  }


  /**
  *
  * Disables Theme Editor
  *
  */
  function remove_editor_menu() {
    remove_action('admin_menu', '_add_themes_utility_last', 101);
  }
  add_action('_admin_menu', 'remove_editor_menu', 1); 


  /**
  *
  * Disables Additional CSS Editor
  *
  */  
  function prefix_remove_css_section( $wp_customize ) {
    $wp_customize->remove_section( 'custom_css' );
  }
  add_action( 'customize_register', 'prefix_remove_css_section', 15 );

  /**
  *
  * ADDS WOOCOMMERCE SUPPORT
  *
  */    
  add_action( 'after_setup_theme', 'woocommerce_support' );
  function woocommerce_support() {
      add_theme_support( 'woocommerce' );
  }

  /**
  *
  * DISABLES WOOCOMMERCE DEFAULT CSS
  *
  */    
  add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


  /* 
  * 
  * AJAXIFY CART TOTAL
  * 
  * Ensure cart contents update when products are added to the cart via AJAX
  * https://gist.github.com/DanielSantoro/1d0dc206e242239624eb71b2636ab148
  *
  */
  add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
   
  function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    
    ob_start();
    
    ?>
    <a class="cart-customlocation" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
    <?php
    
    $fragments['a.cart-customlocation'] = ob_get_clean();
    
    return $fragments;
    
  }

?>