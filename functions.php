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

    function wpbeg_script() {
        wp_enqueue_style( 'mplus1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap', array() );
        wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array() );
        // wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
       
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '4.5.0' );
        wp_enqueue_style( 'css-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'js', get_stylesheet_directory_uri() . 'https://code.jquery.com/jquery-3.6.4.min.js', array( 'js' ) );
        wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array( 'main' ) );

        
       
    
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );