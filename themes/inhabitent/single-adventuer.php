<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( has_post_thumbnail() ) : ?>
		<?php
	    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1200,800 ), false, '' );
		?>

		<section class="adventure-hero" style="background-image:url(<?php echo $src[0]; ?>)"></section>

		<?php endif; ?>
		<div class=" container">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="anchor"></div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="adventure">
					<h2 class="adventure-header"><?php the_title(); ?></h2>
					<h3><?php the_author(); ?></h3>
					<?php echo CFS()->get( 'adventure_content' );?>

					<button type="button" class="btn btn-black"><i class="fa fa-facebook"></i>Like</button>
					<button type="button" class="btn btn-black"><i class="fa fa-twitter"></i>Tweet</button>
					<button type="button" class="btn btn-black"><i class="fa fa-pinterest"></i>Pin</button>

				</div><!-- .entry-content -->
			</article><!-- #post -->
		<?php endwhile; // End of the loop. ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
