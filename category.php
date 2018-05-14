<?php get_header(); ?>

<div class="container">
	<section class="row">
		<div class="col-md-8 innerp">
			<?php if (have_posts()) : ?>
				<h2 class="single-title-cat"><?php printf( __( '%s' ), single_cat_title( '', false ) ); ?></h2>
			<?php while (have_posts()) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) { ?>
				<div id="catRow" class="row">
					<div class="col-md-3">
						<div class="img-area">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
					</div>
					<div class="col-md-9">
						<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<a href="<?php echo the_permalink(); ?>">continue reading</a>
					</div>
				</div>
			<?php } else { ?>
				<div id="catRow" class="row">
					<div class="col-md-12">
						<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<a href="<?php echo the_permalink(); ?>">continue reading</a>
					</div>
				</div>
			<?php } ?>
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
