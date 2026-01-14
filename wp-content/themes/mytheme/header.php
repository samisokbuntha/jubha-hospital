    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <header class="main-header">
        <div class="header-container">

            <!-- Logo -->
            <div class="header-logo">
               <img src="<?php echo get_template_directory_uri(); ?>/image/logo1.png" alt="">
            </div>

        </div>
        <div class="big-header">
            <!-- Right icons -->            <div class="header-actions">
                <a href="#"><i class="fa-solid fa-phone"></i> 090 847 087</a>
                <a href="#"><i class="fa-solid fa-calendar-days"></i> Dr Calendar</a>
            </div>
         <!-- Navigation -->
            <nav class="header-nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Doctor Calendar</a></li>
                    <li><a href="">Gifts &amp; Sets</a></li>
                    <li><a href="">What's Scent Space?</a></li>
                    <li><a href="">Rewards</a></li>
                </ul>
            </nav>
        </div>

    </header>1
