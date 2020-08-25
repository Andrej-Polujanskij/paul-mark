<?php
/* Template name: Contacts */
get_header();
?>
<main class="contacts">
  <section class="contacts-page">
    <div class="contacts-page_left"
      style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('contacts_bg_image'), 'contact_bg_img'); ?>);">
      <div class="page_left-content">
        <div class="page_left-content_top">
          <div class="content_top-title load-hidden">
            <h2><?php the_field('contacts_title'); ?></h2>
          </div>
          <div class="content_top-contacts">
            <ul>
              <?php
              if( have_rows('contacts_list') ):
                while( have_rows('contacts_list') ) : the_row();
              ?>
              <li class="load-hidden">
                <div class="contact-icon"
                  style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('contacts_list_icon'), 'icons'); ?>);">
                </div>
                <?php $contact_field = get_sub_field('contacts_type');  
                    if( $contact_field == 'Number') {?>
                <div class="contact-text"><a href="tel:<?php the_sub_field('contacts_list_text_number'); ?>"><?php the_sub_field('contacts_list_text_number'); ?></a></div>

                <?php }elseif( $contact_field == 'Email') { ?>
                  <div class="contact-text"><a href="mailto:<?php the_sub_field('contacts_list_text_email'); ?>"><?php the_sub_field('contacts_list_text_email'); ?></a></div>

                  <?php }elseif( $contact_field == 'Address') { ?>
                    <div class="contact-text"><a><?php the_sub_field('contacts_list_text_address'); ?></a></div>
                  <?php } ?>
                  <!-- <div class="contact-text"><a href="<?php the_sub_field('contacts_list_text'); ?>"><?php the_sub_field('contacts_list_text'); ?></a></div> -->
              </li>
              <?php
              endwhile;
            endif;
            ?>
            </ul>
          </div>

          <div class="content_top_logo load-hidden"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/big-b-logo.svg);">
          </div>

          <div class="tri"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/tri.svg);">
          </div>
        </div>
        <div class="map_address"><?php the_field('contacts_address_in_map'); ?></div>
        <div class="page_left-content_bottom map load-hidden">

        </div>
      </div>
    </div>
    <div class="contacts-page_right">
      <div class="page_right-content">
        <div class="page_right-content_title load-hidden">
          <h2><?php the_field('foml_title'); ?></h2>
        </div>
        <div class="page_right-content_form">
          <form id="contact-form" action="" method="post">

            <div class="input_block load-hidden">
              <input type="text" class="inputText required" name="name" placeholder=" " />
              <span class="floating-label"><?php the_field('form_name_placeholder'); ?></span>
            </div>
            <div class="input_block load-hidden">
              <input type="text" class="inputText minSeven" name="phone" placeholder=" " />
              <span class="floating-label"><?php the_field('form_phone_placeholder'); ?></span>
            </div>
            <div class="input_block load-hidden">
              <input type="text" class="inputText requiredemail" name="email" placeholder=" " />
              <span class="floating-label"><?php the_field('form_email_placeholder'); ?></span>
            </div>
            <div class="input_block load-hidden">
              <textarea type="text" class="inputText required" name="message" placeholder=" "></textarea>
              <span class="floating-label"><?php the_field('form_message_placeholder'); ?></span>
            </div>

            <div class="input_block load-hidden input_chekbox">
              <label for="p_policy">
                <span class="checkbox-dot"></span>
                <input type="checkbox" name="p_policy" id="p_policy" required class="">
                <span class="p_policy-note">
                  <?php the_field('form_privacy_policy_text'); ?>
                </span>
              </label>
            </div>

            <div class="input_block load-hidden">
              <button class="submit_btn" type="submit"><?php the_field('form_button_text'); ?></button>
            </div>

            <div class="spinner">
              <div class="rect1"></div>
              <div class="rect2"></div>
              <div class="rect3"></div>
              <div class="rect4"></div>
              <div class="rect5"></div>
            </div>

            <div class="blur"></div>

          </form>
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>