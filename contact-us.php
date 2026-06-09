<?php include 'navbar.php'; ?>



<section class="contact_section_hero">
  <div class="container">
    <div class="contact_section_small_title">Contact Us</div>

    <h1 class="contact_section_hero_title">
      Let’s build<br>
      <span>something<br>extraordinary.</span>
    </h1>

    <p class="contact_section_hero_text">
      We’d love to hear about your ideas and help turn them into reality.
    </p>

    <div class="contact_section_hero_info">
      <span><i class="bi bi-telephone"></i> +91 98765 43210</span>
      <span><i class="bi bi-envelope"></i> info@nayanagroup.com</span>
    </div>
  </div>
</section>

<section class="contact_section_main">
  <div class="container">

    <div class="row g-0">
      <div class="col-lg-4">
        <div class="contact_section_card">
          <div class="contact_section_small_title">Get In Touch</div>

          <div class="contact_section_info_item">
            <div class="contact_section_info_icon"><i class="bi bi-geo-alt"></i></div>
            <div>
              <h4>Head Office</h4>
              <p>Road No. 12, Banjara Hills,<br>Hyderabad, Telangana - 500034<br>India</p>
            </div>
          </div>

          <div class="contact_section_info_item">
            <div class="contact_section_info_icon"><i class="bi bi-telephone"></i></div>
            <div>
              <h4>Phone</h4>
              <p>+91 98765 43210<br>+91 40 1234 5678</p>
            </div>
          </div>

          <div class="contact_section_info_item">
            <div class="contact_section_info_icon"><i class="bi bi-envelope"></i></div>
            <div>
              <h4>Email</h4>
              <p>info@nayanagroup.com<br>projects@nayanagroup.com</p>
            </div>
          </div>

          <div class="contact_section_info_item">
            <div class="contact_section_info_icon"><i class="bi bi-globe"></i></div>
            <div>
              <h4>Website</h4>
              <p>www.nayanagroup.com</p>
            </div>
          </div>

          <div class="contact_section_info_item">
            <div class="contact_section_info_icon"><i class="bi bi-clock"></i></div>
            <div>
              <h4>Business Hours</h4>
              <p>Monday - Saturday<br>9:30 AM - 6:30 PM<br><br>Sunday by appointment only</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="contact_section_card">
          <div class="contact_section_small_title">Send Us A Message</div>
          <p class="contact_section_form_text">Fill out the form and our team will get back to you shortly.</p>

          <form action="contact_mail.php" method="POST">

            <div class="row">

              <div class="col-md-6">
                <input type="text" name="contactname" class="contact_section_input" placeholder="Your Name*" required>
              </div>

              <div class="col-md-6">
                <input type="email" name="contactemail" class="contact_section_input" placeholder="Email Address*" required>
              </div>

              <div class="col-md-6">
                <input type="text" name="contactnumber" class="contact_section_input" placeholder="Phone Number*" required>
              </div>

              <div class="col-md-6">
                <input type="text" name="contactsubject" class="contact_section_input" placeholder="Subject*" required>

              </div>

              <!-- <div class="col-12">
                <input type="text" name="contactsubject" class="contact_section_input" placeholder="Subject*" required>
              </div> -->

              <div class="col-12">
                <textarea name="contactmessage" class="contact_section_textarea" placeholder="Your Message*" required></textarea>
              </div>

            </div>

            <!-- <label class="contact_section_check">
              <input type="checkbox" name="terms" required>
              <span>I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a>.</span>
            </label> -->

            <button type="submit" class="contact_section_submit">
              SEND MESSAGE <i class="bi bi-arrow-right"></i>
            </button>

          </form>




        </div>
      </div>
    </div>

    <div class="row g-0 contact_section_map_area">
      <div class="col-lg-8">
        <div class="contact_section_map">
          <i class="bi bi-geo-alt-fill contact_section_map_pin"></i>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="contact_section_visit">
          <h3>Visit Our Office</h3>
          <p>We’d love to meet you in person and discuss your project.</p>
          <a href="#" class="contact_section_direction">
            GET DIRECTIONS <i class="bi bi-geo-alt"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>