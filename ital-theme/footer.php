
<?php wp_footer();?>

<footer>
        <div class="left-footer">
            <h3>ITALELECTRICARS</h3>
            <p>e-500 is a trademark of IBennett LLC</p>
        </div>
        <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'bottom-menu',
                        'menu_class' => 'bottom-menu'
                    )
                );
            ?>
        <!-- <div class="right-footer">
            <a href="#story">ABOUT</a>
            <a href="#contact">CONTACT</a>
            <a href="./pages/order.html">ORDER NOW</a>
        </div> -->
    </footer>
</body>
</html>

