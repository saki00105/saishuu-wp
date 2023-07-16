
<?php get_header(); ?>
       
        <main class="l-main">
            <div class="p-visual--archive c-color_bg--black-top">
                <h1 class="p-visual--archive-title c-text--h1 c-color--white c-fw-700">Menu:</h1>
            </div>

            


            <div class="l-inner--archive">
                <h2 class="c-text--h2">小見出しが入ります</h2>
                <p class="p-archive__text c-text--p">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>


                

                <ul class="p-card__archive">

                <?php 
                    if (have_posts(  )):
                        while(have_posts(  )):
                            the_post(  ); 
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
                                            <!-- <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.jpg" alt="チーズバーガーの写真"> -->
                                        </div>

                                        <figcaption class="p-card__archive-content">
                                            <h2 class="c-text--h2 c-color--white"><?php the_title();?></h2>

                                            <h3 class="p-card__archive-sub c-color--white">小見出し</h3>
                                            <p class="p-card__archive-text c-text--p c-color--white"><?php the_excerpt(  ); ?></p> 
                                            <a  class="p-card__archive-button c-button--archive c-fw-700" href="<?php the_permalink( ); ?>">詳しく見る</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            <?php 
                        endwhile;
                    else:
                        ?>


            
                <p>記事はありません</p>
                <?php endif; ?>
                    <!-- <li>
                        <figure class="p-card__archive-wrap c-flex">
                            <div class="p-card__archive-img c-flex">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.jpg" alt="ダブルチーズバーガーの写真">
                            </div>
                            <figcaption class="p-card__archive-content">
                                <h2 class="c-text--h2 c-color--white">ダブルチーズバーガー</h2>
                                <h3 class="p-card__archive-sub c-color--white">小見出しが入ります</h3>
                                <p class="p-card__archive-text c-text--p c-color--white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a  class="p-card__archive-button c-button--archive c-fw-700" href="/">詳しく見る</a>
                            </figcaption>  
                        </figure>         
                    </li>
                    <li>
                        <figure class="p-card__archive-wrap c-flex">
                            <div class="p-card__archive-img c-flex">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.jpg" alt="スペシャルチーズバーガーの写真">
                            </div>
                            <figcaption class="p-card__archive-content">
                                <h2 class="c-text--h2 c-color--white">スペシャルチーズバーガー</h2>
                                <h3 class="p-card__archive-sub c-color--white">小見出しが入ります</h3>
                                <p class="p-card__archive-text c-text--p c-color--white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a  class="p-card__archive-button c-button--archive c-fw-700" href="/">詳しく見る</a>
                            </figcaption>
                        </figure> 
                    </li> -->
                </ul>

                
           
            <!-- <?php get_pagination(); ?> -->

            </div>
        </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>