<?php
  /*
  * Section => Co-Share
  */

  //share button variables
  $permalink = urlencode( get_permalink());
  $title = urlencode(get_the_title());
  $imgurl = urlencode( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) );

?>

<h4>
  Share
</h4>
<div class="social-wrapper">
  <div class="social-icon">
    <a target="_blank" 
      href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>+<?php echo get_permalink(); ?>">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/twit.svg'); ?>
    </a>
  </div>
  <div class="social-icon">
    <a target="_blank" 
      href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(get_permalink()); ?>">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/face.svg'); ?>
    </a>
  </div>
  <div class="social-icon">
    <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $permalink; ?>&media=<?php urlencode( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) );?>">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/pint.svg'); ?>
    </a>
  </div>
  <div class="social-icon">
    <a target="_blank" 
    href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink() ?>">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/mail.svg'); ?>
    </a>
  </div>
</div>
<?php do_action( 'woocommerce_share' ); ?>