<?php

//redux
if (!isset($content_width))
    $content_width = 740;
// Run Redux framework
if (!class_exists('ReduxFramework') && file_exists(dirname(__FILE__) . '/admin/ReduxCore/framework.php')) {
    require_once(dirname(__FILE__) . '/admin/ReduxCore/framework.php');
}

// load the theme's options
if (!isset($redux_owd) && file_exists(dirname(__FILE__) . '/admin/sample/sample-config.php')) {
    require_once(dirname(__FILE__) . '/admin/sample/sample-config.php');
}
add_theme_support('automatic-feed-links');

global $jexparts;
include 'includes/redux_based_options.php';

//end redux

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
//image sizesس
//Parameters : name, width, height, crop
add_image_size('blog', 800, 400, true); //for single pages
add_image_size('home_slider', 1900, 400, false); //for slider in home page pages
add_image_size('first_news', 380, 300, true); //for first post in news
add_image_size('blog', 233, 232, true); //for left posts in news
add_image_size('down_news', 360, 290, true); //for left posts in news
add_image_size('owl_pics', 380, 480, true); //for pictures in index (OWL Slider)
add_image_size('pics', 246, 360, true); //for pictures in index (OWL Slider)
add_image_size('video_archive', 400, 280, true);
add_image_size('new_poems', 360, 290, true); //for latest poems in the index
add_image_size('archive', 530, 490, true);
add_image_size('birrmember', 263, 278, true);
add_image_size('admin-list-thumb', 100, 70, true); // admin thumbnails size
//Thumbnail size for gallery

//logo or text
function breamx_logo_or_text() {
    //Retrieving data from database (Redux framework IDs)
    global $jexparts;
    $switch = $jexparts['logo_switch'];
    $logo = $jexparts['sitelogo']['url'];
    $text = $jexparts['wesite_name'];
    $description = $jexparts['description'];
    //if user selects logo
    if ($switch == 1) {
        ?>
        <a href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $logo ?>" alt="Website logo" class="img-responsive"/>
        </a>
        <?php
    } //if user selects text
    elseif ($switch == 0) {
        ?>
        <div class="logo_big_text">
            <a class="logo_title_link" href="<?php bloginfo('url'); ?>">
                <?php echo $text; ?>
            </a>

            <p class="logo_desc">
                <?php echo $description; ?>
            </p>
        </div>
        <?php
    }
}


// Add meta tags and favicon in head tag
function meta_tags() {
    ?>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback url'); ?>"/>
    <meta name="copyright" content="<?php bloginfo('name'); ?>"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="canonical" href="<?php bloginfo('url'); ?>"/>
    <meta property="og:locale" content="ar_SA"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
    <meta name="twitter:title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"/>
    <meta name="twitter:domain" content="<?php bloginfo('name'); ?>"/>
    <?php
}

add_action('wp_head', 'meta_tags');

// add style sheet in head tag
function add_style_in_header() {
    ?>
 

   <?php
   if (qtranxf_getLanguage() == 'ar') {
   echo '<link rel="stylesheet" type="text/css" href="http://naczit.com/wp-content/themes/namaa/css/bootstrap-rtl.css"/>'; 
   }
   ?> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-a.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
    <?php if (qtranxf_getLanguage() == 'ar'): ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen"/>
    <?php else: ?>
    <link href="<?php bloginfo('template_directory'); ?>/ltr.css" rel="stylesheet" type="text/css"/>
    <?php endif ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
    
    <?php
}

add_action('wp_head', 'add_style_in_header');
require_once('includes/wp_bootstrap_navwalker.php');

// add javascript files in footer
function javascript_files() {
    ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <!--    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHL8ysN_8Gsp-f39cHqMQ8CK3J6zE55zk" type="text/javascript"></script>-->
    <script src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    
    <!--    <script src="<?php bloginfo('template_directory'); ?>/js/gmap.js" type="text/javascript"></script>-->
    <script src="<?php bloginfo('template_directory'); ?>/js/custom.js" type="text/javascript"></script>
    <!--    <script src="<?php bloginfo('template_directory'); ?>/js/custom-mapscript.js" type="text/javascript"></script>-->
    <?php
}

add_action('wp_footer', 'javascript_files');
register_nav_menus(
        array(
            'header-menu' => 'القائمة فى الهيدر',
            'footer-menu' => 'القائمة فى الفوتر',
            'lang-menu'   => 'قائمة اللغة',
        )
);



add_action('admin_enqueue_scripts', 'custom_scripts');
if (file_exists(__DIR__ . '/metabox/cmb2/init.php')) {
    require_once __DIR__ . '/metabox/cmb2/init.php';
} elseif (file_exists(__DIR__ . '/metabox/CMB2/init.php')) {
    require_once __DIR__ . '/metabox/CMB2/init.php';
}


add_action( 'admin_menu', 'my_remove_menu_pages' );
 
function my_remove_menu_pages() {
remove_menu_page('options-general.php');
remove_menu_page('plugins.php');
remove_menu_page('tools.php');
}



//post type includer
include 'postType/slider.php';
include 'postType/features.php';
include 'metabox/homepageMetaBox.php';
include 'metabox/aboutMeta.php';
include 'functions/breadcrumps.php';
include 'functions/pagenavi.php';
