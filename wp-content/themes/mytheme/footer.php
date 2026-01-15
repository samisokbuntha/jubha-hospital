 <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <footer class="main-footer">
        <div class="footer-1">
            <div class="footer-contact">
                <!-- left -->
                <div class="footer-t">
                    <h2>Contact Us</h2>
                </div>
                <div class="footer-i">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""> <i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-telegram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-contact">
                <!-- right -->
                <div class="footer-t">
                    <h2>Subcribe Us</h2>
                </div>
                <div class="footer-s">
                   <input type="email" name="for-email" placeholder="Inter your Email">
                   <input id="sub"  type="subscribe" placeholder="Subscribe">
                </div>
            </div>
        </div>
        <div class="footer2">
            
             <!-- logo-site -->
            <div class="logo-site">
                <img src="<?php echo get_template_directory_uri(); ?>/image/logo3.png" alt="">
            </div>
            
            <div class="footer2-content">

                <!-- about-inter -->
                <div class="about-inter">
                    <h2>About Intercare</h2>
                    <ul>
                        <li>
                            <a href="">Our Story</a>
                        </li>
                        <li>
                            <a href="">News & Events</a>
                        </li>
                        <li>
                            <a href="">Job Opportunities</a>
                        </li>
                        <li>
                            <a href="">CSR</a>
                        </li>
                    </ul>
                </div>

                <!-- find-us -->
                <div class="find-us">
                    <h2>Find US</h2>
                    <ul>
                        <li>
                            <a href="">Olympia Medical Hub Bldg., St 161, Veal Vong, 7 Makara, Phnom Penh.</a>
                        </li>
                        <li>
                            <a href="">090 847 087</a>
                        </li>
                        <li>
                            <a href="">thapech@gamil.com</a>
                        </li>
                    
                    </ul>
                </div>

            </div>
                
        </div>
    </footer>