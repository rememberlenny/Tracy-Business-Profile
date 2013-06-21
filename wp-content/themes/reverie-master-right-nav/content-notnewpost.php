<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>
	
<li class="active text-left article-title" >
  <a href="<?php the_permalink(); ?>" class="secondary">
    <?php the_title(); ?> ›
  </a>
</li> 