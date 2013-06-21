<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<?php inlineCSScall(); ?>

<?php else : ?>
<style type="text/css">	
<?php defaultNewsHeader(); ?>
</style>
<?php endif; ?>

<!-- Row for main content area -->
	
<?php content_header_function(); ?> 
	
<div class="content content-main row twelve">
	<div class="main large-8 columns "> 	
	<?php /* Start loop */ ?>
		<div class="case-studies fr">
		  <div class="s9999 case-studies-extension fr">
		    <div id="case-sliders" class="pr98 pl98 lftcont case-studies-content content-sec fr">
	      <?php while (have_posts()) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<header>
							<h4 class="subheader"><?php the_title(); ?></h4>
							<?php // reverie_entry_meta(); ?>
						</header>
						<div class="entry-content">
							<?php	if( get_field('toggle_post_custom_thumbnaill') ):?>
								<div class="thumb-wrapper d-inline fl circlewrapper mr1p5em" style="margin-right:1.5em;"><img style="max-width:145px;" src="<?php the_field('image_post_custom_thumbnail'); ?>" alt="" /></div>
							<?php endif; ?>
							<?php the_content(); ?>
						</div>
						<footer>
							<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
						</footer>
            
					</article>
				<?php endwhile; // End the loop ?>
			  </div>
			</div>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>