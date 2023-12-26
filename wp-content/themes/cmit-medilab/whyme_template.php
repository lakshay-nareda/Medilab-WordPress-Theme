<?php /* Template Name: whyme */ ?>


<?php get_header(); ?>


<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div style="margin-top: 150px;" class="container">

        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <?php
                $query = new WP_Query(
                    array(
                        'order' => 'ASC',
                        'post_type' => 'whyme',
                        'posts_per_page' => 1,

                    )
                );
                ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="content">
                        <h3><?php the_title(); ?></h3>
                        <p>
                            <?php the_content(); ?>
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn"><?php the_field('metxt'); ?><i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <?php
                $query = new WP_Query(
                    array(
                        'order' => 'DESC',
                        'post_type' => 'whyme',
                        'posts_per_page' => 3,

                    )
                );
                ?>
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>


                </div>
            </div>
        </div>

        </div>
    </div>
</section><!-- End Why Us Section -->



