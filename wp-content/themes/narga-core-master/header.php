<?php
/**
* The Header for our theme.
*
* Displays all of the head section and everything up till:
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.0
*/
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if gt IE 8]>
<!--> <html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--  iOs Web App Home Screen and Favicon Icons -->
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/narga-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/narga-icon-retina.png" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/narga-icon.png" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- ZURB Foundation Top Bar -->

    <!-- Header: include logo, top ads ... -->
    <?php narga_header(); ?>    
    <?php narga_topbar(); ?>
    
    <?php global $current_user;
          get_currentuserinfo();
          $atriangleUsername = $current_user->user_login;
          $atriangleFirst =  $current_user->user_firstname;
          $atriangleOutputName = ($atriangleFirst) ? $atriangleFirst : $atriangleUsername;
    ?>

    <?php $urlLogin = site_url('/login/', 'http'); ?>
    <?php echo '<div id="topSpecialNav" class="text-right ab-right right special-top-right-nav">'; ?> 
    <?php echo '<div class="d-inline" style="font-size: 11px;">'; ?> 
    <?php   if ( is_user_logged_in() ) {
            echo 'Welcome, '. $atriangleOutputName .'!';
            } else {
                echo '<a href="'. $urlLogin .'">Login</a>';
            }?>
    <?php echo '</div>'; ?>
    <?php echo '<div class="d-inline">'; ?>
    <?php do_action('icl_language_selector'); ?>
    <?php echo '</div>'; ?>
    <?php echo '</div>'; ?>
    <!-- Main content area -->

    <div id="main-container" class="large-12 ">
        <div id="hero-intro" class="large-12 height-bg-image"></div>
        <section id="main" class="row pt1em" role="grid">
