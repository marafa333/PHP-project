  <!-- contact section -->

  <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="web/images/contact-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form  action="<?= controllers('contact.php')?>?action=added" method="post" enctype="multipart/form-data">
              <div>
                <input type="text" placeholder="Name"  name="contact_name" />
              </div>
              <div>
                <input type="email" placeholder="Email" name="contact_email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="contact_number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="contact_message" />
              </div>
              <div class="d-flex ">
              <input type="submit" class="btn btn-danger my-3 px-4 " value="Add contact" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->