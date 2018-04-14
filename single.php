<?php get_header(); ?>

  <main class="container-fluid">
    <div class="container">
      <section class="row">
        <?php if (have_posts()) : ?>
        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'templates/content', 'single' );  

        endwhile;
        else : ?>

        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php get_search_form(); ?>

      <?php endif; ?>
      <?php wp_reset_query(); ?>
      </section>
    </div>
  </main>

<?php get_footer(); ?>

