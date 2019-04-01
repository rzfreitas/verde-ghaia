<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package risco-legal
 */

?>

	</div><!-- #content -->

	<section>
		<?php if(!is_singular( 'post' ) && !is_page('Blog')){?>
			<?php get_template_part( 'template-parts/content', 'noticias' ); ?>
		<?php }?>   
	</section>

	<footer class="n-footer">
		<div class="container text-center">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/imagens/logos/logo-vg-header.svg" alt="Verde Ghaia Risco Legal"></a>
			<p class="p-t-25 p-b-15">Av. Raja Gabaglia, nº 555, Cidade Jardim, <br> Belo Horizonte / MG – CEP: 30380-103</p>
			<h4><strong>(31) 2127-9137</strong></h4>
		</div>

		<div class="container block-links">
			<div class="col-md-2 footer-column links">
				<ul>
					<h5 class="p-b-15"><strong>Links úteis</strong></h5>
					<li><a href="<?php echo get_home_url(); ?>/biblioteca" target="_blank"> Biblioteca VG </a></li>
					<li><a href="http://www.abnt.org.br/ " target="_blank"> ABNT </a></li>
					<li><a href="http://www.iso.org/iso/home.html" target="_blank"> ISO </a></li>
					<li><a href="https://sogi8.sogi.com.br/" target="_blank"> soGI8 </a></li>
					<li><a href="http://deivisonpedroza.com.br/" target="_blank"> Deivison Pedroza </a></li>
					<li><a href="http://palestrantesfamosos.org" target="_blank"> Palestrantes Famosos </a></li>
					<li><a href="http://futurelegis.sogi.com.br/" target="_blank"> FutureLegis </a></li>
				</ul>
			</div>

			<div class="col-md-2 footer-column links">
				<ul>
					<h5 class="p-b-15"><strong>O Grupo</strong></h5>
					<li><a href="https://www.verdeghaia.com.br/" target="_blank"></i> Verde Ghaia Grupo </a></li>
					<li><a href="https://www.vgresiduos.com.br/" target="_blank"></i> VG Resíduos </a></li>
					<li><a href="https://www.consultoriaiso.org/" target="_blank"> Consultoria Online </a></li>
					<li><a href="http://oksigeno.org.br/" target="_blank"> Instituto Oksigeno </a></li>
					<li><a href="http://vgriscolegal.com.br/site/" target="_blank"> VG Risco Legal </a></li>
					<li><a href="http://www.vgbioenergia.com.br/" target="_blank"> VG Bio Energia </a></li>
				</ul>
			</div>

			<div class="col-md-2 footer-column links">
				<ul>
					<h5 class="p-b-15"><strong>Certificações</strong></h5>
					<li><a href="http://www.consultoriaiso.org/iso-9001/o-que-e-iso-9001/" target="_blank">ISO 9001</a></li>
					<li><a href="http://www.consultoriaiso.org/iso-14001/o-que-e-iso-14001/" target="_blank">ISO 14001</a></li>
					<li><a href="http://www.consultoriaiso.org/iso-22000/o-que-e-iso-22000/" target="_blank">ISO 22000</a></li>
					<li><a href="http://www.consultoriaiso.org/ohsas-18001/o-que-e-ohsas-18001/" target="_blank">OHSAS 18001</a></li>
					<li><a href="http://www.consultoriaiso.org/iso-9001/migracao-para-empresas-certificadas-iso-9001-2015/" target="_blank">Migração ISO 9001 versão 2015</a></li>
				</ul>
			</div>

			<div class="col-md-2 footer-column links">
				<ul>
					<h5 class="p-b-15"><strong>Regionais</strong></h5>
					<li>Norte Fluminense - RJ</li>
					<li>Porto Alegre - RS</li>
					<li>Guarulhos - SP</li>
					<li>Recife - RE</li>
					<li>Dourados - MS</li>
					<li>Campinas - SP</li>
				</ul>
			</div>

			<div class="col-md-2 columns footer-column links">
				<ul>
					<h5 class="p-b-15"><strong>Regional SP</strong></h5>
					<li>Av Brigadeiro Luiz Antônio, n° 2909, Sala 64/65, Jardim Paulista/SP - CEP: 01401-000</li>
				</ul>
			</div>

		</div> <!-- row links -->

		<div class="container">
			<div class="social-footer text-right m-center">							
				<ul class="icons-social">
					<li><a href="https://www.facebook.com/verdeghaia" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company/verde-ghaia/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://twitter.com/verdeghaia" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://plus.google.com/103021621222845476497" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.youtube.com/c/VerdeGhaia?sub_confirmation=1" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<!--a href="https://instagram.com/vgconsultoriaonline" target="_blank"><i class="fa fa-instagram"></i></a-->
					<li><a href="javascript:void(0);" id="scroll" title="Ir para o topo"><span></span></a></li>
				</ul>
			</div>
		</div> <!-- row social -->
		
		<div class="container p-t-25 m-center">
			<p>© Copyright 2018 - <a href="https://www.verdeghaia.com.br" target="_blank">Grupo Verde Ghaia</a> - Todos os direitos reservados.</p>
		</div>

		<?php get_template_part('parts/content', 'formularios'); ?>					

	</footer> <!-- end .footer -->

	<div class="hidden-xs">
		<a href="https://web.whatsapp.com/send?phone=5531984218970&text=" class="click-wpp" title="Tire suas dúvidas pelo nosso WhatsApp"></a>
	</div>

	<div class="visible-sm visible-xs">
		<a href="https://app.whatsapp.com/send?phone=5531984218970&text=" class="click-wpp"></a>
	</div>

</div><!-- #page -->

	<?php get_template_part('template-parts/content', 'formularios'); ?>	

	<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5a579ab9d7591465c706a8a8/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
	<!--End of Tawk.to Script-->

<?php wp_footer(); ?>

</body>
</html>