<?php

/*-------------------------------------------------------------------------------------

TABLE OF CONTENTS

- About Us Panel
- Page Bottom Box
- Page Stat Panel
- Get Related Post CPT

-------------------------------------------------------------------------------------*/

function about_us_panel(){
    ?>
    <div class="large-12 panel row clearboth mb1em radius about">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2013/03/acquinity-a-circle.png" class="fl acq-cir-sm" >
      <a href="/about/"><h4 class="subheader">About Acquinity Interactive</h4></a>
      <p>Acquinity Interactive turns consumers into brand investors. A performance, product marketing and lead generation company, Acquinity’s many platforms of expertise include niche online communities, their accompanying email titles, telemarketing, and consumer services in the fields of sweepstakes, health, couponing and political polling. 
      <br>
      <a href="/about/" class="secondary svbt-line">Read more about Acquinity Interactive ›</a> 
      </p>
      
    </div>
    <?php
}

function page_bottom_box(){
  if( get_field('page_bottom_statistic_toggle') || is_home() || is_category('event-appearances') || is_category('event-appearances') || is_category('industry-news') || is_category('press-release') || get_field('page_bottom_statistic_toggle') ):
    
    if( is_home() ):
      $statNumber = get_field('archive-blog-all-number', 'option'); 
      $statDesc = get_field('archive-blog-all-text', 'option');
    elseif( is_category('event-appearances') ):
      $statNumber = get_field('archive-blog-events-number', 'option'); 
      $statDesc = get_field('archive-blog-events-text', 'option'); 
    elseif( is_category('industry-news') ):
      $statNumber = get_field('archive-blog-industry-number', 'option'); 
      $statDesc = get_field('archive-blog-industry-text', 'option'); 
    elseif( is_category('press-release') ):
      $statNumber = get_field('archive-blog-press-number', 'option'); 
      $statDesc = get_field('archive-blog-press-text', 'option'); 
    elseif( get_field('page_bottom_statistic_toggle') ): 
      $statNumber = get_field('page_bottom_statistic_number'); 
      $statDesc = get_field('page_bottom_statistic_short_desc');
    endif;  ?>
    
    <div class="pageBottomBox large-12 panel row clearboth mb1em radius about">
        <div class="large-12 column left">  
          <h5 class="subheader stat-number">            
            <?php echo $statNumber; ?> 
          </h5>              
          <h4 class="subheader" style="color:#999;">
            <?php echo $statDesc; ?> 
          </h4>
        </div>
    </div>
  <?php 
  
  endif;
}

function page_stat_panel(){
    ?>
    <div class="large-12 panel row clearboth mb1em radius about">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2013/03/acquinity-a-circle.png" class="fl acq-cir-sm" >
      <a href="/about/"><h4 class="subheader">About Acquinity Interactive</h4></a>
      <p>Acquinity Interactive turns consumers into brand investors. A performance, product marketing and lead generation company, Acquinity’s many platforms of expertise include niche online communities, their accompanying email titles, telemarketing, and consumer services in the fields of sweepstakes, health, couponing and political polling. 
      <br>
      <a href="/about/" class="secondary svbt-line">Read more about Acquinity Interactive ›</a> 
      </p>
      
    </div>
    <?php
}

function get_related_cpt(){
    $currentID = get_the_ID();
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $loop = new WP_Query( array(
    'post_type' => 'success-story',
    'posts_per_page' => 9,
    'orderby'=> 'menu_order',
    'paged'=>$paged,
    'post__not_in' => array($currentID)
    ) ); ?>    
    <div class="large-12 clearboth mb2em radius row ml0 accessory-block">
      <div class="column">
        <a href="/success-story/"><h4 class="subheader">More Success Stories</h4></a>
      </div> 
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="large-4 column pr1em">
            <div class="accessory_image radius">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?></a>
                    <?php the_title( '<h5 class="accessory-title"><a class="secondary" href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h5>' ); ?>
            </div>
          </div>
        <?php endwhile;?>
    </div>
<?php } 

?>
