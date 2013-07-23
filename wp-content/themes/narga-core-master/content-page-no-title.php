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
      <div class="brand-primary-bg ">
        <div class="row">
          <ul class="slider-head-link pt1em">
            <li class="large-4 slide-1 column text-center">
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
        <div class="panel panel-contexts-case">
          <div class="panel-contexts slide-1">
            <div class="row">
              <div class="column">
                <div class="large-4 column ">
                  <h1>We are China experts.</h1>                
                </div>
                <div class="large-8 column pt2em">
                  <h4 class="">AdsYolo is Chinese mobile fluent.</h4>
                  <a href="<?php bloginfo('url'); ?>/advertisers" class="button bold">Become a customers.</a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-contexts slide-2">
            <div class="row">
              <div class="column">
                <div class="large-4 column ">
                  <h1>We run a premium network.</h1>                
                </div>
                <div class="large-8 column pt2em">
                  <h4 class="">Our AMP network has over 50,000 apps.</h4>
                  <a href="<?php bloginfo('url'); ?>/advertisers" class="button bold">Join the network.</a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-contexts slide-3">
            <div class="row">
              <div class="column">
                <div class="large-4 column ">
                  <h1>We collect Chinese App data.</h1>                
                </div>
                <div class="large-8 column pt2em">
                  <h4 class="">Delivering 14 billion monthly impressions.</h4>
                  <a href="<?php bloginfo('url'); ?>/advertisers" class="button bold">See our findings.</a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-contexts slide-x active">
            <div class="row">
              <div class="column">
                <div class="large-4 column ">
                  <img src="<?php bloginfo('url') ?>/wp-content/uploads/2013/06/adsyolo-logo-ay.png">
                </div>
                <div class="large-8 column ">
                  <h1 class="">Making you successful in China.</h1>
                  <a href="<?php bloginfo('url'); ?>/advertisers" class="button bold">Learn more.</a>
                </div>
              </div>
            </div>
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
<?php // get_template_part( 'module-page-additional'); ?>

<!-- action bar -->
<?php  get_template_part( 'module-call-to-action-bar'); ?>

<!-- company crosssell -->
<?php  get_template_part( 'module-page-snip'); ?>

<!-- CTA bar -->
<?php get_template_part( 'module-contact-bar'); ?>