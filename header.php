<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon/safari-pinned-tab.svg"
    color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <link rel="stylesheet" href="https://use.typekit.net/jte8lmk.css">
  <meta name="theme-color" content="#ffffff">
  <title>
    <?php if (is_front_page()) {
      echo get_bloginfo('name');
    } else {
      echo get_bloginfo('name') . ' | ';
      wp_title('', true, 'right');
    } ?>
  </title>
  <?php wp_head(); ?>
</head>

<header>
  <div class="main-container">

    <div class="header-content">

      <div class="head-logo">
        <a href="<?php echo get_option("siteurl"); ?>">
          <img
            src="<?php echo get_correct_image_link_thumb(get_field('header_logo_image', 'options'), 'header_logo'); ?>"
            alt="">
        </a>
      </div>

      <div class="head-nav">
        <nav>

          <?php wp_nav_menu(array( 
                'container'  => '<ul></ul>',
                'menu_class' => 'meniuitem menu-menu',
                'theme_location' => 'header-menu'
            )); ?>

        </nav>
      </div>

      <div class="head-contact">
        <div class="head-contact_icon"
          style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('header_contacts_icon', 'options'), 'icons'); ?>">
        </div>
        <div class="head-contact_number"> <a href="tel:"><?php the_field('header_contacts_number', 'options'); ?></a>
        </div>
      </div>

      <div class="mob-burger">
        <input type="checkbox" id="hamburger1" />
        <label for="hamburger1"></label>
      </div>

    </div>

  </div>
</header>
<div class="head-nav mobile-menu">
  <div class="wrapper">

    <nav class="mob-nav">
      <?php wp_nav_menu(array( 
        'container'  => '<ul></ul>',
        'menu_class' => 'meniuitem menu-menu',
        'theme_location' => 'header-menu'
    )); ?>
    </nav>

    <div class="head-contact">
      <div class="head-contact_icon"
        style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('header_contacts_icon', 'options'), 'icons'); ?>">
      </div>
      <div class="head-contact_number"> <a href="tel:"><?php the_field('header_contacts_number', 'options'); ?></a>
      </div>
    </div>

    <div class="mobile-meniu_footer">
      <div class="item-elem">
        <?php if(get_field('follow_us_link', 'options')){ ?>
        <a target="_blank" href="<?php the_field('follow_us_link', 'options'); ?>">
          <span style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/r-fb.svg);"
            class="elem-icon"></span>
          <?php the_field('follow_us_text', 'options'); ?>
        </a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<body <?php body_class(); ?>>