<?php
/**
 * The template for displaying all pages.
 * Template Name: Submit a Quote
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	<div class="submit-quote">
        <h2>Submit a Quote</h2>
		<p>Sorry, you must be logged in to submit a quote!</p>
		<p><a href="https://quotes.academy.red/wp-login.php">Click here to login.</a></p>
        
    </div>


			<?php endwhile; ?>

		</main>
	</div>

<?php get_footer(); ?>