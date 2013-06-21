<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="large-4 column">
  	<div class="thumb-wrapper circlewrapper">
      <?php 

            
      if (has_post_thumbnail( $post->ID ) ): ?>
    <a href="<?php the_permalink(); ?>"><?php 
      // Check if post has a Post Custom Thumbnail set
      if( get_field('toggle_post_custom_thumbnaill') ):?>
        <img style="max-width: 145px;" src="<?php the_field('image_post_custom_thumbnail'); ?>" alt="" />
        <?php
      // Else display normal post thumbnail
      else:
      $image = wp_get_attachment_image_src( the_post_thumbnail( 'thumbnail' ), 'single-post-thumbnail' ); 
        endif;
    ?></a>
      <?php 
      endif; 
      ?>
    </div>
  </div>
  <div class="content-block large-8 column"> 
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
  		<?php the_excerpt(''); ?>
    <footer>
      
    </footer>
  </div>  
	<hr />
</article>