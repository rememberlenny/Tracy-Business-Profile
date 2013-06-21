<?php
/**
 * Narga WordPress Framework Customizer
 *
 * Since NARGA v0.1
 *
 **/


/**
 * Narga's Theme Customization Class
 *
 * Since NARGA v0.5
 *
 **/

if ( class_exists( 'WP_Customize_Control' ) ) {
    # Adds textarea support to the theme customizer
    class NargaTextAreaControl extends WP_Customize_Control {
        public $type = 'textarea';
        public function __construct( $manager, $id, $args = array() ) {
            $this->statuses = array( '' => __( 'Default', 'narga' ) );
            parent::__construct( $manager, $id, $args );
        }

        public function render_content() {
            echo '<label>';
            echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
            echo '<textarea rows="5" style="width:100%;" ';
            $this->link();
            echo '>' . esc_textarea( $this->value() ) . '</textarea>';
            echo '</label>';
        }
    }

}
/**
 * modified dropdown-pages 
 * from wp-includes/class-wp-customize-control.php
 *
 * @since 1.0.0
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
class WP_Customize_Dropdown_Categories_Control extends WP_Customize_Control {
    public $type = 'dropdown-categories';	

    public function render_content() {
        $dropdown = wp_dropdown_categories( 
            array( 
                'name'             => '_customize-dropdown-categories-' . $this->id,
                'echo'             => 0,
                'hide_empty'       => false,
                'show_option_none' => '&mdash; ' . __('Select', 'reactor') . ' &mdash;',
                'hide_if_empty'    => false,
                'selected'         => $this->value(),
            )
        );

        $dropdown = str_replace('<select', '<select ' . $this->get_link(), $dropdown );

        printf( 
            '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
            $this->label,
            $dropdown
        );
    }
}
}
/**
 * Returns the options array for NARGA Framework
 *
 * @since NARGA 1.3.5
 */
function narga_options($name, $default = false) {
    $options = ( get_option( 'narga_options' ) ) ? get_option( 'narga_options' ) : null;
    // return the option if it exists
    if ( isset( $options[ $name ] ) ) {
        return apply_filters( 'narga_options_$name', $options[ $name ] );
    }
    // return default if nothing else
    return apply_filters( 'narga_options_$name', $default );
}

/**
 * Narga's Theme Customizer Settings
 *
 * Since NARGA v0.5
 *
 **/

