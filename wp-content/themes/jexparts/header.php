<?php global $jexparts; ?>
<!doctype html>

<html <?php language_attributes(); ?>>
    <head>
        <?php
        wp_head();
        ?>
        <link rel="icon" href="<?php echo $jexparts['favicon']['url'] ?>">
</head>
<body id="scroll-me-all-night-long">

        <div id="preloader" class="text-center">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/loader.png" />
        </div>

        <a id="button">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/go-to-the-top.svg" alt="" />
        </a>

<div class="wap">
    <header>
        <div class="container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo $jexparts['sitelogo']['url'] ?>" alt="" class="logo"></a>
            </div>
    
            <div class="icon_menu">
                <i class="fas fa-bars"></i>
            </div>

            <div class="hid-mobile">
                <div class="inner"> 
                        <div class="nav_bar">
                                <?php
                                wp_nav_menu(array(
                                    'menu' => 'header-menu',
                                ));
                                ?>
                            </div>
                    
                            <div class="lang">
                            <?php
                                wp_nav_menu(array(
                                    'menu' => 'lang',
                                    'container' => '',
                                    'items_wrap' => '%3$s',
                                    'depth' => 0
                                ));
                                ?>
                            </div>
                </div>
            </div>
        </div>
    </header><!--End header-->
    <div class="clearfix"></div>
