<?php /* Template Name: Assesoria Juridica */ 
	
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
	   			<a class="btn-blue" data-toggle="modal" data-target="#modal-assessoria-juridica">Contratar</a>
		   	</div>
		   	<div class="col-md-5 text-banner-interno">
	   			<h2>Apoio jurídico no momento certo</h2>
	   			<ul>
	   				<li><i class="fa fa-star p-r"></i>Assessoria nas áreas de MA e SST</li>
					<li><i class="fa fa-star p-r"></i>Tratamento dos pontos críticos criteriosamente</li>
					<li><i class="fa fa-star p-r"></i>Apoio integral em questões jurídicas</li>	   				
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
				<h2 class="p-b-25 h2-interno"><strong>Embasamento jurídico é a chave para tomada de decisões</strong></h2>
				<p>A Assessoria Jurídica da Verde Ghaia é voltada para as áreas ambiental e de saúde e segurança e é dividida em diversos serviços. O objetivo é orientar e apoiar o cliente em questões jurídicas, alertando sobre os pontos críticos da sua atividade ou do tema em questão. A Assessoria Jurídica mostra o que deve ser tratado com prioridade, fornecendo subsídio para que sempre a empresa sempre esteja em conformidade com a disposição dos requisitos legais.</p>
			</div>
			<div class="col-md-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/embasamento-juridico.png" alt="embasamento juridico">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-celeste p-t-50 p-b-50">
		<div class="container">
			<h2 class="p-b-25 h2-interno"><strong>Conheça os serviços relacionados</strong></h2>
			<ul class="servicos-interno p-t-25 b-w">
				<li>
					<h3>Pareceres</h3>
					<p>Opinião jurídica e direcionamento sobre um assunto determinado.</p>
				</li>
				<li>
					<h3>Ofícios</h3>
					<p>Comunicado oficial junto à órgãos públicos.</p>
				</li>
				<li>
					<h3>Cartas de Fornecedor</h3>
					<p>Levantamento de obrigações documentais que devem ser apresentadas pelos prestadores de serviço de determinado segmento.</p>
				</li>
				<li>
					<h3>Contencioso Administrativo</h3>
					<p>Interposição e acompanhamento de defesas administrativas</p>
				</li>
			</ul>
			<ul class="servicos-interno m-t-5">
				<li>
					<h3>Participação em Reuniões</h3>
					<p>Participação em Reuniões junto a órgãos ambientais, prestadores de serviço, parceiros, entre outros.</p>
				</li>
				<li>
					<h3>Apoio Jurídico na interpretação de dados técnicos</h3>
					<p>Análise de laudos de qualidade de solo e água, comparando ao exigido na legislação aplicável.</p>
				</li>
				<li>
					<h3>Apoio Jurídico em Perícias Ambientais</h3>
					<p>Apoio do desenvolvimento de Perícias.</p>
				</li>
				<li>
					<h3>Identificação de documentos aplicáveis a uma nova unidade industrial</h3>
				</li>
			</ul>
			<div class="p-t-50 text-center">
				<a data-toggle="modal" data-target="#modal-assessoria-juridica" class="btn-yellow">Quero Contratar!</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza p-t-50 p-b-50">
		<div class="container">
			<h2><strong>Vantagens de uma Assessoria Jurídica especializada</strong></h2>
			<ul class="vantagens-interno p-t-50">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/priorizacao-recursos.png" alt="priorizacao recursos">
					<h3>Priorização de recursos</h3>
					<p>Estratégico para decidir investimentos financeiros e estruturais, contratação de mão de obra, profissionalização, investimentos tecnológicos, treinamentos.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Defesa.png" alt="defesa Jurídica">
					<h3>Defesa</h3>
					<p>Evita autuações, multas, paralisação de atividades, por meio da correção de possíveis irregularidades constatadas na Auditoria.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Tranquilidade.png" alt="Tranquilidade Jurídica">
					<h3>Tranquilidade</h3>
					<p>Certeza de que está sendo assessorado por equipe jurídica com experiência prática e teórica nas áreas de meio ambiente e saúde e segurança.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Confidencialidade.png" alt="Confidencialidade Jurídica">
					<h3>Confidencialidade</h3>
					<p>Garantia de sigilo e confidencialidade sobre todas e quaisquer informações, dados, documentos, projetos, arquivos e quaisquer outros materiais.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Autoridade.png" alt="Autoridade Jurídica">
					<h3>Autoridade</h3>
					<p>Informações concretas e consistentes sobre a pauta, presença e apoio em reuniões decisivas e interposições.</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<div class="row">			
			<div class="col-md-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/escolher-bom-advogado.png" alt="escolher bom advogado">
			</div>
			<div class="col-md-6">
				<h2 class="p-b-25 h2-interno"><strong>Escolha um advogado especialista na sua necessidade</strong></h2>
				<p>A Verde Ghaia possui um departamento específico para todos os atendimentos relacionados à Assessoria Jurídica e Risco Legal. Todo trabalho é realizado por advogados com vivência e prática jurídica e técnica, especialistas em gestão e direito ambiental. Conheça cada um destes serviços acompanhando o site de  Risco Legal da Verde Ghaia através das notícias e artigos atualizados semanalmente, principalmente no que tange as áreas de Meio Ambiente e Saúde e Segurança no Trabalho.</p>
			</div>
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
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-assessoria-juridica">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal assessoria juridica-->
<div class="modal fade" id="modal-assessoria-juridica" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Assessoria Jurídica</h4>
			</div>
			<div class="modal-body">
				<div id="proposta-assessoria-juridica-f04b9254fceb55a08180"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
					new RDStationForms('proposta-assessoria-juridica-f04b9254fceb55a08180-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<?php get_footer(); ?>

