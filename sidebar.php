<div class="l-sidebar__layer"></div>

<div class="l-sidebar">
    <p class="p-sidebar__menu c-fw-700">
        <a href="<?php echo esc_url( home_url('/') );?>">Menu</a>
    </p>
    
    <button class="p-sidebar__box"></button>

    <?php wp_nav_menu( array(
        'theme_location' => 'sidebar-menu',
        ) );
    ?>    
</div>

