<?php /* Template Name: Contato */ 
	
get_header(); ?>

<section>
<div class="bg-contato p-t-100 p-b-70">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6 m-t-5">
				<h1>Olá! <br>
				Entre em contato com a gente e <br> deixe suas dúvidas ou sugestões.</h1>		
				<div id="contato-fale-conosco-0c915bba60740b507580"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('contato-fale-conosco-0c915bba60740b507580-html', 'UA-96877999-1').createForm();
				</script>				
			</div>
		</div>
	</div>
</div>
</section>

<section>
	<div class="bg-celeste">
		<div class="container p-t-70 p-b-25">
			<h2 class="p-b-50 text-center"><strong>Encontre uma Verde Ghaia perto de você:</strong></h2>
		</div>
		<div class="contato-regioes">
			<div class="container">
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#sudeste">Sudeste</a></li>
				    <li><a data-toggle="tab" href="#sul">Sul</a></li>
				    <li><a data-toggle="tab" href="#nordeste">Nordeste</a></li>
				    <li><a data-toggle="tab" href="#norte">Norte</a></li>
				    <li><a data-toggle="tab" href="#oeste">Centro Oeste</a></li>
				</ul>
			</div>
		
			<div class="tab-content text-center">
			    <div id="sudeste" class="tab-pane fade in active">
			      <div class="container">
			      	<div class="row">
			      		<div class="col-md-4">
			      			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/contato/norte-fluminense.png" alt="norte fluminense">
			      			<div class="p-t-20">
			      				<p class="f-preta">Norte Fluminense</p>
			      				<a href="mailto:nbacelette.nortefluminense@verdeghaia.com.br" target="_top" class="btn-blue">Entre em contato</a>
			      			</div>
			      		</div>			      	
			      		<!-- <div class="col-md-4">
			      			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/contato/campinas.png" alt="campinas">
			      			<div class="p-t-20">
			      				<p class="f-preta">Campinas</p>
			      				<a class="btn-blue" href="mailto:frederico.campinas@verdeghaia.com.br" target="_top">Entre em contato</a>
			      			</div>
			      		</div> -->
			      		<div class="col-md-4">
			      			<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/contato/guarulhos.png" alt="guarulhos">
			      			<div class="p-t-20">
			      				<p class="f-preta">Guarulhos</p>
			      				<a class="btn-blue" href="mailto:marcos.guarulhos@verdeghaia.com.br" target="_top">Entre em contato</a>
			      			</div>
			      		</div>
			      	</div>
			      </div>
			    </div>
			    <div id="sul" class="tab-pane fade">
			       <div class="container">
			       		<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/contato/porto-alegre.png" alt="porto alegre">
			      		<div class="p-t-20">
			      			<p class="f-preta">Porto Alegre</p>
			      			<a class="btn-blue" href="mailto:margeli.poa@verdeghaia.com.br" target="_top">Entre em contato</a>
			      		</div>
			       </div>
			    </div>
			    <div id="nordeste" class="tab-pane fade">
			      <div class="container">
			       		<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/contato/recife.png" alt="recife">
			      		<div class="p-t-20">
			      			<p class="f-preta">Recife</p>
			      			<a class="btn-blue" href="mailto:lauro.recife@verdeghaia.com.br" target="_top">Entre em contato</a>
			      		</div>
			       </div>
			    </div>
			    <div id="norte" class="tab-pane fade">
			      <h3>Em breve...</h3>			      
			    </div>
			    <div id="oeste" class="tab-pane fade">
			      <div class="container">
			       		<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/contato/dourados.png" alt="dourados">
			      		<div class="p-t-20">
			      			<p class="f-preta">Dourados</p>
			      			<a class="btn-blue" href="mailto:douglas.dourados@verdeghaia.com.br" target="_top">Entre em contato</a>
			      		</div>
			       </div>
			    </div>
			 </div>
		</div>
	</div>
</section>

<section>	
	<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.724391636527!2d-43.95710589713657!3d-19.93601574495709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6977101cc9dad%3A0x7acab6bd75a68b41!2sVerde+Ghaia+Consultoria+Ambiental!5e0!3m2!1spt-BR!2sbr!4v1445123223258" width="100%" height="350" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
</div>
</section>

<?php get_footer(); ?>