
  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Gym Trainers
        </h2>
      </div>
      <div class="row">
        <?php 
        foreach ($trainers as $trainer) {
        ?>
          <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
              <?= $trainer['trainer_name'] ?>
              </h5>
            </div>
            <div class="img-box">
              <img src="<?= uploads($trainer['trainer_image']) ?>" height="400px" alt="<?= $trainer['trainer_name'] ?>">
            </div>
            <div class="social_box">
              <a href="https://www.facebook.com/<?= $trainer['trainer_facebook'] ?>" target="_blank">
                <img src="web/images/facebook-logo.png" alt="">
              </a>
              <a href="https://x.com/<?= $trainer['trainer_twitter'] ?>" target="_blank">
                <img src="web/images/twitter.png" alt="">
              </a>
              <a href="https://www.instagram.com/<?= $trainer['trainer_instagram'] ?>" target="_blank">
                <img src="web/images/instagram-logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>

  <!-- end trainer section -->