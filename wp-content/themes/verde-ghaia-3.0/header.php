<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package risco-legal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	
	<?php include_once("analyticstracking.php") ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'risco-legal' ); ?></a>

	<header id="masthead" class="site-header idHeader">
		<div class="container">
			<div class="row d-flex p-relative">
				<div class="site-logo col-sm-9 col-xs-9 col-md-2">	
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/logo-vg-header.png" alt="logo verde ghaia"></a>
				</div>
				<div class="col-sm-3 col-xs-3 col-md-10">
					<div class="v-center d-box">						
							
							<div class="m-t-5 hidden-xs">
								<a class="btn-menu">Por que a Verde Ghaia <i class="fa fa-caret-down"></i></a>
							</div>

							<div class="nav-border">
								<nav id="site-navigation" class="hidden-xs main-navigation">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
								?>
								</nav><!-- #site-navigation -->
							</div>

							<div class="icon-tools hidden-xs p-relative">
								<i id="solucoes-vg" class="fa fa-th"></i>
								<div class="solucoes-vg invisible">
									<h3>Soluções Verde Ghaia</h3>									
									<ul>
										<li>
											<a href="https://contas.verdeghaia.com.br/ServiceLogin?continue=https:%2F%2Fsogi8.sogi.com.br%2F">
											<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/sogi.png" alt="sogi verde ghaia">
												<p>SOGI</p>
											</div></a>
										</li>
										<li>
											<a href="https://vgresiduos.com.br/">
												<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/vg-residuos.png" alt="vg resíduos">
													<p>VG Resíduos</p>
												</div></a>
										</li>
										<li>
											<a href="https://futurelegis.sogi.com.br/">
												<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/future-legis.png" alt="future legis verde ghaia">
													<p>Future Legis</p>
												</div></a>
										</li>
										<li>
											<a href="https://www.consultoriaiso.org/">
												<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/consultoria-online.png" alt="consultoria online verde ghaia">
													<p>Consultoria Online</p>
												</div></a>
										</li>
										<li>
											<a href="https://loja.sgionline.com.br/">
												<div><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logos/loja-vg.png" alt="loja verde ghaia">
													<p>Loja</p>
												</div></a>										
										</li>
									</ul>									
								</div>
							</div>

							<div class="langs hidden-xs">
								<select onchange="javascript:handleSelect(this)">
								  <option value="https://www.verdeghaia.com.br/">PT</option>
								  <option value="https://www.verdeghaia.com/es/">ES</option>
								</select>
							</div>

							<div class="hidden-xs">
								<?php get_template_part('search-form'); ?>
							</div>						
						</div>
					<div class="visible-sm visible-xs p-t-10 text-center">
						<span class="menu-mob" id="openNav">&#9776;</span>
					</div>		
				</div>
			</div>

			<div class="submenu-links invisible">
				<div class="d-flex">
					<div class="submenu-column">
						<div class="d-inline-flex">
							<div class="bg-auditoria_interna"></div>
							<h2>Auditoria Interna</h2>
						</div>
						<a href="https://www.verdeghaia.com.br/desempenho-gestao/auditorias-de-sistema-de-gestao/"><p>Confira anualmente como está seu sistema de gestão e seu controle de leis.</p></a>
					</div>
					<div class="submenu-column">
						<div class="d-inline-flex">
							<div class="bg-monitoramento_legal"></div>
							<h2>Controle de leis</h2>
						</div>
						<a href="https://sogi.com.br/"><p>Conheça suas leis aplicáveis e previna os riscos ao seu negócio</p></a>
					</div>
					<div class="submenu-column">
						<div class="d-inline-flex">
							<div class="bg-certificacao_iso"></div>
							<h2>Certificação ISO</h2>
						</div>
						<a href="https://www.verdeghaia.com.br/desempenho-de-gestao/certificacoes-iso/ "><p>A busca pela certificação é um passo importante para destacar a empresa frente a seus concorrentes.</p></a>
					</div>
					<div class="submenu-column">
						<div class="d-inline-flex">
							<div class="bg-treinamentos"></div>
							<h2>Treinamentos</h2>
						</div>
						<a href="https://ead.verdeghaia.com.br/"><p>Educação à distância, planos corporativos, mais de 50 temas da área.</p></a>
					</div>
					<div class="submenu-column">
						<div class="d-inline-flex">
							<div class="bg-consultoria_online"></div>
							<h2>Consultoria Online</h2>							
						</div>
						<a href="https://www.consultoriaiso.org/"><p>A solução certa para implantar um sistema de gestão e manter a sua certificação ISO, de um jeito simples e muito mais econômico.</p></a>
					</div>
				</div>
			</div>	
		</div>
	</header><!-- #masthead -->
	<div class="fix-header"></div>

	<div id="mySidenav" class="sidenav visible-sm visible-xs">
		<a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
		<nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</div>

	<div id="content" class="site-content">
