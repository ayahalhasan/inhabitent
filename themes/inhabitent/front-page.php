<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<!-- this is for the Home img logo -->

		<main id="main" class="site-main" role="main">
      <section class="home-hero">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-full.svg" alt="logo" />
      </section>

			<!-- this is for the Shop Container  -->
			<h1>Shop Stuff</h1>

	<section class="product-info container">
      <div class="product-type-wrapper">

        <?php $product_types = get_terms(array( 'taxonomy' => 'product-type') );?>

				<!-- this is for the icons -->
			  <?php foreach ( $product_types as $product_type) : ?>
					<div class="product-icon">
						<?php echo $product_type->name; ?>
						<img src="<?php echo(get_template_directory_uri());?>/images/product-type-icons/<?php echo $product_type->slug?>.svg" alt="icon" />
							<p>
								<?php echo $product_type->description; ?>
							</p>
							<a href=" <?php echo get_term_link($product_type, 'product-type') ?> "><?php echo $product_type->name; ?> &nbsp;Stuff</a>

					</div>
          <?php endforeach; ?>
      </div>
	</section>

<!-- This is for the Journal -->

  <h2>Inhabitent Journal</h2>

  <div class="front-page-posts">
  <ul class="journal-post container">
  	<?php
  	$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
		  'order'=> 'DESC',
	 		'orderby' => 'date' ); // returns an array of posts

  	$postslist = get_posts( $args );
  	foreach ( $postslist as $post ) :
  	setup_postdata( $post ); ?>

		<?php /* Content from your array of post results goes here */ ?>


  	<li >
  		<div class="journal-picture">
  		<?php the_post_thumbnail( 'large' ); ?>
  		</div>
  			<div class="information-journal">

  			<span>
  			<?php ('inhabitent_posted_on') ; ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
  			</span>
  			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  			<a class="moretag" href="<?php the_permalink(); ?>">Read Entry</a>
  			</div>
  	</li>
  <?php
  endforeach;
  wp_reset_postdata();
  ?>
  </ul>

  </div>

	<!-- Latest Adventure -->

	<section class="adventures">
     <h1>Latest Adventures</h1>
		 <?php
			   $args = array( 'post_type' => 'adventuer', 'order' => 'ASC' );
			   $adventures = new WP_Query( $args ); // instantiate our object
			?>
			<?php if ( $adventures->have_posts() ) : ?>
			   <?php while ( $adventures->have_posts() ) : $adventures->the_post(); ?>

					 <div class="adventure-wrapper">
					 	<?php the_post_thumbnail( 'large' ); ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<a href="<?php the_permalink(); ?>" >Read More</a>
					 </div>

			   <?php endwhile; ?>
			   <?php wp_reset_postdata(); ?>
			<?php else : ?>
			      <h2>Nothing found!</h2>
			<?php endif; ?>
    <div class="clearfix more-adventures">
    <a href ="<?php echo get_post_type_archive_link( 'adventure' ); ?>"> More Adventures </a></div>

</section>

</main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>
