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

<!-- Start ref code for Good Games Studio -->
<!-- 87a29acbc8fb5f20188445a909d307cc -->
<!-- End ref code -->

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
    <style>
        .page-template-templatesabout-page-php #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-yellow.png");}
.page-template-templatesabout-page-php #hero-intro{background:url("<?php the_field('about_header', 'option'); ?>") center center repeat-x;}
.page-template-templateschina-page-php #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-yellow.png");}
.page-template-templateschina-page-php #hero-intro{background:url("<?php the_field('china_page_header', 'option'); ?>") top center repeat-x;}
.page-template-templatescontact-page-php #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-purple.png");}
.page-template-templatescontact-page-php #hero-intro{background:url("<?php the_field('contact_header', 'option'); ?>") top center repeat-x;}
.page-template-templatesblog-page-php #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-blue.png");}
.blog #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-blue.png");}
.archive #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-blue.png");}
.blog #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-blue.png");}
.page-template-templatesblog-archive-page-php #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-blue.png");}
.page-template-templatesblog-page-php #hero-intro{background:url("<?php the_field('blog_header', 'option'); ?>") top center repeat-x;}
.blog #hero-intro{background:url("<?php the_field('blog_header', 'option'); ?>") top center repeat-x;}
.archive #hero-intro{background:url("<?php the_field('blog_header', 'option'); ?>") top center repeat-x;}
.page-template-templatesblog-archive-page-php #hero-intro{background:url("<?php the_field('blog_header', 'option'); ?>") top center repeat-x;}
.archive #hero-intro{background:url("<?php the_field('blog_header', 'option'); ?>") top center repeat-x;}
.single-post #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-blue.png");}
.single-post #hero-intro{background:url("<?php the_field('home_header', 'option'); ?>") top center repeat-x;}
.page-template-templatesdeveloper-page-php #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-brown.png");}
.page-template-templatesdeveloper-page-php #hero-intro{background:url("<?php the_field('developer_header', 'option'); ?>") top center repeat-x;}
.page-template-templatesadvertiser-page-php #hero-intro-prehead{background:url("<?php bloginfo('url') ?>/wp-content/uploads/2013/06/pattern-orange.png");}
.page-template-templatesadvertiser-page-php #hero-intro{background:url("<?php the_field('advertiser_header', 'option'); ?>") bottom center repeat-x;} 
.page-template-templatesservices-page-php #hero-intro-prehead{background:none}
.page-template-templatesservices-page-php #hero-intro{background:url("<?php the_field('services_header', 'option'); ?>") top center no-repeat;} 
.background-foot{background:url('<?php bloginfo('url') ?>/wp-content/uploads/2013/07/tweed.png');}
.background-foot-dk{background:url('<?php bloginfo('url') ?>/wp-content/uploads/2013/07/tweed-dk.png');} 
.home #site-header.background-image { background: url("<?php bloginfo('url')?>/wp-content/uploads/2013/06/slide31.jpg") center center; box-shadow: inset 0px 40px 660px 30px #000; }
   

 </style>
</head>
<body <?php body_class(); ?>



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

    <?php // $urlLogin = site_url('/login/', 'http'); ?>
    <?php // echo '<div id="topSpecialNav" class="text-right ab-right right ">'; ?> 
    <?php // echo '<a href="https://mrp.adsyolo.com/iamp/adsyolo/iamp/adsyolo/signup" class="button round small">AMP sign-up</a>    '; ?>
    <?php // echo '<div class="d-inline">'; ?>
    <?php // echo '<div class="d-inline">'; ?>
    <?php // do_action('icl_language_selector'); ?>
    <?php // echo '</div>'; ?>
    <?php // echo '</div>'; ?>
    <!-- Main content area -->
    
    <div id="main-container" class="large-12 ">
        <div id="hero-intro-container" class="">
            <div id="hero-intro-prehead" class="large-12 d-inline"></div>
            <div id="hero-intro" class="large-12 height-bg-image"></div>
        </div>
        <section id="main" class="row pt1em" role="grid">
