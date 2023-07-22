
<?php get_header(); ?>     
    <main class="l-main">
        <div class="p-visual--page" style="background-image:url
                 (<?php echo thumb_url( 'full' ); ?>)">

            <h1 class="p-visual--single_page-title c-text--h1 c-color--white c-fw-700 u-position">ショップについて</h1>
     
        </div>
        
        <div class="l-inner--single_page">
            <?php the_content( ); ?>
        </div>
    


    </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

