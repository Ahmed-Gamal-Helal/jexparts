<?php
/**
 * Template name: المميزات
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
    endwhile;
    wp_reset_query();
    ?>

<?php
get_footer();
?>