<?php
/**
* The default template for displaying content. Used for both single and index/archive/search.
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.2
*/
?>


    <div class="large-4 column text-center">
        
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
        <?php if ( is_single() ) : ?>
            <header class="">
                <h3 class="entry-title"><?php the_title(); ?></h3>
            </header>
        <?php else : ?>
        <h4 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'View %s', 'narga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h4>
        <?php endif; // is_single() ?>
        <section class="entry-content<?php if ( has_post_format( 'video' )) {echo ' flex-video';}?>">
            <?php the_field('footer-post-excerpt') ?>
        </section>
        <footer>
            <b>
                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'View %s', 'narga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                    Find out more
                </a>
            </b>
        </footer>
    </article>
    </div>

