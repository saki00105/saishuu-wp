<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/reset.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <!-- <link rel="stylesheet" href="css/app.css"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap" rel="stylesheet"> -->
    <!-- <title>Document</title> -->
    <?php wp_head( );?>
</head>

<body <?php body_class(); ?>>

    <div class="l-container"> 


        <header class="l-header">
            <!-- <p class="p-header__title">Hamburger</p> -->
            <a class="p-header__title" href="<?php echo esc_url( home_url('/') );?>"><?php bloginfo( 'name' ); ?></a>

            
            <?php get_search_form( );?>

            <p class="l-sideber__box c-fw-700">
                <a href="/">Memu</a>
            </p>

        </header>