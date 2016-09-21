<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>

<!-- #contents -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="information-site">
		<div class="contact">
		<h3>Contact Info</h3>
		<div class="footer-contact">
		<p>
			<i class="fa fa-envelope"></i>
			<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
		</p>
		<p>
			<i class="fa fa-phone"></i>
			<a href="tel:5553434567891">778-456-7891</a>
		</p>
		</div>
		<p>
			<i class="fa fa-facebook-square" aria-hidden="true">
	      </i>
	      <i class="fa fa-twitter-square" aria-hidden="true">
	      </i>
	      <i class="fa fa-google-plus-square" aria-hidden="true">
	      </i>
		</p>

		</div>

	<div class="contact">
		<h3>Buisness Hours</h3>
			<p>Monday-Friday: 9am to 5pm</p>
			<p>Saturday: 10am to 2pm</p>
			<p>Sunday: Closed</p>
	</div>

		<!-- contact info -->
		<div class="contact">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="logo" />
			</a>
		</div>
		</div> <!-- .information-site -->
		<div class="contact">
			<p class="copyright">Copyright © 2016 Inhabitent</p>
		</div>

<!------------------------------------------------>

			</div> <!-- .information-site closing tage -->
			</footer> <!-- #colophon -->
		</div> <!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
