<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>

<style type="text/css">
html{
 margin-top: 0px!important;
}

header{
	display:none;
}
#onesignal-bell-launcher
{
	display:none;
}
.off-canvas-wrapper {
    top: 0px;
}
.large-6 {
    width: 49%;
}
.column, .columns{
padding-left: 0;
padding-right: 0;
}

@media print,screen and (max-width:1000px) {
.large-6 {
    width: 100%;
}
}
</style>
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
<div class="rowfull noticias" style="padding-top: 6px;">	
		<div class="row" style="margin-right: 6px; margin-left: 6px;">	
		<?php		
		
		$args = array(
						'showposts' => '4',
						'category__not_in' => '118'
					);
		
		$aRecentPosts = new WP_Query($args);
		while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>	
		
		<div class="large-6 medium-12 imagem-artigo imagem-artigo-cel" style="margin-bottom: 20px; float:left;margin-right: 10px;">
			<div class="large-1 p-b-20" style="float: left;margin-right: 10px;">
				<a href="<?php the_permalink() ?>" target="_blank" title=""> <?php the_post_thumbnail(array(90, 90));?></a>
			</div>			
			<div class="large-12">								
				<p style="margin-bottom: 0px"><span class="font-verde"><a href="<?php the_permalink() ?>" target="_blank" title="Veja: <?php the_title(); ?> " rel="bookmark"><strong><?php $title=get_the_title(); echo substr($title, 0, 50).'...';?></strong></a></span></p>
				<p style="margin-bottom: 0px"><b><small><i class="fa fa-calendar"></i> <?php the_time('j \d\e F \d\e Y') ?></small></b></p>
				<p  style="margin-bottom: 0px"><?php $excerpt=get_the_excerpt(); echo substr($excerpt,0,50).'...';?> </p>
				<!--<a href="<?php //the_permalink() ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i> Continuar lendo</a> -->
					
			</div>
		</div>		
		
		<?php endwhile; wp_reset_query(); ?>
		</div>
	
	<!--<div class="row text-center p-t-30">
		<a class="new-button-round green-button" href="https://www.verdeghaia.com.br/blog/">MAIS NOTÍCIAS NO BLOG</a>
	</div> -->
</div>

</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->
