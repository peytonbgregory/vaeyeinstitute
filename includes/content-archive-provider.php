

<section class="grid-container" id="archive-provider">
   	<div class="grid-x">
   	<div class="cell small-12">
		<h1><small>Our</small> Providers</h1>
		</div>
	</div>
    <div class="grid-x grid-margin-x small-up-2 medium-up-4 large-up-5">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
<div class="cell" id="prodiver">
      <div class="grid-x text-center" id="post-<?php the_ID(); ?>">
          <div class="cell auto">

            <div class="card">

                    <a href="<?php the_permalink(); ?>"><img src="
                    <?php if ( get_field( 'provider_headshot_suit' )) { 
								the_field( 'provider_headshot_suit' ); 
								}
						  elseif ( get_field( 'provider_headshot_coat' )) { 
							    the_field( 'provider_headshot_coat' ); 
						  		}	
						else {
							echo THEME_DIR.'/imgs/vei-default.png';
						} ?>" class="prodiver-img img-responsive" width="270px" /></a>

             
				<a class="button text-center" href="<?php the_permalink(); ?>" title="<?php the_title(); ?> <?php the_field('provider_title'); ?>"><div class="truncate h6"><?php the_title(); ?></div><div class="truncate h6 subheading"> <?php the_field('provider_title'); ?></div></a>
            
            
             
      
</div>


      </div><!-- grid-x -->
    </div>
</div>
<?php endwhile; else : get_template_part( 'no-results', 'index' ); endif; ?>
</div> <!-- grid-x -->
</section>