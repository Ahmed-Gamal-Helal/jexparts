<?php
/**
 * Template name: الصفحه الرئيسيه
 */
get_header();
global $jexparts;
?>

    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php
            query_posts('post_type=slider&showposts=-1');
            if (have_posts()) {
                while (have_posts()) : the_post();
                    ?>
                <div class="swiper-slide">
                    <div class="imgslider imgslider1" style="background:url(<?php the_post_thumbnail_url( ); ?> ) no-repeat;">
                </div>
                <div class="details-slider">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <div class="btn-slider">
                        <?php $link_slider = get_post_meta(get_the_ID(), '_br_link_slider', true); ?>
                        <a class="hvr-bounce-to-right more-about" href="<?php the_permalink('13'); ?>"><?php echo esc_html($link_slider); ?></a>
                    </div>
                </div>
                </div>
           <?php 
           endwhile;
            }
            ?> 
            <?php wp_reset_query(); ?>

            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>  
    </div><!--End Slider-->

    <?php 
        $postid = '13';
        $recent = new WP_Query('page_id='. $postid .'');
        while($recent->have_posts()):$recent->the_post();
    ?>
    <div class="about text-center clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="img-about wow slideInUp">
                        <img src="<?php the_post_thumbnail_url( ); ?>" alt="" />
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="about-parg wow slideInDown">
                        <p><?php the_content(); ?></p>
                        <?php $img_about_par = get_post_meta(get_the_ID(), '_ho_img_about_par', true); ?>
                        <img src="<?php echo esc_html($img_about_par); ?>"> 
                    </div>
                </div>
            </div>
        </div>
    </div><!--End about-->
    <?php 
    endwhile;
    wp_reset_query();
    ?>


    <div class="Features" id="Features">
        <div class="container text-center">
            <div class="title wow slideInUp">
                <h2>
                    <?php
                        if (qtranxf_getLanguage() == 'en') {
                            echo ('Products Features');
                        } elseif (qtranxf_getLanguage() == 'ar') {
                            echo ('مميزات المنتج');
                        }
                    ?>
                </h2>
                
            </div>

            <div class="Featur">
                <div class="row">
                    
                <?php
                query_posts('post_type=features&showposts=-1');
                if (have_posts()) {
                    while (have_posts()) : the_post();
                        ?>

                    <div class="col-md-4 col-sm-6  wow fadeIn">
                        <div class="box-feature hvr-shutter-in-vertical">
                            <img src="<?php the_post_thumbnail_url( ); ?>" alt="" />
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>

                <?php
                endwhile;
                }
                ?>
                <?php wp_reset_query(); ?>

                </div>
            </div>


        </div><!--End container-->
    </div><!--End services-->

    <div class="clearfix"></div>

<?php
get_footer();
?>

