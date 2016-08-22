<?php
/**
* Template Name: Blank Template With Header
*/
?>
<?php get_template_part('slider'); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container blank-page-container">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
<?php endwhile; ?>
</div>