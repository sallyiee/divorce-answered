<div class="clearfix">
	<div class="byline author vcard post-author pull-left"><?= __('', 'sage'); ?> Author:&nbsp;&nbsp;<a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></div>
	<div class="post-date pull-right">
		<time class="updated" datetime="<?= get_post_time('c', true); ?>">Article posted on&nbsp;<?= get_the_date(); ?>.</time>
	</div>
</div>