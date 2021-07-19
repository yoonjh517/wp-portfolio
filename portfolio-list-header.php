<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!-- <body> -->
    <div class="header--before"></div>
    <header class="portfolio">
        <h1 class="logo"><a href="">Minimal Portfolio Theme</a></h1>
        <nav>
          <!-- <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul> -->
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'main-menu',
              'container' => false,
            ))
          ?>
        </nav>
        <hr />
        <!-- 카테고리명만 리스트로 출력하기, 필터가 아니라 해당 카테고리로 이동하기 시작 -->
        <ul class="portfolio_links">
          <li><a href="<?php bloginfo('url'); ?>/portfolio/" class="secondary-btn active">All</a></li>
          <!-- <li><a href="" class="secondary-btn">Print</a></li>
          <li><a href="" class="secondary-btn">Web</a></li>
          <li><a href="" class="secondary-btn">Mobile</a></li> -->
          <?php 
            $categories = get_categories(array(
              'hide_empty' => true,
              'orderby' => 'name',
              'order' => 'ASC',
              'taxonomy' => 'my category',
              'exclude' => '13'

            ));
            foreach($categories as $category) { ?>

              <li><a href="<?php echo get_category_link($category->term_id).'?post_type=portfolio'; ?>" class="secondary-btn"><?php echo $category->name; ?></a></li>

            <?php } ?>
        </ul>
        <!-- 카테고리명만 리스트로 출력하기, 필터가 아니라 해당 카테고리로 이동하기 끝 -->
    </header>
    <main class="content">
    