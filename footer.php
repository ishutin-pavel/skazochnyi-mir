  </main>
  <footer class="wow fadeInDown">
    <div class="footer_contact">
      <div class="footer_bottom_info">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p style="">2018 © Сказочный мир</p>
            </div>
            <div class="col-md-5">

            </div>
            <div class="col-md-3">
              <table  class="footer_soc">
                <tr>
                  <td class="fbi_1" style="background-image:url(/wp-content/themes/0603_15/theme_img/theme_img_15/theme_15_main_footer_soc_1.png)"><a href="#"></a></td>
                  <td class="fbi_2" style="background-image:url(/wp-content/themes/0603_15/theme_img/theme_img_15/theme_15_main_footer_soc_2.png)"><a href="#"></a></td>
                  <td class="fbi_3" style="background-image:url(/wp-content/themes/0603_15/theme_img/theme_img_15/theme_15_main_footer_soc_3.png)"><a href="#"></a></td>
                  <td class="fbi_4" style="background-image:url(/wp-content/themes/0603_15/theme_img/theme_img_15/theme_15_main_footer_soc_4.png)"><a href="#"></a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
    <?php wp_footer(); ?>
    <?php the_field('f_code',101); ?>
    <?php the_field('f_code_2',101); ?>
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/autoheaight.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/submenu.js"></script>
    <script>new WOW().init();</script>
    <script>
      jQuery(document).ready(function() {
        equalHeight(jQuery("#main_reviews,.carousel-item"));
        jQuery('#main_reviews').carousel();
        jQuery( "header .dropdown-menu a" ).addClass( "dropdown-item" );
        
        equalHeight(jQuery(".page .section_service_price .row > div"));
        <?php 
          $page_table_r=1;
          foreach (range(1, 10) as $i) {
            echo 'jQuery("#table_price_'.$page_table_r.'").clone().appendTo("#table_price_c_'.$page_table_r.'");';
          $page_table_r++;
          }
        ?>
      });
      new WOW().init();
    </script>
  </body>
</html>
