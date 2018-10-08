<?php 
    global $jexparts;
?>
    

    <div class="section-top-footer" style="background: url('<?php echo $jexparts['img_jex_bg']['url'] ?>');">
        <div class="container text-center">
            <div class="title-section">
                <h3>
                <?php
                    if (qtranxf_getLanguage() == 'en') {
                        echo $jexparts['big_title_jex_en'];
                    } elseif (qtranxf_getLanguage() == 'ar') {
                        echo $jexparts['big_title_jex'];
                    }
                ?>
                </h3>

                <p>
                <?php
                    if (qtranxf_getLanguage() == 'en') {
                        echo $jexparts['small_title_jex_en'];
                    } elseif (qtranxf_getLanguage() == 'ar') {
                        echo $jexparts['small_title_jex'];
                    }
                ?>
                </p>
            </div>
            <img src="<?php echo $jexparts['img_jex']['url'] ?>" alt="" />
        </div>
    </div>


<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="links-footer">
                    <h3>
                        <?php
                            if (qtranxf_getLanguage() == 'en') {
                                echo ('Important Links');
                            } elseif (qtranxf_getLanguage() == 'ar') {
                                echo ('روابط مهمة');
                            }
                        ?>
                    </h3>
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'header-menu',
                        ));
                    ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-footer">
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

            <div class="col-md-4">
                <div class="contact-footer">
                    <h3>
                        <?php
                            if (qtranxf_getLanguage() == 'en') {
                                echo ('Follow Us');
                            } elseif (qtranxf_getLanguage() == 'ar') {
                                echo ('تابعنا');
                            }
                        ?>
                    </h3>
      
                    <ul class="socialmedia-footer">
                        <?php get_template_part('includes/social_icons'); ?>
                    </ul>

                </div>
            </div>

        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <p>
            <?php
                if (qtranxf_getLanguage() == 'en') {
                    echo $jexparts['footer_copyright_en'];
                } elseif (qtranxf_getLanguage() == 'ar') {
                    echo $jexparts['footer_copyright_ar'];
                }
            ?>
        </p>
        <h3>
        <?php
            if (qtranxf_getLanguage() == 'en') {
                echo ('design and devolope by :');
            } elseif (qtranxf_getLanguage() == 'ar') {
                echo ('تصميم وبرمجة :');
            }
        ?>
        <a target="_new" href="breamx.com"> 
        <?php
            if (qtranxf_getLanguage() == 'en') {
                echo ('Brand');
            } elseif (qtranxf_getLanguage() == 'ar') {
                echo ('براند');
            }
        ?>
        </a></h3>
    </div>
</div>


</div><!--End Wap-->

<?php wp_footer(); ?>

</body>
</html>