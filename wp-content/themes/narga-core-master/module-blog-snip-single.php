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
      <li><h4 class="text-right">Top Apps <br>of the week</h4></li>
      <li>
        <img src="<?php bloginfo('url') ?>/wp-content/uploads/2013/06/supper.png" alt="Supper Defender IV" style="max-width:124px">
        <p><a style="font-size:.7em;" href="https://play.google.com/store/apps/details?id=com.droidhen.defendersiiii&referrer=utm_source%3Dappbrain%26utm_medium%3Dappbrain_web%26utm_campaign%3Dappbrain_web">Supper Defender IV</a></p>
      </li>
      <li>
        <img src="<?php bloginfo('url') ?>/wp-content/uploads/2013/06/driving.png" alt="Driving School" style="max-width:124px">
        <p><a style="font-size:.7em;" href="https://play.google.com/store/apps/details?id=com.xianqing.driving3d&referrer=utm_source%3Dappbrain%26utm_medium%3Dappbrain_web%26utm_campaign%3Dappbrain_web">Driving School</a></p>
      </li>
      <li>
        <img src="<?php bloginfo('url') ?>/wp-content/uploads/2013/06/anime.png" alt="Anime Beauty" style="max-width:124px">
        <p><a style="font-size:.7em;" href="">Heart Live Wallpaper</a></p>
      </li>
      <li>
        <img src="<?php bloginfo('url') ?>/wp-content/uploads/2013/06/hider.png" alt="Application Hider" style="max-width:124px">
        <p><a style="font-size:.7em;" href="https://play.google.com/store/apps/details?id=com.mm.security.androidhider1&referrer=utm_source%3Dappbrain%26utm_medium%3Dappbrain_web%26utm_campaign%3Dappbrain_web">Application Hider</a></p>
      </li>
    </ul>
</div>