<?php /* Template Name: Certificações */ 
	
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
		   			<a class="btn-yellow" href="">Baixar a apresentação</a>
			   	</div>
			   	<div class="col-md-5 text-banner-interno p-l-50">
		   			<h2>Certificação vale a pena!</h2>
		   			<ul>
		   				<li><i class="fa fa-star p-r"></i>Destaque entre os concorrentes</li>
						<li><i class="fa fa-star p-r"></i>Conquista de novos mercados</li>
						<li><i class="fa fa-star p-r"></i>Processos internos fluindo corretamente</li>
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
				<h2 class="p-b-25 h2-interno"><strong>Certificação Internacional (ISO)</strong></h2>
				<p>A busca pela certificação é um passo importante, porque, além de revelar profissionalismo, destaca a empresa frente a seus concorrentes e – o principal, organiza seus processos internos. Para alcançar o tão sonhado selo de reconhecimento internacional é necessário atender aos requisitos das normas, cerca de 10 importantes itens – no caso da ISO 9001 e , por exemplo, que norteiam os gestores de como gerenciar da melhor forma suas áreas de Qualidade, SST, MA, Segurança de Alimentos e outras. Mas se sua empresa já é certificada e precisa de apoio técnico para manter ou melhorar o Sistema de Gestão, conte com a gente! Confira abaixo as diversas soluções da Verde Ghaia. Uma delas será a ideal para o seu negócio.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/certificacoes-iso-ohsas.png" alt="certificações iso ohsas">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-70 p-b-70">
			<h2 class="f-celeste"><strong>Passo a passo para a realização de uma Auditoria de SGI</strong></h2>
			<ul class="passo-passo p-t-50">
				<li><span>1°</span> Diagnóstico inicial</li>
				<li><span>2°</span> Planejamento da implantação do Sistema de Gestão da Qualidade</li>
				<li><span>3°</span> Apoio para interpretação e adequação da empresa às exigências da ISO 9001:2015</li>
			</ul>
			<ul class="passo-passo p-t-50">
				<li><span>4°</span> Consultoria online</li>
				<li><span>5°</span> Auditoria Interna</li>
				<li><span>6°</span> Ações corretivas para ajustes</li>
				<li><span>7°</span> Acompanhamento até a certificação</li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-70 p-b-70">
		<h2 class="text-center p-b-25"><strong>Implementação e Consultoria de diversas Normas Internacionais</strong></h2>
		<ul class="vantagens-auditoria p-t-50">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/iso-9001-2015.png" alt="iso 9001 2015">
				<h3>ISO 9001:2015</h3>
				<p>Sistema de Gestão da Qualidade</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/iso-14001-2015.png" alt="iso 14001 2015">
				<h3>ISO 14001:2015</h3>
				<p>Sistema de Gestão de Meio Ambiente</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/ISO-22000-2008.png" alt="ISO 22000 2008">
				<h3>ISO 22000:2008</h3>
				<p>Sistema de Gestão de Segurança de Alimentos</p>
			</li>
		</ul>
		<ul class="vantagens-auditoria m-t-5">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/OHSAS-18001.png" alt="OHSAS 18001">
				<h3>OHSAS 18001</h3>
				<p>Sistema de Gestão de Saúde e Segurança do Trabalho</p>
				<!-- <a href="https://www.consultoriaiso.org/ohsas-18001/o-que-e-ohsas-18001/" class="btn-blue">OHSAS 18001</a> -->
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/SA-8000.png" alt="SA 8000">
				<h3>SA 8000</h3>
				<p>Sistema de Gestão de Responsabilidade Social</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/internas/Migracao.png" alt="Migracao certificação">
				<h3>Migração</h3>
				<p>Migre para as novas versões das Normas de Qualidade, de Meio Ambiente e de Saúde e Segurança do Trabalho</p>
			</li>
		</ul>
	</div>
</section>

<section>
	<div class="bg-celeste p-t-70 p-b-70">
		<div class="container list-certificacoes">
			<h2 class="text-center p-b-50"><strong>Conheça os serviços relacionados</strong></h2>
			<ul class="sgi-list-1">
				<li>
					<h3>SOGI</h3>
					<p>O software oferece funcionalidades para empresas que querem implantar, melhorar e gerir seu Sistema de Gestão. Por isso, o soGi é editado a partir das orientações das normas internacionais de certificação – ISO 9001, ISO 14001, OHSAS 18001, ISO 22000, ISO 50001 e outras.</p>
					<div class="text-center">
						<a href="https://www.verdeghaia.com.br/desempenho-de-gestao/sogi/" class="btn-yellow">Acesse</a>
					</div>					
				</li>
				<li>
					<h3>Consultoria On-line</h3>
					<p>Suporte com Consultor especializado em certificações para orientar, esclarecer dúvidas e auxiliar a sua empresa a implantar ou manter a certificação ISO</p>
					<div class="text-center">
						<a href="https://www.consultoriaiso.org/" class="btn-yellow">Acesse</a>
					</div>
				</li>
				<li>
					<h3>Consultoria de SGI</h3>
					<p>Consultoria para auxiliar na interpretação da norma ISO 9001, na adequação da empresa aos requisitos normativos, na implementação do Sistema de Gestão da Qualidade, na avaliação dos indicadores, metas e do desempenho do SGQ.</p>
					<div class="text-center">
						<a href="https://www.verdeghaia.com.br/desempenho-de-gestao/consultoria-de-sgi/" class="btn-yellow">Acesse</a>
					</div>
				</li>
			</ul>
			<ul class="sgi-list-1">
				<li>
					<h3>Auditoria de conformidade Legal</h3>
					<p>Perspectiva imparcial sobre o sistema de gestão da empresa, avaliando a sua performance, o atendimento aos requisitos da norma, pontos fortes e possibilidades de melhoria. Voltada para empresas que buscam a certificação, sua manutenção ou para aqueles que querem apenas avaliar o seu desempenho.</p>
					<div class="text-center">
						<a href="https://www.verdeghaia.com.br/desempenho-legal/auditoria-de-conformidade-legal/" class="btn-yellow">Acesse</a>
					</div>
				</li>
				<li>
					<h3>Treinamentos</h3>
					<p>Cursos on-line voltados para a gestão da sustentabilidade da sua empresa. Aprenda a interpretar as normas, a realizar migração para novas versões, entre outros. São mais de 50 cursos à sua disposição.</p>
					<div class="text-center">
						<a href="https://ead.verdeghaia.com.br/" class="btn-yellow">Acesse</a>
					</div>
				</li>
				<li>
					<h3>SOGI LIRA</h3>
					<p>O módulo LIRA do SOGI é o mais completo e confiável para gerenciamento e monitoramento de sua legislação e requisitos legais do mercado. Criado em 2001, hoje possui mais de 1.200 clientes ativos de diversos segmentos e porte.</p>
					<div class="text-center">
						<a href="https://www.verdeghaia.com.br/desempenho-legal/lira/" class="btn-yellow">Acesse</a>
					</div>
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
					<a class="btn-yellow" href="">Contato</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','ebooks'); ?>

<?php get_footer(); ?>