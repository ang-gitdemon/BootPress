<?php get_header(); ?>

<div id="indexPage" class="container">
    <section class="row">
        <div id="post-content clearfix" class="col-md-8 innerp">
          
            <?php
            while ( have_posts() ) : the_post();
              get_template_part( 'templates/content', 'single' );  
            endwhile;
            ?>

        </div>

        <?php get_sidebar(); ?>
        
  </section>
</div>

<?php get_footer(); ?>
