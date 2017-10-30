<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div id="pagePage" class="container-fluid">
      <div class="container">
        <div class="col-md-8 page-content">

          <div class="row page-content-header">
            <div class="col-md-12">
              <? if (get_field( 'subtitle' )): ?>
                <h2><?php the_field( 'subtitle' ); ?></h2>
              <? endif; ?>
              <div class="orange-line"></div>
              <? if (get_field( 'additional_subhead' )): ?>
                <h3><?php the_field( 'additional_subhead' ); ?></h3>
              <? endif; ?>
            </div>
          </div>
          <div class="row page-content-body">
            <div class="col-md-12">
              <? the_content(); ?>
            </div>
          </div>
        </div>
        <? get_sidebar(); ?>
      </div>
		</div>

	<?php endwhile; ?>
<?php else : ?>

<div class="container pageNotFound">
	<div class="col-md-8">
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	</div>
	<?php get_sidebar(); ?>
</div>


<?php endif; wp_reset_query();?>


<?php get_footer(); ?>
