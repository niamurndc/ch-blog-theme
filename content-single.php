<div class="col-md-12">
  <div class="card">
    <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-image-single')); ?>
    <div class="card-body">
      <?php the_category(' '); ?>
      <h3><?php the_title(); ?></h3>
      <span><?php the_author(); ?> | <?php the_views(); ?></span>
      <hr>
      <div class="card-text text-justify">
        <?php the_content(); ?>
      </div>
      <hr>
    </div>
  </div>
</div>