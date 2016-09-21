<?php

/**
 * The template for displaying About Page.
 *
 * @package RED_Starter_Theme

 * Template Name: About
 */
 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="main-site" role="main">
 		<div class="hero-image">
 			<h2><?php the_title(); ?></h2>
 		</div>

 <div class="about-page container">

 		<?php while ( have_posts() ) : the_post(); ?>

 			<h3><?php echo CFS()->get( 'our_story_title' ); ?></h3>
 			<p><?php echo CFS()->get( 'our_story_paragraph' ); ?></p>
 			<h3><?php echo CFS()->get( 'our_team_title' ); ?></h3>
 			<p><?php echo CFS()->get( 'our_team_paragraph' ); ?></p>


 		<?php endwhile;  ?>
 	</div>
 </div>

 </div>
 		</main><!-- #main -->
 	</div><!-- #primary -->


 <?php get_footer(); ?>
