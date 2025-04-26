<?php
// Template Name: Sobre
?>



<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('foto_rest'); ?>" alt="<?php the_field('foto_rest_descricao'); ?>">
			</div>

			<div class="grid-8">
				<h2><?php the_field('titulo_historia_'); ?></h2>

				<?php the_field('Texto_da_Historia'); ?>

				<h2><?php the_field('titulo_visao'); ?></h2>

				<?php the_field('Texto_da_visao'); ?>


				<h2><?php the_field('titulo_valores'); ?></h2>
				<?php the_field('texto_valores'); ?>
			</div>
		</section>

<?php endwhile;
else: endif; ?>

<?php get_footer(); ?>