<?php if (have_posts()):
       while ( have_posts() ): the_post(); ?>
			<?php the_title() ?>
	<?php endwhile; ?>
<?php endif; ?>