<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag');
    
   
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
        wp_enqueue_style( 'mplus1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap', array() );
        wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array() );
        // wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
       
        wp_enqueue_style( 'reset', get_theme_file_uri( '/css/reset.css' ), array(), '1.0.0' );
        wp_enqueue_style( 'css-style', get_theme_file_uri('/css/style.css')  , array(), '1.0.0' );
        wp_enqueue_style( 'app', get_theme_file_uri('/css/app.css')  , array(), '1.0.0' );
        wp_enqueue_style( 'style', get_theme_file_uri('/style.css')  , array(), '1.0.0' );
        // wp_enqueue_script( 'js', get_stylesheet_directory_uri() . 'https://code.jquery.com/jquery-3.6.4.min.js', array( 'js' ) );
        // wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array( 'main' ) );
    
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );


    //ウィジット
    // function wpbeg_widgets_init() {
    //     register_sidebar (
    //         array(
    //             'name'          => 'サイドバーウィジェット',
    //             'id'            => 'side_widget',
    //             'description'   => 'サイドバー用ウィジェットです',
    //             'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //             'after_widget'  => '</div>',
    //             'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
    //             'after_title'   => "</h2>\n",
    //         )
    //     );
    // }
    // add_action( 'widgets_init', 'wpbeg_widgets_init' );

    //カスタムメニュー 
	// wp_nav_menu( array(
	// 	'menu'            => '',
	// 	'menu_class'      => 'menu-item',
	// 	'menu_id'         => '{メニューのスラッグ}-{連番}',
	// 	'container'       => 'div',
	// 	'container_class' => 'menu-{メニューのスラッグ}-container',
	// 	'container_id'    => '',
	// 	'fallback_cb'     => 'wp_page_menu',
	// 	'before'          => '',
	// 	'after'           => '',
	// 	'link_before'     => '',
	// 	'link_after'      => '',
	// 	'echo'            => true,
	// 	'depth'           => 0,
	// 	'walker'          => '',
	// 	'theme_location'  => '',
	// 	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	// ));
    
    // function register_custom_menu() {
    //     register_nav_menus( array(
    //         'sideber-menu' => esc_html__( 'Sideber Menu', 'rtbread' ) ,
    //         'footer-menu'  => esc_html__( 'Footer Menu', 'rtbread' ),
    //     ) );

    // }
    // add_action('init', 'register_custom_menu');

    function register_custom_menu() {
        register_nav_menus( array(
            'sideber-menu' => 'Sideber Menu', 'rtbread',
            'footer-menu'  => 'Footer Menu', 'rtbread' ,
        ) );

    }
    add_action('after_setup_theme', 'register_custom_menu');
