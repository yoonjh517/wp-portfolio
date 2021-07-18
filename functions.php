<?php 
// todo 변수 지정

// var menu = 값  javascript 변수 지정
// $menu = 값  php 변수 지정
// define('변수명', 값)  wordpress 변수 지정

// 자바스크립트 변수 + 값  '<a href>' + i + '</a>'
// php 변수.값 '<a href>'.i.'</a>'

define('THEMEROOT', get_stylesheet_directory_uri()); // ../minimal
define('IMAGES', THEMEROOT . '/imgages');
define('CSS', THEMEROOT . '/css');
define('JS', THEMEROOT . '/js');

// todo 메뉴 활성화

// todo 특성 이미지 활성화

// todo script & css load

if (! function_exists('jeonghwan_scripts')) {
  function jeonghwan_scripts(){
    // 스크립트 등록하기
    wp_register_script('modernizr-js', JS .'/modernizr.min.js', false, false, true);
    // 스크립트 로드하기
    wp_enqueue_script('modernizr-js');
    // css 로드하기
    wp_enqueue_style('common-css', CSS . '/common.css');
    wp_enqueue_style('bootstrap-grid', CSS . '/bootstrap-grid.min.css');
    wp_enqueue_style('default-css', CSS . '/default.min.css');
    wp_enqueue_style('responsive-css', CSS . '/responsive.min.css');
  }
  add_action('wp_enqueue_scripts', 'jeonghwan_scripts');
}
