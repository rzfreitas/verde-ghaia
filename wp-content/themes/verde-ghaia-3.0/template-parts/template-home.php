<?php /* Template Name: Home */ 
	
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
		<div class="container v-center f-branca content-banner">
			<h1><?php the_field('title_banner'); ?></h1>
		   	<p class="p-b-25"><?php the_field('text_banner'); ?></p>
			<!-- <a class="btn-blue" data-toggle="modal" data-target="#modal-sogi">Contrate *</a> -->
		</div>	
	<?php endif; ?>
</div>
</section>

<section>
	<div class="bg-clientes">
		<div class="container text-center">
			<?php if( have_rows('clientes_home') ): ?>
			<ul class="clientes">
			<?php while( have_rows('clientes_home') ): the_row(); 
				// vars
				$imagecliente = get_sub_field('imagem_cliente_home');
				?>

				<a href="https://www.verdeghaia.com.br/grupo-verde-ghaia/clientes/"><li class="cliente">
					<img class="img-responsive" src="<?php echo $imagecliente['url']; ?>" alt="<?php echo $imagecliente['alt'] ?>" />
				</li></a>
			<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<div class="row">
			<div class="col-md-12">
				<h2><?php the_field('titulo1'); ?></h2>
			</div>			
		</div>
		<div class="p-t-25 p-b-25">
			<p><?php the_field('conteudo1'); ?></p>
			<div class="p-t-25">
				<a class="link-blue p-r" id="leiaMais">Leia mais <i class="fa fa-chevron-right"></i></a>	
			</div>
			<div class="text-hide">
				<div class="p-t-70">
					<p>A Verde Ghaia tem as melhores soluções para a Gestão de Risco e alcance da Sustentabilidade de médias e grandes organizações não só do Brasil, mas de países da América e África. Somos especialistas em ferramentas rápidas e práticas para monitoramento legal e implementação de sistemas de gestão, hoje utilizadas por mais de 2.000 empresas e 30.000 usuários. Com regionais em vários estados do país, oferecemos dinamicidade no seu processo, não só para atividades in loco, mas também utilizando muito de ferramentas on-line. Conte com o apoio de uma equipe multidisciplinar com experiência prática em diversos ramos de atividade. Nossas ferramentas e soluções estão em desenvolvimento constante, o que não deixa a gestão defasada ou fora do tempo.</p>

					<p>Para o alcance da Sustentabilidade, a Verde Ghaia opera em três frentes de trabalho, são elas: Desempenho Legal, Desempenho de Gestão e Desempenho na Gestão de Resíduos.</p>

					<p>Em Desempenho Legal trazemos soluções importantes para que sua empresa esteja 100% em compliance. A principal ferramenta é a Auditoria de Risco Jurídico, que são embasadas pelas Auditorias de Conformidade Legal, que por sua vez precisam do constante monitoramento de requisitos legais realizado através do módulo LIRA do SOGI – software de gestão da Verde Ghaia. Aliado a isso, oferecemos Assessoria Jurídica para casos pontuais, principalmente das áreas ambiental e de saúde e segurança.</p>

					<p>Em Desempenho de Gestão trabalhamos com as principais normas internacionais, não só na sua implementação, mas também na manutenção. Através do SOGI, o melhor software de gestão do país, e da plataforma de Consultoria Online é possível gerenciar todas as tarefas do seu sistema de gestão, com alertas e suporte rápido sempre que necessário. Complete a isso as Auditorias de Sistema de Gestão, as Consultorias Técnicas e os Cursos On-line, ótimo para treinamento em massa da sua equipe.</p>

					<p>Desempenho de Resíduos fecha o programa com trabalhos de gestão de resíduos, Plano de Gerenciamento de Resíduos e o VG Resíduos – software premiado em 2017 e 2018. Através deste sistema é possível encontrar os melhores fornecedores de descarte da sua região e até mesmo anunciar seu resíduo para venda.</p>

					<p>Bom trabalho! Tenha certeza que com o apoio da Verde Ghaia sua empresa vai trilhar um caminho de crescimento contínuo devido às boas práticas implantadas, além de aumentar o valor de sua reputação diante da sociedade e acionistas por compartilhar os mesmos valores que a nossa empresa.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section>
	<div class="container box-content m-t-50">
		<h2><?php the_field('titulo2'); ?></h2>
		<div class="p-t-25">
			<p><?php the_field('conteudo2'); ?></p>
		</div>	
	</div>
</section> -->

