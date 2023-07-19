<?php get_header(); ?>

        <main class="l-main">
            <div class="p-visual--archive c-color_bg--black-top">
                <h1 class="p-visual--archive-title c-text--h1 c-color--white c-fw-700">Seach:</h1>
            </div>

            <div class="l-inner--archive">
                <h2 class="c-text--h2">小見出しが入ります</h2>
                <p class="p-archive__text c-text--p">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                

                <!-- <?php get_pagination(); ?> -->

            </div>

            <ul class="p-card__archive">
                <?php
                    if( have_posts() ) : //1.投稿データがあるかの条件分岐。
                        while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
                            the_post(); //3.ループ処理に必要なカウント処理等
                            ?>
                                    <li>
                                        <figure class="p-card__archive-wrap c-flex">
                                            <div class="p-card__archive-img c-flex">
                                                <?php 
                                                    if (has_post_thumbnail( )):
                                                        the_post_thumbnail( );
                                                    else:  
                                                        ?><div class="no-thumbnail"></div><?php
                                                    endif;
                                                ?>
                                            </div>
                                            <figcaption class="p-card__archive-content">
                                                <h2 class="c-text--h2 c-color--white">見出しが入ります</h2>
                                                <h3 class="p-card__archive-sub c-color--white">小見出しが入ります</h3>
                                                <p class="p-card__archive-text c-text--p c-color--white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> 
                                                <a  class="p-card__archive-button c-button--archive c-fw-700" href="/">詳しく見る</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                            
                        endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
                    else : //6.投稿データがなければ
                        ?><p>表示する記事がありません</p><?php //7.ない時の処理
                    endif; ?> //8.条件分岐終了
                ?>
            </ul>  


        </main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

