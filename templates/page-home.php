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
		<div class="grid-x text-center">
			<div class="small-4 cell">
				<div class="left-wrap"><i class="fi-eye large"></i></div>
				<div class="right-wrap">
					<div class="intro-title">Eye Animations</div>
					<a class="intro-read text-right">Read More...</a>
				</div>
			</div>
			<div class="small-4 cell">
				<div class="left-wrap"><i class="fi-eye large"></i></div>
				<div class="right-wrap">
					<div class="intro-title">Eye Animations</div>
					<a class="intro-read text-right">Read More...</a>
				</div>
			</div>
			<div class="small-4 cell">
				<div class="left-wrap"><i class="fi-eye large"></i></div>
				<div class="right-wrap">
					<div class="intro-title">Eye Animations</div>
					<a class="intro-read text-right">Read More...</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>
