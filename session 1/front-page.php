<?php get_header(); ?>
<!-- this is front-page.php. If a front-page.php file exists in a theme it will automatically
be used to display the homepage. If front-page.php isn't present, WordPress will use page.php
to display content -->
	<code>this is front-page.php</code>

	<!-- this is the basic, default loop responsible for displaying all content from the standard page
	content [wysiwyg] area -->
	<?php if (have_posts()) :
		while (have_posts() ) : the_post(); ?>
			<!-- the_content() is a function that gets all the content from the content [wysiwyg] area -->
			<?php the_content(); ?>
		<?php endwhile; ?>
	<? endif; ?>

<?php get_footer(); ?>
