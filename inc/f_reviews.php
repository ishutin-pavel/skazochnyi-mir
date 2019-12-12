<div class="main_reviews wow fadeInUp">
  <div class="container">
    <div class="row">
      <div id="main_reviews" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php $reviews_slider=1; $temp_query = $wp_query; ?>
          <?php query_posts('cat=4&showposts=10'); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="carousel-item <?php if($reviews_slider==1) { echo 'active'; } ?>">
            <?php if ( has_post_thumbnail() ) { ?>
            <div class="main_reviews_content_img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
            <?php } ?>
            <div class="main_reviews_content_name"><?php the_title(); ?></div>
            <?php if(get_field('reviews_title')) { ?>
            <div class="main_reviews_content_company"><?php the_field('reviews_title'); ?></div>
            <?php } ?>
            <div class="main_reviews_content_text title_font"><?php the_excerpt();?></div>
          </div>
          <?php $reviews_slider++; endwhile; ?>
          <?php $wp_query = $temp_query; wp_reset_query(); ?>
        </div>
        <ol class="carousel-indicators">
          <?php $reviews_slider_2=0; $temp_query = $wp_query; ?>
          <?php query_posts('cat=4&showposts=10'); ?>
          <?php while (have_posts()) : the_post(); ?>
            <li data-target="#main_reviews" data-slide-to="<?php echo $reviews_slider_2; ?>" class="<?php if($reviews_slider_2==1) { echo 'active'; } ?>"></li>
          <?php $reviews_slider_2++; endwhile; ?>
          <?php $wp_query = $temp_query; wp_reset_query(); ?>
        </ol>
      </div>
    </div>
  </div>
</div>