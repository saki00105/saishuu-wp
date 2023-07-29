
<?php get_header(); ?>     
    <main class="l-main">
        <?php 
            if( has_post_thumbnail() ) {
                $postthumb =wp_get_attachment_image_src( get_post_thumbnail_id(),'thumbnail' );
                $url = $postthumb[0];
            }
        ;?>
        <div class="p-visual--page" style="background-image: url(<?php echo $url; ?>);"></div>


        <h1 class="p-visual--single_page-title c-text--h1 c-color--white c-fw-700 u-position"><?php the_title( );?></h1>
     
    

        <div class="l-inner--single_page">
            <?php the_content( ); ?>
        </div>
    


    </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

