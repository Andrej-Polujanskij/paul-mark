<footer>
  <div class="main-container">
    <div class="footer-content">
      <div class="footer-content_item">
      <?php the_field('copy_right_text', 'options'); ?>
      </div>

      <div class="footer-content_item">
        <div class="item-elem">
          <?php if(get_field('follow_us_link', 'options')){ ?>
          <a target="_blank" href="<?php the_field('follow_us_link', 'options'); ?>">
            <span style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('follow_us_icon', 'options'), 'icons'); ?>" class="elem-icon"></span>
            <?php the_field('follow_us_text', 'options'); ?>
          </a>
          <?php } ?>
        </div>

        <div class="item-elem">
          <a href="<?php echo get_option("siteurl"); ?><?php the_field('privacy_policy_link', 'options'); ?>">
          <?php the_field('privacy_policy_text', 'options'); ?>
          </a>
        </div>

      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>