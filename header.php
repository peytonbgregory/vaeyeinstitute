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
    <div class="grid-x grid-margin-x align-middle">
      <div class="cell small-4">
        <img src="<?php echo THEME_DIR; ?>/imgs/virginia-eye-logo.svg" />
      </div>
      <div class="cell auto text-right">
          <button type="button" class="menu-icon" data-toggle="pg-mobile-nav"><span></span></button>
            <?php get_template_part('includes/social'); ?>
              <a href="#" class="button radius phone-number">Call Now: 804-287-4200</a>

          </div>
    </div>
  </div>
</header>
<?php
echo'<nav class="site-navigation"><div class="grid-container align-middle">
<div class="grid-x grid-margin-x">';
		wp_nav_menu(array(
      // 'container'       => 'div',
      // 'container_class' => 'menu-{menu slug}-container',
      // 'container_id'    => ,
      // 'menu_id'         => ,
      // 'echo'            => true,
      // 'before'          => ,
      // 'after'           => ,
      // 'link_before'     => ,
      // 'link_after'      => ,
      // 'depth'           => 0,
	    	'container' => false,
	    	'menu' => __( 'Header Menu', 'pgthrottle' ),
	    	'menu_class' => 'dropdown menu',
	    	'theme_location' => 'header-menu',
	    	'items_wrap'      => '<ul id="%1$s" class="%2$s cell auto" data-dropdown-menu>%3$s</ul>',
	    	//Recommend setting this to false, but if you need a fallback...
	    	'fallback_cb' => 'f6_topbar_menu_fallback',
	       'walker' => new F6_TOPBAR_MENU_WALKER(),
		));


  get_search_form();
echo'</div></div></nav>'; ?>
