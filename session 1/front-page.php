<?php get_header(); ?>
	<code>this is front-page.php</code>

	<?php if (have_posts()) :
		while (have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<? endif; ?>

<?php get_footer(); ?>
