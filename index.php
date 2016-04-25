<?php get_header(); ?>

<div id="indexPage" class="container">
    <section class="row">
        <div id="post-content clearfix" class="col-md-8 innerp">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

                <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <div style="clear:both"></div>
                  <a href="<?php echo the_permalink(); ?>">continue reading</a>
                  <hr>

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
