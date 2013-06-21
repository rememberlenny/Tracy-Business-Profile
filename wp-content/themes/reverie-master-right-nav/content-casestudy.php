<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <a href="<?php the_permalink(); ?>"><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 36 ), 'single-post-thumbnail' ); ?></a>
      <img src="<?php echo $image[0]; ?>">
	<header>
    <?php endif; ?>
		<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		<?php reverie_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content('Continue reading...'); ?>
	</div>
	<footer>

	</footer>
	<hr />
</article>