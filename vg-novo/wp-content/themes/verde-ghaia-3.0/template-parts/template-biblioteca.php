<?php /* Template Name: Biblioteca VG */ ?>

<?php get_header(); ?>

<div class="p-relative">
	<img class="full-width" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/biblioteca/biblioteca-vg.png" alt="Biblioteca digital Verde Ghaia" />
	<div class="center-absolute">
		<div class="box-azul text-center">
			<h1>Biblioteca</h1>
		</div>
	</div>
</div>

<div class="bg-cinza">
	<div class="container p-t-50 p-b-50">
		<div class="row">
			<div class="col-md-2">
				<h3 class="filtrar-b">Filtrar</h3>
				<ul class="custom_cat_list p-t-25">
					<?php $categories = get_categories('taxonomy=tipo&post_type=biblioteca'); ?>
						<?php foreach ($categories as $category) : ?>
							<li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a></li>
					<?php endforeach; ?>
				<ul>
			</div>

			<div class="col-md-10 text-center">
				<div class="p-b-25 text-right">
					<form class="search" action="<?php echo home_url( '/' ); ?>">
						<input type="search" name="s" placeholder="BUSCAR">
						<input type="hidden" name="post_type" value="biblioteca">
					</form>
				</div>
				<?php
				//* The Query
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$lib_query = new WP_Query( array (
					'post_type' => 'biblioteca',
					'posts_per_page' => '16',
					'paged' => $paged
				) );

				//* The Loop
				if ( $lib_query->have_posts() ) { 
					$i = 0; ?>
				<?php while ( $lib_query->have_posts() ): $lib_query->the_post(); 
					
				if($i % 3 == 0) { ?>
				<div class="row d-flex">
				<?php } ?>

					<div class="col-md-4 col-xs-12 biblioteca-card">
						<?php the_post_thumbnail('small'); ?><br>
						<h2><?php the_title(); ?></h2>
						<a class="btn-gest" href="<?php echo the_field('link_biblioteca'); ?>">Baixar E-book Grátis </a>
					</div>

				<?php $i++; if($i != 0 && $i % 3 == 0) { ?>
				</div><!--/.row-->
				<div class="clearfix"></div>
				<?php } ?>

				<?php endwhile; ?>

				</div> <?php	//* Restore original Post Data
				wp_reset_postdata();
				} ?>

				<div class="col-md-12 p-t-50 p-b-70 text-left">
					<?php custom_pagination($lib_query->max_num_pages,"",$paged); ?>
				</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>