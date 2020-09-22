<?php
// package CH Blog
?>

  <div class="col-md-4">
    <div class="card">
      <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-image')); ?>
      <div class="card-body text-center">
        <span><?php the_author(); ?> | <?php the_views(); ?></span>
        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      </div>
    </div>
  </div>