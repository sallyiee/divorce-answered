<article <?php post_class(); ?>>
  <header>
    <?php the_post_thumbnail(); ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="clearfix">
      <div class="post-date">
        <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?>.</time>
      </div>
      <div class=" post-comments">
        <i class="fa fa-comment "></i> <span><?php comments_number( '0', '1', '%' ); ?></span>
      </div>
    </div>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <div class="clearfix">
    <div class="entry-tag col-sm-8 no-padding-left">
      <?php the_tags( '', ' ', '&nbsp;' ); ?>
    </div>
    <div class="entry-sharing col-sm-4">
      <?php echo do_shortcode('[ssba]'); ?>
    </div>
  </div>
</article>