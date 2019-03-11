<?php /*Template Name: Ramos Atividades */ ?>

<?php get_header(); ?>

<section>
<div class="banner">
	<?php $image = get_field('img_banner');
	if( !empty($image) ): ?>
		<div style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.3) 100%),url(<?php echo $image['url']; ?>) no-repeat center center fixed;    
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height:100vh">
		<div class="container v-center f-branca">
			<div class="row">
			  	<div class="col-md-7">
		  			<h1><strong><?php the_field('title_banner'); ?></strong></h1>
		   			<div class="p-t-25 p-b-25 l-disc"><?php the_field('text_banner'); ?></div>		   			
		   			<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
						<a href="" class="btn-round btn-ga">Contrate agora</a>
						<?php elseif ( get_field('select_page') == 'aviacao' ): ?>
						<a href="" class="btn-round btn-va" data-toggle="modal" data-target="#aviacao">Contrate agora</a>
						<?php elseif ( get_field('select_page') == 'cons_civil' ): ?>
						<a href="" class="btn-round btn-cc">Contrate agora</a>
						<?php elseif ( get_field('select_page') == 'g_hosp' ): ?>
						<a href="" class="btn-round btn-gh">Contrate agora</a>
						<?php elseif ( get_field('select_page') == 'rodovias' ): ?>
						<a href="" class="btn-round btn-rod">Contrate agora</a>
					<?php endif ?>
			   	</div>
			   	<div class="col-md-5">
			   	</div>
		   	</div>
		</div>	
	<?php endif; ?>
</div>
	<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
		<div class="bg-banner-footer-ga">
		<?php elseif ( get_field('select_page') == 'aviacao' ): ?>
		<div class="bg-banner-footer-va">
		<?php elseif ( get_field('select_page') == 'cons_civil' ): ?>
		<div class="bg-banner-footer-cc">
		<?php elseif ( get_field('select_page') == 'g_hosp' ): ?>
		<div class="bg-banner-footer-gh">
		<?php elseif ( get_field('select_page') == 'rodovias' ): ?>
		<div class="bg-banner-footer-rod">
	<?php endif ?>
	<div class="container p-t-25 p-b-25">
		<h2 class="text-center"><?php the_field('t_banner_footer') ?></h2>
	</div>
</div>
</section>

<section>
	<div class="container p-t-100 p-b-100">
		<h2><?php the_field('title_2') ?></h2>
		<ul class="d-flex disc-fake f-wrap p-t-50">
		<?php if( have_rows('diretrizes') ): ?>		    
		    <?php while ( have_rows('diretrizes') ) : the_row(); ?>
		        <li class="col-12 col-md-4 p-t-25 p-b-25"><?php the_sub_field('t_diretriz'); ?></li>
		    <?php endwhile; ?>
		</ul>
		<?php else : endif; ?>
</section>

<section>
	<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
		<div class="bg-row-conversion-ga">
			<div class="container p-t-25 p-b-25">
				<ul class="d-flex align-mid f-wrap space-b">
				<?php if( have_rows('logo_clientes') ): ?>		    
				    <?php while ( have_rows('logo_clientes') ) : the_row();
				    	$client_img = get_sub_field('logo_cliente'); ?>
				        <li class="">
				        	<img src="<?php echo $client_img['url']; ?>" alt="<?php echo $client_img['alt'] ?>" />
				        </li>
				    <?php endwhile; ?>
				</ul>
				<?php else : endif; ?>
			</div>
		</div>
		<?php elseif ( get_field('select_page') == 'aviacao' ): ?>
		<div class="bg-row-conversion">
			<div class="container p-t-25 p-b-25">
				<ul class="d-flex align-mid f-wrap space-b">
				<?php if( have_rows('logo_clientes') ): ?>		    
				    <?php while ( have_rows('logo_clientes') ) : the_row();
				    	$client_img = get_sub_field('logo_cliente'); ?>
				        <li class="">
				        	<img src="<?php echo $client_img['url']; ?>" alt="<?php echo $client_img['alt'] ?>" />
				        </li>
				    <?php endwhile; ?>
				</ul>
				<?php else : endif; ?>
			</div>
		</div>
	<?php endif; ?>
</section>

<section>
	<div class="banner">
		<?php $image = get_field('img_banner_2');
		if( !empty($image) ): ?>
			<div class="auto-h" style="background: url(<?php echo $image['url']; ?>) no-repeat center center fixed;    
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			height:80vh">
			<div class="container v-center f-branca">
				<h2><strong><?php the_field('title_banner_2'); ?></strong></h2>
				<div class="row p-t-25">
				  	<div class="col-md-6">			  			
			   			<p><?php the_field('text_banner_2'); ?></p>
				   	</div>
				   	<div class="col-md-6">
				   		<p><?php the_field('text_banner_3'); ?></p>
				   	</div>
			   	</div>
			</div>	
		<?php endif; ?>
	</div>
</section>

