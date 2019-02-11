<?php /* Template Name: Consultoria Tecnica */ 
	
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
		   			<a class="btn-yellow" data-toggle="modal" data-target="#modal-consultoria-tecnica">Baixar a apresentação</a>
			   	</div>
			   	<div class="col-md-5 text-banner-interno p-l-50">
		   			<h2>Melhore seu monitoramento legal</h2>
		   			<!-- <ul>
		   				<li><i class="fa fa-star p-r"></i>Tire dúvidas minuciosas das áreas de MA e SST</li>
						<li><i class="fa fa-star p-r"></i>Tenha acesso à Matrizes de risco</li>
						<li><i class="fa fa-star p-r"></i>Trate pontos críticos corretamente</li>
		   			</ul> -->
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
				<h2 class="p-b-25 h2-interno"><strong>Consultorias Técnicas</strong></h2>
				<p>A Verde Ghaia presta consultoria técnica em diversas áreas, como meio ambiente, saúde e saúde do trabalho, qualidade, alimentos, energia e outros. Devido à sua capacitação em sistemas de gestão, advogados e engenheiros formam uma equipe com expertise para auxiliar as empresas em serviços técnicos. Confira abaixo, algumas das consultorias mais comuns solicitadas à empresa.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/consultoria-tecnica.png" alt="consultoria técnica">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2 class="f-celeste"><strong>Passo a passo para a realização de uma Auditoria de SGI</strong></h2>
			<ul class="passo-passo p-t-50">
				<li><span>1°</span> Planejamento da auditoria – agendamento e plano de auditoria</li>
				<li><span>2°</span> Reunião de abertura</li>
				<li><span>3°</span> Avaliações in loco</li>
			</ul>
			<ul class="passo-passo p-t-50">
				<li><span>4°</span> Reunião de encerramento</li>
				<li><span>5°</span> Preparação do relatório</li>
				<li><span>6°</span> Apoio ao tratamento de NCs* – *Serviço à parte</li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="bg-celeste">
		<div class="container p-t-70 p-b-70">
			<h2 class="p-b-25"><strong>Conheça os serviços relacionados</strong></h2>
			<ul class="sgi-list-1 b-w p-t-25">
				<li>
					<h3>Relatório de Desempenho Ambiental</h3>
					<p>O RADA é um relatório de controle ambiental utilizado como base técnica para o órgão licenciador no pedido da revalidação da Licença de Operação. O objetivo é avaliar o desempenho ambiental do empreendimento de acordo com o cumprimento das condicionantes ambientais durante a vigência da licença. O processo de revalidação permite também ao empreendedor destacar os compromissos voluntários assumidos e algum passivo ambiental desconhecido ou não declarado por ocasião da licença prévia, licença de instalação, licença de operação ou última revalidação.</p>
				</li>
				<li>
					<h3>Perícias Ambientais</h3>
					<p>As perícias visam fornecer dados conclusivos para as organizações, através de análises qualitativas ou quantitativas (medições), sobre determinados aspectos e impactos ambientais. Nessas avaliações ambientais são elaborados relatórios técnicos jurídicos, constituindo ferramenta importante para tomada de decisão, defesas em casos de processos judiciais, etc. A Perícia Ambiental é uma fonte de dados para defesa em caso de processos judiciais ou em órgãos ambientais (multas, TACs).</p>
				</li>
				<li>
					<h3>Inventários de Gases de Efeito Estufa</h3>
					<p>O Inventário de Emissões de GEE visa identificar e catalogar todos os gases de efeito estufa provocados pela atividade de determinada organização, empresa, indústria ou geradas por algum evento, entre outros. Desta maneira, é possível mensurar o impacto causado pela emissão de uma organização e propor projetos de mitigação e compensação ambiental.</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section>	
	<div class="container p-t-70 p-b-70">
		<h2 class="p-b-25"><strong>A Consultoria Técnica oferece vários ganhos para sua empresa</strong></h2>
		<ul class="vantagens-auditoria p-t-50">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/De-acordo-com-a-lei.png" alt="De acordo com a lei">
				<h3>De acordo com a lei</h3>
				<p>Atendimento as legislações e as exigências dos órgãos ambientais licenciadores.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/evitar-multas.png" alt="evitar multas">
				<h3>Evite multas</h3>
				<p>Prevenção de auto de infração, multas e/ou paralização da atividade da empresa.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Conhecimento.png" alt="Conhecimento">
				<h3>Conhecimento</h3>
				<p>Acesso e conhecimento da avaliação do desempenho ambiental da organização. Fonte de dados para defesa em caso de processos judiciais e em órgãos ambientais.</p>
			</li>
		</ul>
		<ul class="vantagens-auditoria m-t-5">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Tomada-de-Decisao.png" alt="Tomada de Decisão">
				<h3>Tomada de Decisão</h3>
				<p>Fornecimento de dados sólidos e confiáveis para tomada de decisão, quando as variáveis ambientais são importantes.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Reducao-de-Custos.png" alt="Reducao de Custos">
				<h3>Redução de Custos</h3>
				<p>Melhoria da eficiência em processos gerenciais e evita maiores danos financeiros e à imagem da sua empresa.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/sustentabilidade.png" alt="sustentabilidade">
				<h3>Sustentabilidade</h3>
				<p>Obtenção de vantagem competitiva e diferencial para o negócio, uma vez que a organização será vista como uma unidade sustentável.</p>
			</li>
		</ul>
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
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-consultoria-tecnica">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<div class="row d-flex">				
				<div class="col-md-6">
					<h2 class="p-b-25 h2-interno"><strong>Fique atento aos prazos!</strong></h2>
					<p>As Consultorias Técnicas são uma ótima saída para que você consiga atender prazos de entrega de relatórios aos órgãos competentes de acordo com seu ramo de atividade. Geralmente são relatórios densos e específicos que podem compor, por exemplo, uma Licença Ambiental no caso do RADA, ou um Cadastro Técnico Federal, que pode ser o RAPP. Esses relatórios são utilizados como base técnica para a revalidação de cadastros.</p>
				</div>
				<div class="col-md-6 text-right">
					<img class="v-center" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/atento-prazos.png" alt="atento prazos">
				</div>
			</div>
		</div>		
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal consultoria tecnica -->
<div class="modal fade" id="modal-consultoria-tecnica" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Institucional Verde Ghaia</h4>
			</div>
			<div class="modal-body">
				<div id="proposta-consultoria-tecnica-d3b1b1348e44566cef55"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('proposta-consultoria-tecnica-d3b1b1348e44566cef55-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>


<?php get_footer(); ?>

