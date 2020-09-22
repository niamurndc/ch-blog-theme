<?php get_header(); ?>

<!-- slider section -->
<div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
  <div class="carousel-inner">
    <?php $i = 1; if(have_posts()) : while(have_posts()) : the_post(); 
      if($i == 1):?>
        <div class="carousel-item active">
          <?php the_post_thumbnail(); ?>
          <div class="carousel-caption d-md-block slider-back">
            <h1><?php the_title(); ?></h1>
            <p><?php the_author(); ?>|<?php the_views(); ?></p>
          </div>
        </div>
      <?php else: ?>
        <div class="carousel-item">
          <?php the_post_thumbnail() ?>
          <div class="carousel-caption d-md-block slider-back">
            <h1><?php the_title(); ?></h1>
            <p><?php the_author(); ?> | <?php the_views(); ?></p>
          </div>
        </div>
      <?php endif; $i++; endwhile; endif; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- container section -->
<div class="container">
  <h2>Latest Posts</h2>
  <div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post();  
    get_template_part( 'content' );
    endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>