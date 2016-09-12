<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seltzerUnderscores
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		

		<!-- Add Footer Nav -->
			<div class="footer-div">
				
				<nav class="footer-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu') ); ?>
				</nav><!-- #site-navigation -->
			</div>

			<div class="social-div">
				<nav class="social-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'social-footer', 'menu_id' => 'social-footer-menu') ); ?>
				</nav><!-- #site-navigation -->
			</div>
			
		<div class="site-info">
			<!-- site logo -->
			<div class="site-logo-footer">
						<?php if ( has_custom_logo() ) {
								the_custom_logo();
						 } else { ?>
								<a href="/" id="nav-text">SFS</a><!-- Add SFS Logo -->
						<?php } ?>
					</a>
			</div>
			<div class="footer-info-right">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'seltzerunderscores' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'seltzerunderscores' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Designed by %2$s' , 'seltzerunderscores' ), 'seltzerunderscores', '<a href="http://www.joelklaus.com" rel="designer">JK Creative</a>' ); ?>
			</div>
			
		</div><!-- .site-info -->

		
			

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
