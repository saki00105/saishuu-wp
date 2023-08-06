<?php
/*
Template Name: TOPページ
*/
?>

<?php get_header(); ?>
    <main class="l-main">
        <?php
            if( has_post_thumbnail() ) {
                $postthumb =wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                $url = $postthumb[0];
            }
        ?>
        <div class="p-visual--main" style="background-image: url(<?php echo $url; ?>);">
            <h1 class="p-visual--main-title c-color--white c-fw-700"><?php the_title( );?></h1>
        </div>

        <article class="">
            <?php the_content( ); ?>
        </article>
    </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>