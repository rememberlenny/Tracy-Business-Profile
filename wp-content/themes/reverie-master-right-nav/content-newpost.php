<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>
	
 <li class="active text-left article-title" data-orbit-slide="headline-1">
  <h5 class="article-title-line" style="line-height:1.08;">
    <a href="<?php the_permalink(); ?>" class="secondary">
      <?php the_title(); ?>
    </a>
  </h5>
  <p class=" text-left clearboth pt1em">
    <?php
      $excerpt = get_the_excerpt();
      echo string_limit_words($excerpt,14);
    ?>...
    <a class="svbt-line" href="<?php the_permalink(); ?>">Read Article ›</a>
  </p>  
</li> 