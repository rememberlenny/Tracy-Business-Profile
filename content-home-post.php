<?php
/**
* The default template for displaying content. Used for both single and index/archive/search.
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.2
*/
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
        <header>
            <div class="row">
                <div class="large-3 column">
                    <p style="margin-top: .3em;"><?php the_time('F d Y') ?></p>
                </div>
                <div class="large-9 column">
                    <?php if ( is_single() ) : ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php else : ?>
                    <h4 class="entry-title">
                        <a style="font-size:.8em" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'View %s', 'narga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php endif; // is_single() ?>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="large-9 large-offset-3 column">
                <section style="font-size:.9em" class="entry-content<?php if ( has_post_format( 'video' )) {echo ' flex-video';}?>">
                    <?php the_excerpt(); ?> 
                </section>
            </div>
        </div>
    </article>

