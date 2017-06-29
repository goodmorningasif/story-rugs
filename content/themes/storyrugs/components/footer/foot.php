<?php
  /*
  * Section =>  FOOT
  */

  $logo = get_field('ft_logo','options');
  $tagline = get_field('ft_tagline','options');

?>

<div class="social-links">
  <div class="social-links-box">
  <?php if(have_rows('ft_social', 'options')) : 
  	while(have_rows('ft_social', 'options')):
  		the_row();
			  $icon = get_sub_field('ft_social-icon');
			  $title = get_sub_field('ft_social-link'); ?>

				<div class="icon">
				  <a href="<?php echo $title ?>" target="_blank">
						<?php echo file_get_contents($icon['url']); ?>
					</a>
				</div>

  <?php endwhile;endif; ?>
  </div>
</div>

<div class="directory">
	<div class="logo">
	  <?php echo file_get_contents($logo['url']); ?>
	</div>

	<div class="dir-links">
	  <?php $count = 0; 
  	  $totalRows = count(get_field('ft_nav', 'options'));
	  if(have_rows('ft_nav', 'options')) :
	    while(have_rows('ft_nav', 'options')) :
	    	the_row();
	        $link = get_sub_field('ft_nav-link'); 
	        $title = get_sub_field('ft_nav-title'); ?>

				  <a href="<?php echo $link; ?>">
				    <?php echo $title; ?>
				  </a>

				  <?php if(++$count < $totalRows) : ?>
				    &nbsp; &#124; &nbsp;
					<?php endif; ?>

	  <?php endwhile;endif; ?>
	</div>
	
	<div class="tagline">
  	<?php echo file_get_contents($tagline['url']); ?>
	</div>
	
	<div class="copyright">
		Copyright <?php echo date("Y"); ?> Story Rugs &nbsp; &#124; &nbsp; Site By 
		<a href="http://sdcopartners.com">SDCO Partners</a>
	</div>
</div>

<div class="footer-signup">
  <div class="footer-signup-box">
	  <h3>Stay In Touch!</h3>
	  <?php echo do_shortcode('[contact-form-7 id="199" title="Newsletter Signup Form"]'); ?>
  </div>
</div>