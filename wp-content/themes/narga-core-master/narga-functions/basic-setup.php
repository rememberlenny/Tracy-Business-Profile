<?php
/*  ------------------------------------
    :: Narga WordPress Framework Basic Setup
    ------------------------------------- */
if (!isset( $content_width))
    $content_width = 640;

    function narga_setup() {

# Add language supports. By default, this framework not include language files.
        load_theme_textdomain('narga', get_template_directory() . '/languages');

# Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(764, 342, true);

# Support Custom Background
        add_theme_support( 'custom-background' );

# Allows theme developers to add custom stylesheets to WordPress's TinyMCE visual editor. 
        add_editor_style( 'stylesheets/custom.css' );

# Add post formarts supports. http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat'));

# Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
        add_theme_support('menus');
        
# Register Navigation
        register_nav_menus(array(
                    'top-bar-l' => __('Left Top Bar', 'narga'),
                    'top-bar-r' => __('Right Top Bar', 'narga'),
                    'footer_navigation' => __('Footer Navigation', 'narga')
                    ));

# Enables post and comment RSS feed links to head
        add_theme_support( 'automatic-feed-links' );
    }
add_action('after_setup_theme', 'narga_setup');
?>