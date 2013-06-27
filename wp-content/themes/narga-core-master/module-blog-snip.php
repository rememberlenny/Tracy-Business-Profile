<div class="large-8 column large-centered">

    <hr>
    <h3 class="subheader text-center">Latest News</h3>
<?php 
          rewind_posts();
          $mypost = array( 'post_type' => 'post', 'posts_per_page' => '2' );
          $my_query = new WP_Query( $mypost ); ?>
    <?php while ($my_query->have_posts()) :  $my_query->the_post(); ?>
    <?php get_template_part('content', 'home-post') ?>
    <?php endwhile; // End the loop ?>
    <?php /* Display navigation to next/previous pages when applicable */ ?>
    <?php if ( function_exists('narga_pagination') ) { narga_pagination(); } else if ( is_paged() ) { ?>
    <nav id="post-nav">
        <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'narga' ) ); ?></div>
        <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'narga' ) ); ?></div>
    </nav>
    <?php } ?>

    
    <hr>
</div>