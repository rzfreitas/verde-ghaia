<?php /* Template Name: Sogi - Lira */ 
	
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
		   			<a class="btn-blue" data-toggle="modal" data-target="#modal-lira">Fale com um consultor</a>
		   		</div>
		   		<div class="col-md-5 text-banner-interno p-l-50">
		   			<h2>Atenda os requisitos legais aplicáveis à sua empresa</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Fácil organização e visualização</li>
						<li><i class="fa fa-star p-r"></i>Reconhecido pelas certificadoras internacionais</li>
						<li><i class="fa fa-star p-r"></i>Atualização mensal</li>
		   			</ul>
		   		</div>
	   		</div>
		</div>	
	<?php endif; ?>
</div>
</section>

<section>
	<div class="container p-t-70 p-b-70">
		<h2 class="f-celeste"><strong>Passo a passo para Implantação do LIRA na sua empresa</strong></h2>
		<ul class="passo-passo p-t-50">
			<li><span>1°</span> Implantação in loco ou à distância</li>
			<li><span>2°</span> Cliente preenche questionário online</li>
			<li><span>3°</span> Criação automática dos requisitos aplicáveis</li>
		</ul>
		<ul class="passo-passo p-t-50">
			<li><span>4°</span> Cliente realiza treinamento online do SOGI</li>
			<li><span>5°</span> VG revisa Requisitos Aplicáveis do LIRA </li>
		</ul>
	</div>	
</section>

<section>
	<div class="bg-azul-grad">
		<div class="container p-t-70 p-b-70">
			<div class="row d-flex">
				<div class="col-md-6">
					<h2><strong>Quais leis são aplicáveis à sua empresa e como deve atendê-las?</strong></h2>
					<p class="p-t-25">Monitoramento de requisitos legais aplicáveis à sua organização e gerenciamento de planos de ações para melhor atendimento dos mesmos. Lira é um módulo do SOGI que lista todos os requisitos aplicáveis à sua empresa. Através do Lira, você também tem acesso às obrigações que os requisitos legais geram para sua empresa e pode fazer o gerenciamento por meio das evidências ou não de seu cumprimento. O módulo Lira possui atualização mensal e todo Suporte Técnico e Jurídico necessários para o bom andamento da sua gestão.</p>
				</div>
				<img class="img-lira hidden-xs" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/lira.png" alt="lira sogi">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2 class="text-center"><strong>O Lira</strong></h2>
			<ul class="vantagens-auditoria p-t-50">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/gestao.png" alt="gestao">
					<h3>Gestão</h3>
					<p>Geração de dados confiáveis, com planos de ações adequados, coesos e exequíveis, considerando as necessidades e prioridades da empresa.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/dashboard.png" alt="dashboard">
					<h3>Dashboard</h3>
					<p>Visualização do real cenário do monitoramento dos requisitos legais através de indicadores de atendimento, com base nas informações registradas no sistema.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/organizacao.png" alt="organização">
					<h3>Organização</h3>
					<p>Veja os requisitos organizados por sistema de gestão contratado, NBRs, outros requisitos ou requisitos não validados.</p>
				</li>
			</ul>
			<ul class="vantagens-auditoria m-t-5">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/gerenciamento-acoes.png" alt="gerenciamento ações">
					<h3>Gerenciamento de ações</h3>
					<p>Status, evidências objetivas, datas de vencimento, requisito legal, obrigações e outros. Defina responsáveis, custo do não cumprimento e índice de recorrências.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/relatorios.png" alt="relatórios">
					<h3>Relatórios</h3>
					<p>Acompanhe os requisitos legais aplicáveis de forma rápida através de gráficos e estatísticas.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/carta-atualizacao.png" alt="carta atualização">
					<h3>Cartas de atualização</h3>
					<p>Descritivo de legislações que foram revogadas, incluídas, excluídas ou alteradas no último mês.</p>
				</li>
			</ul>
			<ul class="vantagens-auditoria m-t-5">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/evite-multas.png" alt="evite multas">
					<h3>Evite multas</h3>
					<p>Reduza riscos de acidentes de trabalho, crimes ambientais ou trabalhistas.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/sustentabilidade.png" alt="sustentabilidade">
					<h3>Sustentabilidade</h3>
					<p>Acompanhamento os Índices sustentabilidade através de metodologia única desenvolvida pela Verde Ghaia.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/aglidade.png" alt="aglidade">
					<h3>Agilidade</h3>
					<p>Economia de tempo, assertividade, verificação das obrigações aplicáveis e não aplicáveis.</p>
				</li>
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
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-lira">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<div class="row">			
			<div class="col-md-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/otimize-tempo.png" alt="otimize seu tempo">
			</div>
			<div class="col-md-6">
				<h2 class="p-b-25 h2-interno"><strong>Otimize o tempo da sua equipe!</strong></h2>
				<p>Caso tenha interesse, a Verde Ghaia ainda oferece assessoria na hora de inserir suas evidências de atendimento ou não aos requisitos legais, o que facilita a gestão das não conformidades. Essa contratação de adicional é excelente para a criação de planos de ação robustos e equilibrados de acordo com a realidade da empresa e com o atendimento das normas internacionais, como ISO 14001 e ISO 9001. O trabalho de Preenchimento do LIRA é realizado com base em entrevista com os responsáveis pelo cumprimento das obrigações na empresa, verificação de documentos, procedimentos e processos.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-numbers p-t-70 p-b-70">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-3">
					<div class="number red">92181</div>
					<div class="p-t-25"><p>Requisitos cadastrados</p></div>
				</div>
				<div class="col-md-3">
					<div class="number yellow-n">53283</div>
					<div class="p-t-25"><p>Usuários</p></div>
				</div>
				<div class="col-md-3">
					<div class="number blue">1273</div>
					<div class="p-t-25"><p>Clientes</p></div>
				</div>
				<div class="col-md-3">
					<div class="number green">5315</div>
					<div class="p-t-25"><p>Requisitos internacionais</p></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal lira -->
<div class="modal fade" id="modal-lira" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">LIRA</h4>
			</div>
			<div class="modal-body">
			  <div id="proposta-sogi-5b720aa47e1ad69a7a01"></div>
				<div id="proposta-lira-819b3ec0a51fd9696e05"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				  new RDStationForms('proposta-lira-819b3ec0a51fd9696e05-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<?php get_footer(); ?>

