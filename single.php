<?php get_header(); ?>

<div id="singlePage" class="container">
	<section id="main-content" class="row">
		<div class="col-md-8 innerp">
				<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

            	<h2 class="singleTitlePage"><?php the_title(); ?></h2>
				<div class="imgArea"><?php the_post_thumbnail('full'); ?></div>
            	<p><?php the_content(); ?></p>

				<?php endwhile; ?>
                <?php else : ?>
                <h2 class="center">Not Found</h2>
                <p class="center">Sorry, but you are looking for something that isn't here.</p>
                <?php get_search_form(); ?>
                <?php endif; wp_reset_query();?>
        </div>

        	<?php get_sidebar(); ?>

	</section>
 </div>

<?php get_footer(); ?>
