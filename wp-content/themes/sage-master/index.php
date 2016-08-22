<!-- Category - Article Page -->
<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Titles;
?>
<div class="container">
	<div class="clearfix">
		<?php get_template_part('templates/page', 'header'); ?>
		<div class="col-sm-4 hide-on-desktop">
			<?php if (Setup\display_sidebar()) : ?>
			<aside >
				<?php include Wrapper\sidebar_path(); ?>
				</aside><!-- /.sidebar -->
				<?php endif; ?>
			</div>
		</div>
		<div class="col-sm-8 no-padding-left">
			<?php if (!have_posts()) : ?>
			<div class="alert alert-warning">
				<?php _e('Sorry, no results were found.', 'sage'); ?>
			</div>
			<?php get_search_form(); ?>
			<?php endif; ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-sm-4 hide-on-mobile">
			<?php if (Setup\display_sidebar()) : ?>
			<aside >
				<?php include Wrapper\sidebar_path(); ?>
				</aside><!-- /.sidebar -->
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!--<?php the_posts_navigation(); ?>-->