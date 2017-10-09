<?php
$proheadsuit = get_field( "provider_headshot_suit" );
$proheatcoat = get_field( "provider_headshot_coat" );
$promodalvideo = get_field( "provider_modal_video" );
$protitles = get_field( "provider_title" );
$proservices = get_field( "provider_services" );
$prolocations = get_field( "provider_locations" );
$promissions = get_field( "provider_missions" );
$proabout = get_field( "provider_about" );
$progen = get_field( "provider_general" );
$proedu = get_field( "provider_education" );
$proassoc = get_field( "professional_associations" );
$proquote = get_field( "patient_quote" );
$proquotename = get_field( "patient_name" );
$prorelations = get_field( "provider_relationship" );

// Page Starts
echo '<section class="prodiver top-sec">';
while ( have_posts() ) : the_post(); ?>

  <div class="grid-container">
      <div class="grid-x grid-margin-x align-strech">

        <div class="cell auto">
          <h1 class="entry-title"><?php the_title(); ?> <small><?php the_field('provider_title'); ?></small></h1>
          <div class="entry-content"><?=$proabout ?></div>


          <div class="grid-container">
              <div class="grid-x grid-margin-x align-strech">
                <div class="small-6">






<?php if( $prorelations ): ?>
  <div class="entry-specialties">
  <h3>Specialties</h3>
    <ul class="vertical menu text-left">
      <?php foreach( $prorelations as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <li class="<?php echo get_post_type(); ?>"><a href="<?php the_permalink(); ?>"><i class="fi-checkbox"></i> <?php the_title(); ?></a></li>
      <?php endforeach; ?>
      </ul>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>




          </div>
          <div class="small-6">
          <?php if( $promodalvideo ) { // Watch Video Button
            echo '<div><button class="button large" data-open="providerVideo">Watch Doctor Video <i class="fi-play"></i></button></div>';
          } else { echo '<div><button class="button large disabled">Provider Video Coming Soon <i class="fi-info"></i></button></div>';
          } ?>
        </div>
      </div>
    </div>
  </div>


        <div class="cell small-4">
        	<img src="<?php if ( get_field( 'provider_headshot_coat' )) : the_field( 'provider_headshot_coat' ); else : the_field( 'provider_headshot_suit' ); endif; ?>" class="img-provider" title="Virginia Eye Institute Provider - <?php the_title(); ?> <?php the_field('provider_title'); ?>" alt="Virginia Eye Institute Provider - <?php the_title(); ?> <?php the_field('provider_title'); ?>" />
        </div>


    </div>
  </div>
</section><!-- provider top-sec -->
<section class="provider bottom-sec">


  <div class="grid-container">
      <div class="grid-x grid-padding-y grid-margin-x align-strech">
        <div class="cell small-8">


  <ul class="accordion" data-responsive-accordion-tabs="accordion medium-tabs primary large-tabs">
    <?php if( $progen ) { ?>
      <li class="accordion-item is-active" data-accordion-item>
        <a href="#" class="accordion-title"><h6 class="subheader"><i class="fi-info"></i> General Info</h6></a>
        <div class="accordion-content" data-tab-content>
        <?=$progen ?>
        </div>
      </li>
  <?php } if( $proedu ) { ?>
    <li class="accordion-item" data-accordion-item>
      <a href="#" class="accordion-title"><h6 class="subheader"><i class="fi-book"></i> Education</h6></a>
      <div class="accordion-content" data-tab-content>
      <?=$proedu ?>
      </div>
    </li>
  <? }  if( $proassoc ) { ?>
    <li class="accordion-item" data-accordion-item>
      <a href="#" class="accordion-title"><h6 class="subheader"><i class="fi-torsos-all"></i> Professional Associations</h6></a>
      <div class="accordion-content" data-tab-content>
      <?=$proassoc ?>
      </div>
    </li>
  <? } ?>
  </ul>

      </div>
      <div class="cell small-4">



<div class="lensx-wrapper <?php if( $prorelations ): foreach( $prorelations as $post): setup_postdata($post); the_title(); echo ' '; endforeach; wp_reset_postdata(); endif; ?>">
<?php get_template_part('includes/parts/widget-lensx'); ?>
</div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_template_part('includes/parts/updated'); ?>
  <?php if( $proquote ) { ?>
  <div class="grid-container">
      <div class="grid-x grid-margin-x grid-margin-y align-strech">
        <div class="cell auto">
          <blockquote>
          <div class="patient-testimonial">
            <?=$proquote ?>
          </div>
          <div class="patient-name text-right">
            <?=$proquotename ?>
          </div>
        </blockquote>
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

  <div class="grid-container provider-modal">
    <div class="grid-x align-middle">
      <div class="auto cell"><h5><?php the_title(); ?> <small><?php the_field('provider_title'); ?></small></h5></div>
      <div class="shrink cell">
        <a href="https://www.youtube.com/user/VirginiaEyeInstitute" target="_blank" rel="nofollow"> Watch More! <i class="fi-social-youtube"></i></a>
      </div>
    </div>

  </div>

<button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>
