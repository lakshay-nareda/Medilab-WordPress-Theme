<?php /* Template Name: cournter */ ?>

<?php get_header();?>

    <!-- ======= Counts Section ======= -->
    <section style="margin-top: 150px;"  id="counts" class="counts">
      <div class="container">

        <div class="row">
        <?php $arg = array(
            'post_type'=>'doctor',
        ); 
        $postCount = new WP_Query($arg);
        // echo '<pre>';
        // print_r($postCount->found_posts);
        // die('died');
        ?>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $postCount->found_posts; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>


          <?php 
          $aarg = array(
            'post_type'=>'department',
          );
          $counted = new WP_Query($aarg);
        //   echo '<pre>';
        //   print_r($counted->found_posts);
        //   die('dead');
           ?>
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $counted->found_posts; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

<?php get_footer(); ?>