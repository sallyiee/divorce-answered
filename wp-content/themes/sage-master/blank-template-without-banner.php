<?php
/**
* Template Name: Blank Template Without Banner
*/
?>
<?php while (have_posts()) : the_post(); ?>
<div>
	<?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>
</div>