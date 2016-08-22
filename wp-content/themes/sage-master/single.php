<!-- Category - Article Page -->
<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<div class="container">
	<div class="clearfix">
			<div class="col-sm-4 hide-on-desktop">
			<?php if (Setup\display_sidebar()) : ?>
			<aside >
				<?php include Wrapper\sidebar_path(); ?>
				</aside><!-- /.sidebar -->
				<?php endif; ?>
			</div>
		</div>
		<div class="col-sm-8">
			<?php get_template_part('templates/content-single', get_post_type()); ?>
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