add_action( 'customize_register', 'narga_customizer' );
function narga_customizer($wp_customize){

    # Orbit Slider as Featured Slider
    $wp_customize->add_section('narga_featured_categories', array(
        'title' => 'Orbit Slider',
        'priority' => 80,
        'description'    => __('Orbit Slider Configuration', 'narga'),
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('narga_options[featured_category]', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'manage_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Dropdown_Categories_Control( $wp_customize, 'narga_featured_category', array( 
        'label'    => __('Featured Category', 'narga'),
        'section'  => 'narga_featured_categories',
        'type'     => 'dropdown-categories',
        'settings' => 'narga_options[featured_category]',
        'priority' => 1,
    ) ) );

    $wp_customize->add_setting( 'narga_options[number_slide]', array(
        'default'        => '5',
        'type'           => 'option',
        'capability'     => 'manage_options',
        'transport'      => 'postMessage',
    ) );

    $wp_customize->add_control( 'narga_options[number_slide]', array(
        'label'   => __('Number Slide', 'narga'),
        'section' => 'narga_featured_categories',
        'type'     => 'text',
        'priority' => 2,
    ) );

    # Orbit Slide Indicator
    $wp_customize->add_setting('narga_options[slide_indicator]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ) );

    $wp_customize->add_control('narga_options[slide_indicator]', array(
        'settings'  => 'narga_options[slide_indicator]',
        'label'     => __('Slide Indicator', 'narga'),
        'section'   => 'narga_featured_categories',
        'type'      => 'checkbox',
        'transport' => 'postMessage',
        'priority'  => 3,
    ) );

    # Top Bar Title
    $wp_customize->add_setting( 'narga_options[topbar_title]', array(
        'default'        => get_bloginfo('name'),
        'type'           => 'option',
        'capability'     => 'manage_options',
        'transport'      => 'postMessage',
    ) );

    $wp_customize->add_control( 'narga_options[topbar_title]', array(
        'label'   => __('Top Bar Title', 'narga'),
        'section' => 'nav',
        'type'     => 'text',
        'priority' => 1,
    ) );

    $wp_customize->add_setting( 'narga_options[topbar_title_url]', array(
        'default'        => home_url(),
        'type'           => 'option',
        'capability'     => 'manage_options',
    ) );

    $wp_customize->add_control( 'narga_options[topbar_title_url]', array(
        'label'   => __('Top Bar URL', 'narga'),
        'section' => 'nav',
        'type'     => 'text',
        'priority' => 2,
    ) );

    # Sticky Top Bar Option
    $wp_customize->add_setting('narga_options[sticky_topbar]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ) );

    $wp_customize->add_control('narga_options[sticky_topbar]', array(
        'settings'  => 'narga_options[sticky_topbar]',
        'label'     => __('Sticky Top Bar', 'narga'),
        'section'   => 'nav',
        'type'      => 'checkbox',
        'transport' => 'postMessage',
        'priority'  => 3,
    ) );

    # Contain Top Bar Layout Width 
    $wp_customize->add_setting('narga_options[contain2grid]', array(
        'capability'    => 'manage_options',
        'type'          => 'option',
    ) );

    $wp_customize->add_control('narga_options[contain2grid]', array(
        'settings' => 'narga_options[contain2grid]',
        'label'    => __('Contain Top Bar Layout Width', 'narga'),
        'section'  => 'nav',
        'type'     => 'checkbox',
        'transport' => 'postMessage',
        'priority' => 4,
    ) );

    # Top Bar Search Form
    $wp_customize->add_setting('narga_options[search_form]', array(
        'capability'     => 'manage_options',
        'type'       => 'option',
    ) );

    $wp_customize->add_control('narga_options[search_form]', array(
        'type' => 'checkbox',
        'label' => __('Top Bar Search Form', 'narga'),
        'section' => 'nav',
        'priority' => 5,
    ) );

    # Breadcrumb Control
    $wp_customize->add_setting('narga_options[breadcrumb]', array(
        'capability'     => 'manage_options',
        'type'       => 'option',
    ) );

    $wp_customize->add_control('narga_options[breadcrumb]', array(
        'type' => 'checkbox',
        'label' => 'Display Breadcrumb',
        'section' => 'nav',
        'transport' => 'postMessage',
        'priority' => 6,
    ) );

    # Integration Services
    $wp_customize->add_section('narga_integration', array(
        'title' => 'Integration Services',
        'priority' => 100,
        'description'    => __('Integration Services', 'narga'),
        'transport' => 'postMessage',
    ));

    # Google Analytics
    $wp_customize->add_setting( 'narga_options[google_analytics]', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'manage_options',
    ) );

    $wp_customize->add_control( 'narga_options[google_analytics]', array(
        'label'   => __('Google Analytics ID', 'narga'),
        'section' => 'narga_integration',
        'type'     => 'text',
        'priority' => 1,
    ) );

    # Google Site Verification
    $wp_customize->add_setting( 'narga_options[google_site]', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'manage_options',
    ) );

    $wp_customize->add_control( 'narga_options[google_site]', array(
        'label'   => __('Google Site Verification', 'narga'),
        'section' => 'narga_integration',
        'type'     => 'text',
        'priority' => 2,
    ) );

    # Bing Site Verification
    $wp_customize->add_setting( 'narga_options[bing_site]', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'manage_options',
    ) );

    $wp_customize->add_control( 'narga_options[bing_site]', array(
        'label'   => __('Bing Site Verification', 'narga'),
        'section' => 'narga_integration',
        'type'     => 'text',
        'priority' => 3,
    ) );

    # Yahoo Site Verification
    $wp_customize->add_setting( 'narga_options[yahoo_site]', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'manage_options',
    ) );

    $wp_customize->add_control( 'narga_options[yahoo_site]', array(
        'label'   => __('Yahoo Site Verification', 'narga'),
        'section' => 'narga_integration',
        'type'     => 'text',
        'priority' => 3,
    ) );

    # Alexa Site Verification
    $wp_customize->add_setting( 'narga_options[alexa_site]', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'manage_options',
    ) );

    $wp_customize->add_control( 'narga_options[alexa_site]', array(
        'label'   => __('Alexa Site Verification', 'narga'),
        'section' => 'narga_integration',
        'type'     => 'text',
        'priority' => 4,
    ) );

}
// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="sidebar-section large-12 small-12 columns">',
        'after_widget' => '</div></article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<article id="%1$s" class="large-3 columns widget hide-for-small %2$s"><div class="footer-section">',
        'after_widget' => '</div></article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

// Secondary Menu is Widgetable
if (!function_exists('narga_footer_navigation')) :  
    function narga_footer_navigation() {
        $menu = wp_nav_menu(array(
            'echo' => false,
            'items_wrap' => '<dl class="%2$s">%3$s</dl>',
            'theme_location' => 'footer_navigation',
            'container' => false,
            'menu_class' => 'sub-nav right'
        )); 
        $search  = array('<ul', '</ul>', '<li', '</li>', 'current-menu-item');
        $replace = array('<dl', '</dl>', '<dd', '</dd>', 'active');
        echo str_replace($search, $replace, $menu);
    }
endif;

?>
