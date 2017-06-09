<?php
  /*
  * Section =>  NAV
  */
  
  $logo = get_field('hr_logo', 'options');

?>

<div class="customer-info">
	<div class="account">
	  Account
  </div>
	<div class="cart">
		<span class="total border-box">0</span>
		Cart
	</div>
</div>

<div class="logo">
  <?php echo file_get_contents($logo['url']); ?>
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