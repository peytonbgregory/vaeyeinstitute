<section id="flex-section-staff">
<div class="grid-container">
  <div class="grid-x grid-margin-x">
 <div class="cell small-12 medium-12 large-12">
      <h3><?php the_sub_field('heading'); ?></h3>
    </div>
    </div>
  </div>
  <div class="grid-container">
             <?php if( have_rows('staff_group_flex') ): ?>

                 <div class="grid-x grid-margin-x">
                   <?php while( have_rows('staff_group_flex') ): the_row(); ?>

                     <div class="cell small-4 medium-3 large-2">
                       <img src="<?php the_sub_field('staff_picture'); ?>" alt="<?php the_sub_field('staff_name'); ?>" class="thumbnail" />
                     </div>
                     <div class="cell small-8 medium-9 large-10">
                      <h4 class="subheader"><?php the_sub_field('staff_name'); ?></h4>
                      <p><?php the_sub_field('staff_about'); ?></p>
                    </div>

              <?php endwhile; ?>  </div>
          <?php else : endif; ?>  </div>
</section>
