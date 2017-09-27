<?php
$proheadsuit = get_field( "provider_headshot_suit" );
$proheatcoat = get_field( "provider_headshot_coat" );
$promodalvideo = get_field( "provider_modal_video" );
$protitles = get_field( "provider_title" );
$proservices = get_field( "provider_services" );
$prolocations = get_field( "provider_locations" );
$promissions = get_field( "provider_missions" );
$proabout = get_field( "provider_about" );
$proedu = get_field( "provider_education" );
$proassoc = get_field( "professional_associations" );
$proquote = get_field( "patient_quote" );
$proquotename = get_field( "patient_name" );

// Page Starts
echo '<section class="prodiver">';
while ( have_posts() ) : the_post(); ?>

  <div class="grid-container">
      <div class="grid-x grid-margin-x align-strech">

        <div class="cell auto">
          <h1 class="entry-title"><?php the_title(); ?> <?php the_field('provider_title'); ?></h1>
          <div class="entry-content"><?=$proabout ?></div>


          <div class="grid-container">
              <div class="grid-x grid-margin-x align-strech">
                <div class="small-6">
            <?php // Load Provider Specialties
             if( $proservices ): ?>
              <div class="entry-specialties">
                <h3>Specialties</h3>
                <ul class="simple menu">
                <?php $post = $proservices; setup_postdata( $post );?>
                <li><a href="<?php the_permalink(); ?>"><i class="fi-checkbox"></i> <?php the_title(); ?></a></li>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              </ul>
              </div>
            <?php endif; ?>
          </div>
          <div class="small-6">
          <?php if( $promodalvideo ) { // Watch Video Button
            echo '<div><button class="button" data-open="providerVideo">Watch Doctor Video <i class="fi-play"></i></button></div>';
          } ?>
        </div>
      </div>
    </div>
  </div>

        <?php if( $proheadsuit ): ?>
        <div class="cell small-4">
        	<img src="<?=$proheadsuit ?>" class="img-provider" title="Virginia Eye Institute Provider - <?php the_title(); ?> <?php the_field('provider_title'); ?>" alt="Virginia Eye Institute Provider - <?php the_title(); ?> <?php the_field('provider_title'); ?>" />
        </div>
        <?php endif; ?>

    </div>
  </div>



  <div class="grid-container">
      <div class="grid-x grid-margin-x align-strech">
        <div class="cell small-8">


  <ul class="accordion" data-responsive-accordion-tabs="accordion medium-tabs large-accordion">
  <?php if( $proedu ) { ?>
    <li class="accordion-item" data-accordion-item>
      <a href="#" class="accordion-title">Education</a>
      <div class="accordion-content" data-tab-content>
      <?=$proedu ?>
      </div>
    </li>
  <? }  if( $proassoc ) { ?>
    <li class="accordion-item" data-accordion-item>
      <a href="#" class="accordion-title">Professional Associations</a>
      <div class="accordion-content" data-tab-content>
      <?=$proassoc ?>
      </div>
    </li>
  <? } ?>
  </ul>

      </div>
      <div class="small-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php if( $proquote ) { ?>
  <div class="grid-container">
      <div class="grid-x grid-margin-x grid-margin-y align-strech">
        <div class="cell auto">
          <div class="patient-testimonial">
            <?=$proquote ?>
          </div>
          <div class="patient-name text-right">
            <?=$proquotename ?>
          </div>
        </div>
      </div>
    </div>
<?php } ?>

<?php endwhile; // end of the loop.
echo '</section>'; // Page Ends ?>

<?php if( $promodalvideo ) { // HIDDEN! Popup Modal for Provider Video ?>
<div class="reveal" id="providerVideo" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
  <div class="embed-container">
  	<?=$promodalvideo; ?>
  </div>
  <h5><?php the_title(); ?> <?php if( $protitle ) { echo $protitle; } else {} ?></h5>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } else { echo 'Provider Video Not Available';} ?>
