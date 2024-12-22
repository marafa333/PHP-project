  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <?php
          foreach ($abouts as $about) {
          ?>
            <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="<?= uploads($about['about_image']) ?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  <?= $about['about_title'] ?>
                </h5>
                <p>
                <?= $about['about_description'] ?>
                </p>
              </div>
            </div>
          </div>
          <?php
              }
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->