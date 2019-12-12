<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <link href="<?php bloginfo('template_directory'); ?>/fonts/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/theme_page.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/cascade-slider.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/mintScrollbar.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
      .theme_15 .mai_1  {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_15/theme_15_main_advantages_1.png);}
      .theme_15 .mai_2  {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_15/theme_15_main_advantages_2.png);}
      .theme_15 .mai_3  {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_15/theme_15_main_advantages_3.png);}
      .theme_15 .mai_4  {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_15/theme_15_main_advantages_4.png);}
    </style>
  </head>
  <body class="theme_15 <?php the_field('body_select_color',55); ?>">
    <header class="wow fadeInDown <?php if(!is_front_page()) { echo 'header_page'; } ?>" style="background-image:url(<?php the_field('header_bg',55); ?>)">
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="header_col_logo col-md-2">
              <?php the_field('option_header_section_1_content',55); ?>
            </div>
            <div class="col-md-10">
              <nav class="navbar navbar-expand-md">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <?php wp_nav_menu(array('container_class' => '','container' => '', 'theme_location' => 'primary','items_wrap' => '<ul id="%1$s" class="%2$s mr-auto nav navbar-nav">%3$s</ul>','walker' => new wp_bootstrap_navwalker,)); ?>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <?php if(get_field('hide_header_menu_2',196) ) { ?>
        <style>.header_page .header_slide {display:none;} .header_page {height:auto !important;padding-bottom:40px;}</style>
      <?php } ?>
      <div class="container header_slide">
        <div class="row">
          <div class="col-md-9"><div><div>
            <?php if(get_field('header_slide_title',55)) { ?>
            <div class="header_slide_title title_font"><?php the_field('header_slide_title',55); ?></div>
            <?php } ?>
            <?php if(get_field('header_slide_text',55)) { ?>
            <div class="header_slide_text"><?php the_field('header_slide_text',55); ?></div>
            <?php } ?>
            <?php if(get_field('header_slide_url',55)) { ?>
            <a href="<?php the_field('header_slide_url',55); ?>" class="header_slide_url"><?php the_field('header_slide_url_text',55); ?></a>
            <?php } ?>
          </div></div></div>
        </div>
      </div>
    </header>
    <main role="main">
