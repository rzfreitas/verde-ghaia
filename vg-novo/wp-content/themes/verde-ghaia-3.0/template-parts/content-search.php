<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package risco-legal
 */

?>

<div class="container p-t-15 p-b-15">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-3 text-center img-circle">
				<?php the_post_thumbnail('medium'); ?>
			</div>
			<div class="col-md-9">
				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?><br>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php
						risco_legal_posted_on();
						risco_legal_posted_by();
						?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->

				<footer class="entry-footer">
					<?php risco_legal_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div> <!-- row -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
