<?php
// Template Name: Menu da Semana
?>

<?php get_header(); ?>


<?php
// $sobre = 28;

$sobre =  get_page_by_title('sobre');
the_field('foto_rest', $sobre); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="menu-item grid-8">
				<h2><?php the_field('titulo_do_produto'); ?></h2>
				<ul>
				<?php if (have_rows('conteudo_sobre_peixe')): while (have_rows('conteudo_sobre_peixe')) : the_row(); ?>


						<li>
							<span><sup>R$</sup><?php the_sub_field('preco_do-produto'); ?></span>
							<div>

								<h3><?php the_sub_field('nome_produto'); ?></h3>
								<?php the_sub_field('descricao_produto'); ?>
							</div>
						</li>
				<?php endwhile;
				else : endif; ?>



				</ul>

			</div>

			<div class="menu-item grid-8">
				<h2><?php the_field('titulo_do_produto_carnes'); ?></h2>
				<ul></ul>
				<?php if (have_rows('conteudo_sobre_carnes')): while (have_rows('conteudo_sobre_carnes')) : the_row(); ?>

						<li>
							<span><sup>R$</sup><?php the_sub_field('preco_do-produto'); ?></span>
							<div>

								<h3><?php the_sub_field('nome_produto'); ?></h3>
								<?php the_sub_field('descricao_produto'); ?>
							</div>
						</li>
				<?php endwhile;
				else : endif; ?>



				</ul>

			</div>

		</section>

<?php endwhile;
else: endif; ?>


<?php get_footer(); ?>