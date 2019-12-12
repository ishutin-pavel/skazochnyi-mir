<div class="main_news wow fadeInUp">
  <div class="container">
    <div class="main_title title_font">Последние Новости</div>
    <div class="row">
      <?php $temp_query = $wp_query; ?>
      <?php query_posts('cat=1&showposts=2'); ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="col-md-6">
        <div class="main_news_container_in">
          <?php if ( has_post_thumbnail() ) {  ?>
          <div class="main_news_img" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
          <?php } ?>
          <div class="main_news_block">
            <div class="main_news_content_title title_font"><?php the_title();?></div>
            <div class="main_news_date"><span><?php the_time('d M Y'); ?></span></div>
            <div class="main_news_content_text"><?php the_excerpt();?></div>
            <?php $value = get_field("news_url");if( $value ) { ?><a class="main_news_content_url" href="<?php the_permalink(); ?>">Подробнее</a><?php } ?>
          </div>
        </div>
      </div>
      <?php $mian_news++; endwhile; ?>
      <?php $wp_query = $temp_query; wp_reset_query(); ?>
    </div>
  </div>
</div>