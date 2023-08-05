<!-- <form class="p-header c-fw-700" action="search.html" method="get">
    <input type="search" name="search" placeholder="" class="p-header__search c-border--form">
    <input type="submit" name="submit" value="検索" class="p-header__submit c-button--form c-border--form">
</form> -->


<form class="p-header c-fw-700" action="<?php esc_url( home_url( '/' ) );?>" method="get">
    <input type="search" name="s" id="s" placeholder="" value="<?php the_search_query(); ?>"class="p-header__search c-border--form">
    <img class="p-header__icon " src="<?php echo get_stylesheet_directory_uri(); ?>/img/mushimegane.png" alt="検索虫眼鏡の写真">
    <input type="submit" id="searchsubmit" value="検索" class="p-header__submit c-button--form c-border--form">
</form>

