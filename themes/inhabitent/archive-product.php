<?php
	/**
	 * The template for displaying archive pages.
	 *
	 * @package Red_Starter_Theme
	 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php if ( have_posts() ) : ?>
<!-- List of the Taxonomy terms -->
	<div class="container">
		<header class="page-header archive-product">
				<h1>Shop Stuff</h1>
        <?php $terms = get_terms( 'product-type' ); ?>
        <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
	        <section class="product-info container">
	            <div class="product-type-container">
								<div class="product-wrapper">
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
				<div class="product-item">

					<div class="product-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</div>
					<div class="product-meta">
						<?php the_title( sprintf( '<h2 class="product-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<?php echo CFS()->get( 'product_price' ); ?>
					</div>
				</div>

				<?php endwhile; ?>
			</div>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
