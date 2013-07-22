<?php
/**
* The template used for displaying page content in page.php
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.2
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="large-10 mt2em large-offset-1">
    <div class="large-12 column teal-bg slider-height" >
      <div>
        <div class="row">
          <ul class="slider-head-link ">
            <li class="active large-4 slide-1 column text-center">
              <p>China Experts</p>
            </li>
            <li class="large-4 column text-center slide-2">
              <p>Thriving Ad Network</p>
            </li>
            <li class="large-4 column text-center slide-3">
              <p>Rich Analytics</p>
            </li>
          </ul>
        </div>
        <div class="panel brand-primary-bg">
          <div class="panel-contexts slide-1 active">
            <h1 class="white">We are China experts.</h1>
            <p class="white">AdsYolo speaks to the Chinese every minute through our AMP network of 50,000 apps that deliver over 14 BILLION impressions monthly.</p>

            <a href="<?php bloginfo('url'); ?>/advertisers" class="button bold">Customers find out more.</a>
          </div>
          <div class="panel-contexts slide-2">
            <h1 class="white">See Our Premium Ad Network </h1>
            <p class="white">AdsYolo speaks to the Chinese every minute through our AMP network of 50,000 apps that deliver over 14 BILLION impressions monthly.</p>

            <a href="<?php bloginfo('url'); ?>/advertisers" class="button bold">Customers find out more.</a>
          </div>
          <div class="panel-contexts slide-3">
            <h1 class="white">We segment our network data</h1>
            <p class="white">AdsYolo speaks to the Chinese every minute through our AMP network of 50,000 apps that deliver over 14 BILLION impressions monthly.</p>

            <a href="<?php bloginfo('url'); ?>/advertisers" class="button bold">Customers find out more.</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="entry-content">
          <div class="large-8 column large-centered mt3em">
            <div class="column mt3em">
              <?php the_content(); ?>
            </div>
          </div>
          <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'narga'), 'after' => '</p></nav>' )); ?>
        </section>
    </article>	
  </div>
<?php endwhile; // End the loop ?>

<!-- blog insert -->
<?php get_template_part( 'module-blog-snip'); ?>

<!-- service crosssell -->
<?php  get_template_part( 'module-page-additional'); ?>

<!-- action bar -->
<?php  get_template_part( 'module-call-to-action-bar'); ?>

<!-- company crosssell -->
<?php  get_template_part( 'module-page-snip'); ?>

<!-- CTA bar -->
<?php get_template_part( 'module-contact-bar'); ?>