<?php 
/*
Template Name: Job Boards
*/
get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<?php postHeaderStyleCall(); ?>

<?php endif; ?>

<!-- Row for main content area -->
  
<?php content_header_function(); ?>
  
<div class="content content-main row twelve">
  <div class="main large-8 columns ">   
    


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
            
              <h4 class="subheader">Opportunities in Florida</h4>
              <iframe name="resumator-job-frame" id="resumator-job-frame" class="resumator-advanced-widget" src="http://acquinityinteractive.theresumator.com/apply/jobs?s_state=FL" height="550" width="100%" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
              <script>function resizeResumatorIframe(height,nojump){if(nojump== 0){window.scrollTo(0,0);}document.getElementById("resumator-job-frame").height = parseInt(height)+20;}</script>              
              <h4 class="subheader">Opportunities in New York</h4>
              <iframe name="resumator-job-frame2" id="resumator-job-frame" class="resumator-advanced-widget" src="http://acquinityinteractive.theresumator.com/apply/jobs?s_state=NY" height="300" width="100%" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
              <script>function resizeResumatorIframe(height,nojump){if(nojump== 0){window.scrollTo(0,0);}document.getElementById("resumator-job-frame2").height = parseInt(height)+20;}</script>
              <hr>
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