<?php get_header(); ?>

<!-- slider section -->

<!-- container section -->
<div class="container">
  <div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post();  
    get_template_part( 'content', 'single' );
    endwhile; endif; ?>
  </div>
  <div class="comment px-4">
    <?php if(comments_open()){
      comments_template();
    } ?>
  </div>
</div>


<?php get_footer(); ?>