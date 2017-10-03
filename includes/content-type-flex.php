
<section class="flex-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="cell small-12"><?php // pgthrottle_breadcrumbs(); ?></div>
        <div class="cell small-12 medium-8 large-8">

        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-content"> <?php the_content(); ?></div>



      </div>
      <div class="cell auto">
        <?php // get_sidebar(); ?>
      </div>

      </div>
    </div>


<?php // FLEX CONTENT - Content Section ?>

          <?php

          // check if the flexible content field has rows of data
          if( have_rows('flex_content') ):

               // loop through the rows of data
              while ( have_rows('flex_content') ) : the_row();
              // Load Flex Content Section
              if( get_row_layout() == 'content_section_full' ): get_template_part('includes/flex/section-content-full');
              // Load 2 Column Flex Content
              elseif( get_row_layout() == 'content_section_col' ): get_template_part('includes/flex/section-content-col');
              // Load Flex Accordion Section
              elseif( get_row_layout() == 'accordion_section' ): get_template_part('includes/flex/section-accordion');
              // Load Flex Staff Content
              elseif( get_row_layout() == 'staff_section' ): get_template_part('includes/flex/section-staff');

             endif; endwhile;  else :

              // no layouts found

          endif; // Flex Layouts Ends?>

  <?php endwhile; else : endif; wp_reset_query (); // Loop Ends ?>
</section>
