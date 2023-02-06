<?php get_header(); ?>

	<code>this is home.php</code>
	<div class="cols">
		<?php if (have_posts()) :
			while (have_posts() ) : the_post();?>
				<article class="group">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_post_thumbnail(); ?>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile;?>
		<? endif;?>
	</div>

<?php get_footer(); ?>
