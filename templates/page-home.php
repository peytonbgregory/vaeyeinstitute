<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
<section id="pg-slideshow">
	<div class="row cell grid-padding-y">
		<?php echo do_shortcode("[metaslider id=68]"); ?>
	</div>
</section>

<section id="pg-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-4 cell">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-mobile-signal large"></i>
						</div>
						<div class="cell auto">
							<div class="intro-title">Mobile Services</div>
							<a href="#" class="intro-read text-right button radius">Read More...</a>
						</div>
					</div>
				</div>
			</div>
			<div class="small-4 cell">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-comment-quotes large"></i>
						</div>
						<div class="cell auto">
							<div class="intro-title">Patient Reviews</div>
							<a href="#" class="intro-read text-right button radius">Read More...</a>
						</div>
					</div>
				</div>
			</div>
			<div class="small-4 cell">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-upload-cloud large"></i>
						</div>
						<div class="cell auto">
							<div class="intro-title">Patient Portal</div>
							<a href="https://vaeye.followmyhealth.com/Login/Home/Index?authproviders=0&returnArea=PatientAccess#/default" target="_blank" title="Virginia Eye Patient Portal" class="intro-read text-right button radius">Read More...</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light-gray <? echo pg_class_loop(); ?>" id="index-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-margin-x align-strech">
			<div class="cell small-12 medium-8 large-9">
				<?php get_template_part('includes/content'); ?>
			</div>
			<div class="cell auto">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- grid-x -->
	</div><!-- grid-container -->
</section>

<?php get_footer();?>
