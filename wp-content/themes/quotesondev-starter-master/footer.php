<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				
				<nav id="site-navigation" class="main-navigation" role="navigation"> 
					
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> 
				</nav><!-- #site-navigation -->

				</div><!-- .site-info -->

				<p> Brought to you by <a href="http://www.redacademy.com/">RED Academy</a></p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
  