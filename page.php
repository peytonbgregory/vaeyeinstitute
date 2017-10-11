<?php
get_header(); // Load Header
echo '<div class="grid-container">';
	echo '<div class="grid-x grid-margin-x">';
		echo '<div class="cell small-12 medium-8">';




			get_template_part('includes/content'); // Loads Default Title and Content
			get_template_part('includes/content-type-flex'); // Loads Customized Flex Content
		echo '</div>';
		echo '<div class="cell small-12 medium-4">';
if (is_page('careers')) :
			echo '<div class="callout career-widget page-php-sidebar">';
  				echo '<h3><small>Available</small> Positions</h3>';
				
					$args = array( 'post_type' => 'career', 'posts_per_page' => 5 );
					$loop = new WP_Query( $args ); 
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<h3 class="truncate"> <a href="<?php the_permalink();?>"class="button expanded hollow"><?php the_title(); ?> <small> View Position</small></a></h3>
				<?php endwhile;
				echo '<a class="button expanded secondary large" href="/career/">View all Available Positions</a>';
		echo '</div>';	
endif;
get_template_part('sidebar'); // Loads sidebar widgets
echo '</div>';
			
			
		echo '<div class="cell small-12 medium-12">';
		get_template_part('includes/parts/updated');  // This page was last updated...





		echo '</div>'; // Cell
	echo '</div>'; // Grid X
echo '</div>'; // Grid Container
get_footer(); // Load Footer
