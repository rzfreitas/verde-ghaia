<?php /* Template Name: SOGI */ 
	
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
		   			<a class="btn-green" data-toggle="modal" data-target="#modal-apresentacao-sogi">Baixar a apresentação</a>
			   	</div>
			   	<div class="col-md-5 text-banner-interno p-l-50">
		   			<h2>Conheça o SOGI</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Acesso online, sem necessidade de instalação</li>
						<li><i class="fa fa-star p-r"></i>Número Ilimitado de Usuários</li>
						<li><i class="fa fa-star p-r"></i>Garantia de segurança e sigilo das informações</li>
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
				<h2 class="p-b-25 h2-interno"><strong>Alto desempenho em monitoramento de leis e sistemas de gestão</strong></h2>
				<p>O SOGI é um software voltado para excelência da gestão legal de uma empresa. Ele envolve todas as de empresas preocupadas com riscos e prejuízos. Através dos seus módulos, você pode fazer a gestão de requisitos legais, auditorias, documentos internos, fornecedores. Pode fazer uma gestão voltada para normas internacionais como ISO 9001, , OHSAS 18001, SA 8000/NBR 16001, ISO 50001, ISO 22000.  Pode fazer tratamentos de não conformidades e planos de ação. Tudo sempre com gráficos e planilhas à disposição, itens essenciais para facilitar e agilizar a tomada de decisão. O SOGI também possibilita a verificação de índices de sustentabilidade ou de conformidade legal em relação aos seus concorrentes. Anualmente, ele é a principal metodologia adotada no Prêmio Compliance Brasil, no qual participam as maiores e melhores empresas do país.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/SOGI.png" alt="SOGI">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2 class="p-b-25 text-center"><strong>Conheça os módulos do soGi</strong></h2>
			<ul class="sogi-list p-t-50">
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/modulo-lira.png" alt="modulo lira">
					</div>
					<h3>Módulo LIRA</h3>
					<p>Conheça todos os riscos e requisitos legais aplicáveis ao seu negócio. Gerenciamento das leis aplicáveis a sua empresa. As suas obrigações diante de cada lei aplicável ao seu negócio.</p>
				</li>
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/modulo-auditoria-sogi.png" alt="modulo auditoria sogi">
					</div>
					<h3>Módulo Auditoria</h3>
					<p>Programe e realize auditorias internas e externas. Registre todas as informações e gere relatórios automaticamente.</p>
				</li>
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Modulo-Gaia.png" alt="Modulo Gaia">
					</div>
					<h3>Módulo Gaia</h3>
					<p>Gerenciamento de aspectos e impactos ambientais. Registre e avalie sua matriz de aspectos e impactos, crie e gerencie planos de ação para cada aspecto e gere relatórios gerenciais.</p>
				</li>
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Modulo-PRSSO.png" alt="Modulo PRSSO">
					</div>
					<h3>Módulo PRSSO</h3>
					<p>Gerenciamento dos perigos e riscos da segurança e saúde no trabalho. Registre e avalie sua matriz de perigos e riscos, crie e gerencie planos de ação para cada perigo e gere relatórios gerenciais.</p>
				</li>				
			</ul>
			<ul class="sogi-list m-t-5">
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Modulo-TNC.png" alt="Modulo TNC">
					</div>
					<h3>Módulo TNC</h3>
					<p>Tratamento das não conformidades. Controle todas as etapas que compõe o tratamento de não-conformidades. Crie e gerencie planos de ação, identifique as causas com a árvore dos porquês, avalie a eficácia, realize análise crítica, entre outros.</p>
				</li>
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Modulo-Gestao-de-Riscos.png" alt="Módulo Gestão de Riscos">
					</div>
					<h3>Módulo Gestão de Riscos</h3>
					<p>Para uma melhor gestão e controle do soGi, o módulo administrativo possui cadastros ilimitados de usuários. Com a possibilidade de criação e adequação de permissões para cada tipo de usuários com relação as necessidades que a organização necessita.</p>
				</li>
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Modulo-Licencas.png" alt="Módulo Licenças">
					</div>
					<h3>Módulo Licenças</h3>
					<p>Motivados pelas demandas de nossos clientes a Verde Ghaia decidiu investir em um módulo dedicado ao controle de Licenças e Condicionantes.</p>
				</li>
				<li>
					<div class="text-center p-b-25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Modulo-Documentos.png" alt="Módulo Documentos">
					</div>
					<h3>Módulo Documentos</h3>
					<p class="text-center">EM BREVE</p>
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
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-sogi">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-numbers p-t-70 p-b-70">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-3">
					<div class="number red">2300</div>
					<div class="p-t-25"><p>Clientes</p></div>
				</div>
				<div class="col-md-3">
					<div class="number yellow-n">92181</div>
					<div class="p-t-25"><p>Requisitos cadastrados</p></div>
				</div>
				<div class="col-md-3">
					<div class="number blue">53283</div>
					<div class="p-t-25"><p>Usuários</p></div>
				</div>
				<div class="col-md-3">
					<div class="number green">5315</div>
					<div class="p-t-25"><p>Requisitos internacionais</p></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-70 p-b-70">
		<div class="row">			
			<div class="col-md-8">
				<h2 class="p-b-25 h2-interno"><strong>Otimize a gestão de leis, documentos, licenças e muito mais!</strong></h2>
				<p>Se sua empresa já monitora Sistemas de Gestão ou pretende monitorar, lembre-se de que não basta implantar! Tem que viver o Sistema de Gestão! E é nesse momento que o soGi entra na sua vida! O soGi é uma plataforma de Soluções para Gestão Integrada. Seus módulos foram desenvolvidos de acordo com a metodologia Verde Ghaia e orientados pelas normas internacionais de certificação como as ISOs, OHSAS e outras. O objetivo é oferecer ferramentas úteis para promover, agilizar e facilitar sua gestão.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/otimize-gestao.png" alt="otimize sua gestão">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-verde p-t-30 p-b-30 f-branca">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2><strong>Fale agora com nosso Consultor Comercial</strong></h2>
				</div>
				<div class="col-md-4">
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-sogi">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2 class="f-celeste"><strong>Passo a passo para implantação do soGi na sua empresa</strong></h2>
			<ul class="passo-passo p-t-50">
				<li><span>1°</span> Implantação in loco ou à distância</li>
				<li><span>2°</span> Preenchimento do Questionário Online</li>
				<li><span>3°</span> Revisão do questionário Online</li>
			</ul>
			<ul class="passo-passo p-t-50">
				<li><span>4°</span> Cadastramento de dados nos módulos contratados</li>
				<li><span>5°</span> Treinamento Online do SOGI</li>
			</ul>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal SOGI -->
<div class="modal fade" id="modal-sogi" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Contrate</h4>
			</div>
			<div class="modal-body">
			  <div id="proposta-sogi-5b720aa47e1ad69a7a01"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
					new RDStationForms('proposta-sogi-5b720aa47e1ad69a7a01-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<!-- Modal Apresentação Sogi -->
<div class="modal fade" id="modal-apresentacao-sogi" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Apresentação Sogi</h4>
			</div>
			<div class="modal-body">
				<div id="o-que-e-o-sogi-1e63cecc6f2114eee732"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('o-que-e-o-sogi-1e63cecc6f2114eee732-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<?php get_footer(); ?>

