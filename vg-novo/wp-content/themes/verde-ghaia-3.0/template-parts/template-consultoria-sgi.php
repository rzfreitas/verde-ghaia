<?php /* Template Name: Consultoria de SGI */ 
	
get_header(); ?>

<section>
<div class="banner">
	<?php $image = get_field('img_banner');
	if( !empty($image) ): ?>
		<div id="img-banner" style="background: url(<?php echo $image['url']; ?>) no-repeat center center fixed;    
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height:600px">
		<div class="container v-center f-branca">
			<div class="row">
			  	<div class="col-md-7">
		  			<h1><strong><?php the_field('title_banner'); ?></strong></h1>
		   			<p class="p-t-25 p-b-25"><?php the_field('text_banner'); ?></p>
		   			<a class="btn-yellow" data-toggle="modal" data-target="#modal-consultoria-sgi">Baixar a apresentação</a>
			   	</div>
			   	<div class="col-md-5 text-banner-interno p-l-50">
		   			<h2>Certificação vale a pena!</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Atendimento a diversas normas internacionais</li>
						<li><i class="fa fa-star p-r"></i>Economize tempo e dinheiro</li>
						<li><i class="fa fa-star p-r"></i>Alcance sua certificação</li>
		   			</ul>
			   	</div>
		   	</div>
		</div>	
	<?php endif; ?>
</div>
</section>

<section>
	<div class="container p-t-70 p-b-70">
		<div class="row">			
			<div class="col-md-8">
				<h2 class="p-b-25 h2-interno"><strong>Por que contratar a Consultoria de Sistema de Gestão?</strong></h2>
				<p>A Consultoria de SGI envolve a implantação e a melhoria de sistemas de gestão fundamentados em padrões normativos internacionais, como ISOs e OHSAS. Tudo sempre aliado aos objetivos e metas do sistema de gestão, aos estratégicos da organização e ao monitoramento dos requisitos legais. A Consultoria de Sistema de Gestão Integrada pode ser realizada in loco ou de forma on-line. Caso sua empresa precise de agilidade e economia no processo, vale a pena conhecer a Consultoria Online da Verde Ghaia, que atendendo à expectativa de mercado, alia todo conhecimento prático de seus consultores às novas tecnologias.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/consultoria-sgi.png" alt="consultoria sgi">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2><strong>A Consultoria de SGI oferece vários ganhos para sua empresa</strong></h2>
			<ul class="vantagens-auditoria p-t-50">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Otimizacao-processos.png" alt="Otimização processos">
					<h3>Otimização dos processos</h3>
					<p>Padronização e organização de documentação e processos internos.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Conhecimento.png" alt="Conhecimento">
					<h3>Conhecimento</h3>
					<p>Conheça todos as falhas do seu sistema de gestão e os riscos e requisitos legais aplicáveis ao seu negócio.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Certificacao-iso.png" alt="Certificação iso">
					<h3>Certificação</h3>
					<p>Preparação e acompanhamento para a certificação, para manutenção ou para migração.</p>
				</li>
			</ul>
			<ul class="vantagens-auditoria m-t-5">
				<li class="hidden-xs" style="width: 15%; background-color: transparent; border:0; box-shadow: none;"></li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Performance-gestao.png" alt="Performance gestão">
					<h3>Performance</h3>
					<p>Melhor gestão dos indicadores e metas. Visão sistêmica do desempenho da empresa e do atendimento das obrigações legais pertinentes.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Normas-Internacionais.png" alt="Normas Internacionais">
					<h3>Normas Internacionais</h3>
					<p>Expertise em consultorias de ISO9001, ISO14001, ISO50001, ISO22000, ISO16000, OHSAS 18001, SA8000 e outras.</p>
				</li>
				<li class="hidden-xs" style="width: 15%; background-color: transparent; border:0; box-shadow: none;"></li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="bg-celeste p-t-30 p-b-30">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2><strong>Fale agora com nosso Consultor Comercial</strong></h2>
				</div>
				<div class="col-md-4">
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-consultoria-sgi">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-70 p-b-70">
		<div class="row">			
			<div class="col-md-8">
				<h2 class="p-b-25 h2-interno"><strong>Qual o objetivo da Consultoria de SGI?</strong></h2>
				<p>A Consultoria de SGI prepara a organização, adequando seus processos aos padrões de gestão internacionalmente reconhecidos, sejam para fins de certificação ou apenas com o objetivo de padronização. Os consultores passam por cada departamento da empresa, conferem um a um os requisitos da norma que são aplicáveis aos mesmos e, em seguida, indicam o caminho para a melhoria contínua. O objetivo não é apenas melhorar o atendimento, mas melhorar a gestão da própria empresa, é a constante busca por resultados que deve valorizada pela alta direção e seus colaboradores.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/objetivo-Consultoria-SGI.png" alt="objetivo Consultoria SGI">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2 class="f-celeste"><strong>Passo a passo para a realização de uma Consultoria de SGI</strong></h2>
			<ul class="passo-passo p-t-50">
				<li><span>1°</span> Diagnóstico inicial de auditoria</li>
				<li><span>2°</span> Planejamento</li>
				<li><span>3°</span> Treinamentos</li>
			</ul>
			<ul class="passo-passo p-t-50">
				<li><span>4°</span> Desenvolvimento do projeto</li>
				<li><span>5°</span> Pré-Auditoria</li>
				<li><span>6°</span> Ações corretivas </li>				
			</ul>
			<ul class="passo-passo p-t-50">
				<li><span>7°</span> Pré-Auditoria</li>
				<li><span>8°</span> Acompanhamento da certificação</li>
				<li><span>9°</span> Finalização e acompanhamento</li>
			</ul>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal consultoria sgi -->
<div class="modal fade" id="modal-consultoria-sgi" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Consultoria SGI</h4>
			</div>
			<div class="modal-body">
				<div id="proposta-consultoria-sgi-f998bc26c6c7698d5676"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('proposta-consultoria-sgi-f998bc26c6c7698d5676-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>


<?php get_footer(); ?>