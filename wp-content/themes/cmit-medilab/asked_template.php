<?php /* Template Name: ask */
get_header(); ?>

<!-- ======= Frequently Asked Questions Section ======= -->
<section style=" margin-top: 150px; " id="faq" class="faq section-bg">
    <?php
    $args = array(
        'post_type' => 'asked',
        'post_status' => 'published',
        'order' => 'ASC',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    ?>
    <div class="container">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
            <ul>
                <?php
                while ($query->have_posts()) :
                    $query->the_post();
                ?>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse collapsed" data-bs-target="#faq-list-1"><?php the_field('asked_que'); ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                <?php the_field('asked_que'); ?>
                            </p>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>

    </div>

</section>
<? get_footer(); ?>