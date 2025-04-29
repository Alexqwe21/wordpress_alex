<?php
// Template Name: Contato
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
			
				<a href="<?php the_field('link_da_localizacao_do_negocio'); ?>" target="_blank"><img src="<?php the_field('foto_mapa'); ?>" alt="<?php the_field('foto_mapa_descricao'); ?>"></a>
			</div> 

			<div class="grid-1-3 contato-item">
				<h2><?php the_field('titulo_dados'); ?></h2>
				<?php the_field('Texto_numero_contato'); ?>
				<?php the_field('Texto_contato_email'); ?>
				<?php the_field('Texto_contato_facebok'); ?>
			</div>
			<div class="grid-1-3 contato-item">
				<h2><?php the_field('titulo_horarios'); ?></h2>

				<?php the_field('Texto_horarios_semana'); ?>
				<?php the_field('Texto_horarios_sabado'); ?>
				<?php the_field('Texto_horarios_domingo'); ?>
			</div>
			<div class="grid-1-3 contato-item">
				<h2><?php the_field('titulo_endereco'); ?></h2>
				<?php the_field('Texto_rua'); ?>
				<?php the_field('Texto_bairro'); ?>
				<?php the_field('Texto_cidade'); ?>
			</div>
		</section>

<?php endwhile;
else: endif; ?>

<?php get_footer(); ?>