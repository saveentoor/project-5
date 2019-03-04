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

	<?php if (is_user_logged_in() && current_user_can('edit_post')): ?>
	<form>

	 <?php else: ?>
        <p>Sorry, you must be logged in to submit a quote!</p>
        <a href="<?php echo esc_url(wp_login_url()) ?>">Click here to login.</a>
		<?php endif ?>
		
            <div class="author-of-quote">
            <label for="new-author">Author of Quote</label>
            <input class="each-field" type="text" name="new-author" id="new-author">
            </div>

            <div class="quote-info">
            <label for="quote-info">Quote</label>
            <textarea class="each-field" id="quote-info" name="quote-info" cols="40" rows="5"></textarea>
			</div>
			
            <div class="quote-source">
                <label for="quote-source">Where did you find this quote? (e.g. book name)</label>
                <input class="quote-source" type="text" name="new-quote-source" id="new-quote-source">
			</div>
			
            <div class="quote-source-url">
                <label for="new-quote-source-url">Provide the URL of the quote source, if available.</label>
				<input class="each-field" type="text" name="new-quote-source-url" id="new-quote-source-url">
			</div>
			
            <input id="submit-quote" type="submit-button" value="submit-quote">
	</form>
	
     


	<?php endwhile; ?>

		</main>
	</div>

<?php get_footer(); ?>