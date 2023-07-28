
<?php get_header(); ?>
       
        <main class="l-main">
            <div class="p-visual--archive c-color_bg--black-top">
                <h1 class="p-visual--archive-title c-text--h1 c-color--white c-fw-700">Menu:<?php the_archive_title( ); ?></h1>
            </div>

            <div class="l-inner--archive">
                <h2 class="c-text--h2"></h2>
                <p class="p-archive__text c-text--p"></p>


                

                <ul class="p-card__archive">

                    <?php 
                        if (have_posts(  )):
                            while(have_posts(  )):
                                the_post(  ); ?> 
                                
                                <li  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <figure class="p-card__archive-wrap c-flex">
                                        <div class="p-card__archive-img c-flex">
                                            <?php the_post_thumbnail(  );?>
                                        </div>
                                        <figcaption class="p-card__archive-content c-color--white">
                                            <h2 class="c-text--h2"><?php the_title();?></h2>
                                            <?php the_content(  );?>
                                            <a  class="p-card__archive-button c-button--archive c-fw-700" href="<?php the_permalink( ); ?>">詳しく見る</a>
                                        </figcaption>
                                    </figure>




                                        <!-- <figure class="p-card__archive-wrap c-flex">
                                            <div class="p-card__archive-img c-flex"> -->
                                                
                                                <!-- <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.jpg" alt="チーズバーガーの写真"> -->
                                            <!-- </div> -->

                                            <!-- <figcaption class="p-card__archive-content">
                                                <h2 class="c-text--h2 c-color--white"></h2>

                                                <h3 class="p-card__archive-sub c-color--white"></h3>
                                                <p class="p-card__archive-text c-text--p c-color--white"></p> 
                                                <a  class="p-card__archive-button c-button--archive c-fw-700" href=""></a>
                                            </figcaption>
                                        </figure> -->
                                </li>
                                


                            <?php endwhile;
                        else:?>
                            <p>記事はありません</p>
                    <?php endif; ?>
                    
                    <?php if( get_previous_post() || get_next_post() ) : ?>
                        <ul class="p-pagination c-flex c-center">
                            <?php if ( get_previous_post() ) : ?>
                                <li class="p-pagination__icon--previous"><?php previous_post_link( '%link', 'Prev' ); ?></li>
                            <?php endif; ?>
                            <?php if( get_next_post() ): ?>
                                <li class="p-pagination__icon--next"><?php next_post_link( '%link', 'Next' ); ?></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>

                    
                </ul>

    
            </div>
            
        </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>