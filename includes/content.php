<?php
echo '<section class="default-content"><div class="grid-container"><div class="grid-x grid-margin-x">';
 if ( have_posts() ) : while ( have_posts() ) : the_post();

echo '<div class=" cell post-wrapper">';
if ( is_front_page() && is_home() ) {

	echo '<div class="entry-content">';
		echo the_content();
	echo '</div>';

 } elseif ( is_front_page()) {

	echo '<div class="entry-content">';
 		echo the_content();
 	echo '</div>';

 } elseif ( is_home()) {

	echo '<div class="entry-content">';
     echo the_content();
   echo '</div>';

 } else {

	echo '<h1 class="entry-title">';
		echo the_title();
	echo '</h1><div class="entry-content">';
		echo the_content();
	echo '</div>'; //post wrapper
 } endwhile; else :

echo '</div>';

endif;
echo '</div></div></section>';
wp_reset_query (); ?>
