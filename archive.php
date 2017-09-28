<?php get_header();?>



<!--SERVICES! Load Template by Custom Post Type -->
<?php if ( 'service' == get_post_type() ) {

	get_template_part('includes/content','thumbnail','grid');

// LOCATIONS! Load Template by Custom Post Type
 } elseif ( 'location' == get_post_type() ) {
				get_template_part('includes/content-thumbnail-grid');
// PROVIDERS! Load Template by Custom Post Type
 } elseif ( 'provider' == get_post_type() ) {
				get_template_part('includes/content-archive-provider');
// CAREERS! Load Template by Custom Post Type
 } elseif ( 'career' == get_post_type() ) {
				get_template_part('includes/content-thumbnail-grid');
// MISSION! Load Template by Custom Post Type
} elseif ( 'mission' == get_post_type() ) {
				get_template_part('includes/content-thumbnail-grid');
// EVERYTHING ELSE! Load Template by Custom Post Type -->
 } else {
			get_template_part('includes/content');
 } ?>


<?php get_footer();
