<?php
/* Template name: Homepage */
get_header();
?>
<main>
  <section class="section-wlc">
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item wrap-item_title">
          <h1 class="load-hidden"><?php the_field('first_section_title'); ?></h1>
          <h2 class="load-hidden"><?php the_field('first_section_subtitle'); ?></h2>

        </div>

        <div class="wrap-item wrap-item_img load-hidden">
          <img class="load-hidden" src="<?php echo get_correct_image_link_thumb(get_field('first_section_big_image'), 'big_img'); ?>"
            alt="">
        </div>

      </div>
    </div>
  </section>

  <section class="section-about">
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item">
          <div class="wrap-item_img load-hidden"
            style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('second_section_image'), 'big_img'); ?>);">
            <div class="square-decor load-hidden"></div>
          </div>

          <div class="dot-line_decor load-hidden"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/dot-line-decor.svg);">
          </div>


        </div>

        <div class="wrap-item">
          <div class="wrap-item_text-content">
            <div class="head-content flex">
              <div class="title-content load-hidden">
                <h2><?php the_field('second_section_title'); ?></h2>
                <h4><?php the_field('second_section_subtitle'); ?></h4>
              </div>

              <div class="title-icon load-hidden"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/big-logo.svg);">
              </div>
            </div>

            <div class="text-cotent load-hidden">
              <?php the_field('second_section_text'); ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="plan plan-a">
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item">

          <div class="content-decor_word load-hidden">A</div>

          <div class="wrap-item_content">
            <div class="content-title load-hidden">
              <h2><?php the_field('third_section_title'); ?></h2>
              <div class="content-title_note load-hidden">
                <?php the_field('third_section_text_below_title'); ?>
              </div>
            </div>


            <div class="content-fees">
              <div class="content-fees_title load-hidden">
                <?php the_field('third_section_fee_title'); ?>
              </div>
              <ul>
              <?php
              if( have_rows('third_section_fees_list') ):
                while( have_rows('third_section_fees_list') ) : the_row();
              ?>
                <li class="load-hidden"><?php the_sub_field('fee_text'); ?></li>
                <?php
                  endwhile;
                endif;
                ?>
                </ul>
            </div>

            <div class="content-note load-hidden"><?php the_field('third_section_note_below_fees'); ?> </div>
          </div>

        </div>
        <div class="wrap-item">
          <div class="wrap-item_img load-hidden"
            style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('third_section_image'), 'big_img'); ?>);">
          </div>

          <div class="dot-line_decor"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/dot-line-decor.svg);">
          </div>
        </div>
      </div>
    </div>

    <div class="benefits">
      <div class="main-container">
        <div class="benefint-title load-hidden">
          <?php the_field('third_section_benefits_title'); ?>
        </div>
      </div>

      <div class="benefits-wrapper">
        <div class="wrap-left">
          <div class="benefits-content">
            <ul>
              <?php
              if( have_rows('third_section_benefits_list') ):
                while( have_rows('third_section_benefits_list') ) : the_row();
              ?>
              <li class="load-hidden">
                <div class="benefit-icon"
                  style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('benefits_icon'), 'icons'); ?>">
                </div>

                <div class="benefit-text"><?php the_sub_field('benefits_text'); ?></div>
              </li>
              <?php
              endwhile;
            endif;
            ?>
            </ul>
          </div>
          <div class="clear"></div>
        </div>

        <div class="wrap-right">
          <div class="wrap-right_content load-hidden">
            <div class="right_content-icon"
              style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('third_section_benefits_note_icon'), 'icons'); ?>);">
            </div>
            <div class="right_content-text"><?php the_field('third_section_benefits_note_'); ?> </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>

    </div>
  </section>

  <section class="plan plan-b">
    <div class="main-container">
      <div class="wrapper">
        <div class="wrap-item">
          <div class="wrap-item_img load-hidden"
            style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('fourth_section_image'), 'big_img'); ?>);">
          </div>

          <div class="dot-line_decor load-hidden"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/dot-line-decor.svg);">
          </div>
        </div>
        <div class="wrap-item">

          <div class="content-decor_word load-hidden">B</div>

          <div class="wrap-item_content">
            <div class="content-title load-hidden">
              <h2><?php the_field('fourth_section_title'); ?></h2>
              <div class="content-title_note load-hidden">
                <?php the_field('fourth_section_text_below_title'); ?>
              </div>
            </div>


            <div class="content-fees">
              <div class="content-fees_title load-hidden">
                <?php the_field('fourth_section_fee_title'); ?>
              </div>
              <?php
              if( have_rows('fourth_section_fees_list') ):
                while( have_rows('fourth_section_fees_list') ) : the_row();
              ?>
              <ul>
                <li class="load-hidden"><?php the_sub_field('fourth_section_fee_text'); ?></li>
              </ul>
              <?php
                  endwhile;
                endif;
                ?>
            </div>

            <div class="content-note load-hidden"><?php the_field('fourth_section_note_below_fees'); ?> </div>
          </div>
        </div>
      </div>
    </div>

    <div class="benefits">
      <div class="main-container">
        <div class="benefint-title load-hidden">
          <?php the_field('fourth_section_benefits_title'); ?>
        </div>
      </div>

      <div class="benefits-wrapper">
        <div class="wrap-left">
          <div class="benefits-content">
            <ul>
              <?php
              if( have_rows('fourth_section_benefits_list') ):
                while( have_rows('fourth_section_benefits_list') ) : the_row();
              ?>
              <li class="load-hidden">
                <div class="benefit-icon"
                  style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('benefits_icon'), 'icons'); ?>">
                </div>

                <div class="benefit-text"><?php the_sub_field('benefits_text'); ?></div>
              </li>
              <?php
              endwhile;
            endif;
            ?>
            </ul>
          </div>
          <div class="clear"></div>
        </div>

        <div class="wrap-right">
          <div class="wrap-right_content load-hidden">
            <div class="right_content-icon"
              style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('fourth_section_benefits_note_icon'), 'icons'); ?>);">
            </div>
            <div class="right_content-text"><?php the_field('fourth_section_benefits_note'); ?> </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>

    </div>

  </section>

</main>


<?php get_footer(); ?>