<?php
	/**
	 * The template for displaying archive pages.
	 *
	 * @package Red_Starter_Theme
	 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header archive-product">

        <?php $terms = get_terms( 'product-type' ); ?>
        <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
	        <section class="product-info container">
	          <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	            <div class="product-type-container">
								<div class="product-type-wrapper">
	              <?php foreach ( $terms as $term ) :?>
	                <p>
	                  <a href="<?php home_url(); ?>/inhabitent/product-type/<?php echo $term->slug; ?>" class="">
	                    <?php echo $term->name ?> <!-- stuff -->
	                  </a>
	                </p>
	                  <?php endforeach ?>
								</div>
	            </div>
	        </section>
	        <?php endif; ?>
	    </header><!-- .page-header -->
	<div class="product-grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content', 'product' );
				?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
 </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
