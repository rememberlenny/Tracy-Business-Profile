<div class="column ">
    <h4 class=" text-left">Latest News</h4>
    <?php 
          rewind_posts();
          $mypost = array( 'post_type' => 'post', 'posts_per_page' => '3' );
          $my_query = new WP_Query( $mypost ); ?>
    <?php while ($my_query->have_posts()) :  $my_query->the_post(); ?>
    <?php get_template_part('content', 'home-post-single') ?>
    <?php endwhile; // End the loop ?>
    
</div>