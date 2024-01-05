<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>italElectriCars</title>
</head>
<body>
    <header>
        <div class="header-content">
            <a href="#">
                <h1><span class="lobster">ItalElectri</span>Cars</h1>
            </a>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-menu'
                    )
                );
            ?>
            <!-- <nav>
                <a href="#story">ABOUT</a>
                <a href="#contact">CONTACT</a>
                <a href="./pages/order.html" id="header-btn">ORDER NOW</a>
            </nav> -->
            <img src="<?php echo get_template_directory_uri();?>/assets/menu.png" alt="menu">
        </div>
    </header>
  
