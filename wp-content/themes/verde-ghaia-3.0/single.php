<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package risco-legal
 */

get_header();
?>

	<div id="primary" class="content-area m-t-100">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			setPostViews(get_the_ID());
			
			get_template_part( 'template-parts/content', get_post_type() ); ?>

			<!-- the_post_navigation(); -->

		<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
