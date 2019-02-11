<?php /* Template Name: Colunistas */


get_header();
?>

<section>
<div class="container p-t-100 p-b-25 text-center">
	<?php
	$image = get_field('img_banner');
	if( !empty($image) ): ?>
		<a href="<?php the_field('link_banner'); ?>" target="_blank"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
	<?php endif; ?>
</div>
</section>

<section>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-8 columns">
			<h1 class="title-colunistas">Nossos colunistas</h1> <br>
			<?php		
			    $tax = 'colunista'; // Your Taxonomy, change it if you not using wordpress native category
			    $terms = get_terms( $tax ,array( // get all taxonomy terms
			        'orderby'    => 'name',
			        'order'      => 'ASC',
			        'hide_empty' => true,
			    ));

			    //Loop throug each taxonomy terms, 
			    foreach ( $terms as $term ) {

			        //Query argument for post
			        $args = array( 
			            'post_type' => 'post', // Or Custom Post Type,
			            'posts_per_page' => -1,
			            'order' => 'DESC', 
			            'orderby' => 'date',
			            'taxonomy' => $tax,
			            'term' => $term->slug, // Query posts for each term based on term slug
			            'post_status' => 'publish',
			        );
			        $query = new WP_Query( $args ); 
			        $posts = $query->get_posts();  
			        echo '<div class="row row-colunista">
						<div class="col-md-3 text-center">
							
							<h3>'.$term->name.'</h3>
							<p>'.$term->description.'</p>
			        	</div>
			        	<div class="col-md-9 grid-colunistas"><ul>';
			        if ( $posts ) {
			            foreach ( $posts as $post ) {
							echo '<li><a href="'.$post->guid /**use get_permalink( $post->ID ) if you want the custom permalink**/.'">'.$post->post_title.'</a><li>';
			            }
			        }
			        echo '</ul></div></div>';
			    }
			?>		
		</div>
		<div class="col-xs-12 col-md-4">

			<?php get_template_part('search-form') ?>

			<div class="p-t-20 mais-lidas">
				<h2 class="text-center">Mais Lidos</h2>
				<div class="p-t-20">
					<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5'); ?>
					<ol>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
						<?php endwhile; endif; ?>
					</ol>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div> <!-- row -->
</div> 
</section>

<?php get_footer(); ?>