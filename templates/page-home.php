<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
<section id="pg-slideshow">
	<div class="row cell grid-padding-y hide-for-small-only">
		<?php echo do_shortcode("[metaslider id=68]"); ?>
	</div>
</section>

<section id="pg-intro">
	<div class="grid-container small-only-text-center">
		<div class="grid-x small-up-1 medium-up-3 large-up-3">
			<div class="cell vert-div">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-mobile-signal large"></i>
						</div>
						<div class="cell auto">
							<div class="h5 subheader">Mobile Services</div>
								<a href="/patient-info/mobile-pre-check/" class="intro-read text-right primary clear button button-animate draw">Sign up for text alerts! <i class="fi fi-link"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="cell vert-div">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-comment-quotes large"></i>
						</div>
						<div class="cell auto">
							<div class="h5 subheader">Patient Reviews</div>
							<a href="/reviews/" class="intro-read button-animate draw text-right clear primary button">Read Patient Reviews! <i class="fi fi-link"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="cell vert-div">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-upload-cloud large"></i>
						</div>
						<div class="cell auto">
							<div class="h5 subheader">Patient Portal</div>
							<a href="https://vaeye.followmyhealth.com/Login/Home/Index?authproviders=0&returnArea=PatientAccess#/default" target="_blank" title="Virginia Eye Patient Portal" class="intro-read text-right button primary button-animate draw clear">Go to the Patient Portal! <i class="fi fi-link"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light-gray <? echo pg_class_loop(); ?>" id="index-wrapper">
	<div class="grid-container ">
		<div class="grid-x grid-margin-x align-middle">
			<div class="cell small-12 medium-8 large-8 small-only-text-center">
				<?php get_template_part('includes/content'); ?>
			</div>
			<div class="cell auto">



<?php get_template_part('includes/parts/widget-lensx'); ?>






				<?php get_sidebar(); ?>
			</div>
		</div><!-- grid-x -->
	</div><!-- grid-container -->
</section>

<?php get_footer();
