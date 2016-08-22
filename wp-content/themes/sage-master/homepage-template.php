<?php
/**
* Template Name: Homepage Template
*/
?>
<?php get_template_part('slider'); ?>
<article class="quotes-homepage">
	<div class="container">
		<img src="../wp-content/themes/sage-master/assets/images/comma.png" alt="">
		<p>“Sometime good things fall apart so better things can fail together.”</p>
	</div>
</article>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
