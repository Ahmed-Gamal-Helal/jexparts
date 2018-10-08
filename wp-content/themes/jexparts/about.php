<?php
/**
 * Template name: من نحن 
 */
get_header();
global $jexparts;
?>

    <div class="clearfix"></div>

    <div class="section-title" style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/section-title.jpg');">
        <div class="container">
            <?php the_breadcrumb(); ?>
        </div>
    </div>


    <?php 
        while(have_posts()):the_post();
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

<?php
get_footer();
?>