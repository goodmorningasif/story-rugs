<?php
  /*
  * Section => Co-Share
  */

?>

<h4>
  Share
</h4>
<div class="social-wrapper">
  <div class="social-icon">
    <a href="">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/twit.svg'); ?>
    </a>
  </div>
  <div class="social-icon">
    <a href="">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/face.svg'); ?>
    </a>
  </div>
  <div class="social-icon">
    <a href="">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/pint.svg'); ?>
    </a>
  </div>
  <div class="social-icon">
    <a href="">
    <?php echo file_get_contents($GLOBALS['url'].'/assets/mail.svg'); ?>
    </a>
  </div>
</div>
<?php do_action( 'woocommerce_share' ); ?>