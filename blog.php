<?php include 'navbar.php' ?>

<section class="blogs_section_hero">
  <div class="container">
    <div class="blogs_section_small_title">OUR BLOG</div>
    <h1 class="blogs_section_hero_title">
      Insights. Ideas.<br>
      <span>Inspiration.</span>
    </h1>
    <p class="blogs_section_hero_text">
      Explore our latest articles on architecture, design trends, construction tips and project stories.
    </p>
    <div class="blogs_section_breadcrumb">
      <i class="bi bi-house-door"></i> Home <i class="bi bi-chevron-right"></i> Blog
    </div>
  </div>
</section>

<section class="blogs_section_main">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center blogs_section_tabs flex-wrap">
      <div>
        <button class="blogs_section_tab_btn active" data-filter="all">ALL POSTS</button>
        <button class="blogs_section_tab_btn" data-filter="architecture">ARCHITECTURE</button>
        <button class="blogs_section_tab_btn" data-filter="interior">INTERIOR DESIGN</button>
        <button class="blogs_section_tab_btn" data-filter="construction">CONSTRUCTION</button>
        <button class="blogs_section_tab_btn" data-filter="design">DESIGN IDEAS</button>
        <button class="blogs_section_tab_btn" data-filter="project">PROJECT STORIES</button>
      </div>
      <div class="blogs_section_view_icons">
        <i class="bi bi-grid"></i>
        <i class="bi bi-list"></i>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-lg-8">

        <div class="blogs_section_item" data-category="architecture">
          <div class="blogs_section_post">
            <div class="blogs_section_post_img">
              <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=900&q=80">
              <div class="blogs_section_badge">Architecture</div>
            </div>
            <div class="blogs_section_post_body">
              <i class="bi bi-bookmark blogs_section_bookmark"></i>
              <div class="blogs_section_meta">
                <span><i class="bi bi-calendar"></i>May 20, 2024</span>
                <span><i class="bi bi-clock"></i>5 min read</span>
              </div>
              <h3>The Future of Modern Architecture in Urban Living</h3>
              <p>Discover how modern architecture is shaping the future of urban spaces with sustainability, innovation and functionality.</p>
              <a href="#" class="blogs_section_read">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="blogs_section_item" data-category="interior">
          <div class="blogs_section_post">
            <div class="blogs_section_post_img">
              <img src="https://images.unsplash.com/photo-1600210491369-e753d80a41f3?auto=format&fit=crop&w=900&q=80">
              <div class="blogs_section_badge">Interior Design</div>
            </div>
            <div class="blogs_section_post_body">
              <i class="bi bi-bookmark blogs_section_bookmark"></i>
              <div class="blogs_section_meta">
                <span><i class="bi bi-calendar"></i>May 15, 2024</span>
                <span><i class="bi bi-clock"></i>4 min read</span>
              </div>
              <h3>Interior Design Trends That Define Luxury</h3>
              <p>Explore the latest interior design trends that bring elegance, comfort and personality to modern spaces.</p>
              <a href="#" class="blogs_section_read">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="blogs_section_item" data-category="construction">
          <div class="blogs_section_post">
            <div class="blogs_section_post_img">
              <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=900&q=80">
              <div class="blogs_section_badge">Construction</div>
            </div>
            <div class="blogs_section_post_body">
              <i class="bi bi-bookmark blogs_section_bookmark"></i>
              <div class="blogs_section_meta">
                <span><i class="bi bi-calendar"></i>May 10, 2024</span>
                <span><i class="bi bi-clock"></i>6 min read</span>
              </div>
              <h3>Quality Construction: Building Stronger Tomorrow</h3>
              <p>Learn how quality construction practices ensure durability, safety and long-term value in every project.</p>
              <a href="#" class="blogs_section_read">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="blogs_section_item" data-category="design">
          <div class="blogs_section_post">
            <div class="blogs_section_post_img">
              <img src="https://images.unsplash.com/photo-1604014238170-4def1e4e6fcf?auto=format&fit=crop&w=900&q=80">
              <div class="blogs_section_badge">Design Ideas</div>
            </div>
            <div class="blogs_section_post_body">
              <i class="bi bi-bookmark blogs_section_bookmark"></i>
              <div class="blogs_section_meta">
                <span><i class="bi bi-calendar"></i>May 05, 2024</span>
                <span><i class="bi bi-clock"></i>3 min read</span>
              </div>
              <h3>Bringing Nature In: Modern Landscape Design Ideas</h3>
              <p>Create beautiful outdoor spaces that connect nature and architecture for a peaceful living experience.</p>
              <a href="#" class="blogs_section_read">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="blogs_section_item" data-category="project">
          <div class="blogs_section_post">
            <div class="blogs_section_post_img">
              <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=80">
              <div class="blogs_section_badge">Project Stories</div>
            </div>
            <div class="blogs_section_post_body">
              <i class="bi bi-bookmark blogs_section_bookmark"></i>
              <div class="blogs_section_meta">
                <span><i class="bi bi-calendar"></i>Apr 28, 2024</span>
                <span><i class="bi bi-clock"></i>7 min read</span>
              </div>
              <h3>How We Turn Concepts Into Timeless Spaces</h3>
              <p>A behind-the-scenes story of planning, designing and delivering a premium architectural project.</p>
              <a href="#" class="blogs_section_read">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="blogs_section_pagination"></div>
      </div>

      <div class="col-lg-4">
        <div class="blogs_section_sidebar_box">
          <div class="blogs_section_search">
            <input type="text" placeholder="Search articles...">
            <button><i class="bi bi-search"></i></button>
          </div>
        </div>

        <div class="blogs_section_sidebar_box">
          <h4 class="blogs_section_sidebar_title">Categories</h4>
          <div class="blogs_section_category"><span>Architecture</span><span>12</span></div>
          <div class="blogs_section_category"><span>Interior Design</span><span>10</span></div>
          <div class="blogs_section_category"><span>Construction</span><span>08</span></div>
          <div class="blogs_section_category"><span>Design Ideas</span><span>09</span></div>
          <div class="blogs_section_category"><span>Project Stories</span><span>11</span></div>
          <div class="blogs_section_category"><span>Sustainability</span><span>06</span></div>
        </div>

        <div class="blogs_section_sidebar_box">
          <h4 class="blogs_section_sidebar_title">Featured Posts</h4>
          <div class="blogs_section_featured">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=300&q=80">
            <div><h5>Minimalist Architecture: Less is More</h5><p>May 18, 2024</p></div>
          </div>
          <div class="blogs_section_featured">
            <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498b?auto=format&fit=crop&w=300&q=80">
            <div><h5>Smart Homes: The Future of Living</h5><p>May 12, 2024</p></div>
          </div>
          <div class="blogs_section_featured">
            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=300&q=80">
            <div><h5>How We Turn Concepts Into Timeless Spaces</h5><p>May 08, 2024</p></div>
          </div>
        </div>

        <div class="blogs_section_sidebar_box">
          <h4 class="blogs_section_sidebar_title">Subscribe To Our Newsletter</h4>
          <p class="blogs_section_newsletter_text">Get the latest updates on our projects, design ideas and architecture trends.</p>
          <div class="blogs_section_newsletter_form">
            <input type="email" placeholder="Enter your email">
            <button><i class="bi bi-arrow-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="blogs_section_footer">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-2">
        <img src="https://dummyimage.com/90x70/000/ffffff&text=NG" class="blogs_section_footer_logo">
        <p class="blogs_section_footer_text">We create exceptional spaces that enhance lives and stand the test of time.</p>
        <div class="blogs_section_social">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-pinterest"></i></a>
        </div>
      </div>

      <div class="col-lg-2">
        <h4 class="blogs_section_footer_title">QUICK LINKS</h4>
        <ul>
          <li><a href="#">Home</a></li><li><a href="#">About Us</a></li><li><a href="#">Projects</a></li>
          <li><a href="#">Services</a></li><li><a href="#">Gallery</a></li><li><a href="#">Blog</a></li>
          <li><a href="#">Careers</a></li><li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-2">
        <h4 class="blogs_section_footer_title">OUR SERVICES</h4>
        <ul>
          <li><a href="#">Architecture</a></li><li><a href="#">Interior Design</a></li>
          <li><a href="#">Construction</a></li><li><a href="#">Project Management</a></li>
          <li><a href="#">Renovation</a></li><li><a href="#">Landscape Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3">
        <h4 class="blogs_section_footer_title">CONTACT US</h4>
        <div class="blogs_section_contact_line"><i class="bi bi-geo-alt"></i> Road No. 12, Banjara Hills,<br> Hyderabad, Telangana - 500034</div>
        <div class="blogs_section_contact_line"><i class="bi bi-telephone"></i> +91 98765 43210</div>
        <div class="blogs_section_contact_line"><i class="bi bi-envelope"></i> info@nayanagroup.com</div>
        <div class="blogs_section_contact_line"><i class="bi bi-globe"></i> www.nayanagroup.com</div>
      </div>

      <div class="col-lg-3">
        <h4 class="blogs_section_footer_title">INSTAGRAM FEED</h4>
        <div class="blogs_section_instagram">
          <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=200&q=80">
          <img src="https://images.unsplash.com/photo-1604014238170-4def1e4e6fcf?auto=format&fit=crop&w=200&q=80">
          <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=200&q=80">
          <img src="https://images.unsplash.com/photo-1600210491369-e753d80a41f3?auto=format&fit=crop&w=200&q=80">
          <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498b?auto=format&fit=crop&w=200&q=80">
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=200&q=80">
        </div>
      </div>
    </div>

    <div class="blogs_section_copyright d-flex justify-content-between flex-wrap gap-2">
      <div>© 2024 Nayana Group. All Rights Reserved.</div>
      <div>Privacy Policy &nbsp; | &nbsp; Terms & Conditions &nbsp; | &nbsp; Sitemap</div>
    </div>
  </div>
