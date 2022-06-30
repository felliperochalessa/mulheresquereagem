<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <div class="wrapper header__wrapper">
      <div class="header__logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" />
        </a>
      </div>
      <div class="header__menu">
        <nav class="menu">
          <button class="menu__mobile" aria-label="Abrir Menu" aria-haspopup="true" aria-expanded="false">
            <span class="menu__mobile--hamburguer"></span>
          </button>
          <ul class="menu__list">
            <?php $menu_location = 'mqr-menu'; ?>
            <?php if (has_nav_menu($menu_location)) : ?>
            <?php $menu_items = wp_get_nav_menu_items(wp_get_nav_menu_name($menu_location)); ?>
            <?php foreach ($menu_items as $menu_item) : ?>

            <li class="menu__item">
              <a href="<?php echo $menu_item->url; ?>" class="menu__link"><?php echo $menu_item->title; ?></a>
            </li>
            <?php endforeach; ?>
            <?php endif ?>
          </ul>
          <ul class="social">
            <li class="social__item">
              <a href="http://facebook.com/mulheresquereagem" target="blank" class="social__link"><i
                  class="fa-brands fa-facebook-square fa-lg"></i></a>
            </li>
            <li class="social__item">
              <a href="http://instagram.com/mulheresquereagem" target="blank" class="social__link"><i
                  class="fa-brands fa-instagram fa-lg"></i></a>
            </li>
            <li class="social__item">
              <a href="https://wa.me/5521970937203" target="blank" class="social__link"><i
                  class="fa-brands fa-whatsapp fa-lg"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>