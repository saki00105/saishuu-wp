    <footer class="l-footer p-footer c-color--white ">

        <?php wp_nav_menu( array(
                'theme_location' => 'footer-menu',
            ) );
        ?>
        
        <p class="c-ff-M"><small>Copyright: RaiseTech</small></p>

        <!-- <div class="p-footer__layer">        
            <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/レイヤー\ 1.jpg" alt="archiveトップのハンバーガーの写真">

        </div> -->

        <!-- <div class="p-footer__layer" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() . '/img/' . urlencode('レイヤー 1.jpg') ); ?>);"></div> -->
        <?php
            // 画像のIDを指定します（例として1を使用）
            $image_id = 2023;

            // 画像のURLを取得します
            $image_url_array = wp_get_attachment_image_src( $image_id, 'full' );
            if ( $image_url_array ) {
                $image_url = $image_url_array[0];
                // 画像を表示します
                echo '<img src="' . esc_url( $image_url ) . '" alt="画像">';
            }
            ?>


    </footer>
    </div>
    <!-- <script src ="./js/main.js"></script> -->

<?php wp_footer( );?>
</body>
</html>