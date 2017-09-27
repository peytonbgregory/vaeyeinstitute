<?php
/*
Template Name: Search Page
*/
get_header();?>
	<section class="bg-light-gray <? echo pg_class_loop(); ?>" id="index-wrapper">
		<div class="grid-container">
			<div class="grid-x grid-margin-y align-strech">
				<div class="cell small-12 medium-8 large-9">
          <h1>Looking for Something?</h1>
					<?php get_search_form(); ?>
				</div>
				<div class="cell auto">
					<?php get_sidebar(); ?>
				</div>
			</div><!-- grid-x -->
		</div><!-- grid-container -->
	</section>
<?php get_footer();
