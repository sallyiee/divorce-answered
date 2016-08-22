<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
  <div class="entry-meta">
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
  <?php the_post_thumbnail(); ?>
  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>
  <div class="entry-date">
    <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?>.</time>
  </div>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <div class="clearfix">
    <div class="entry-tag col-sm-8 no-padding-left">
      <?php the_tags( '', ' ', '&nbsp;' ); ?>
    </div>
    <div class="entry-sharing col-sm-4">
      <?php echo do_shortcode('[ssba]'); ?>
    </div>    
  </div>

  <footer>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </footer>
  <?php comments_template('/templates/comments.php'); ?>
</article>
<?php endwhile; ?>