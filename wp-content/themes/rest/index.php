<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

	<?php endwhile;
else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<p>aqui n tem o loop</p>

<?php get_footer(); ?>