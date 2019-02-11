<?php /* Template Name: Resíduos */ 
	
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
		   			<a class="btn-green" data-toggle="modal" data-target="#modal-consultoria-pgrs">Baixar a apresentação</a>
			   	</div>
			   	<div class="col-md-5 text-banner-interno p-l-50">
		   			<h2>Não sabe o que fazer <br> com seu resíduo?</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Documento do Sistema de Gestão</li>
						<li><i class="fa fa-star p-r"></i>Necessário para Licença Ambiental</li>
						<li><i class="fa fa-star p-r"></i>Necessário para Alvará Sanitário</li>
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
				<h2 class="p-b-25 h2-interno"><strong>Faça uma boa gestão dos resíduos da sua empresa</strong></h2>
				<p>Os PGRS/PGRSS são documentos do sistema de gestão ambiental, baseados nos princípios da não geração e da minimização da geração de resíduos. O Plano descreve as ações relativas ao seu manejo, contemplando os aspectos referentes à minimização na geração, coleta, segregação, acondicionamento, identificação, armazenamento, transporte, destinação e disposição final. Além disso, visa a proteção à saúde pública e ao meio ambiente. O PGRS / PGRSS é um relatório com foco fundamental na minimização da geração de resíduos, com ações voltadas a reutilização, reaproveitamento e reciclagem dos resíduos gerados, assim como descrever a gestão de resíduo do cliente com base no Termo de Referência do órgão ambiental correspondente.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/gestao-residuos.png" alt="gestão resíduos">
			</div>
		</div>
	</div>
</section>

<section>
<div class="bg-cinza">
	<div class="container p-t-70 p-b-70">
		<h2 class="p-b-25"><strong>Por que fazer o Plano de Gerenciamento de Resíduos?</strong></h2>
		<ul class="vantagens-auditoria p-t-50">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Exigencia-legal.png" alt="Exigência legal">
				<h3>Exigência legal</h3>
				<p>Atendimento à Política Nacional de Meio Ambiente e Resoluções Conama 358 e Anvisa 306 para obtenção de licença ambiental e/ou Alvará sanitário.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/multas.png" alt="evitar multas">
				<h3>Evite multas</h3>
				<p>Prevenção de auto de infração, multas e/ou paralização da atividade da empresa.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/residuos-conhecimento.png" alt="resíduos Conhecimento">
				<h3>Conhecimento</h3>
				<p>Proporcionar orientação ao cliente quanto aos questionamentos e tomada de decisão na organização.</p>
			</li>
		</ul>
		<ul class="vantagens-auditoria m-t-5">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Experiencia.png" alt="Experiência resíduos">
				<h3>Experiência</h3>
				<p>Equipe composta por profissionais experientes e multidisciplinares.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Apoio-Juridico.png" alt="Apoio Jurídico">
				<h3>Apoio Jurídico</h3>
				<p>Melhoria da eficiência em processos gerenciais e evita maiores danos financeiros e à imagem da sua empresa.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/In-Loco.png" alt="In Loco">
				<h3>In Loco</h3>
				<p>Visita de consultor ao local para levantamento das informações necessárias para a realização do plano.</p>
			</li>
		</ul>
	</div>
</div>
</section>

<section>
	<div class="bg-verde p-t-30 p-b-30 f-branca">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2><strong>Fale agora com um profissional</strong></h2>
				</div>
				<div class="col-md-4">
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-consultoria-pgrs">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-70 p-b-70">
		<div class="row d-flex">			
			<div class="col-md-8">
				<h2 class="p-b-25 h2-interno"><strong>Que tipos de empresas contratam o Plano de Gerenciamento de Resíduos?</strong></h2>
				<p>A resposta são todos os empreendimentos que geram resíduos que possam causar danos ao meio ambiente ou à saúde pública, indiferente do seu porte ou ramo de atividade, principalmente se houver armazenamento e descarte inadequado.</p>
				<p>Exemplos de segmentos no PGRS: Atividades Minerárias, Atividades Industriais / Indústria Metalúrgica, Atividades Industriais / Indústria Química, Indústria Alimentícia, Atividades de Infraestrutura, Serviços e Comércio Atacadista, Atividades Agrossilvipastoris e outras.</p>
				<p>Exemplos de segmentos no PGRSS: Todos os serviços relacionados com o atendimento à saúde humana ou animal, inclusive os serviços de assistência domiciliar e de trabalhos de campo; laboratórios analíticos de produtos para saúde; necrotérios, funerárias e serviços onde se realizem atividades de embalsamamento; serviços de medicina legal; drogarias e farmácias; estabelecimentos de ensino e pesquisa na área de saúde; centros de controle de zoonoses; distribuidores de produtos farmacêuticos, importadores, unidades móveis de atendimento à saúde; serviços de acupuntura; serviços de tatuagem, dentre outros.</p>
			</div>
			<div class="col-md-4 text-center">
				<img class="v-center" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/gerenciamento-residuos.png" alt="gerenciamento resíduos">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2 class="f-celeste"><strong>Passo a passo do Plano para a Gestão de Resíduos na sua empresa</strong></h2>
			<ul class="passo-passo p-t-50">
				<li><span>1°</span> Levantamento in loco</li>
				<li><span>2°</span> Análise de documentos</li>
				<li><span>3°</span> Realização do PGRS/PGRSS conforme Termo de Referência</li>
				<li><span>4°</span> 4º Protocolo junto ao órgão ambiental e/ou Vigilância Sanitária</li>
			</ul>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal consultoria pgrs  -->
<div class="modal fade" id="modal-consultoria-pgrs" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Consultoria PGRS</h4>
			</div>
			<div class="modal-body">
				<div id="proposta-pgrs-2735758abc4557e45d35"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('proposta-pgrs-2735758abc4557e45d35-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<?php get_footer(); ?>

