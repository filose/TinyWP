<?php get_header(); ?>

  <div class="page-body">

    <?php if (have_posts()): while(have_posts()): the_post(); ?>



    <!-- close loop -->
    <?php endwhile; else: ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

  <!-- close .page-body -->
  </div>

<?php get_footer(); ?>