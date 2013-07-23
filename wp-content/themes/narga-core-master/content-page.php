<?php
/**
* The template used for displaying page content in page.php
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.2
*/
?>

<div class="row hero-image-overlay">
  <div class="column large-10 large-centered mt3em">
    <div class="column">
      <h1 class="white d-inline highlight-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>


<?php while (have_posts()) : the_post(); ?>

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


<?php get_template_part( 'module-call-to-action-bar'); ?>

<?php get_template_part( 'module-page-snip'); ?>

<?php get_template_part( 'module-blog-snip'); ?>


<!-- blog insert -->

<!-- service crosssell -->
<?php // get_template_part( 'module-page-additional'); ?>

<!-- action bar -->

<!-- company crosssell -->

<!-- CTA bar -->
<?php get_template_part( 'module-contact-bar'); ?>