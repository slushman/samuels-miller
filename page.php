<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Samuels Miller
 */

get_header();

	?><div class="sidebar"><?php

		wp_nav_menu(array(
			'theme_location' => 'primary',
			'walker' => new Selective_Walker(), // with ID
		));

	?></div>
	<div id="primary" class="content-area sidebar-content">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) {

					comments_template();

				}

			endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>