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
            <a href="/italelectric/">
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
            <div class="menu-btn">
                <div class="menu-bar"></div>
                <div class="menu-bar"></div>
                <div class="menu-bar"></div>
            </div>
            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/menu.png" alt="menu"> -->
        </div>
    </header>
  
