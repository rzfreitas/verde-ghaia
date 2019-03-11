<?php
/*
Template Name: Aviacao
*/
?>

<?php get_header(); ?>

	</div>
</div>

<div class="img-topo p-t-70">
	<div class="container v-center l-disc">
		<?php the_content(); ?>
	</div>
</div>

<div class="rowfull faixa-cinza">
	<div class="container">
		<p><?php the_field('text_f_cinza'); ?></p>
	</div>
</div>

<div class="container p-t-70 p-b-70 h-list-v topicos">
	<h2><?php the_field('sub_1'); ?></h2><br>
	<?php if( have_rows('topicos') ): ?>		
		<ul class="p-t-50">
			<?php while ( have_rows('topicos') ) : the_row(); ?>
				<li>
					<div class="topicos-block">
						<?php the_sub_field('text_top'); ?>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
		<?php 
			else :
			// no rows found
			endif;
		?>
</div>

<div class="rowfull faixa-conversion p-t-c p-b-c">
	<div class="container p-t-30 p-b-30 t-c-c">
    	<div class="row">
    		<div class="col-sm-12 col-md-6 col-lg-9 text-left block-conversion t-c-c p-b-c">
	    		<h2><strong>Fale agora com um profissional</strong></h2>
	        </div>
	        <div class="col-sm-12 col-md-6 col-lg-3">
	        	<a class="new-button-round" data-toggle="animatedModal-assessoria-juridica">FALAR COM UM CONSULTOR</a>
	        </div>
    	</div>
    </div>
</div>

<div class="rowfull vantagem p-t-70 p-b-70">
	<div class="container" id="vantagem-tab">
		<h2><?php the_field('sub_2'); ?></h2>
		<div class="row d-flex f-wrap p-t-50">			
			<?php while ( have_rows('vantagens') ): the_row(); ?>			
				<?php 
				$image = get_sub_field('icone'); 
				$vantagem = get_sub_field('vantagem');
				?>              
				<div class="col-12 col-md-4 p-b-50">
					<div class="d-flex align-c">
						<div><img src="<?php echo $image['url']; ?>" alt="vantagens programa compliance aviação civil" /></div>
						<div><?php echo $vantagem ?></div>
					</div>					
				</div>		
			<?php endwhile; ?>			
		</div>
	</div>
</div>

<div class="rowfull img-bot">
	<div class="container">
		<div class="p-t-50">
			<?php the_field('text_img_1'); ?>
		</div>
		<div class="p-t-400 l-disc">
			<?php the_field('text_img_2'); ?>
		</div>
	</div>
</div>

<section>
	<div class="container p-t-100 p-b-100">
		<h2 class="text-center">Veja como funciona</h2>		
		<div class="p-t-50 text-center">
			<?php $image2 = get_field('image_p_a_p');
			if( !empty($image2) ): ?>
				<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			<?php endif; ?>
		</div>
	</div>
</section>

<div class="rowfull faixa-conversion p-t-c p-b-c">
	<div class="container p-t-30 p-b-30 t-c-c">
    	<div class="row">
	    	<div class="col-12 col-md-6 col-lg-9 text-left block-conversion t-c-c p-b-c">
	    		<h2><strong>Fale agora com um profissional</strong></h2>
	        </div>
	        <div class="col-12 col-md-6 col-lg-3">
	        	<a class="new-button-round" data-toggle="animatedModal-assessoria-juridica">FALAR COM UM CONSULTOR</a>
	        </div>
	    </div>
    </div>
</div>

<?php get_footer(); ?>