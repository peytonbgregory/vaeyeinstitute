<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

echo '<div class="post-wrapper">';
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
	echo '</div><div class="entry-meta callout small primary"><small>This page was last updated';
		echo the_date();
	echo '</small></div>';
	echo '</div>'; //post wrapper
 } endwhile; else :



endif; wp_reset_query (); ?>
