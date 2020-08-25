<?php
/* Template name: About Us */
get_header();
?>
<main class="">
  <section class="about-head">
    <div class="info-below_section">
      <div class="info-below-left">
        <div class="info-below-left_img load-hidden"
          style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('first_section_image'), 'thumbas'); ?>);">

        </div>
      </div>
      <div class="info-below-right">
        <div class="info-below-right_content load-hidden">
          <h2 class="load-hidden"> <?php the_field('first_section_title'); ?></h2>
          <?php the_field('first_section_text'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="about-info">
    <div class="main-container">
      <div class="about-info_title load-hidden">
        <h2><?php the_field('second_section_title'); ?></h2>
      </div>
      <div class="about-info_text load-hidden">
        <?php the_field('second_section_text'); ?>
      </div>
      <div class="wrapper about-info_footer ">
        <div class="wrap-item">
          <div class="dot-line_decor"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/dot-line-decor.svg);">
          </div>

          <div class="about-info_footer-slug load-hidden"><?php the_field('second_section_slug_'); ?> </div>
          <div class="about-info_footer-sub_slug load-hidden"><?php the_field('second_section_sub_slug'); ?></div>

        </div>
        <div class="wrap-item">
          <div class="wrap-item_logo load-hidden"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/big-b-logo.svg);">
          </div>
        </div>
      </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>