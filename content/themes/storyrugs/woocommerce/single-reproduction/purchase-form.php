<?php
  /*
  * Section =>  FOOT
  */
 
?>

<div class="form-header">
  <h3>
    <?php echo get_field('repo_head', $template_id ); ?>
  </h3>
  <div class="form-tagline">
    <?php echo get_field('repo_tagline', $template_id ); ?>
  </div>
</div>

<div class='overlay' id="purchase-form-overlay">&nbsp;</div>

<?php echo do_shortcode('[contact-form-7 id="5" title="Purchase Reproduction Form"]'); ?>