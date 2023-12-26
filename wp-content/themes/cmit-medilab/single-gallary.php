<?php
get_header();
/* Start the Loop */
while (have_posts()) : the_post();
?>
    <div class="row top_margin">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <?php
            

            // don't forget to replace 'image' with your field name
            $imageID = get_field('about');
            // can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
            $size = 'large';

            if ($imageID) {
                // creates the img tag
            ?>
                <div>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"><?php echo wp_get_attachment_image($imageID, $size); ?></a>
                    
                </div>
            <?php
            }
            ?>
        </div>
        <div class=" col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5  description  "> <?php the_content(); ?></div>
    </div>


<?php
// get_template_part('template-parts/post/content', get_post_format());
endwhile; // End of the loop.
get_footer();
?>