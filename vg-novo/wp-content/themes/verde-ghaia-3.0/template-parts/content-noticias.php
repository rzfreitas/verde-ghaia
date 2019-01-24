<section>
<div class="title-blog-vg p-t-50">
	<h2>Blog VG</h2>
</div>
<div class="container m-t-50 noticias-artigos">
 	<div class="m-t-50">
        <?php 
        $i = 0;
        $aRecentPosts = new WP_Query("showposts=4");
        while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>

        <?php if($i % 2 == 0) { ?>
		<div class="row d-flex">
		<?php } ?>

        <article class="col-12 col-md-6 blog-box">
			<div class="row">
				<div class="col-12 col-md-3 text-center img-noticia">
					<span class="color-rand"></span>
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('', array('class' => 'img-responsive', 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></a>
				</div>
				<div class="col-12 col-md-9 border-left">
					<div class="titulo-noticia">
						<h2><strong><a href="<?php the_permalink();?>"><?php the_title(); ?></a></strong></h2>
						<small><?php the_time('j \d\e F \d\e Y') ?></small>
					</div>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink();?>"><div class="text-left">Continuar lendo</a>
				</div>
			</div>
		</article>

		<?php $i++; if($i != 0 && $i % 2 == 0) { ?>
		</div><!--/.row-->
		<?php } ?>

		<?php endwhile; wp_reset_query(); ?>		
  	</div>
  	<div class="row text-center p-t-50 p-b-50">  		
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/" class="btn-leia-mais">Leia mais</a>
  	</div>
</div>
</section>