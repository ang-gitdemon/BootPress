<?php get_header(); ?>

<div class="container">
  <section class="row">
    <div id="post-content clearfix" class="col-md-8 innerp">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <?php
            get_template_part( 'templates/loop', 'content' );
          ?>

        <?php endwhile; ?>
        <?php else : ?>

        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php get_search_form(); ?>

      <?php endif; ?>
      <?php wp_reset_query(); ?>

    </div>
    <?php get_sidebar(); ?>
  </section>
</div>

<?php get_footer(); ?>
