<?php get_header();?>



<!--SERVICES! Load Template by Custom Post Type -->
<?php if ( 'service' == get_post_type() ) {
get_template_part('includes/content-type-service');

// LOCATIONS! Load Template by Custom Post Type
 } elseif ( 'location' == get_post_type() ) {
			get_template_part('includes/content-type-flex');
// PROVIDERS! Load Template by Custom Post Type
 } elseif ( 'provider' == get_post_type() ) {
			get_template_part('includes/content-type-provider');
// CAREERS! Load Template by Custom Post Type
 } elseif ( 'career' == get_post_type() ) {
			get_template_part('includes/content-type-career');
// MISSION! Load Template by Custom Post Type
} elseif ( 'mission' == get_post_type() ) {
			get_template_part('includes/content-type-mission');
// EVERYTHING ELSE! Load Template by Custom Post Type -->
 } else {
			get_template_part('includes/content-type-flex', 'includes/content');
 } ?>


<?php get_footer();
