<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<div class="container">
							<div class="row">
								<div class="social-icons col float-left">
								<ul>
										<li><a href=""><img src="https://wordsearch-ny.dev/flat-iron-house/wp-content/uploads/2020/01/twitter.svg" /</a></li>
										<li><a href=""><img src="https://wordsearch-ny.dev/flat-iron-house/wp-content/uploads/2020/01/facebook.svg" /</a></li>
										<li><a href=""><img src="https://wordsearch-ny.dev/flat-iron-house/wp-content/uploads/2020/01/instagram.svg" /</a></li>
										<li><a href=""><img src="https://wordsearch-ny.dev/flat-iron-house/wp-content/uploads/2020/01/map-pin.svg" /></a></li>
									</ul>
								</div>
								<div class="footer-logo col d-flex justify-content-center">
									<img src="https://wordsearch-ny.dev/flat-iron-house/wp-content/uploads/2020/01/white-footer-logo.svg" />
								</div>
								<div class="footer-links col d-flex justify-content-end">
									<ul>
										<li><a href="">Team</a></li>
										<li><a href="">Legal</a></li>
										<li><a href="">Cookies</a></li>
										<li><a href="">Privacy Policy</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

