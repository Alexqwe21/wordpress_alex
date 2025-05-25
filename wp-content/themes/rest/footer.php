<footer>
	<nav class="nav-footer">
		<?php 
		$args = array(
			'menu' => 'principal',
			'container' => false
		);
		wp_nav_menu( $args);
		?>
	</nav>

	<p><?php bloginfo('name'); ?> <?php echo date("Y");?> Alguns direitos reservados.</p>
</footer>

<!-- footer wordpress -->
<?php wp_footer(); ?>
<!-- footer wordpress -->
</body>
Call to unknown function: 'bloginfo'
</html>

Call to unknown function: 'wp_footer'