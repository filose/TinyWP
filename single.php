<?php get_header(); ?>

  <div class="single-body">

    <?php if (have_posts()): while(have_posts()): the_post(); ?>



    <!-- close loop -->
    <?php endwhile; else: ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

  <!-- close .single-body -->
  </div>

<?php get_footer(); ?>