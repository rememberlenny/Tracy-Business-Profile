<?php
/**
* The template for displaying Archive pages.
*
* Used to display archive-type pages if nothing more specific matches a query.
* For example, puts together date-based pages if no date.php file exists.
*
* If you'd like to further customize these archive views, you may create a
* new template file for each specific one. For example, Twenty Twelve already
* has tag.php for Tag archives, category.php for Category archives, and
* author.php for Author archives.
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy

*
* @package WordPress
* @subpackage NARGA Framework
* @since Twenty Twelve 1.0
*/
?>

<?php get_header(); ?>
<!-- Row for main content area -->
<style>
#sidebar{
background:white;
}
h2 a{
font-size: .5em !important;
text-decoration: underline;
}

</style>
    <div id="full-width-wrapper" class="large-12 columns" role="content">
      <div class="row">
        <div class="column hide-for-mobile child-page-nav">
          <?php atri_blog_navigation(); ?>
        </div>
      </div>
<div class="row hero-image-overlay">
  <div class="column large-10 large-centered mt3em">
    <div class="column">
      <h1 style="margin-bottom: 3em !important" class="white d-inline highlight-title">Archive<h1>
    </div>
  </div>
</div>

<div id="archive-wrapper" style="background:white" class="large-8 columns" role="content">
    <?php #Breadcrumb Control
    if (narga_options('breadcrumb') == 1) :
    narga_breadcrumb();
    endif;
    ?>

    <h2><?php if ( is_day() ) : printf( __( 'Daily Archives: %s', 'narga' ), '<span>' . get_the_date() . '</span>' );
        elseif ( is_month() ) :
        printf( __( 'Monthly Archives: %s', 'narga' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'narga' ) ) . '</span>' );
        elseif ( is_year() ) :
        printf( __( 'Yearly Archives: %s', 'narga' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'narga' ) ) . '</span>' );
        else :
        single_cat_title();
        endif;?></h2>
    <hr>
    <?php while (have_posts()) : the_post();
    get_template_part('content', get_post_format());
    endwhile; // End the loop ?>
    <?php /* Display navigation to next/previous pages when applicable */
    if ( function_exists('narga_pagination') ) { narga_pagination(); } else if ( is_paged() ) { ?>
    <nav id="post-nav">
        <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'narga' ) ); ?></div>
        <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'narga' ) ); ?></div>
    </nav>
    <?php } ?>
</div><!-- End Content row -->


<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
