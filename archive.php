<?php get_header();?>




<?php if ( 'service' == get_post_type() ) {

	get_template_part('includes/content-thumbnail-grid');

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
				// Mission page header text
				echo '<div class="grid-container"><div class="grid-x grid-margin-x"><div class="cell small-12">';
				echo '<div class="callout primary">';
	            echo '<div class="grid-x grid-margin-x">';
				echo '<div class="cell small-12 medium-6"><h1 class="site-title">Outreach Missions</h1><p>At the Virginia Eye Institute, we believe in sharing our knowledge, expertise and time with those who are in need in our community. Below, you’ll find some of the outreach programs we participate in.</p></div>';
				echo '<div class="cell small-12 medium-6"><div class="responsive-embed widescreen"><iframe width="560" height="315" src="https://www.youtube.com/embed/3qsvFrZpsHQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div></div>';
				
	
	            echo '</div></div></div></div></div>';
				// Mission page load archive
				get_template_part('includes/content-thumbnail-grid');
				
// EVERYTHING ELSE! Load Template by Custom Post Type -->
 } else {
			get_template_part('includes/content');
 } ?>


<?php get_footer();
