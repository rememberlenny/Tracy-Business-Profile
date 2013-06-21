<?php 
/*
Template Name: Page News
*/
get_header(); ?>

<style type="text/css"> 

<?php archiveConditionalStyleCalls(); ?>

</style>
  
<?php content_header_function(); ?> 

<?php
  // Is it a Category Archive
  if ( is_category() ) {
    global $cat;
    $curr_cat = get_category( $cat );
    $cat_name = ( $curr_cat ) ? $curr_cat->cat_name : 'Recent News';
  }
  // End Category Archive Title
?>
  
<div class="content content-main row twelve">
  <div class="main large-8 columns ">   
    <?php /* Start loop */ ?>
    <div class="case-studies fr">
      <div class="s9999 case-studies-extension fr">
        <div id="case-sliders" class="pr98 pl98 lftcont case-studies-content content-sec fr">
        	<h4 class="subheader"><?php echo $cat_name; ?></h4> 
            <?php $mypost = array( 'post_type' => 'post', );
        $loop = new WP_Query( $mypost ); ?>
        
        <?php if ( have_posts() ) : ?>
        
          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'archive' ); ?>
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
          <?php } 
						page_bottom_box();
          ?>

        </div>
      </div>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>