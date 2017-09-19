<!doctype html>
<!-- peytongregory.com -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--=== LINK TAGS ===-->
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/imgs/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--=== TITLE ===-->
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>

</head>
<?php flush(); ?>
<body <?php body_class(); ?>>
<div class="site-wrapper">




<header class="site-header">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-3">
        <img src="<?php echo THEME_DIR; ?>/imgs/jpr-logo.svg" />
      </div>
      <div class="cell small-5">
      <ul class="menu">
        <li>About The River</li>
        <li>Admissions</li>
        <li>JourneyPure Coaching</li>
      </ul>
      </div>
      <div class="cell small-3">
          <a href="6159135059" class="button expanded">Call Now: 615-913-5059</a>
      </div>
      <div class="cell small-1">
        <button type="button" class="menu-icon" data-toggle="jp-mobile-nav"><span></span></button>
      </div>
    </div>
  </div>
</header>

<div class="row">
  <div class="small-6 columns">
    <div class="off-canvas-wrapper">
      <div class="off-canvas-absolute position-right" id="jp-mobile-nav" data-off-canvas>
        <?php $args = array(
            'menu_class' => 'menu',
            'container' => 'ul',
            'menu' => 'Header Menu'
        ); wp_nav_menu( $args ); ?>
      </div>

    </div>
  </div>
</div>
