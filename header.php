<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/default.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />
    <title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!-- <body> -->
    <div class="header--before"></div>
    <header>
      <h1 class="logo">
        <h1 class="logo"><a href="">Minimal Portfolio Theme</a></h1>

        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </h1>
    </header>
    <hr />
    <main class="content">