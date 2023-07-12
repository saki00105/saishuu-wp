

<?php
//テーマサポート
add_theme_support( 'title-tag' );

//タイトル出力
// function wpbeg_title( $title ) {
//     if ( is_front_page() && is_home() ) { //トップページなら
//         $title = get_bloginfo( 'name', 'display' );
//     } elseif ( is_singular() ) { //シングルページなら
//         $title = single_post_title( '', false );
//     }
//         return $title;
//     }
// add_filter( 'pre_get_document_title', 'wpbeg_title' );


//スタイルシート
function wpbeg_script() {
    wp_enqueue_style( 'Roboto','https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap' , array() );
    wp_enqueue_style( 'Mplus1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'reset', get_theme_file_uri( '/css/reset.css' ), array(), '1.0.0');
    wp_enqueue_style( 'app', get_theme_file_uri( '/css/app.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ) , array(), '1.0.0');
    wp_enqueue_style( 'wp-style', get_theme_file_uri( '/style.css' ) , array(), '1.0.0');

}
add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

//ウィジット
function wpbeg_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'カテゴリーウィジェット',
            'id'            => 'category_widget',
            'description'   => 'カテゴリー用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
    register_sidebar(
        array(
          'name'          => 'タグウィジェット',
          'id'            => 'tag_widget',
          'description'   => 'タグ用ウィジェットです',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
          'after_title'   => "</h2>\n",
        )
      );
      register_sidebar(
        array(
          'name'          => 'アーカイブウィジェット',
          'id'            => 'archive_widget',
          'description'   => 'アーカイブ用ウィジェットです',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
          'after_title'   => "</h2>\n",
        )
      );
}
add_action( 'widgets_init', 'wpbeg_widgets_init' );


//カスタムメニュー
function theme_setup(){
    register_nav_menus( 
        array(
            'sideber-menu' => 'サイドバーメニュー',
        
        )
        );
}
add_action( 'after_setup_theme', 'theme_setup');