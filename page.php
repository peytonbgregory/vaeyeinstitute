<?php
get_header(); // Load Header
echo '<div class="grid-container">';
	echo '<div class="grid-x grid-margin-x">';
		echo '<div class="cell small-12 medium-8">';
			get_template_part('includes/content'); // Loads Default Title and Content
			get_template_part('includes/content-type-flex'); // Loads Customized Flex Content
		echo '</div>';
		echo '<div class="cell small-12 medium-4">';
			get_template_part('sidebar'); // Loads sidebar widgets
		echo '</div>';
		echo '<div class="cell small-12 medium-12">';
		get_template_part('includes/parts/updated');  // This page was last updated...
		echo '</div>';
	echo '</div>';
echo '</div>';
get_footer(); // Load Footer
