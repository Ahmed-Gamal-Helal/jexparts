<?php
global $jexparts;
get_header();
?>
<section class="loop" id="targets">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                        <div class="post-box">
                            <article id="id-<?php the_ID(); ?>">
                                <div class="heading">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                                <?php setPostViews(get_the_ID()); ?>
                            </article>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>
                        
                                                        <?php
                                    if (qtranxf_getLanguage() == 'en') {
                                        echo 'Sorry, what you are looking for is not available here'; 
                                    } elseif (qtranxf_getLanguage() == 'ar') {
                                         echo 'المعذرة, ما تبحث عنه غير متوفر هنا'; 
                                    }
                                ?>
                    </p>
                <?php endif; ?>

            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>