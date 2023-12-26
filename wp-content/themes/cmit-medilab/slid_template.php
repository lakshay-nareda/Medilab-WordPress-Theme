<?php /* Template Name: slid */
get_header(); ?>


<section id="testimonials" class="testimonials">
    <div class="container">



        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'slider',

                );
                $query = new WP_Query($args);

                while ($query->have_posts()) :
                    $query->the_post();
                ?>
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="testimonial-img" alt="">
                                <h3><?php the_title(); ?></h3>
                                <h4><?php the_field('slid_text'); ?></h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i><?php the_content(); ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->



<?php get_footer(); ?>