<section id="flex-section-gallery">
<div class="grid-container">
  <div class="grid-x grid-margin-x align-strech">

    <?php // Gallery Options

    // vars
    $galleryopt = get_sub_field('gallery_options');


    // check
    if( $galleryopt && in_array('go1', $galleryopt) ): ?>
    <div class="cell small-12 medium-12">
      <h2><?php the_sub_field('heading'); ?></h2>
    </div>
    <?php endif; ?>






    <?php if( get_sub_field('gallery_options') == 'go2' ): ?>
      <div class="cell small-12 medium-12">
        <h2><?php the_sub_field('description'); ?></h2>
      </div>
    <?php endif; ?>


    <?php if( get_sub_field('gallery_options') == 'go3' ): ?>

    <?php endif; ?>

    <?php

    $images = get_field('gallery');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)

    if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li>
                	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</div>
</div>
<section>
