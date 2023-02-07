<!-- this is the basic, default loop responsible for displaying all content from the standard page
content [wysiwyg] area. Accessing this as a template keeps code DRY and makes the theme more
efficient and maintainable -->
<?php if (have_posts()) :
	while (have_posts() ) : the_post() ; ?>
		<?php the_content(); ?>
	<?php endwhile;
endif; ?>
