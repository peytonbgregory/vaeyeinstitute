<!-- <form action="/" method="get" class="pg-search-wrapper cell shrink" id="search-form">
  <div class="grid-x">
    <div class="cell auto">
    <input class="search-box" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search <?php echo bloginfo(); ?>" />
</div>
  <div class="cell shrink">
    <input class="button"type="image" alt="Search" />
    <!--  <input type="hidden" value="post" name="post_type" id="post_type" /> -->
<!--</div>
</div>
</form> -->










<form action="/" method="get" class="pg-search-wrapper" id="search-form">
<div class="input-group">
  <input class="search-box input-group-field" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search <?php echo bloginfo(); ?>" />
  <div class="input-group-button">
    <input type="submit" class="button" value="Search">
  </div>
</div>
</form>












