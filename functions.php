<?php
//テーマサポート
add_theme_support( 'title-tag' );
//本体ギャラリーCSS停止
add_filter( 'use_default_gallery_style', '__return_false' );
//サムネイル機能
add_theme_support('post-thumbnails');


//スタイルシート
function wpbeg_script() {
    wp_enqueue_style( 'Roboto','https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap' , array() );
    wp_enqueue_style( 'Mplus1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'reset', get_theme_file_uri( '/css/reset.css' ), array(), '1.0.0');
    wp_enqueue_style( 'app', get_theme_file_uri( '/css/app.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'wp-style', get_theme_file_uri( '/style.css' ) , array(), '1.0.0');

    wp_enqueue_script( 'js', get_theme_file_uri( ).'/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

//エディタスタイル
function wpbeg_theme_add_editor_styles() {
  wp_enqueue_style( 'editor-style', get_theme_file_uri( '/css/editor-style.css' ) , array(), '1.0.0');
}
add_action( 'admin_init', 'wpbeg_theme_add_editor_styles' );

//カスタムメニュー
function theme_setup(){
    register_nav_menus( 
        array(
          'sidebar-menu' => 'サイドバーメニュー',
          'footer-menu' => 'フッターメニュー',
        )
        );
}
add_action( 'after_setup_theme', 'theme_setup');


//サムネイルの表示
function thumb_url( $size ) {
  if( has_post_thumbnail() ) {
    $postthumb =wp_get_attachment_image_src( get_post_thumbnail_id(), $size );
    $url = $postthumb[0];
    } else {
    $url = get_template_directory_uri() . '/img/20200502_noimage';
  }
  return $url;
}

