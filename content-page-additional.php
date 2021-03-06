<?php
/**
* The default template for displaying content. Used for both single and index/archive/search.
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.2
*/
?>


    <div class="large-4 small-12 text-center column text-center">
        <div class="hide-for-small large-9 small-12 text-center column row large-centered">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full'); ?>
            </a>
        </div>
        <article class="small-12 text-center row" id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
            <?php if ( is_single() ) : ?>
                <header class="">
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="subheader entry-title"><?php the_title(); ?></h3>
                    </a>
                </header>
            <?php else : ?>
            <h4 class="subheader entry-title">
                <a style="color:#333;" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'View %s', 'narga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h4>
            <?php endif; // is_single() ?>
            <section class="entry-content<?php if ( has_post_format( 'video' )) {echo ' flex-video';}?>">
                <?php the_field('footer-post-excerpt') ?>
            </section>
        </article>
    </div>

