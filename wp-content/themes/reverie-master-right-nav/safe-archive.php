<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<style type="text/css">
	.masthead-photo {
		background: url("<?php echo $image[0]; ?>") center center no-repeat #FAF8F6;
	}
</style>

<?php endif; ?>

<!-- Row for main content area -->
	
<div class="content hero-row row twelve">
  <div class="main large-12" style="">
    <div class="masthead-photo h300" style="">
      <div class="s9999 masthead-photo-extension image-wrapper">
        <div class="masthead-photo-content">
          <?php
          if(get_field('hero_title_line_1'))
          {
            echo '<div> <h1 class="text-left hero-text">' . get_field('hero_title_line_1') . '</h1></div>';
          }
          if(get_field('hero_title_line_2'))
          {
            echo '<div> <h1 class="text-left hero-text">' . get_field('hero_title_line_2') . '</h1></div>';
          }
          ?>
        </div>
       </div>
    </div>
  </div>
</div>	

<div class="content content-main row twelve">
	<div class="main large-8 columns "> 	
		<?php /* Start loop */ ?>
		<div class="case-studies fr">
		  <div class="s9999 case-studies-extension fr">
		    <div id="case-sliders" class="pr98 pl98 lftcont case-studies-content content-sec fr">
         
	      <?php while (have_posts()) : the_post(); ?>
	      
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
		
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
		
				<?php endif; // end have_posts() check ?>
	
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
					</nav>
				<?php } ?>
				</div>
			</div>
		</div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>