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
    <div class="large-6 column teal-bg">
      <div class="panel brand-primary-bg">
        <h1 class="white">We are China experts.</h1>
        <p class="white">AdsYolo speaks to the Chinese every minute through our AMP network of 50,000 apps that deliver over 14 BILLION impressions monthly.</p>

        <a href="" class="button bold">Customers find out more.</a>
      </div>
    </div>

    <div class="large-6 column">
      <div class="panel brand-secondary-bg">
        <h1 class="white">Developers and publishers.</h1>
        <p class="white">We help you expand your product adoption among the most engaged, purchase-empowered and fastest-growing audience.</p>

        <a href="" class="button bold">Developers find out more.</a>
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
<?php get_template_part( 'module-page-additional'); ?>

<!-- action bar -->
<?php get_template_part( 'module-call-to-action-bar'); ?>

<!-- company crosssell -->
<?php get_template_part( 'module-page-snip'); ?>

<!-- CTA bar -->
<?php get_template_part( 'module-contact-bar'); ?>