</footer>

<script>
  const blogButtons = document.querySelectorAll(".blogs_section_tab_btn");
  const blogItems = Array.from(document.querySelectorAll(".blogs_section_item"));
  const blogPagination = document.querySelector(".blogs_section_pagination");

  let blogCurrentFilter = "all";
  let blogCurrentPage = 1;
  const blogsPerPage = 4;

  function getFilteredBlogs(){
    return blogItems.filter(function(item){
      const category = item.getAttribute("data-category");
      return blogCurrentFilter === "all" || category.includes(blogCurrentFilter);
    });
  }

  function renderBlogs(){
    const filteredBlogs = getFilteredBlogs();
    const totalPages = Math.ceil(filteredBlogs.length / blogsPerPage);

    blogItems.forEach(function(item){
      item.classList.add("hide");
    });

    const start = (blogCurrentPage - 1) * blogsPerPage;
    const end = start + blogsPerPage;

    filteredBlogs.slice(start, end).forEach(function(item){
      item.classList.remove("hide");
    });

    renderBlogPagination(totalPages);
  }

  function renderBlogPagination(totalPages){
    blogPagination.innerHTML = "";

    if(totalPages <= 1){
      blogPagination.style.display = "none";
      return;
    }

    blogPagination.style.display = "flex";

    const prev = document.createElement("a");
    prev.className = "blogs_section_page";
    if(blogCurrentPage === 1) prev.classList.add("disabled");
    prev.innerHTML = '<i class="bi bi-arrow-left"></i>';
    prev.onclick = function(){
      if(blogCurrentPage > 1){
        blogCurrentPage--;
        renderBlogs();
      }
    };
    blogPagination.appendChild(prev);

    for(let i = 1; i <= totalPages; i++){
      const page = document.createElement("a");
      page.className = "blogs_section_page";
      if(i === blogCurrentPage) page.classList.add("active");
      page.innerText = i;
      page.onclick = function(){
        blogCurrentPage = i;
        renderBlogs();
      };
      blogPagination.appendChild(page);
    }

    const next = document.createElement("a");
    next.className = "blogs_section_page";
    if(blogCurrentPage === totalPages) next.classList.add("disabled");
    next.innerHTML = '<i class="bi bi-arrow-right"></i>';
    next.onclick = function(){
      if(blogCurrentPage < totalPages){
        blogCurrentPage++;
        renderBlogs();
      }
    };
    blogPagination.appendChild(next);
  }

  blogButtons.forEach(function(button){
    button.addEventListener("click", function(){
      blogButtons.forEach(function(btn){
        btn.classList.remove("active");
      });

      this.classList.add("active");
      blogCurrentFilter = this.getAttribute("data-filter");
      blogCurrentPage = 1;
      renderBlogs();
    });
  });

  renderBlogs();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>