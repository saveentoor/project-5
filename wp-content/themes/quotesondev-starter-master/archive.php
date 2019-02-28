<?php
/**
 * The template for displaying all pages.
 * Template Name: Archives
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

<h2>dfd</h2>
<?php

        $the_query = new WP_Query(array(
            'post_type'      => 'post',
            'orderby'        => 'title',
            'order'          => 'ASC',
            'posts_per_page' => -1,
        )); ?>
        <div class="all-authors">
            <?php  /* Start the Loop */ ?>
            <?php while ($the_query->have_posts()): $the_query->the_post();  ?>
            <?php the_title(sprintf('<span class="each-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></span>'); ?>
            <?php endwhile;
        wp_reset_postdata(); ?>
		

	


	
	
