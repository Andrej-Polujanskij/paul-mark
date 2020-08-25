<?php
/* Template name: Goals */
get_header();
?>
<main>
  <section class="goals-head">
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item wrap-item_left">
          <div class="item_left-img load-hidden"
            style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('first_section_image'), 'thumbas'); ?>);">
          </div>
        </div>
        <div class="wrap-item wrap-item_right">
          <div class="dot-line_decor load-hidden"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/dot-line-decor.svg);">
          </div>

          <div class="item_right-content load-hidden">
           <h2 class="load-hidden"><?php the_field('first_section_title'); ?></h2>
           <p class="load-hidedn"><?php the_field('first_section_text'); ?></p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="goals-numbers">
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item wrap-item_left">
          <div class="item_left-content load-hidden">
            <h2 class="load-hidden"><?php the_field('second_section_title'); ?></h2>
            <p class="load-hidden"><?php the_field('second_section_text'); ?></p>

            <div class="content-list">
              <div class="content-list_title load-hidden">
                <h4>
                  <?php the_field('second_section_list_title'); ?>
                </h4>
              </div>
              <ul>
                <?php
              if( have_rows('second_section_list') ):
                while( have_rows('second_section_list') ) : the_row();
              ?>
                <li class="load-hidden"><?php the_sub_field('list_item'); ?></li>
                <?php
              endwhile;
            endif;
            ?>
              </ul>
              <div class="content-list_resume load-hidden">
                <?php the_field('second_section_list_resume'); ?>
              </div>
            </div>

          </div>
        </div>
        <div class="wrap-item wrap-item_right">
          <div class="item_right-img load-hidden"
            style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('second_section_image'), 'thumbas'); ?>);">
            <div class="item_right-decor">
              <div class="decor-logo"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/decor-logo.svg);">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="info-below_section">
      <div class="info-below-left">
        <div class="info-below-left_img load-hidden"
          style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('third_section_image'), 'thumbas'); ?>);">

        </div>
      </div>
      <div class="info-below-right">
        <div class="info-below-right_content load-hidden">
         <?php the_field('third_section_text'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="goals-driver_info">
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item wrap-item_left">
          <div class="item_left-content">
            <div class="content-list_title load-hidden">
              <h4>
              <?php the_field('fourth_section_list_title'); ?>
              </h4>
            </div>
            <ul>
                <?php
              if( have_rows('fourth_section_list') ):
                while( have_rows('fourth_section_list') ) : the_row();
              ?>
                <li class="load-hidden"><?php the_sub_field('fourth_section_list_item'); ?></li>
                <?php
              endwhile;
            endif;
            ?>
              </ul>
            <div class="content-list_resume load-hidden">
            <?php the_field('fourth_section_list_resume'); ?>
            </div>
          </div>
        </div>
        <div class="wrap-item wrap-item_right">
          <div class="item_right-img load-hidden"
            style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('fourth_section_image'), 'big_img_2'); ?>);"></div>
          <div class="decor-border"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="goals-info">

    <div class="info-bg">
      <div class="info-bg_icon"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/big-b-logo.svg);">
      </div>
    
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item item-left load-hidden">
          <?php the_field('fiveth_section_text_in_left'); ?>
          <div class="spacer"></div>
          <div class="dot-line_decor"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/dot-line-decor.svg);">
          </div>
        </div>
        <div class="wrap-item item-right load-hidden">
           <?php the_field('fiveth_section_text_in_right'); ?>

        </div>
      </div>
    </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>