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
                    <h4 class="subheader entry-title mb0em">
                        <a style="font-size:.8em" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'View %s', 'narga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h4>
        </header>
                <section style="font-size:.9em" class="entry-content<?php if ( has_post_format( 'video' )) {echo ' flex-video';}?>">
                    <?php the_excerpt(); ?> 
                </section>
    </article>

