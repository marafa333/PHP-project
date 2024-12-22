
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php
      $isActive = true; // لتحديد أول شريحة
      foreach ($abouts as $about) { ?>
          <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h2>
                    <?= $about['about_title'] ?>
                    </h2>
                    <p>
                    <?= $about['about_description'] ?>
                  </p>
                    <div class="">
                      <a href="web/contact.php">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $isActive = false; // بعد أول شريحة، يتم إلغاء تفعيل `active`
      } ?>
        </div>
        <ol class="carousel-indicators">
        <?php for ($i = 0; $i < count($abouts); $i++) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>"
         class="<?= $i === 0 ? 'active' : '' ?>"></li>
      <?php } ?>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>
