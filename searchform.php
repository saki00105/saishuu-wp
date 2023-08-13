<form class="p-header c-fw-700" action="<?php echo esc_url( home_url( '/' ) );?>" method="get">
    <input type="search" name="s" id="s" placeholder="" value="<?php echo get_search_query(); ?>" class="p-header__search c-border--form">
    <img class="p-header__icon " src="<?php echo get_stylesheet_directory_uri(); ?>/img/mushimegane.png" alt="検索虫眼鏡の写真">
    <input type="submit" id="searchsubmit" value="検索" class="p-header__submit c-button--form c-border--form">
</form>

<!-- <form class="p-header c-fw-700" action="<?php esc_url( home_url( '//saki-hamburger.com/' ) );?>" method="get">
    <input type="text" name="s" id="s-box" class="p-header__search c-border--form">
    <img class="p-header__icon " src="<?php echo get_stylesheet_directory_uri(); ?>/img/mushimegane.png" alt="検索虫眼鏡の写真">
    <input type="submit" id="searchsubmit" value="検索" class="p-header__submit c-button--form c-border--form">
</form> -->