<section>
	<?php if ( get_field('select_page') == 'g_alimentos' ) { ?>
		<div class="bg-row-conversion-ga">
		<?php } else { ?>
		<div class="bg-row-conversion">
	<?php } ?>
		<div class="container p-t-25 p-b-25">
			<div class="row">
				<div class="col-12 col-md-9">
					<h5><?php the_field('t_conversion'); ?> </h5>
				</div>
				<div class="col-12 col-md-3 p-t-c">
					<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
						<a href="" class="btn-round btn-ga">Baixar apresentação</a>
						<?php elseif ( get_field('select_page') == 'aviacao' ): ?>
						<a href="" class="btn-round btn-va" data-toggle="modal" data-target="#aviacao">Saiba mais!</a>
						<?php elseif ( get_field('select_page') == 'cons_civil' ): ?>
						<a href="" class="btn-round btn-cc">Contrate agora!</a>
						<?php elseif ( get_field('select_page') == 'g_hosp' ): ?>
						<a href="" class="btn-round btn-gh">Contrate agora!</a>
						<?php elseif ( get_field('select_page') == 'rodovias' ): ?>
						<a href="" class="btn-round btn-rod">Contrate agora!</a>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-100 p-b-100">
		<h2>Veja como funciona</h2>
		<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
			<p class="p-t-25 t-gray">O cliente contará com avaliação técnica realizada por uma equipe multidisciplinar, composta por especialistas em segurança de alimentos, legislação e sistemas de gestão.</p>
		<?php endif; ?>
		<div class="p-t-50 text-center">
			<?php $image2 = get_field('image_p_a_p');
			if( !empty($image2) ): ?>
				<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<?php if ( get_field('select_page') == 'g_alimentos' ) { ?>
	<div class="bg-last-block-ga">
	<?php } else { ?>
	<div class="bg-last-block">
	<?php } ?>	
		<div class="container p-t-100 p-b-100">
			<div class="row d-flex">
				<div class="col-12 col-md-4">
					<h2 class="v-center"><?php the_field('t_last_b'); ?></h2>
				</div>
				<div class="col-12 col-md-8">
					<p><?php the_field('tx_last_b'); ?></p>
				</div>
			</div>
			<div class="risks-imgs">
				<div class="d-flex p-t-50">
					<?php $risks = get_field('imgs_risks');
					if( $risks ): ?>
					<div class="">
						<img src="<?php echo $risks['img_1']['url']; ?>" alt="<?php echo $risks['image']['alt']; ?>" />
					</div>
					<div class="">
						<img src="<?php echo $risks['img_2']['url']; ?>" alt="<?php echo $risks['image']['alt']; ?>" />
					</div>
					<div class="">
						<img src="<?php echo $risks['img_3']['url']; ?>" alt="<?php echo $risks['image']['alt']; ?>" />
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="p-t-50 text-center">
				<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
					<a href="" class="btn-round btn-ga">Contrate agora</a>
					<?php elseif ( get_field('select_page') == 'aviacao' ): ?>
					<a href="" class="btn-round btn-va" data-toggle="modal" data-target="#aviacao">Contrate agora</a>
					<?php elseif ( get_field('select_page') == 'cons_civil' ): ?>
					<a href="" class="btn-round btn-cc">Contrate agora</a>
					<?php elseif ( get_field('select_page') == 'g_hosp' ): ?>
					<a href="" class="btn-round btn-gh">Contrate agora</a>
					<?php elseif ( get_field('select_page') == 'rodovias' ): ?>
					<a href="" class="btn-round btn-rod">Contrate agora</a>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>

<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
	<div class="container p-t-50 p-b-50">
		<ul class="d-flex align-mid space-b f-wrap text-center slides-four">
			<?php if( have_rows('logo_clientes_alimentos') ): ?>		    
			    <?php while ( have_rows('logo_clientes_alimentos') ) : the_row();
			    	$client_img_alimentos = get_sub_field('logo_cliente_alimentos'); ?>
			        <li class="col-12 col-md-3">
			        	<img src="<?php echo $client_img_alimentos['url']; ?>" alt="<?php echo $client_img_alimentos['alt'] ?>" />
			        </li>
			    <?php endwhile; ?>
		</ul>
			<?php else : endif; ?>
	</div>
<?php endif; ?>

<?php if ( get_field('select_page') == 'g_alimentos' ): ?>
						
<?php elseif ( get_field('select_page') == 'aviacao' ): ?>
<!-- Modal Aeroportos -->
<div class="modal fade" id="aviacao" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Programa de Compliance Aeroportos</h4>
			</div>
			<div class="modal-body">
				<div role="main" id="contrate-agora-aeroportos-6c4a37e55ff794c52a9e"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				  new RDStationForms('contrate-agora-aeroportos-6c4a37e55ff794c52a9e-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<?php elseif ( get_field('select_page') == 'cons_civil' ): ?>
						
<?php elseif ( get_field('select_page') == 'g_hosp' ): ?>
						
<?php elseif ( get_field('select_page') == 'rodovias' ): ?>
						
<?php endif ?>

<?php get_footer(); ?>