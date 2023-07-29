
<?php get_header(); ?>
       
        <main class="l-main">
            <div class="p-visual--archive c-color_bg--black-top">
                <h1 class="p-visual--archive-title c-text--h1 c-color--white c-fw-700">Menu:
                    <span><?php the_archive_title( ); ?></span>
                </h1>
            </div>


            <div class="l-inner--archive">
           
                <h2 class="c-text--h2"><?php single_cat_title(); ?></h2>
                <article class="p-archive__text c-text--p">
                    <?php echo category_description(); ?>
                </article>




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
                                            
                                            <?php
                                                if (has_excerpt()) {
                                                    echo '<div class="p-card__archive-text c-text--p">';
                                                    the_excerpt();
                                                    echo '</div>';
                                                }else{
                                                    the_content();

                                                }                                            
                                            ?>
                                            
                                            <a  class="p-card__archive-button c-button--archive c-fw-700" href="<?php the_permalink( ); ?>">詳しく見る</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            <?php endwhile;
                        else:?>
                            <p>記事はありません</p>
                    <?php endif; ?>

                </ul>
                <ul class="p-pagination c-flex c-center">
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <?php wp_pagenavi(); ?>
                    </li>

                        
                </ul>

            </div>
            
        </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>