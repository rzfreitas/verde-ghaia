<section>
<div class="bg-cinza">
	<div class="container p-t-50 p-b-50">
		<div class="row d-flex">
			<div class="col-md-4 content-curso no-padding">
				<?php $curso1 = get_field('cursos_em_destaque');
				if($curso1) : ?>
					<img src="<?php echo $curso1['imagem_curso']['url']; ?>" alt="<?php echo $curso1['imagem_curso']['alt']; ?>" />
					<div class="p-30">
						<h3><?php echo $curso1['nome_curso']; ?></h3>
						<p><?php echo $curso1['descricao_curso']; ?></p>
						<div class="preco-curso-destaque"><?php echo $curso1['preco_curso']; ?></div>
						<a class="btn-yellow-curso" href="<?php echo $curso1['link_curso']; ?>">Compre</a>
					</div>
				<?php endif; ?>		
			</div>
			<div class="col-md-4 content-curso no-padding">
				<?php $curso2 = get_field('cursos_em_destaque_2');
				if($curso2) : ?>
					<img src="<?php echo $curso2['imagem_curso2']['url']; ?>" alt="<?php echo $curso2['imagem_curso2']['alt']; ?>" />
					<div class="p-30">
						<h3><?php echo $curso2['nome_curso2']; ?></h3>
						<p><?php echo $curso2['descricao_curso2']; ?></p>
						<div class="preco-curso-destaque"><?php echo $curso2['preco_curso2']; ?></div>
						<a class="btn-yellow-curso" href="<?php echo $curso2['link_curso2']; ?>">Compre</a>
					</div>
				<?php endif; ?>			
			</div>
			<div class="col-md-4 content-curso no-padding">
				<?php $curso3 = get_field('cursos_em_destaque_3');
				if($curso3) : ?>
					<img src="<?php echo $curso3['imagem_curso3']['url']; ?>" alt="<?php echo $curso3['imagem_curso3']['alt']; ?>" />
					<div class="p-30">
						<h3><?php echo $curso3['nome_curso3']; ?></h3>
						<p><?php echo $curso3['descricao_curso3']; ?></p>
						<div class="preco-curso-destaque"><?php echo $curso3['preco_curso3']; ?></div>
						<a class="btn-yellow-curso" href="<?php echo $curso3['link_curso3']; ?>">Compre</a>
					</div>
				<?php endif; ?>		
			</div>
		</div>
	</div>
	<div class="bg-cinza p-t-25 p-b-25">
		<div class="text-center">
			<a class="btn-yellow-curso" href="https://ead.verdeghaia.com.br/courses">Ver mais cursos</a>
		</div>
	</div>
</div>
</section>