<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="grid-container">
  <div class="grid-x grid-margin-x">
    <div class="cell small-12 medium-8 large-8">
      <h1 class="entry-title"> <?php the_title(); ?><h1>
      <div class="entry-content"><?php the_content(); ?></div>
    </div>
    <div class="cell auto">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div> <!-- grid container -->








































  <?php

  // check if the flexible content field has rows of data
  if( have_rows('section') ): ?>

  <?     // loop through the rows of data
      while ( have_rows('section') ) : the_row();

          if( get_row_layout() == 'content' ): ?>

          <?php if( the_sub_field('columns') == 'one' ): ?>
            <section class="flex-content">
              <div class="grid-container">
                <div class="grid-x grid-margin-x">
                      	<div class="cell small-12"><h2 class="entry-title"><?php the_sub_field('heading'); ?></h2></div>
                        <div class="cell small-12"><?php the_sub_field('text_one'); ?></div>

                    </div>
              </div>
            </section>
          <?php endif; ?>
          <?php if( the_sub_field('columns') == 'two' ): ?>
            <section class="flex-content">
              <div class="grid-container">
                <div class="grid-x grid-margin-x">
                      	<div class="cell small-12"><h2 class="entry-title"><?php the_sub_field('heading'); ?></h2></div>
                        <div class="cell small-12 medium-6 large-6"><?php the_sub_field('text_one'); ?></div>
                        <div class="cell small-12 medium-6 large-6"><?php the_sub_field('text_two'); ?></div>
                    </div>
              </div>
            </section>
          <?php endif; ?>


        <?php  endif; endwhile;
  else :
      // no layouts found
    ?>   <?
endif;


      // Loop ends
    endwhile; else : ?>

<?php endif; wp_reset_query (); ?>
