<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  // FLEX CONTENT - Content Section ?>
<?php echo '<section class="location-content">'; ?>


  <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <?php
        $image = get_field('header_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
        echo '<div class="small-12 medium-12 large-12">';
        	 echo wp_get_attachment_image( $image, $size );
        echo '</div>';
        } ?>
        <div class=" cell small-12">
  <h1 class="entry-title"><?php the_title (); ?></h1>
        </div>
    <div class="cell small-12 medium-6">

      <div class="entry-content">
        <?php the_content();?>
      </div>
    </div>

  <div class=" cell small-12 medium-6">
    <? $location = get_field('map'); if( !empty($location) ): ?>
    <div class="acf-map">
    	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <?php endif; ?>
  </div>
</div>
</div>

<?php echo '</section>'; ?>
<?php echo '<section class="flex-content">';

          // check if the flexible content field has rows of data
          if( have_rows('flex_content') ):
               // loop through the rows of data
              while ( have_rows('flex_content') ) : the_row();
              // Load Flex Content Section
              if( get_row_layout() == 'content_section' ): get_template_part('includes/flex/section-content');
              // Load Flex Accordion Section
              elseif( get_row_layout() == 'accordion_section' ): get_template_part('includes/flex/section-accordion');
              // Load Flex Accordion Section
              elseif( get_row_layout() == 'gallery_section' ): get_template_part('includes/flex/section-gallery');
              // Load Flex Staff Content
              elseif( get_row_layout() == 'staff_section' ): get_template_part('includes/flex/section-staff');
             endif; endwhile;  else :
              // no layouts found
          endif; // Flex Layouts Ends

echo '</section>'; endwhile; else : endif; wp_reset_query (); // Loop Ends ?>
