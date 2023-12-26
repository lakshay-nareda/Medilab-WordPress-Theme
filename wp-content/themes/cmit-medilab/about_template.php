<?php /* Template Name: About */  ?>

<?php get_header();
?>
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container-fluid">
        <?php
        $args = array(
            'post_type' => 'about', // Replace this with your custom post type name
            'post_status' => 'published',
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
        ?>
            <div class="row">
                <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch position-relative">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                </div>
                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <?php

                echo the_content();
            endwhile;
                ?>
                </div>
            </div>

    </div>
</section><!-- End About Section -->


<?php get_footer(); ?>