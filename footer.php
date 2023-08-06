
        <footer class="l-footer  c-color--white ">
            <div class="p-footer">
                <?php wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                        ) );
                ?>
                <p class="c-ff-M"><small>Copyright: RaiseTech</small></p>
                <img class="p-footer__layer" src="<?php echo esc_url( get_theme_file_uri( '/img/footer-layer.jpg' )) ; ?>"  alt="">
            </div>
        </footer>
    </div>
<?php wp_footer( );?>
</body>
</html>