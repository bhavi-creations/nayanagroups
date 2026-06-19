<footer class="gallery_section_footer">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-3 col-12 col-md-6">
        <img src="./assets/img/logo.png" class="gallery_section_footer_logo text-center">
        <p class="gallery_section_footer_text">
          We create exceptional spaces that enhance lives and stand the test of time.
        </p>
        <div class="gallery_section_social">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-pinterest"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 col-md-6">
        <h4 class="gallery_section_footer_title">QUICK LINKS</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact-us.php">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 col-md-6">
        <h4 class="gallery_section_footer_title">OUR SERVICES</h4>
        <ul>
          <li><a href="services.php">Architecture</a></li>
          <li><a href="services.php">Interior Design</a></li>
          <li><a href="services.php">Construction</a></li>
          <li><a href="services.php">Project Management</a></li>
          <li><a href="services.php">Renovation</a></li>
          <li><a href="services.php">Landscape Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-12 col-md-6">
        <h4 class="gallery_section_footer_title">CONTACT US</h4>
        <div class="gallery_section_contact_line"><i class="bi bi-geo-alt"></i>  Cinema Rd, Ramakrishna Rao Peta, Kakinada, Andhra Pradesh 533001</div>
        <div class="gallery_section_contact_line"><i class="bi bi-telephone"></i> +91 96888 87888</div>
        <div class="gallery_section_contact_line"><i class="bi bi-envelope"></i>  nayanagroup21@gmail.com</div>
        <div class="gallery_section_contact_line"><i class="bi bi-globe"></i> www.nayanagroup.com</div>
      </div>

      <!-- <div class="col-lg-2">
        <h4 class="gallery_section_footer_title">NEWSLETTER</h4>
        <p class="gallery_section_footer_text">Subscribe to get updates on our latest projects.</p>
        <div class="gallery_section_newsletter">
          <input type="email" placeholder="Enter your email">
          <button><i class="bi bi-arrow-right"></i></button>
        </div>
      </div> -->
    </div>

    <div class="gallery_section_copyright d-flex justify-content-between flex-wrap gap-2">
      <div>© 2024 Nayana Group. All Rights Reserved.</div>
      <div>Privacy Policy &nbsp; | &nbsp; Terms & Conditions &nbsp; | &nbsp; Sitemap</div>
    </div>
  </div>
</footer>

<script>
  const galleryButtons = document.querySelectorAll(".gallery_section_filter_btn");
  const galleryItems = document.querySelectorAll(".gallery_section_item");

  galleryButtons.forEach(function(button){
    button.addEventListener("click", function(){
      galleryButtons.forEach(function(btn){
        btn.classList.remove("active");
      });

      this.classList.add("active");

      const filterValue = this.getAttribute("data-filter");

      galleryItems.forEach(function(item){
        const itemCategory = item.getAttribute("data-category");

        if(filterValue === "all" || itemCategory.includes(filterValue)){
          item.classList.remove("hide");
        }else{
          item.classList.add("hide");
        }
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>