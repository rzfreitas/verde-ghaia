<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package risco-legal
 */

?>

<div class="container">
	<div class="row p-b-50">
		<div class="col-md-8 text-posts">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header p-t-25">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif; ?>
					<hr>
					<i class="fa fa-calendar">&nbsp;</i><span class="entry-date"><?php echo get_the_date(); ?></span>
				</header><!-- .entry-header -->

				<div class="entry-content">					
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue lendo<span class="screen-reader-text"> "%s"</span>', 'risco-legal' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'risco-legal' ),
						'after'  => '</div>',
					) );
					?>

					<div class="p-t-25 p-b-25 share-social">
						<h5 class="p-b-15">Compartilhe:</h5>
						<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank" title="Compartilhar no Facebook"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
						<a href="http://twitter.com/share?text=%20Sharing%20on%20Twitter&url=<?php the_permalink();?>&hashtags=consultoriaonline,certificaçãoISO,VerdeGhaia" target="_blank" title="Compartilhar no Tweeter"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
						<a href="http://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank" title="Compartilhar no Google+"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>" target="_blank" title="Compartilhar no LinkedIn"><i class="fa fa-linkedin"></i></a>
					</div>

					<div class="p-t-25 p-b-25">
						<hr>
						<?php // If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif; ?>
					</div>

				</div><!-- .entry-content -->

				<!-- <footer class="entry-footer">
					<?php risco_legal_entry_footer(); ?>
				</footer> -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
		<div class="col-md-4 p-t-70">
			<h2 class="text-center" id="blog-sidebar">E-Books Grátis</h2>
			<div class="blog-sidebar text-center">
				<div class="row ebooks">
					<div class="col-md-6 text-center">
						<img src="<?php bloginfo('template_directory'); ?>/assets/imagens/ebooks/e-book-iso-9001-2015.png" alt="Baixar Grátis Ebook ISO 9001:2015" title="Baixe Grátis o E-book da nova norma ISO 9001:2015" />
						<a class="btn-yellow-curso" href="http://verdeghaia.rds.land/ebook-iso9001-2015" target="_blank">BAIXAR E-BOOK</a>
					</div>
					<div class="col-md-6 text-center">
						<img src="<?php bloginfo('template_directory'); ?>/assets/imagens/ebooks/e-book-iso-14001-2015.png" alt="Baixar Grátis Ebook ISO 14001:2015" title="Baixe Grátis o E-book da nova norma ISO 14001:2015" />
						<a class="btn-yellow-curso" href="http://verdeghaia.rds.land/ebook-iso14001-2015" target="_blank">BAIXAR E-BOOK</a>
					</div>
				</div>
			</div><br>
			<h2 class="text-center" id="blog-sidebar">Saiba mais</h2>
			<div class="blog-sidebar">
				<?php
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
						<div class="row">
						<div class="col-md-6 img-circle"><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail'); ?> </a></div>
						<div class="col-md-6 text-left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong></a></div>
						</div><br>
				<?php }
				wp_reset_postdata(); ?>
			</div><br>
		</div>
	</div>
</div>