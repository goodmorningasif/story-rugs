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

<form>
  <input class="purchase border-box pname" 
    type="name" placeholder="name">
  <input class="purchase border-box psize" 
    type="text" placeholder="Size">
  <input class="purchase border-box pemail" 
    type="email" placeholder="email">
  <input class="purchase border-box psize" 
    type="text" placeholder="Purpose">
  <input class="purchase border-box pphone" 
    type="tel" placeholder="Phone">
  <textarea class="purchase border-box ptextarea" 
    rows="8" cols="50" placeholder="tell us about your story"></textarea>
  <input class="purchase border-box psubmit" 
    type="submit" value="Submit Inquiry">
</form>