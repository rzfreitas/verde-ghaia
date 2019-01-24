<?php /* Template Name: Vagas */ 
	
get_header(); ?>

<section>
	<div class="container-fluid no-padding p-relative">
		<img class="img-vagas" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/vagas/vagas-vg.png" alt="vagas verde ghaia">
		<div class="container title-vagas">
			<h1>Quero trabalhar na <br> Verde Ghaia</h1>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<?php the_content(); ?>
	</div>
</section>

<section>
	<div class="container-fluid no-padding">
		<div class="row d-flex">
			<div class="col-md-6 bg-celeste t-center no-padding">				
				<div class="text-programa">
					<h2>Programa de Estágio</h2>
					<p>Pode ter certeza, aqui você vai trabalhar e aprender ao mesmo tempo! Vai conhecer pessoas incríveis e, claro, se desenvolver a todo momento.</p>
				</div>
			</div>
			<div class="col-md-6 no-padding">
				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/vagas/estagio-vg.png" alt="programa estágio verde ghaia">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-gray p-b-50 p-t-50">
		<div class="container p-b-50">
			<h2>Oportunidades</h2>	
		</div>
		<div class="container">
			<?php			
			if( have_rows('vagas') ):
			    while ( have_rows('vagas') ) : the_row(); ?>			        
			        <div class="box-vaga">
				        <h3><?php the_sub_field('title_vaga'); ?></h3><br>
				        <div class="row d-flex">
				        	<div class="col-md-9">
				        		<p><strong>Local: </strong><?php the_sub_field('local_vaga'); ?></p>
						        <p><strong>Formação: </strong><?php the_sub_field('formacao_vaga'); ?></p>
						        <p><strong>Experiência: </strong><?php the_sub_field('experiencia_vaga'); ?></p>
						        <p><strong>Obs: </strong><?php the_sub_field('obs_vaga'); ?></p>
						    </div>
						    <div class="col-md-3 p-relative">
						    	<a class="btn-blue btn-bot-align right" href="mailto:rh@verdeghaia.com.br?subject=Trabalhe na VG - Candidato para: <?php echo the_sub_field('title_vaga'); ?>" target="_top">Candidatar</a>
						    </div>
				        </div>
				    </div>
			    <?php endwhile;
			else :
			endif;
			?>
		</div>
	</div>
</section>

<section>
	<div class="bg-celeste p-t-30 p-b-30">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2 class="p-t-10"><strong>Quer trabalhar na Verde Ghaia?</strong></h2>
				</div>
				<div class="col-md-4">
					<a class="btn-yellow" href="mailto:rh@verdeghaia.com.br" target="_top">Cadastre seu currículo</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

