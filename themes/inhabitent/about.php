<?php

/**
 * The template for displaying About Page.
 *
 * @package RED_Starter_Theme

 * Template Name: About Template
 */
 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="main-site">
 		<div class="hero-image">
 			<h2><?php the_title(); ?></h2>
 		</div>

    <div class="about-page"> 

 		   <?php while ( have_posts() ) : the_post(); ?>
 			     <?php echo CFS()->get( 'our_story' ); ?>
 			       <?php echo CFS()->get( 'our_team' ); ?>

 		        <?php endwhile;  ?>
 	  </div>
 </div>

 </div>
 		</main><!-- #main -->
 	</div><!-- #primary -->


 <?php get_footer(); ?>
