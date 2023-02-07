<?php get_header(); ?>
<!-- this is home.php by default this will display all the latest posts.
The number of posts displayed can be controlled via dashboard > settings > reading,
or via custom code -->
	<code>this is home.php</code>
	<div class="cols">
		<?php if (have_posts()) :
			while (have_posts() ) : the_post();?>
				<article>
					<!-- the_permalink() is a function that links to the post -->
					<!-- the_title() is a function that displays the post title -->
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<!-- the_thumbnail() is a function that displays the post's featured image -->
					<?php the_post_thumbnail(); ?>
					<!-- the_excerpt() is a funciton that displays the post's excerpt, if no excerpt is present
					the first few lines of content from the content editor will be displayed -->
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile;?>
		<? endif;?>
	</div>

<?php get_footer(); ?>
