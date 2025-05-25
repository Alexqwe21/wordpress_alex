<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?>-<?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>

	<meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title(''); ?>  <?php the_field('description_seo'); ?>">

	<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<!-- head wordprees -->
	<?php wp_head(); ?>
	<!-- head wordprees -->
</head>

<body>

	<header>
		<nav>
		<?php 
		$args = array(
			'menu' => 'principal',
			'container' => false
		);
		wp_nav_menu( $args);
		?>
		</nav>

		<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

		<!-- PUXANDO O CONTEUDO DE  OUTRAS PAGINAS ATRIBUINDO VARIAVEIS -->
		<?php $contato = get_page_by_title('contato'); ?>
		<p><?php the_field('endereco_header', $contato); ?></p>
		<!-- PUXANDO O CONTEUDO DE  OUTRAS PAGINAS ATRIBUINDO VARIAVEIS -->
		<?php the_field('Texto_numero_contato', $contato); ?>

	</header>