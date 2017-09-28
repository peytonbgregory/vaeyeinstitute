<?php // Provider Archive Page Template
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
?>

<section class="grid-container" id="thumbnail-grid">
    <div class="grid-x small-up-3 medium-up-4 large-up-5">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="cell">
    <div class="grid-container" id="thumbnail-grid">
      <div class="grid-x text-center" id="post-<?php the_ID(); ?>">
          <div class="cell auto">

            <div class="card">
                <?php if( $proheadsuit ) { ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?=$proheadsuit ?>" class="prodiver-img img-responsive" width="270px" /></a>
                <?php } ?>
              <div class="card-divider  text-center">
                <?php the_title(); ?> <?php the_field('provider_title'); ?>
              </div>
              <div class="card-section">
                <?php // Load Provider Specialties
                 if( $proservices ): ?>
                  <div class="entry-specialties">
                    <ul class="simple menu align-center">
                    <?php $post = $proservices; setup_postdata( $post );?>
                    <li><a href="<?php the_permalink(); ?>"><i class="fi-checkbox"></i> <?php the_title(); ?></a></li>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  </ul>
                  </div>
                <?php endif; // End Provider Specialties ?>

              </div>
              <a class="card-divider button primary text-center" href="<?php the_permalink(); ?>" title="<?php the_title(); ?> <?php the_field('provider_title'); ?>">Learn More <i class="fi-link"></i></a>
            </div>
</div>

          </div>
      </div><!-- grid-x -->
    </div>
  </div>
    <?php endwhile; else : get_template_part( 'no-results', 'index' ); endif; ?>
      </div><!-- grid-x -->
</section>
