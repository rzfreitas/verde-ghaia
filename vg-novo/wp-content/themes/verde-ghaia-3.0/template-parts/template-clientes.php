<?php /* Template Name: Clientes */ 
	
get_header(); ?>

<section>
	<div class="container-fluid no-padding bg-clientes-page">
		<div class="container v-center f-branca">
				<h1 class="p-b-25">Clientes Verde Ghaia</h1>
				<p>No Grupo Verde Ghaia, o Cliente é um Parceiro. Parceiro que motiva e nos inspira a fazer sempre o melhor, seja no atendimento ou na prestação de serviço. Hoje, compartilhamos experiências e aprendizados em todo o Brasil e outros cinco países – Argentina, Colômbia, Paraguai, Uruguai e Moçambique. Nestes locais, vivenciamos com nossos Parceiros desafios, emoções e conquistas. Nossa Missão é buscar sempre fazer mais rápido, melhor e mais barato, e isso vai de total encontro com nosso compromisso com o cliente Verde Ghaia.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza p-t-50 p-b-70 text-center">
		<div class="container">
			<div class="row d-flex">
				<?php $numc = get_field('numeros_clientes'); 
				if ($numc) : ?>
				<div class="col-md-2 p-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/clientes/regiao-norte.png" alt="verde ghaia região norte">
					<div class="num-c"><?php echo $numc['norte']; ?></div>
				</div>
				<div class="col-md-2 p-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/clientes/regiao-centro-oeste.png" alt="verde ghaia região centro oeste">
					<div class="num-c"><?php echo $numc['centro_oeste']; ?></div>
				</div>
				<div class="col-md-2 p-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/clientes/regiao-nordeste.png" alt="verde ghaia região nordeste">
					<div class="num-c"><?php echo $numc['nordeste']; ?></div>
				</div>
				<div class="col-md-2 p-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/clientes/regiao-sudeste.png" alt="verde ghaia região sudeste">
					<div class="num-c"><?php echo $numc['sudeste']; ?></div>
				</div>
				<div class="col-md-2 p-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/clientes/regiao-sul.png" alt="verde ghaia região sul">
					<div class="num-c"><?php echo $numc['sul']; ?></div>
				</div>
				<div class="col-md-2 p-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/clientes/mundo.png" alt="verde ghaia mundo">
					<div class="num-c"><?php echo $numc['mundo']; ?></div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<?php if( have_rows('clientes') ): ?>
			<ul class="clientes">
			<?php while( have_rows('clientes') ): the_row(); 
				// vars
				$imagecliente = get_sub_field('imagem_cliente');
				?>

				<li class="cliente">
					<img class="img-responsive" src="<?php echo $imagecliente['url']; ?>" alt="<?php echo $imagecliente['alt'] ?>" />
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>

<section>
	<div class="bg-celeste p-t-30 p-b-30">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2 class="p-t-10"><strong>Fale agora com nosso Consultor Comercial</strong></h2>
				</div>
				<div class="col-md-4">
					<a class="btn-yellow" href="">Falar</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

