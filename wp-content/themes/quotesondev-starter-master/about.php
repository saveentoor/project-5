<?php
/**
 * The template for displaying all pages.

 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	  
	<h2>About</h2>
	<div class="about-info">
		<p>Quotes on Dev is a project site for the RED Academy Web Developer Professional program. It’s used to experiment with Ajax, WP API, jQuery, and other cool things. 🙂</p>
</div>

<div class="quotes-on-design">
<p>This site is heavily inspired by Chris Coyier’s <a href="http://quotesondesign.com/" target="_blank" rel="noopener">Quotes on Design</a></p>
</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
