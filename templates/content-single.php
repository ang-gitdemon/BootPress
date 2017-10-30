<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header row">
    <div class="col-md-12">
  		<?php
  			if ( is_single() ) :
  				the_title( '<h1 class="entry-title">', '<span class="go-back"><a href="'. home_url('blog') .'"><i class="fa fa-caret-left" aria-hidden="true"></i> Go Back</a></span></h1>' );
  			else :
  				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
  			endif;
  		?>
    </div>
	</header><!-- .entry-header -->

  <div class="row">

    <div class="col-lg-8">
      <div class="row">
        <div class="col-lg-12">
          <div class="image-section">
            <? the_post_thumbnail(); ?>

            <time>
              <? the_date(); ?>
            </time>

            <ul class="outer-social-shopping">
              <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<? echo the_permalink(); ?>" class="shopping-icon fb-share"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/share/?url=<? echo the_permalink(); ?>" class="shopping-icon tw-share"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<? echo the_permalink(); ?>" class="shopping-icon li-share"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://plus.google.com/share?url=<? echo the_permalink(); ?>" class="shopping-icon gp-share"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="mailto:?subject=Check out Cat Litter Box End Table – Antique White on ProPet Distributors&body=<? echo the_permalink(); ?>" class="shopping-icon email-share"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
            </ul>

          </div>
        </div>

        <div class="entry-content col-lg-12">
      		<?php
      			/* translators: %s: Name of current post */
      			the_content( sprintf(
      				__( 'Continue reading %s', 'twentyfifteen' ),
      				the_title( '<span class="screen-reader-text">', '</span>', false )
      			) );

      			wp_link_pages( array(
      				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
      				'after'       => '</div>',
      				'link_before' => '<span>',
      				'link_after'  => '</span>',
      				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
      				'separator'   => '<span class="screen-reader-text">, </span>',
      			) );
      		?>
      	</div><!-- .entry-content -->
      </div>

      <?
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>
    </div>

    <? get_sidebar(); ?>

  </div>

</article><!-- #post-## -->
