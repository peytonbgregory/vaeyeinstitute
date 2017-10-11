<?php /* Grid Layout with hover effects for archive and category pages */ ?>
<section class="grid-container" id="thumbnail-grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     
      <div class="grid-x grid-margin-x" id="post-<?php the_ID(); ?>">
         <?php if ( has_post_thumbnail()) { ?>
            <div class="cell shrink">
              <?php the_post_thumbnail('gallery-thumbnail', array('class'=>'thumbnail')); ?>
            </div>
          <?php } ?>
          <div class="cell auto">
                  <header class="entry-header">
                  	<h3 class="truncate subheader"><?php the_title(); ?></h3>
  
                  </header>
                  <div class="entry-content">
                      <?php the_excerpt(); ?>
					  <a class="button secondary" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Learn more <i class="fi fi-info"></i></a>
                  </div>
          </div>
      </div><!-- grid-x -->
    <?php endwhile; else : get_template_part( 'no-results', 'index' ); endif; ?>
</section>
