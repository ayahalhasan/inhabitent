<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      	<header class="entry-header">
      		<?php if ( has_post_thumbnail() ) : ?>
      			<?php the_post_thumbnail( 'large' ); ?>
      		<?php endif; ?>


      		<div class="entry-meta">
      			<!-- <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?> -->
      		</div><!-- .entry-meta -->
      	</header><!-- .entry-header -->

      	<div class="entry-content">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php echo '<h3>'.CFS()->get( 'product_price' ).'</h3>'; ?>      		<?php the_content(); ?>

          <div class="social-buttons">
							<span><i class="fa fa-facebook" aria-hidden="true"></i><p>Like</p></span>
							<span><i class="fa fa-twitter" aria-hidden="true"></i><p>Tweet</p></span>
							<span><i class="fa fa-pinterest" aria-hidden="true"></i><p>Pin</p></span>
					</div>

      	</div><!-- .entry-content -->

      </article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

  <?php get_footer(); ?>
