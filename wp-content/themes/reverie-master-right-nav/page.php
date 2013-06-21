<?php 
/*
Template Name: Page
*/
get_header(); ?>

<?php postHeaderStyleCall(); ?>

<!-- Row for main content area -->
	
<!-- Hero Image and Text -->  
<?php content_header_function(); ?>
<!-- End Hero Image and Text -->	
  
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
  						<?php the_content(); ?>
              <?php //about_us_panel(); ?>    
              <?php page_bottom_box(); ?>   
						</div>
					</article>
          
				<?php endwhile; // End the loop ?>
			  </div>
			</div>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>