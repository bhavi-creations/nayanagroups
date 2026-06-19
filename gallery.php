<?php include 'navbar.php'; ?>

<section class="gallery_section_hero">
  <div class="container">
    <div class="gallery_section_small_title">OUR GALLERY</div>
    <h1 class="gallery_section_hero_title">
      Spaces Designed<br>
      to <span>Inspire.</span>
    </h1>
    <p class="gallery_section_hero_text">
      Explore our collection of architectural and interior projects that reflect creativity, innovation and excellence.
    </p>
  </div>
</section>

<section class="gallery_section_filter_area">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
      <div class="gallery_section_filters">
        <button class="gallery_section_filter_btn active" data-filter="all">ALL PROJECTS</button>
        <button class="gallery_section_filter_btn" data-filter="residential">RESIDENTIAL</button>
        <button class="gallery_section_filter_btn" data-filter="commercial">COMMERCIAL</button>
        <button class="gallery_section_filter_btn" data-filter="interiors">INTERIORS</button>
        <button class="gallery_section_filter_btn" data-filter="villas">VILLAS</button>
        <button class="gallery_section_filter_btn" data-filter="landscape">LANDSCAPE</button>
      </div>

      <!-- <div class="gallery_section_filter_text">
        <i class="bi bi-sliders"></i> FILTER
      </div> -->
    </div>
  </div>
</section>

<section class="gallery_section_grid_area">
  <div class="container">
    <div class="row g-3">

      <div class="col-lg-4 gallery_section_item" data-category="residential villas">
        <div class="gallery_section_card gallery_section_card_large">
          <img src="./assets/img/Resedential.jfif">
          <div class="gallery_section_overlay">
            <h4>Residential</h4>
            <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
          </div>
          <div class="gallery_section_plus">+</div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="row g-3">
          <div class="col-12 gallery_section_item" data-category="interiors residential">
            <div class="gallery_section_card gallery_section_card_small">
              <img src="./assets/img/commercial-building.jpg">
              <div class="gallery_section_overlay">
                <h4>Commercial</h4>
                <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
              </div>
              <div class="gallery_section_plus">+</div>
            </div>
          </div>

          <div class="col-12 gallery_section_item" data-category="interiors residential">
            <div class="gallery_section_card gallery_section_card_small">
              <img src="./assets/img/Interior.jpg">
              <div class="gallery_section_overlay">
                <h4>Interiors</h4>
                <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
              </div>
              <div class="gallery_section_plus">+</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="row g-3">
          <div class="col-12 gallery_section_item" data-category="commercial">
            <div class="gallery_section_card gallery_section_card_small">
              <img src="./assets/img/Villas.jpg">
              <div class="gallery_section_overlay">
                <h4>Villas</h4>
                <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
              </div>
              <div class="gallery_section_plus">+</div>
            </div>
          </div>

          <div class="col-12 gallery_section_item" data-category="landscape">
            <div class="gallery_section_card gallery_section_card_small">
              <img src="./assets/img/Landscape.jfif">
              <div class="gallery_section_overlay">
                <h4>Landscape</h4>
                <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
              </div>
              <div class="gallery_section_plus">+</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 gallery_section_item" data-category="commercial interiors">
        <div class="gallery_section_card gallery_section_card_small">
           <img src="./assets/img/Residential.jpg">
           <div class="gallery_section_overlay">
              <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
           </div>
           <div class="gallery_section_overlay">
             <h4>Residential</h4>
             <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
           </div>
           <div class="gallery_section_plus">+</div>
        </div>
      </div>
      

      <div class="col-lg-4 gallery_section_item" data-category="interiors residential">
        <div class="gallery_section_card gallery_section_card_small">
          <img src="./assets/img/Commercial_building.jpg">
           <div class="gallery_section_overlay">
              <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
           </div>
           <div class="gallery_section_overlay">
             <h4>Commercial</h4>
             <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
           </div>
          <!-- <div class="gallery_section_overlay">
            <h4>Commercial</h4>
            <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
          </div> -->
          <div class="gallery_section_plus">+</div>
        </div>
      </div>

      <div class="col-lg-4 gallery_section_item" data-category="residential villas">
        <div class="gallery_section_card gallery_section_card_small">
          <img src="./assets/img/Interior1.jpg">
          <div class="gallery_section_overlay">
            <h4>Interiors</h4>
            <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
          </div>
          <div class="gallery_section_plus">+</div>
        </div>
      </div>

      <div class="col-lg-4 gallery_section_item" data-category="interiors">
        <div class="gallery_section_card gallery_section_card_small">
          <img src="./assets/img/Villas1.jpg">
          <div class="gallery_section_overlay">
            <h4>Villas</h4>
            <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
          </div>
          <div class="gallery_section_plus">+</div>
        </div>
      </div>

      <div class="col-lg-8 gallery_section_item" data-category="residential villas landscape">
        <div class="gallery_section_card gallery_section_card_wide">
          <img src="./assets/img/Landscape1.jpg">
          <div class="gallery_section_overlay">
            <h4>Landscape</h4>
            <p><i class="bi bi-geo-alt"></i> kakinada, India</p>
          </div>
          <div class="gallery_section_plus">+</div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="gallery_section_cta">
  <div class="container">
    <div class="gallery_section_cta_box">
      <div class="row align-items-center gy-4">
        <div class="col-lg-1">
          <div class="gallery_section_cta_icon"><i class="bi bi-camera"></i></div>
        </div>

        <div class="col-lg-7">
          <div class="gallery_section_cta_sub">Have a project in mind?</div>
          <h2 class="gallery_section_cta_title">Let’s build something timeless together.</h2>
          <p class="gallery_section_cta_text">From concept to creation, we are here to bring your vision to life.</p>
        </div>

        <div class="col-lg-4 text-lg-end">
          <a href="contact-us.php" class="gallery_section_btn">Contact Us <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

  <?php include 'footer.php'; ?>

