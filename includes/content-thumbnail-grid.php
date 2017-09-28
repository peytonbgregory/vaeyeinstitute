<?php /* Grid Layout with hover effects for archive and category pages */ ?>
<section class="grid-container" id="thumbnail-grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="grid-x grid-margin-x" id="post-<?php the_ID(); ?>">
         <?php if ( has_post_thumbnail()) { ?>
            <div class="cell shrink">
              <?php the_post_thumbnail('thumbnail', array('class'=>'img-responsive img-thumbnail')); ?>
            </div>
          <?php } ?>
          <div class="cell auto">
                  <header class="entry-header">
                  	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                  </header>
                  <div class="entry-content">
                      <?php the_excerpt(); ?>
                  </div>
          </div>
      </div><!-- grid-x -->
    <?php endwhile; else : get_template_part( 'no-results', 'index' ); endif; ?>
</section>
