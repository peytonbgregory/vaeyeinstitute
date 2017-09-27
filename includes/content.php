<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
echo '<div class="post-wrapper">';
if ( is_front_page() && is_home() ) {
// Default homepage
} elseif ( is_front_page()){
//Static homepage
} elseif ( is_home()){
//Blog page
} else {
 echo '<h1 class="entry-title">' . the_title() . '</h1>';
 }
echo '<div class="entry-content">' . the_content() . '</div></div>';
endwhile; else : endif; wp_reset_query (); ?>
