
<div class="large-11 column large-centered">
  <h3 class="subheader text-center">Discover more about AdsYolo</h3>
    <?php 
          rewind_posts();
          $mypost = array( 'post_type' => 'page', 'posts_per_page' => '3' );
          $my_query = new WP_Query( $mypost ); ?>
    <?php while ($my_query->have_posts()) :  $my_query->the_post(); ?>
    <?php get_template_part('content', 'page-additional') ?>
    <?php endwhile; // End the loop ?>
</div>