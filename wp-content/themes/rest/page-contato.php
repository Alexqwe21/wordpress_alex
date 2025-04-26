<?php
// Template Name: Contato
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="https://www.google.com.br/maps" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest-mapa.jpg" alt="Fachada do Rest"></a>
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
				<h2>Endereço</h2>
				<p>Rua Marechal, 29</p>
				<p>Copacabana - Rio de Janeiro</p>
				<p>Brasil - Terra - Via Láctea</p>
			</div>
		</section>

	<?php endwhile;
else: endif; ?>

<?php get_footer(); ?>