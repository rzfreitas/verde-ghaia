<?php /* Template Name: Auditoria Conformidade Legal */ 
	
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
		   			<a class="btn-blue" data-toggle="modal" data-target="#modal-auditoria-legal">Fale com um consultor</a>
			   	</div>
			   	<div class="col-md-5 text-banner-interno">
		   			<h2>Tenha um Diagnóstico da Conformidade Legal da sua Empresa</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Imparcialidade da equipe auditora</li>
						<li><i class="fa fa-star p-r"></i>Priorização dos obrigações legais mais relevantes</li>
						<li><i class="fa fa-star p-r"></i>Item normativo das normas internacionais</li>
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
			<div class="col-md-6">
				<h2 class="p-b-25 h2-interno"><strong>Conheça as leis mais importantes e auditadas</strong></h2>
				<p>No trabalho de Auditoria de Conformidade Legal, o auditor verifica o atendimento dos requisitos legais da sua organização, mostrando o que está conforme ou não conforme. Essas informações são essenciais para tomada de decisão, processo de melhoria contínua e envolvimento da equipe, principalmente na criação e aplicação de planos de ações. Por isso, a Auditoria de Conformidade Legal é um quesito importante e obrigatório nas normas internacionais, como ISO 9001, e OHSAS 18001.</p>
			</div>
			<div class="col-md-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Auditoria-de-Conformidade-Legal.png" alt="Auditoria Conformidade Legal">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza p-t-70 p-b-70">
		<div class="container">
			<h2 class="f-celeste"><strong>Passo a passo da Auditoria de Conformidade Legal na sua empresa</strong></h2>
			<ul class="passo-passo p-t-50">
				<li><span>1°</span> Visitas às instalações</li>
				<li><span>2°</span> Observação das principais atividades e processos</li>
				<li><span>3°</span> Entrevista a colaboradores</li>
			</ul>
			<ul class="passo-passo p-t-50">
				<li><span>4°</span> Emissão de um relatório ao final</li>
				<li><span>5°</span> Coleta evidências de conformidades ou não-conformidades</li>
				<li><span>6°</span> Verificação de documentos/li>
			</ul>
		</div>		
	</div>
</section>

<section>	
	<div class="container p-t-70 p-b-70">
		<h2><strong>Vantagens Auditoria de Conformidade Legal Verde Ghaia</strong></h2>
		<ul class="vantagens-auditoria p-t-50">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/online-offline.png" alt="online offline">
				<h3>Online ou Offline</h3>
				<p>A auditoria pode ser realizada in loco ou online através da plataforma de Consultoria Online.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Indicador-conformidade.png" alt="Indicador conformidade">
				<h3>Indicador de conformidade</h3>
				<p>Tenha em mãos relatório com as evidências dos requisitos e obrigações conformes e não conformes.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Expertise.png" alt="Expertise">
				<h3>Expertise</h3>
				<p>Trabalho realizado por Auditor Líder capacitado e com vivência em diversos ramos de atividade.</p>
			</li>
		</ul>
		<ul class="vantagens-auditoria m-t-5">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Certificado.png" alt="Certificado">
				<h3>Certificado</h3>
				<p>A metodologia Verde Ghaia é aprovada pelas certificadoras internacionais o que torna nosso certificado um documento único.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Modulo-Auditoria.png" alt="Modulo Auditoria">
				<h3>Módulo Auditoria</h3>
				<p>Gestão e acompanhamento completo das suas Auditorias através do módulo Auditoria do SOGI.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Documentos-em-dia.png" alt="Documentos em dia">
				<h3>Documentos em dia</h3>
				<p>Verificação dos documentos mais importantes do seu sistema de gestão.</p>
			</li>
		</ul>
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
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-auditoria-legal">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<div class="row">			
			<div class="col-md-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/vantagens-Auditoria-de-Conformidade-Legal.png" alt="vantagens Auditoria Conformidade Legal">
			</div>
			<div class="col-md-6">
				<h2 class="p-b-25 h2-interno"><strong>O que minha empresa ganha com a Auditoria de Conformidade Legal?</strong></h2>
				<p>Gerenciar seu Índice de Conformidade Legal traz informações importantes que possibilitam, inclusive, deslocar recursos e esforços em processos que geram maiores riscos, em decorrência das não-conformidades. Essa visualização é fundamental para decisões estratégicas da Alta Direção. Ainda mais se tiver relatórios 100% online, através do módulo de Auditoria do SOGI. O serviço é interessante para empresas que querem gerir seus riscos (negociações empresariais, como incorporações, aquisição de empresas ou de terrenos) e evitar passivos ambientais, trabalhistas, em responsabilidade social e não conformidades de produtos, que podem gerar prejuízos financeiros, de imagem, operacionais e etc.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-numbers p-t-70 p-b-70">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-6 d-flex">
					<div class="number red">1593</div>
					<div><p class="v-center">Auditorias de Conformidade Legal</p></div>
				</div>
				<div class="col-md-6 d-flex">
					<div class="number yellow-n">15030</div>
					<div><p class="v-center">Dias de Auditoria de Conformidade Legal</p></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal Auditoria Conformidade Legal -->
<div class="modal fade" id="modal-auditoria-legal" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Auditoria de Conformidade Legal</h4>
			</div>
			<div class="modal-body">
				<div id="proposta-auditoria-conformidade-legal-b4992afc0eb764455ee6"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
					new RDStationForms('proposta-auditoria-conformidade-legal-b4992afc0eb764455ee6-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<!-- Modal Apresentação Auditoria Conformidade Legal  -->
<div class="modal fade" id="modal-apresentacao-auditoria-legal" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Apresentação Auditoria de Conformidade Legal</h4>
			</div>
			<div class="modal-body">
				<div id="apresentacao-auditoria-conformidade-legal-ebacd6154a137880af8f"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('apresentacao-auditoria-conformidade-legal-ebacd6154a137880af8f-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<?php get_footer(); ?>

