<?php /* Template Name: Auditoria Sistema de Gestao */ 
	
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
		   			<a class="btn-yellow"  data-toggle="modal" data-target="#modal-Auditoria-sgi">Baixar a apresentação</a>
			   	</div>
			   	<div class="col-md-5 text-banner-interno p-l-50">
		   			<h2>Saiba qual lei sua empresa não pode deixar de atender</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Tire dúvidas minuciosas das áreas de MA e SST</li>
						<li><i class="fa fa-star p-r"></i>Tenha acesso à Matrizes de risco</li>
						<li><i class="fa fa-star p-r"></i>Trate pontos críticos corretamente</li>
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
				<h2 class="p-b-25 h2-interno"><strong>Por que é importante examinar e validar sua gestão?</strong></h2>
				<p>A Auditoria Interna ou Auditoria de Sistema de Gestão é importante, principalmente, para empresas que querem medir seu desempenho em relação ao atendimento aos requisitos das normas monitoradas. Para conseguir ou manter a certificação internacional é necessário verificar se existe algo para modificar ou melhorar. A Auditoria Interna mensura se os resultados estão de acordo com as ações e procedimentos planejados, se a implementação destes foi realizada de forma eficaz e se estão adequados aos objetivos definidos nas estratégias de atuação das organizações.</p>
			</div>
			<div class="col-md-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/auditoria-de-sgi.png" alt="auditoria de sgi">
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
			<h2 class="text-center p-b-25"><strong>Conheça os serviços relacionados</strong></h2>
			<ul class="sgi-list-1">
				<li>
					<h3>Auditoria Interna</h3>
					<p>Também chamada de Auditoria de Primeira Parte. Avalia o desempenho relativo ao sistema de gestão, considerando as obrigações normativas. As auditorias internas podem ser de Avaliação da Conformidade (in loco) ou de Adequação (à distância).<br>
					Auditoria Interna Integrada<br>
					Auditoria Interna ISO 9001<br>
					Auditoria Interna ISO 14001<br>
					Auditoria Interna 22000<br>
					Auditoria Interna OHSAS 18001<br>
					Auditoria Interna SA 8000</p>
				</li>
				<li>
					<h3>Auditoria em Fornecedores</h3>
					<p>Também chamada de Auditoria de Segunda Parte. Aplicada aos players da cadeia de suprimento da organização de acordo com critérios previamente definidos, tais como normas internacionais, requisitos legais, requisitos do próprio cliente.</p>
				</li>
				<li>
					<h3>Auditoria Compulsória</h3>
					<p>Aplicável de acordo com a atividade da organização. Seus critérios são definidos por requisitos legais e normas específicas, vinculados normalmente ao órgão estadual responsável.</p>
				</li>
			</ul>
			<ul class="sgi-list-2">
				<li>
					<h3>Acompanhamento de Auditoria Externa</h3>
					<p>Acompanhamento das auditorias realizadas por Organismos de Certificação Credenciados. Suporte necessário à equipe auditada conferindo maior segurança e credibilidade aos resultados apresentados.</p>
				</li>
				<li>
					<h3>Duo Auditoria</h3>
					<p>Avaliação da Conformidade Legal integrada à avaliação da Auditoria de Sistema de Gestão. O objetivo é medir o nível de desempenho em relação às obrigações legais e aos requisitos</p>
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
					<h2><strong>Fale agora com nosso Consultor Comercial</strong></h2>
				</div>
				<div class="col-md-4">
					<a class="btn-yellow" data-toggle="modal" data-target="#modal-Auditoria-sgi">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>	
	<div class="container p-t-70 p-b-70">
		<h2 class="p-b-25"><strong>A Gestão de Auditoria Interna oferece vários ganhos para sua empresa</strong></h2>
		<ul class="vantagens-auditoria p-t-50">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/performance.png" alt="performance">
				<h3>Performance</h3>
				<p>Avaliação da performance dos processos, colaborando assim de forma direta nos resultados do negócio.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/nao-conformidade.png" alt="não conformidade">
				<h3>Não conformidade</h3>
				<p>Identificação de desvios e Não Conformidades de forma a possibilitar a tomada de ações corretivas e preventivas.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/certificacao.png" alt="certificação">
				<h3>Certificação</h3>
				<p>Cumprimento de exigências das normas de referência para obtenção de certificações.</p>
			</li>
		</ul>
	</div>	
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<div class="row d-flex">
				<div class="col-md-4">
					<img class="v-center" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/profissional-sgi.png" alt="profissional sgi">
				</div>
				<div class="col-md-8">
					<h2 class="p-b-25 h2-interno"><strong>Prefira um profissional imparcial e com conhecimento prático</strong></h2>
					<p>A Auditoria de SGI deve ser conduzida por executivo capacitado e habilitado nas normas NBR ISO 9001, , OHSAS 18001, SA 8000, NBR 16001, ISO 22000 e/ou ISO 50001. Seja para fins de certificação ou apenas com o objetivo de verificar o desempenho do seu sistema de gestão, exija um profissional qualificado e sem relação com sua empresa, para que o trabalho seja imparcial. Os conceitos necessários para auditar seu Sistema de Gestão e a aplicação das melhores práticas de procedimentos e técnicas de auditoria também podem ser encontrados nos cursos online de Auditor Interno da Verde Ghaia. Principais motivos que levam uma empresa a contratar um auditor externo:</p>

					<p>Imparcialidade | Medida de controle interno | Imposição de norma certificadora | Atender às exigências da própria política da empresa</p>
				</div>
			</div>
		</div>		
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<!-- Modal Apresentação Auditoria SGI -->
<div class="modal fade" id="modal-Auditoria-sgi" role="dialog">
    <div class="modal-dialog">    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Auditoria de Sistemas de Gestão</h4>
			</div>
			<div class="modal-body">
				<div id="decisao-de-compra-auditoria-de-sgi-d9681b3a7a77b7e0fd9d"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('decisao-de-compra-auditoria-de-sgi-d9681b3a7a77b7e0fd9d-html', 'UA-96877999-1').createForm();
				</script>
			</div>
			<div class="modal-footer">
			</div>
		</div>      
    </div>
</div>

<?php get_footer(); ?>

