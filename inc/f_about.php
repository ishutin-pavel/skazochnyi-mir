<div class="main_about wow fadeInUp">
  <div class="container">
    <div class="row">
      <?php if(get_field('about_bg', 70)) { ?>
      <div class="col-md-6"><div class="main_about_img" style="background-image:url(<?php the_field('about_bg', 70); ?>)"></div></div>
      <?php  } ?>
      <div class="col-md-<?php if(get_field('about_bg', 70)) { echo '6'; } else { echo '12'; } ?>">
        <div class="main_title title_font"><?php the_field('about_title', 70); ?></div>
        <div class="main_about_text"><?php the_field('about_content', 70); ?></div>
        <?php if(get_field('about_url', 70)) { ?>
        <a href="<?php the_field('about_url', 70); ?>" class="main_about_url"><?php the_field('about_url_text', 70); ?></a>
        <?php  } ?>
      </div>
    </div>
  </div>
</div>