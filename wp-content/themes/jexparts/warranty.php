<?php
/**
 * Template name: الضمان
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

    <div class="warranty text-center clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="wow slideInUp">
                        <img src="<?php the_post_thumbnail_url( ); ?>" alt="" />
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="warranty-parg wow slideInDown">
                        <p><?php the_content(); ?></p>                      
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