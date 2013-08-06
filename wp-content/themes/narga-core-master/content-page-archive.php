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



  <div class="row " style="margin-top:2em;>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="entry-content">
          <div class="large-8 column large-centered mt3em">
            <div class="column pb1em mb1em" style="background: white; box-shadow: 0px 5px 10px -10px;">
               
		<style>
		  #archives-2 ul li{ font-size: 2em;}
		  #sidebar{ width: 70%; margin:0 auto; }
		</style>
     		<?php get_sidebar(); ?>         
             </div>
          </div>
        </section>
    </article>  
  </div>



<?php // get_template_part( 'module-call-to-action-bar'); ?>

<?php // get_template_part( 'module-page-snip'); ?>

<?php get_template_part( 'module-blog-snip'); ?>


<!-- blog insert -->

<!-- service crosssell -->
<?php // get_template_part( 'module-page-additional'); ?>

<!-- action bar -->

<!-- company crosssell -->
