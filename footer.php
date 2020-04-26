<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">


				<!-- <div class="logo-footer"></div> -->

				<a href="<?php echo home_url( '/' ); ?>">
				<img class="logo-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/images/DNLogo_white.svg"  alt="Dayton Neighborhoods logo" />
				</a>

				<?php
					wp_nav_menu();
				?>

				<div class="section-inner">


					<div class="footer-credits">

						<!--copyright--------->
						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://secure.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- end copyright --------->

					</div><!-- .footer-credits -->

					<p class="privacy-policy"><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a></p>


				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
