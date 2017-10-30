<? get_header(); ?>

  <main class="container-fluid">
    <div class="container">
      <section class="row">
        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'templates/content', 'single' );  

        endwhile;
        ?>
      </section>
    </div>
  </main>

<? get_footer(); ?>

