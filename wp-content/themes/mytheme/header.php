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
               <img src="http://ksk-1.test/wp-content/uploads/2026/01/logocat.jpg" alt="">
            </div>

            <!-- Navigation -->
            <nav class="header-nav">
                <ul>
                    <li><a href="http://ksk-1.test/">Home</a></li>
                    <li><a href="http://ksk-1.test/clinic-calendar/http://ksk-1.test/clinic-calendar/">Doctor Calendar</a></li>
                    <li><a href="#">Gifts &amp; Sets</a></li>
                    <li><a href="#">What's Scent Space?</a></li>
                    <li><a href="#">Rewards</a></li>
                </ul>
            </nav>

            <!-- Right icons -->
            <div class="header-actions">
                <a href="#">Sign in</a>
            </div>

        </div>
    </header>