<section>
	<div class="bg-celeste p-t-50 p-b-50">
		<div class="container">			
			<h2 class="text-center">Para a Verde Ghaia, a Sustentabilidade Empresarial passa pelo alto desempenho das seguintes gestões:</h2>
			<div class="box-branco m-t-50">
				
				<h3 class="legislacao-title">Gestão da Legislação</h3>
				<ul class="links legislacao">
					<li>
						<a href="https://www.verdeghaia.com.br/desempenho-legal/lira/">Monitoramento Legal<i class="fa fa-caret-right"></i></a>						
					</li>
					<li>
						<a href="https://www.verdeghaia.com.br/desempenho-legal/assessoria-juridica/">Assessoria Jurídica<i class="fa fa-caret-right"></i></a>						
					</li>
					<li>
						<a href="http://vgriscolegal.com.br/">Risco Legal<i class="fa fa-caret-right"></i></a>						
					</li>
					<li>
						<a href="https://www.verdeghaia.com.br/desempenho-legal/auditoria-de-conformidade-legal/">Auditoria de Conformidade Legal<i class="fa fa-caret-right"></i></a>						
					</li>
				</ul>
				
				<div class="p-t-25">
					<h3 class="integrada-title">Gestão Integrada</h3>
					<ul class="links integrada">
						<li>
							<a href="https://www.verdeghaia.com.br/desempenho-de-gestao/certificacoes-iso-ohsas/">Certificações<i class="fa fa-caret-right"></i></a>		
						</li>
						<li>
							<a href="https://www.consultoriaiso.org/">Consultoria online<i class="fa fa-caret-right"></i></a>							
						</li>
						<li>
							<a href="https://www.verdeghaia.com.br/desempenho-de-gestao/sogi/">SOGI - Software de  Gestão Integrada<i class="fa fa-caret-right"></i></a>						
						</li>
						<li>
							<a href="https://www.verdeghaia.com.br/desempenho-gestao/auditorias-de-sistema-de-gestao/">Auditorias de Sistema de Gestão<i class="fa fa-caret-right"></i></a>				
						</li>
					</ul>
				</div>

				<div class="p-t-25 p-b-25">
					<h3 class="residuos-title">Gestão de Resíduos</h3>
					<ul class="links residuos">
						<li>
							<a href="https://www.verdeghaia.com.br/desempenho-de-residuos/plano-de-gerenciamento-de-residuos-pgrs/">PGRS/PGRSS<i class="fa fa-caret-right"></i></a>
						</li>
						<li>
							<a href="https://www.vgresiduos.com.br/">VG Resíduos<i class="fa fa-caret-right"></i></a>	
						</li>
						<li>
							<a href="http://www.vgbioenergia.com.br/">Gestão de resíduos<i class="fa fa-caret-right"></i></a>			
						</li>
						<li>
							<a href="https://www.vgresiduos.com.br/mercado-de-residuos/">Mercado de resíduos<i class="fa fa-caret-right"></i></a>			
						</li>
					</ul>
				</div>
				<!-- <div class="text-center p-t-25 p-b-25">
					<a href="" class="btn-white">Veja mais...</a>
				</div> -->
			</div>
		</div> <!-- container -->
	</div><!-- bg-celeste -->	
</section>

<section>
<div class="container softwares-gestao p-t-50 p-b-70">
	<div class="text-center p-t-50 p-b-70">
		<h2>Acelere sua Gestão</h2> 
		<h3 class="italic">Softwares</h3>
	</div>
	<div class="row d-flex p-b-50">
		<div class="col-md-6">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/sogi.png" alt="sistema online gestão integrada">
		</div>
		<div class="col-md-6 p-relative">
			<h2 class="f-blue p-b-50">Flexibilidade e praticidade para Gestão Integrada e Monitoramento Legal</h2>
			<p>Oferecemos consultoria online para melhoria do seu sistema de gestão, com foco nas normas ISO. Através de vídeos, textos e suporte dos nossos consultores, sua equipe resolve todas as dúvidas rapidamente e quando precisar, a seu tempo. O objetivo da consultoria é não só buscar a certificação, mas aprimorar o sistema de gestão dos usuários. Acreditamos que as normas internacionais sejam um diferencial para o sucesso da empresa, e não só um selo a ser divulgado. Utilize nossa expertise para mostrar resultados efetivos de melhoria de sua gestão.</p>
			<a class="btn-blue btn-bot-align" data-toggle="modal" data-target="#modal-sogi">Contrate o soGi</a>
		</div>				
	</div>

	<div class="row d-flex p-t-50 p-b-50 border-t hidden-xs">		
		<div class="col-md-6 p-relative">
			<h2 class="f-verde p-b-50 text-right">Redução de custos na logística e consultoria a seu tempo</h2>
			<p class="text-right">Oferecemos consultoria online para melhoria do seu sistema de gestão, com foco nas normas ISO. Através de vídeos, textos e suporte dos nossos consultores, sua equipe resolve todas as dúvidas rapidamente e quando precisar, a seu tempo. O objetivo da consultoria é não só buscar a certificação, mas aprimorar o sistema de gestão dos usuários. Acreditamos que as normas internacionais sejam um diferencial para o sucesso da empresa, e não só um selo a ser divulgado. Utilize nossa expertise para mostrar resultados efetivos de melhoria de sua gestão.</p>			
			<a class="btn-verde btn-bot-align right" href="https://www.consultoriaiso.org/">Contrate a Consultoria Online</a>			
		</div>
		<div class="col-md-6">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/consultoria-online.png" alt="consultoria online">
		</div>			
	</div>

	<div class="row d-flex p-t-50 p-b-50 border-t visible-xs visible-sm">		
		<div class="col-md-6">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/consultoria-online.png" alt="consultoria online">
		</div>
		<div class="col-md-6 p-relative">
			<h2 class="f-verde p-b-50 text-right">Redução de custos na logística e consultoria a seu tempo</h2>
			<p class="text-right">Oferecemos consultoria online para melhoria do seu sistema de gestão, com foco nas normas ISO. Através de vídeos, textos e suporte dos nossos consultores, sua equipe resolve todas as dúvidas rapidamente e quando precisar, a seu tempo. O objetivo da consultoria é não só buscar a certificação, mas aprimorar o sistema de gestão dos usuários. Acreditamos que as normas internacionais sejam um diferencial para o sucesso da empresa, e não só um selo a ser divulgado. Utilize nossa expertise para mostrar resultados efetivos de melhoria de sua gestão.</p>			
			<a class="btn-verde btn-bot-align right" href="https://www.consultoriaiso.org/">Contrate a Consultoria Online</a>			
		</div>		
	</div>

	<div class="row d-flex p-t-50 border-t">
		<div class="col-md-6">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/vg-residuos.png" alt="gestão resíduos">
		</div>
		<div class="col-md-6 p-relative">
			<h2 class="f-blue p-b-50">Gestão completa de resíduos, da geração até a destinação final</h2>
			<p>O VG Resíduos traz funcionalidades específicas para o controle das áreas geradoras, dos processos, dos prestadores de serviços e dos documentos, tudo com metodologia baseada na Política Nacional de Resíduos e demais legislações pertinentes ao assunto. A plataforma ainda conta com o Mercado de Resíduos, um aplicativo que ajuda a encontrar os melhores tratadores e fornecedores para destinar seus resíduos. Todos já analisados e com documentos em dia. Através do VG Resíduos também é possível controlar suas licenças, gerar relatórios para envio aos órgãos ambientais e muito mais.</p>
			<a class="btn-blue btn-bot-align" href="https://www.vgresiduos.com.br/">Acesse a plataforma</a>
		</div>				
	</div>
	<div class="m-t-100 text-center">
		<a class="btn-w-b" href="https://www.verdeghaia.com.br/servicos/">Ver mais...</a>
	</div>
