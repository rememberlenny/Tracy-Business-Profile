<?php
if (!function_exists('atri_about_navigation')) :  
    function atri_about_navigation() {
        $menu = wp_nav_menu(array(
            'echo' => false,
            'items_wrap' => '<dl class="%2$s">%3$s</dl>',
            'theme_location' => 'about-navigation',
            'container' => false,
            'menu_class' => 'sub-nav left'
        )); 
        $search  = array('<ul', '</ul>', '<li', '</li>', 'current-menu-item');
        $replace = array('<dl', '</dl>', '<dd', '</dd>', 'active');
        echo str_replace($search, $replace, $menu);
    }
endif;
?>