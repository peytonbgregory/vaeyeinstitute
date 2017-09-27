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



<p><button class="button lensx-btn" data-open="lensx"><img src="/wp-content/uploads/2015/03/lensex.jpg" alt = "VEI Lensx Video" class="th" /></button></p>
<div class="reveal" id="lensx" data-reveal>
  <h1>LensX</h1>
	<iframe id="fancybox-frame" name="fancybox-frame1425997055730" frameborder="0" hspace="0" scrolling="no" src="http://eyemag.in/iEPwai"></iframe>
	<p>For more information on LenSx call 804.287.2020</p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>







				<?php get_sidebar(); ?>
			</div>
		</div><!-- grid-x -->
	</div><!-- grid-container -->
</section>

<?php get_footer();?>
