<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( );?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="l-container"> 
        <header class="l-header">
            <a class="p-header__title" href="<?php echo esc_url( home_url('/') );?>"><?php bloginfo( 'name' ); ?></a>
            
            <?php get_search_form( );?>

            <p class="l-sidebar__box c-fw-700">
                <a href="/">Menu</a>
            </p>

        </header>