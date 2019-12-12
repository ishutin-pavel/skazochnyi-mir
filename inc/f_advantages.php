<div class="main_advantages wow fadeInUp">
  <div class="container">
    <div class="main_title title_font"><?php the_field('advantages_top_title',73); ?></div>
    <div class="row">
      <?php $advrow=1; if( have_rows('advantages',73) ): while ( have_rows('advantages',73) ) : the_row(); ?>
      <div class="col-md-4">
        <div class="main_advantages_ico mai_<?php echo $advrow; ?>" <?php if(get_sub_field('advantages_ico')) { ?> style="background-image:url(<?php the_sub_field('advantages_ico'); ?>);"<?php } ?>></div>
        <div class="main_advantages_title title_font"><?php the_sub_field('advantages_title',73); ?></div>
        <div class="main_advantages_text"><?php the_sub_field('advantages_text',73); ?></div>
      </div>
      <?php $advrow++; endwhile; else : endif; ?>
    </div>
  </div>
</div>