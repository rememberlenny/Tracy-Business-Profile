<?php
/*
Template Name: Blog archive page
*/

get_header(); ?>

    <!-- Row for main content area -->
    <div id="full-width-wrapper" class="large-12 columns" role="content">
      <div class="row">
        <div class="column hide-for-mobile child-page-nav">
          <?php atri_blog_navigation(); ?>
        </div>
      </div>
    <?php get_template_part('content', 'page-archive'); ?>
    </div><!-- End Content row -->
<?php get_footer(); ?>
