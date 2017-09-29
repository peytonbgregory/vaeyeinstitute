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
		<div class="grid-x small-up-1 medium-up-3 large-up-3">
			<div class="cell">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-mobile-signal large"></i>
						</div>
						<div class="cell auto">
							<div class="intro-title">Mobile Services</div>
								<a href="#" class="intro-read text-right button">Read More...</a>
						</div>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-comment-quotes large"></i>
						</div>
						<div class="cell auto">
							<div class="intro-title">Patient Reviews</div>
							<a href="#" class="intro-read text-right button">Read More...</a>
						</div>
					</div>
				</div>
			</div>
			<div class="cell">
				<div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink">
							<i class="fi-upload-cloud large"></i>
						</div>
						<div class="cell auto">
							<div class="intro-title">Patient Portal</div>
							<a href="https://vaeye.followmyhealth.com/Login/Home/Index?authproviders=0&returnArea=PatientAccess#/default" target="_blank" title="Virginia Eye Patient Portal" class="intro-read text-right button">Read More...</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light-gray <? echo pg_class_loop(); ?>" id="index-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-margin-x align-middle">
			<div class="cell small-12 medium-8 large-8">
				<?php get_template_part('includes/content'); ?>
			</div></div>
			<div class="cell auto">


				<!-- <div class="grid-container">
					<div class="grid-x grid-margin-x align-middle">
						<div class="cell shrink h3 subheader">
							LenSx
						</div>
						<div class="cell auto">
						<a href="/laser-assisted-cataract-surgery-lensx/">Click here</a> more information on LenSx or call <a href="8042872020">804.287.2020</a>
						</div>

<a class="lensx-btn small-12 cell" data-open="lensx"><img src="/wp-content/uploads/2015/03/lensex.jpg" alt = "VEI Lensx Video" class="th" /></a>
</div>
</div>
<div class="reveal" id="lensx" data-reveal>
	<div class="grid-container">
		<div class="grid-x grid-margin-x align-middle">
			<div class="cell shrink h3 subheader">
				LenSx
			</div>
			<div class="cell auto text-center">
			<a href="/laser-assisted-cataract-surgery-lensx/">Click here</a> more information on LenSx or call <a href="8042872020">804.287.2020</a>
			</div>
		</div>
	</div>
	<iframe id="fancybox-frame" name="fancybox-frame1425997055730" frameborder="0" hspace="0" scrolling="no" src="http://eyemag.in/iEPwai"></iframe>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->







				<?php get_sidebar(); ?>
			</div>
		</div><!-- grid-x -->
	</div><!-- grid-container -->
</section>

<?php get_footer();
