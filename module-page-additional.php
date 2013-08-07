<div class="large-11 column large-centered">
  <h3 class="text-center pb1em">You might also be interested in</h3>
  <?php 
        rewind_posts();
        $mypost = array( 'post_type' => 'services', 'posts_per_page' => '3', 'orderby' => 'rand', 'post_parent' => '0' );
        $my_query = new WP_Query( $mypost ); ?>
  <?php while ($my_query->have_posts()) :  $my_query->the_post(); ?>
  <?php get_template_part('content', 'page-additional') ?>
  <?php endwhile; // End the loop ?>
</div>

<div class="row mt3em large-"></div>