</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container p-t-25 p-b-25">
			<div class="row d-flex">
				<div class="col-md-4">
					<a href="https://ead.verdeghaia.com.br/"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/EAD-vg.png" alt="ead verde ghaia"></a>
				</div>
				<div class="col-md-8">
					<h2 class="v-center">Aprenda a qualquer hora, <br> em qualquer lugar</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content','cursos-destaques'); ?>

<!-- <section>
	<div class="bg-cinza p-t-50 p-b-50">
		<div class="container">
			<h2>Aprenda a qualquer hora, <br> em qualquer lugar</h2>
		</div>
		<div class="container">
			<div class="row m-t-50 d-flex">
				<div class="col-md-4">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/portabilidade-agua.png" alt="portabilidade água">		
					</div>
					
					<div class="info-cursos">
						<h3>Potabilidade da Água</h3>
						<p>Como Garantir o Atendimento aos Padrões Estabelecidos pela Legislação referente à Potabilidade da Água.</p>
						<div class="curso-preco">R$ 380,00</div>
						<div class="stars d-inline-flex p-b-25 p-t-25"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</div>
						<a href="" class="btn-curso">Comprar</a>
					</div>
				</div>
				<div class="col-md-4">
					<div>
						<img class="p-relative" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/ISO-9001-2015-Sistema-Gestao-Qualidade.png">
						<span class="mais-vendidos">Mais vendidos</span>
					</div>
					<div class="info-cursos">
						<h3>ISO 9001:2015 - Sistema de Gestão de Qualidade</h3>
						<p>Curso de Interpretação da NBR ISO 9001 versão 2015</p>
						<div class="curso-preco">R$ 380,00</div>
						<div class="stars d-inline-flex p-b-25 p-t-25"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</div>
						<a href="" class="btn-curso">Comprar</a>
					</div>
				</div>
				<div class="col-md-4">
					<div>
						<img class="p-relative" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/ISO-1400-12015-sistema-de-Gestao-de-Meio-Ambiente.png">
						<span class="mais-vendidos">Mais vendidos</span>
					</div>					
					<div class="info-cursos">
						<h3>ISO 14001:2015 - Sistema de Gestão de Meio Ambiente</h3>
						<p>Entenda as mudanças da nova ISO 45001</p>
						<div class="curso-preco">R$ 380,00</div>
						<div class="stars d-inline-flex p-b-25 p-t-25"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</div>
						<a href="" class="btn-curso">Comprar</a>
					</div>
				</div>
			</div>
			<div class="text-center m-t-50">
				<a class="btn-azul-off">Conheça nossos planos corporativos</a>
			</div>
		</div>
	</div>
</section> -->

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

<?php get_footer(); ?>