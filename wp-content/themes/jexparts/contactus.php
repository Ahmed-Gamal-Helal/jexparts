<?php
/**
 * Template name: تواصل معنا
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
    
    <div class="contactus clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-inf">
                        <h3>
                            <?php
                                if (qtranxf_getLanguage() == 'en') {
                                    echo ('Contact Us');
                                } elseif (qtranxf_getLanguage() == 'ar') {
                                    echo ('تواصل معنا');
                                }
                            ?>
                        </h3>

                        <p><i class="fas fa-map-marker-alt"></i>
                        
                            <?php
                                if (qtranxf_getLanguage() == 'en') {
                                    echo $jexparts['adres-en'];
                                } elseif (qtranxf_getLanguage() == 'ar') {
                                    echo $jexparts['adres'];
                                }
                            ?>

                        </p>
                        <p><i class="fas fa-mobile-alt"></i> <?php echo $jexparts['phone'] ?></p>
                        <p><i class="fas fa-fax"></i> <?php echo $jexparts['phone2'] ?></p>
                        <p><i class="fas fa-envelope"></i><a href="mailto:info@website.com"> <?php echo $jexparts['mail'] ?></a></p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-contact">
                        <h3>
                            <?php
                                if (qtranxf_getLanguage() == 'en') {
                                    echo ('Send Message');
                                } elseif (qtranxf_getLanguage() == 'ar') {
                                    echo ('راسلنا');
                                }
                            ?>
                        </h3>

                        <?php
                            if (qtranxf_getLanguage() == 'en') {
                                echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]');
                            } elseif (qtranxf_getLanguage() == 'ar') {
                                echo do_shortcode('[contact-form-7 id="46" title="ارسال رسالة"]');
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div><!--End contactus-->

    <?php 
    endwhile;
    wp_reset_query();
    ?>

<?php
get_footer();
?>