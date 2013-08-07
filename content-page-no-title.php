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

<?php get_template_part( 'module-home-slide-section'); ?>
  
  <div class="row fixer-do">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="entry-content">
          <div class="large-8 column large-centered mt3em">
            <div class="column pb1em mb1em" style="background: white; box-shadow: 0px 5px 10px -10px;">
              <?php the_content(); ?>
            </div>
          </div>
        </section>
    </article>  
  </div>
<?php endwhile; // End the loop ?>
  <div class="row">
    <div class="large-12 column large-centered">
        <div class="row mt2em">
          <div class="large-6 column">
            <ul class="large-block-grid-2">
              <li><h4 class="text-right"><p><?php the_field('cta1:_title', 'option'); ?></p></h4></li>
              <li><p class=""><?php the_field('cta1:_content', 'option'); ?></p><a class="button small" href="<?php the_field('cta1:_url', 'option'); ?>"><?php the_field('cta1:_link_text', 'option'); ?></a></li>
            </ul>
          </div>
          <div class="large-6 column">
                        <ul class="large-block-grid-2">
              <li><h4 class="text-right"><p><?php the_field('cta2:_title', 'option'); ?></p></h4></li>
              <li><p class=""><?php the_field('cta2:_content', 'option'); ?></p><a class="button small" href="<?php the_field('cta2:_url', 'option'); ?>"><?php the_field('cta2:_link_text', 'option'); ?></a></li>
            </ul>
          </div>
          <hr>
        </div>
      <?php get_template_part( 'module-case-study-down'); ?>
    </div>
  
  </div>  
  <div class="row">
    <div class="large-8 column">
      
      <?php get_template_part( 'module-blog-snip-single'); ?>
    </div>
    <div class="large-4 column">
      <?php get_template_part('module-featured-article'); ?>
      
    </div>

  </div>


<?php // get_template_part( 'module-page-snip'); ?>




<!-- blog insert -->

<!-- service crosssell -->
<?php // get_template_part( 'module-page-additional'); ?>

<!-- action bar -->

<!-- company crosssell -->