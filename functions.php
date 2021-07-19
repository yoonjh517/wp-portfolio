<?php 
// todo 1. 변수 지정

// var menu = 값  javascript 변수 지정
// $menu = 값  php 변수 지정
// define('변수명', 값)  wordpress 변수 지정

// 자바스크립트 변수 + 값  '<a href>' + i + '</a>'
// php 변수.값 '<a href>'.i.'</a>'

define('THEMEROOT', get_stylesheet_directory_uri()); // ../minimal
define('IMAGES', THEMEROOT . '/imgages');
define('CSS', THEMEROOT . '/css');
define('JS', THEMEROOT . '/js');

// todo 2. 테마 설정
// todo 메뉴 활성화
// todo 특성 이미지 활성화

if ( ! function_exists('jeonghwan_theme_setup')){
  function jeonghwan_theme_setup(){
    // thumbnail - 특성 이미지를 사용하도록 설정
    add_theme_support('post-thumbnails');
    // menu 기능을 사용할 수 있도록 등록
    register_nav_menus( array(
      'main-menu' => __('Main Menu', 'jeonghwan') // main-menu: theme_location , Main Menu 는 wp웹사이트에 표시될 이름
    ));
  }
  add_action('after_setup_theme', 'jeonghwan_theme_setup');
}


// todo script & css load

if (! function_exists('jeonghwan_scripts')) {
  function jeonghwan_scripts(){
    // 스크립트 등록하기
    wp_register_script('modernizr-js', JS .'/modernizr.min.js', false, false, true);
    wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, false, false);
    wp_register_script('mainJS', JS . '/main.js', true, false, false); // 의존성, 버전표시, 단독으로
    // 스크립트 로드하기
    wp_enqueue_script('modernizr-js');
    wp_enqueue_script('jQuery');
    wp_enqueue_script('mainJS');
    // css 로드하기
    wp_enqueue_style('bootstrap-grid', CSS . '/bootstrap-grid.min.css');
    wp_enqueue_style('responsive-css', CSS . '/responsive.css');
    wp_enqueue_style('common-css', CSS . '/common.css');
    wp_enqueue_style('reset', CSS . '/reset.css');
    wp_enqueue_style('default-css', CSS . '/default.css');
  }
  add_action('wp_enqueue_scripts', 'jeonghwan_scripts');
}

// ! portfolio type registration

function jeonghwan_custom_post_type() {
  register_post_type('portfolio',
      array(
          'labels'      => array(
              'name'          => __('Portfolios'),
              'singular_name' => __('Portfolio'),
              'set_featured_image' => __('Featured Image'), // register featured image section
              'featured_image' => __('Add Featured Image'), // register featured image section
          ),
              'public'      => true,
              'has_archive' => true,
              'supports' => array('title', 'editor', 'thumbnail'), // register featured image section
      )
  );
}
add_action('init', 'jeonghwan_custom_post_type');

// ! portfolio post category

function create_my_portfolio_category() {
  register_taxonomy(
    'my category',
    'portfolio',
    array(
      'label' => __('category'),
      'rewrite' => array('slug' => 'portfolios'),
      'hierarchical' => true,
    )
    );
}
add_action('init', 'create_my_portfolio_category');

// ! portfolio pagination custom style

if (!function_exists('jeonghwan_pagination')) {
  function jeonghwan_pagination(){
    $args = array(
      'prev_next' => false,
      'type' => 'array'
    );
    $pagination = paginate_links($args);

    if (is_array($pagination)) {
      echo '<p class="pagenation shadow">';
      foreach ($pagination as $page) {
        if (strpos($page, 'current')) {
          echo '<span class="secondary-btn active"' . $page . '</span>';
        } else {
          echo '<span class="secondary-btn">' . $page . '</span>';
        }
      }
      echo '</p>';
    }
  }
}