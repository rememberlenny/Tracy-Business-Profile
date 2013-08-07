<div class="column ">
    <h4 class=" text-left">News</h4>
    <?php 
          rewind_posts();
          $mypost = array( 'post_type' => 'post', 'posts_per_page' => '2' );
          $my_query = new WP_Query( $mypost ); ?>
    <?php while ($my_query->have_posts()) :  $my_query->the_post(); ?>
    <?php get_template_part('content', 'home-post-single') ?>
    <?php endwhile; // End the loop ?>
    <hr>
    <ul class="text-center large-block-grid-5">
      <li><h4 class="text-right"><p><?php the_field('top_app:_intro', 'option'); ?></p></h4></li>
            <li>
        <img src="<?php the_field('top_app:_1.image', 'option'); ?>" alt="<?php the_field('top_app:_1.title', 'option'); ?>" style="max-width:124px">
        <p><a style="font-size:.7em;" href="<?php the_field('top_app:_1.url', 'option'); ?>"><?php the_field('top_app:_1.title', 'option'); ?></a></p>
      </li>      
      <li>
        <img src="<?php the_field('top_app:_2.image', 'option'); ?>" alt="<?php the_field('top_app:_2.title', 'option'); ?>" style="max-width:124px">
        <p><a style="font-size:.7em;" href="<?php the_field('top_app:_2.url', 'option'); ?>"><?php the_field('top_app:_2.title', 'option'); ?></a></p>
      </li>      
      <li>
        <img src="<?php the_field('top_app:_3.image', 'option'); ?>" alt="<?php the_field('top_app:_3.title', 'option'); ?>" style="max-width:124px">
        <p><a style="font-size:.7em;" href="<?php the_field('top_app:_3.url', 'option'); ?>"><?php the_field('top_app:_3.title', 'option'); ?></a></p>
      </li>      
      <li>
        <img src="<?php the_field('top_app:_4.image', 'option'); ?>" alt="<?php the_field('top_app:_4.title', 'option'); ?>" style="max-width:124px">
        <p><a style="font-size:.7em;" href="<?php the_field('top_app:_4.url', 'option'); ?>"><?php the_field('top_app:_4.title', 'option'); ?></a></p>
      </li>
    </ul>
</div>