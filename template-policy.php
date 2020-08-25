<?php
/* Template name: Privacy Policy */
get_header();
?>
<main>
  <div class="main-container">
    <div class="policy-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>