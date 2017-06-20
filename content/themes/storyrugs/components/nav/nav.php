<?php
  /*
  * Section =>  NAV
  */
  
  $logo = get_field('hr_logo', 'options');

?>

<div class="customer-info">
	<div class="account">
    <a href="http://<?php echo $GLOBALS['root']; ?>/my-account">
  	  Account
    </a>
  </div>
	<div class="cart">
		<span class="total border-box">0</span>
    <a href="http://<?php echo $GLOBALS['root']; ?>/cart">
  		Cart
    </a>
	</div>
</div>

<div class="logo">
  <a href="http://<?php echo $GLOBALS['root']; ?>">
    <?php echo file_get_contents($logo['url']); ?>
  </a>
</div>

<div class="nav-links">
  <?php if(have_rows('hr_nav', 'options')) :
    while(have_rows('hr_nav', 'options')) : 
    	the_row(); 
        $link = get_sub_field('hr_nav-link');
        $title = get_sub_field('hr_nav-title'); ?>

				<a href="<?php echo $link; ?>"><?php echo $title; ?></a>

  <?php endwhile;endif; ?>
</div>