      <div class="main_service wow fadeInUp">
        <div class="container">
          <div class="main_title title_font"><?php the_field('service_top_title',78); ?></div>
          <div class="row">
            <?php if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
            <div class="col-md-3">
              <div class="main_service_in">
                <?php $value = get_sub_field("service_url", 78);if( $value ) { ?><a href="<?php the_sub_field('service_url',78); ?>"></a><?php } ?>
                <div class="main_service_img" style="background-image:url(<?php the_sub_field('service_img',78); ?>)">
                  <div class="main_service_url"><?php the_sub_field('service_url_text',78); ?></div>
                </div>
                <p class="title_font"><?php the_sub_field('service_title',78); ?></p>
                <span><?php the_sub_field('service_text',78); ?></span>
              </div>
            </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>